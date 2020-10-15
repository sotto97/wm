@extends('layouts.header')

@section('content')
<div class="w-full h-screen" style="background-color: #202039;">
    <div class="p-4">
        <form method="post" action="{{ route('wo.store') }}">
            @csrf
            <input type="text" name="work_type">
            <button type="submit">更新する</button>
        </form>
    </div>
</div>
@endsection　