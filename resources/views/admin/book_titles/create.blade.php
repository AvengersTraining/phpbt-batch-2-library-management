@extends('admin.layouts.master')

@section('title', __('book_titles.title'))
@section('page', __('book_titles.title') . ' - ' . __('book_titles.add'))

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/select2.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/admin/select2-bootstrap4.min.css') }}" >
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mx-auto">
            @include('admin.shared.alert')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('book_titles.title') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.book_titles.index') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">{{ __('book_titles.name') }}</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="{{ __('book_titles.name') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="author">{{ __('book_titles.author') }}</label>
                                <input type="text" name="author" class="form-control"
                                       placeholder="{{ __('book_titles.author') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{ __('book_titles.released_date') }}</label>
                                <div class="input-group date" id="released_date">
                                    <input name="released_date" type="date" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('book_titles.description') }}</label>
                            <textarea type="text" name="description" class="form-control"
                                placeholder="{{ __('book_titles.description') }}" rows="5"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>{{ __('book_titles.books_in_stock') }}</label>
                                <input type="number" min="0" name="books_amount" class="form-control" value="0">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">{{ __('book_titles.thumbnail') }}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="thumbnail" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">{{ __('book_titles.thumbnail') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label>{{ __('genres.title') }}</label>
                                <div class="select2-purple">
                                    <select name="genres[]" class="select2" multiple="multiple"
                                            data-placeholder="{{__("genres.title")}}"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;">
                                        @foreach($genres as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('book_titles.add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/admin/bs-custom-file-input.min.js') }}"></script>
    <script>
        bsCustomFileInput.init();
        $('.select2').select2()
    </script>
@endsection

