@extends('admin.layouts.master')

@section('title', __('genres.title'))
@section('page', __('genres.title'))

@section('content')
    <div class="row">
        <div class="col-12">
            @include('admin.shared.alert')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('genres.all_genres')}}</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                   placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive table-bordered p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{__('genres.id')}}</th>
                            <th>{{__('genres.name')}}</th>
                            <th>{{__('genres.description')}}</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($genres as $genre)
                            <tr>
                                <td>{{$genre->id}}</td>
                                <td>{{$genre->name}}</td>
                                <td>{{$genre->description}}</td>
                                <td>
                                    <form method="post"
                                          action="{{ route('admin.genres.destroy', ['genre' => $genre->id]) }}">
                                        <div class="btn-group">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-info">{{__('genres.view')}}</button>
                                            <button type="button"
                                                    class="btn btn-sm btn-primary">{{__('genres.edit')}}</button>

                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-danger"
                                                   value="{{__('genres.delete')}}"/>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
