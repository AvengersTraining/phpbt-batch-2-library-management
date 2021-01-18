<tr role="row" class="even">
    <td class="sorting_1 dtr-control">
        {{ $book->id }}
        <input type="hidden" name="book_id[]" value="{{ $book->id }}"/>
    </td>
    <td>
        {{ $book->bookTitle->name }}
    </td>
    <td>{{ $book->created_at }}</td>
    <td>
        <input type="date" name="date[]" class="form-control"/>
    </td>
    <td>
        <input class="btn btn-danger" onclick="removebook(this)" value="{{ __('manage_book.delete') }}" type="button"/>
    </td>
</tr>

