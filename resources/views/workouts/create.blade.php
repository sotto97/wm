@extends('layouts.app')

@section('content')
<div class="w-full h-screen" style="background-color: #202039;">
    <div class="p-4">
        <form method="post" action="{{ route('wo.store') }}">
            @csrf
            <input type="text" name="work_type">
            <input type="date" name="date">
            <input type="submit" value="登録する"></input>
        </form>
    </div>
</div>
@endsection