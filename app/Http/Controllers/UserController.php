<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->get('type');
        $keyword = $request->get('key_word');

        if ($type === 'id') {
            $users = User::where('id', $keyword)
                ->orderByDesc('created_at')
                ->paginate(config('user.paginate'));
        } else if ($type === 'name') {
            $users = User::where('first_name', 'like', '%' . $keyword . '%')
                ->orWhere('last_name', 'like', '%' . $keyword . '%')
                ->orderByDesc('created_at')
                ->paginate(config('user.paginate'));
        } else if ($type === 'role') {
            $users = User::join('roles', 'users.role_id', '=', 'roles.id')
                ->where('roles.role_name', $keyword)
                ->orderByDesc('created_at')
                ->with('role')
                ->select('users.*')
                ->paginate(config('user.paginate'));
        } else {
            $users = User::orderByDesc('created_at')->paginate(config('user.paginate'));
        }

        return view('admin.pages.user.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {
        $dataInput = $request->only([
            'email',
            'phone',
            'first_name',
            'last_name',
            'gender',
            'address',
            'citizen_id',
            'role_id',
        ]);
        $dataInput["password"] = bcrypt($request->get('citizen_id'));
        $dataInput["email_verified"] = User::UNVERIFIED;

        User::create($dataInput);

        return redirect()
            ->route('admin.users.index')
            ->with('success', __('manage_user.add_success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.pages.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $dataInput = $request->only([
            'phone',
            'email',
            'address',
        ]);
        if ($request->get('password') !== null) {
            $dataInput['password'] = bcrypt($request->get('password'));
        }

        $user->update($dataInput);

        return redirect()
            ->route('admin.users.edit', ['user' => $user])
            ->with('success', __('manage_user.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', __('manage_user.delete_success'));
    }
}
