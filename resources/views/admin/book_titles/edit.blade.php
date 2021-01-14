@extends('admin.layouts.master')

@section('title', __('book_titles.title'))
@section('page', __('book_titles.title') . ' - ' . __('book_titles.edit'))

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/select2.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/admin/select2-bootstrap4.min.css') }}" >
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mx-auto">
            @include('admin.shared.alert')
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">{{ __('book_titles.title') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.book_titles.update', ['book_title' => $bookTitle->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label >{{ __('book_titles.name') }}</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="{{ __('book_titles.name') }}" value="{{ $bookTitle->name }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label >{{ __('book_titles.author') }}</label>
                                <input type="text" name="author" class="form-control"
                                       placeholder="{{ __('book_titles.author') }}" value="{{ $bookTitle->author }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{ __('book_titles.released_date') }}</label>
                                <div class="input-group date" id="released_date">
                                    <input name="released_date" type="date" class="form-control"
                                        value="{{ date('Y-m-d',strtotime($bookTitle->released_date)) }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >{{ __('book_titles.description') }}</label>
                            <textarea type="text" name="description" class="form-control"
                                      placeholder="{{ __('book_titles.description') }}" rows="5">{{ $bookTitle->description }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label >{{ __('book_titles.thumbnail') }}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="thumbnail" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" >{{ __('book_titles.thumbnail') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <label>{{ __('genres.title') }}</label>
                                <div class="select2-purple">
                                    <select name="genres[]" class="select2" multiple="multiple"
                                            data-placeholder="{{ __("genres.title") }}"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;">
                                        @foreach($genres as $genre)
                                            <option value="{{ $genre->id }}"
                                                {{ $bookTitle->genres->contains($genre->id) ? 'selected' : '' }}
                                            >{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">{{ __('book_titles.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/admin/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('js/admin/book_titles/edit.js') }}"></script>
@endsection

