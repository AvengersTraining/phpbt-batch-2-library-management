@extends('admin.layouts.master')

@section('title')
    {{ __('manage_borrowing.borrow') }}
@endsection

@section('page')
    {{ __('manage_borrowing.borrow') }}
@endsection

@section('content')
    @include('admin.shared.alert')
    <form action="{{route('admin.orders.store')}}" method="post">
        @csrf
        <div class="card col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
                        <div class="form-group">
                            <label>{{ __('manage_borrowing.user') }}</label>
                        </div>
                    </div>
                    <div class="row col-2">
                        <input type="text" class="form-control" name="user" placeholder="{{ __('manage_borrowing.phone_email') }}" autocomplete="off"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div id="not_found_user" style="display: none; color: #ff0000; font-style: italic">
                        {{ __('manage_borrowing.not_found') }}
                    </div>
                    <div id="banned_user" style="display: none; color: #ff0000; font-style: italic">
                        {{ __('manage_borrowing.banned_user') }}
                    </div>
                    <div class="row col-10" id="user_detail">
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
                        <div class="form-group">
                            <label>{{ __('manage_borrowing.book') }}</label>
                        </div>
                    </div>
                    <div class="row col-2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="book" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div id="not_found_book" style="display: none; color: #ff0000; font-style: italic">
                    {{ __('manage_borrowing.not_found') }}
                </div>
                <div id="unavailable_book" style="display: none; color: #ff0000; font-style: italic">
                    {{ __('manage_borrowing.unavailable_book') }}
                </div>
                <div id="selected_book" style="display: none; color: #ff0000; font-style: italic">
                    {{ __('manage_borrowing.selected_book') }}
                </div>
                <div class="row">
                    <table class="table table-bordered table-hover" role="grid">
                        <thead>
                        <tr role="row">
                            <th>
                                {{ __('manage_book.id') }}
                            </th>
                            <th>
                                {{ __('manage_book.title') }}
                            </th>
                            <th>
                                {{ __('manage_book.creat_at') }}
                            </th>
                            <th>
                                {{ __('manage_borrowing.return_date') }}
                            </th>
                            <th>
                                {{ __('manage_book.action') }}
                            </th>
                        </tr>
                        </thead>
                        <tbody id="book_detail">
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-success">
                            {{ __('manage_borrowing.borrow') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script src="{{ asset('js/admin/borrow.js') }}"></script>
@endsection


