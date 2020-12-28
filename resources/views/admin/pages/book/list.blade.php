@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('manage_book.all_book') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('app.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('manage_book.all_book') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Content Header (Page header) -->
        <section class="content">
            <div class="container-fluit">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <form method="get" action="{{ route('admin.book.search') }}">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label>{{ __('manage_book.search_by') }}</label>
                                                        <select class="form-control" name="type">
                                                            <option value="id">ID</option>
                                                            <option value="name">{{ __('manage_book.title') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-lg">
                                                    <input type="search" class="form-control form-control-lg" placeholder="{{ __('manage_book.keyword') }}" name="text">
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
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                    ID
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">
                                                    {{ __('manage_book.title') }}
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Platform(s): activate to sort column ascending">
                                                    {{ __('manage_book.creat_at') }}
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Engine version: activate to sort column ascending">
                                                    {{ __('manage_book.status') }}
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" aria-label="CSS grade: activate to sort column ascending">
                                                    {{ __('manage_book.action') }}
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($books as $book)
                                                <tr role="row" class="even">
                                                    <td class="sorting_1 dtr-control">{{ $book->id }}</td>
                                                    <td>
                                                        {{ $book->bookTitle->name }}
                                                    </td>
                                                    <td>{{ $book->created_at }}</td>
                                                    <td>{{ $book->is_available ? __('manage_book.available') : __('manage_book.unavailable') }}</td>
                                                    <form>
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
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </section>
    </div>

@endsection
