@extends('admin.layouts.master')

@section('title', __('manage_borrowing.history'))
@section('page', __('manage_borrowing.history'))

@section('content')
    <div class="row">
        <div class="col-12">
            @include('admin.shared.alert', ['customMessage' => $customMessage])
            <form class="bg-gradient-white rounded row w-100 mx-0 my-3 py-3">
                <div class="row col-md-12 mt-1">
                    <div class="col-md-6">
                        <label>{{ __('manage_borrowing.keyword') }}</label>
                        <input value="{{ request('keyword') }}" type="text" class="form-control" name="keyword"
                               placeholder="{{ __('manage_borrowing.keyword') }}"/>
                    </div>
                    <div class="col-md-6">
                        <label>{{ __('manage_borrowing.user') }}</label>
                        <input value="{{ request('user') }}" type="text" class="form-control" name="user"
                               placeholder="{{ __('manage_borrowing.phone_email') }}"/>
                    </div>
                </div>
                <div class="row col-md-12 mt-1">
                    <div class="col-md-6">
                        <label>{{ __('manage_borrowing.status') }}</label>
                        <select class="form-control" name="status">
                            <option value="*">{{ __('manage_borrowing.all_status') }}</option>
                            @foreach($statuses as $id => $status)
                                <option {{ request('status') === (string)$id ? 'selected' : '' }} value="{{ $id }}">{{ $status }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>{{ __('genres.title') }}</label>
                        <select class="form-control" name="genre">
                            <option value="*">{{ __('genres.all_genres') }}</option>
                            @foreach($genres as $genre)
                                <option {{ request('genre') === $genre ? 'selected' : '' }}>{{ $genre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row col-md-12 mt-1">
                    <div class="col-md-4">
                        <label>{{ __('manage_borrowing.start_date') }}</label>
                        <input class="form-control" type="text" name="start_dates" value="{{request('start_dates')}}"
                            autocomplete="off" placeholder="MM-DD-YYYY">
                    </div>
                    <div class="col-md-4">
                        <label>{{ __('manage_borrowing.end_date') }}</label>
                        <input class="form-control" type="text" name="end_dates" value="{{request('end_dates')}}"
                            autocomplete="off" placeholder="MM-DD-YYYY">
                    </div>
                    <div class="col-md-4">
                        <label>{{ __('manage_borrowing.return_date') }}</label>
                        <input class="form-control" type="text" name="return_dates" value="{{request('return_dates')}}"
                            autocomplete="off" placeholder="MM-DD-YYYY">
                    </div>
                </div>
                <div class="row col-md-12 mt-3">
                    <div class="mx-2">
                        <button type="submit" class="btn btn-primary form-control">{{ __('book_titles.search') }}</button>
                    </div>
                    <div class="ml-auto">
                        <input id="reset-btn" type="button" class="btn btn-info form-control" value="{{ __('manage_borrowing.reset') }}" />
                    </div>
                </div>
            </form>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive table-bordered p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{ __('manage_borrowing.id') }}</th>
                            <th>{{ __('manage_borrowing.user') }}</th>
                            <th>{{ __('manage_borrowing.book') }}</th>
                            <th>{{ __('genres.title') }}</th>
                            <th>{{ __('manage_borrowing.status') }}</th>
                            <th>{{ __('manage_borrowing.start_date') }}</th>
                            <th>{{ __('manage_borrowing.end_date') }}</th>
                            <th>{{ __('manage_borrowing.return_date') }}</th>
                            <th>{{ __('manage_borrowing.created_by_admin_id') }}</th>
                            <th>{{ __('manage_borrowing.returned_by_admin_id') }}</th>
{{--                            <th></th>--}}
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->fullName }}</td>
                                <td>{{ $order->book->bookTitle->name }}</td>
                                <td>{{ $order->book->bookTitle->formatted_genres }}</td>
                                <td>
                                    <span class="badge badge-pill badge-{{ $order->status_info['class'] }}">{{ $order->status_info['text'] }}</span>
                                </td>
                                <td>{{ $order->formatted_start_date }}</td>
                                <td>{{ $order->formatted_end_date }}</td>
                                <td>{{ $order->formatted_return_date }}</td>
                                <td>{{ $order->createdAdmin->fullName }}</td>
                                <td>{{ $order->returnedAdmin ? $order->returnedAdmin->fullName : null }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3 mx-3">
                        {{ $orders->appends(request()->except('page'))->links() }}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/admin/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/history/filter.js')}}"></script>
@endsection
