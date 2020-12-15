@extends('master')
@section('content')

<div class="transaction-history-header">
    <p>Transaction History</p>
</div>
@foreach($transactions as $item)
            <form action="/getDetails" method="post">
                @csrf
                <input type="hidden" name="trid" value="{{$item->id}}">
                <input type="submit" value = "{{$item->created_at}}" class="transaction-history-content">
            </form>
@endforeach



@endsection