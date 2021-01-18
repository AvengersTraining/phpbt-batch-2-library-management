<div class="col-1 border form-control">
    {{ $user->id }}
    <input type="hidden" name="user_detail" value="{{ $user->id }}"/>
</div>
<div class="col-2 border form-control">{{ $user->role->role_name }}</div>
<div class="col-3 border form-control">{{ $user->full_name }}</div>
<div class="col-3 border form-control">{{ $user->email }}</div>
<div class="col-2 border form-control">{{ $user->phone }}</div>



