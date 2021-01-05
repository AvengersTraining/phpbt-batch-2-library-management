@extends('admin.layouts.master')

@section('title')
    {{ __('manage_user.all') }}
@endsection

@section('page')
    {{ __('manage_user.all') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/select2.min.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-10 offset-md-1">
                        <h1>{{ __('manage_user.find') }}</h1>
                    </div>
                    <form method="get" action="{{ route('admin.users.index') }}">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label>{{ __('manage_user.search_by') }}</label>
                                            <select class="form-control" name="type">
                                                @foreach(config('user.search') as $search)
                                                    <option value="{{ $search }}" {{ request()->get('type') == $search ? 'selected' : '' }} >{{ __('manage_user.' . $search) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control form-control-lg" placeholder="{{ __('manage_user.keyword') }}" name="key_word" value="{{ request()->get('key_word') }}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @include('admin.shared.alert')
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th>
                                            {{ __('manage_user.id') }}
                                        </th>
                                        <th>
                                            {{ __('manage_user.name') }}
                                        </th>
                                        <th>
                                            {{ __('manage_user.gender') }}
                                        </th>
                                        <th>
                                            {{ __('manage_user.role') }}
                                        </th>
                                        <th>
                                            {{ __('manage_user.action') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr role="row" class="even">
                                        <td class="sorting_1 dtr-control">{{ $user->id }}</td>
                                        <td>
                                            <a href="{{ route('admin.users.edit', ['user' => $user]) }}">
                                                {{ $user->full_name }}
                                            </a>
                                        </td>
                                        <td>{{ $user->gender ? __('manage_user.male') : __('manage_user.female') }}</td>
                                        <td>
                                            {{ $user->role->role_name }}
                                        </td>
                                        <form action="{{ route('admin.users.destroy', ['user' => $user]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <button type="delete" class="btn btn-danger">{{ __('manage_book.delete') }}</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $users->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        @endsection

        @section('js')
            <script src="{{ asset('js/admin/select2.full.min.js') }}"></script>
            <script src="{{ asset('js/admin/list.js') }}"></script>
@endsection
