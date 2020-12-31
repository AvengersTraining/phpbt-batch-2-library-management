@extends('admin.layouts.master')

@section('title', __('genres.title'))
@section('page', __('genres.title') . ' - ' . __('genres.add'))

@section('content')
    <div class="row">
        <div class="col-md-9 mx-auto">
            @include('admin.shared.alert')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('genres.title') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('admin.genres.index') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('genres.name') }}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{ __('genres.name') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ __('genres.description') }}</label>
                            <input type="text" name="description" class="form-control" placeholder="{{ __('genres.description') }}">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('genres.add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
