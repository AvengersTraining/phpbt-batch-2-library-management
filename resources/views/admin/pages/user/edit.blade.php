@extends('admin.layouts.master')

@section('title')
    {{ __('manage_user.add') }}
@endsection

@section('page')
    {{ __('manage_user.add') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/select2.min.css') }}">
@endsection

@section('content')
    @include('admin.shared.alert')
    <div class="card col-8 offset-md-2">
        <div class="card-body">
            <form action="{{ route('admin.users.update', ['user' => $user]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>{{ __('manage_user.role') }}</label>
                            <select class="form-control" name="role" >
                                @foreach(config('user.role') as $key => $value )
                                    <option value="{{ $value }}" {{ $user->role_id === $key ? 'selected' : '' }}>{{ __('manage_user.' . $key) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label>{{ __('manage_user.citizen_id') }}</label>
                            <input type="text" class="form-control" name="citizen_id" disabled value="{{ $user->citizen_id }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('manage_user.first_name') }}</label>
                            <input type="text" class="form-control" name="first_name" disabled value="{{ $user->first_name }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('manage_user.last_name') }}</label>
                            <input type="text" class="form-control" name="last_name" disabled value="{{ $user->last_name }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>{{ __('manage_user.gender') }}</label>
                            <select class="form-control" name="gender" disabled>
                                @foreach(config('user.gender') as $key => $value )
                                    <option value="{{ $value }}" {{ $user->gender === $key ? 'selected' : '' }}>{{ __('manage_user.' . $key) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>{{ __('manage_user.phone') }}</label>
                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>{{ __('manage_user.email') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('manage_user.address') }}</label>
                            <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-success">{{ __('manage_user.save') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/admin/list.js') }}"></script>
@endsection
