@extends('admin.layouts.master')

@section('page', __('genres.title') . ' - ' . __('genres.edit'))

@section('content')
    <div class="row">
        <div class="col-md-9 mx-auto">
            @include('admin.shared.alert')
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">{{ __('genres.title') }} <span class="text-dark font-weight-bold">{{ $genre->id }}</span></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('admin.genres.update', ['genre' => $genre->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('genres.name') }}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{ __('genres.name') }}" value="{{ $genre->name }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('genres.description') }}</label>
                            <input type="text" name="description" class="form-control" placeholder="{{ __('genres.description') }}" value="{{ $genre->description }}" id="description">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">{{ __('genres.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
