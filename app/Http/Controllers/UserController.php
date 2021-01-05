<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
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
        $keyword = $request->get('text');

        if ($type === 'id') {
            $users = User::where('id', $keyword)
                ->paginate(User::PAGINATE);
        } else if ($type === 'name') {
            $users = User::where('first_name', 'like', '%' . $keyword . '%')
                ->orWhere('last_name', 'like', '%' . $keyword . '%')
                ->paginate(User::PAGINATE);
        } else if ($type === 'role') {
            $users = User::join('roles', 'users.role_id', '=', 'roles.id')
                ->where('roles.role_name', $keyword)
                ->with('role')
                ->select('users.*')
                ->paginate(User::PAGINATE);
        } else {
            $users = User::paginate(User::PAGINATE);
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', __('manage_user.delete_success'));
    }
}
