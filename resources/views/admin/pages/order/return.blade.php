@extends('admin.layouts.master')

@section('title')
    {{ __('manage_borrowing.return') }}
@endsection

@section('page')
    {{ __('manage_borrowing.return') }}
@endsection

@section('content')
    @include('admin.shared.alert')
    <form action="{{ route('admin.orders.update') }}" method="post">
        @method('put')
        @csrf
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
                            <input type="text" class="form-control" name="order" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div id="not_found_order" style="display: none; color: #ff0000; font-style: italic">
                    {{ __('manage_borrowing.not_found') }}
                </div>
                <div id="selected_order" style="display: none; color: #ff0000; font-style: italic">
                    {{ __('manage_borrowing.selected_book') }}
                </div>
                <div class="row">
                    <table class="table table-bordered table-hover" role="grid">
                        <thead>
                        <tr role="row">
                            <th>
                                {{ __('manage_borrowing.book_id') }}
                            </th>
                            <th>
                                {{ __('manage_borrowing.book_title') }}
                            </th>
                            <th>
                                {{ __('manage_borrowing.user_name') }}
                            </th>
                            <th>
                                {{ __('manage_borrowing.user_phone') }}
                            </th>
                            <th>
                                {{ __('manage_borrowing.return_date') }}
                            </th>
                            <th>
                                {{ __('manage_borrowing.action') }}
                            </th>
                        </tr>
                        </thead>
                        <tbody id="order_detail">
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-success">
                            {{ __('manage_borrowing.return') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script src="{{ asset('js/admin/borrowing/return.js') }}"></script>
@endsection
