@extends('admin.layouts.master')

@section('title', __('book_titles.title'))
@section('page', __('book_titles.title'))

@section('content')
    <div class="row">
        <div class="col-12">
            @include('admin.shared.alert')
            <form class="bg-gradient-white rounded row w-100 mx-0 my-3 py-3">
                <div class="col-md-3">
                    <input value="{{ request('name') }}" type="text" class="form-control" name="name"
                        placeholder="{{ __('book_titles.name') }}"/>
                </div>
                <div class="col-md-3">
                    <input value="{{ request('author') }}" type="text" class="form-control" name="author"
                        placeholder="{{ __('book_titles.author') }}"/>
                </div>
                <div class="col-md-5">
                    <select class="form-control" name="genre">
                        <option value="*">{{ __('genres.all_genres') }}</option>
                        @foreach($genres as $genre)
                            <option {{ request('genre') === $genre ? 'selected' : '' }}>{{ $genre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary form-control">{{ __('book_titles.search') }}</button>
                </div>
            </form>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('book_titles.all') }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive table-bordered p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{ __('book_titles.id') }}</th>
                            <th>{{ __('book_titles.thumbnail') }}</th>
                            <th>{{ __('book_titles.name') }}</th>
                            <th>{{ __('book_titles.author') }}</th>
                            <th>{{ __('genres.title') }}</th>
                            <th>{{ __('book_titles.description') }}</th>
                            <th>{{ __('book_titles.released_date') }}</th>
                            <th>{{ __('book_titles.books_availabe') }}</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($bookTitles as $title)
                            <tr>
                                <td>{{ $title->id }}</td>
                                <td><img src="{{$title->thumbnail}}" style="max-width: 100px; max-height: 180px" alt=""></td>
                                <td>{{ $title->name }}</td>
                                <td>{{ $title->author }}</td>
                                <td>{{ $title->genres }}</td>
                                <td>{{ $title->description }}</td>
                                <td>{{ $title->released_date }}</td>
                                <td>{{ $title->available }}</td>
                                <td>
                                    <form method="post"
                                        action="{{ route('admin.book_titles.destroy', ['book_title' => $title->id]) }}">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-primary">{{ __('book_titles.edit') }}</button>

                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-danger"
                                                value="{{ __('book_titles.delete') }}"/>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3 mx-3">
                        {!! $links !!}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
