<tr role="row" class="even">
    <td class="sorting_1 dtr-control">
        {{ $order->book_id }}
        <input type="hidden" name="order_id[]" value="{{ $order->id }}"/>
        <input type="hidden" name="book_id[]" value="{{ $order->book_id }}"/>
    </td>
    <td>{{ $order->book->bookTitle->name }}</td>
    <td>{{ $order->user->full_name }}</td>
    <td>{{ $order->user->phone }}</td>
    <td style=" color: {{ $order->end_date <= now() ? '' : '#ff0000' }}">{{ $order->end_date }}</td>
    <td>
        <input class="btn btn-danger" onclick="remove(this)" value="{{ __('manage_book.delete') }}" type="button"/>
    </td>
</tr>
