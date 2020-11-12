@extends('layouts.app')

@section('content')
<div class="w-full h-screen" style="background-color: #202039;">
    <div class="p-4">
        <form action="{{ route('wo.update', $workout->id) }}" method="post">
            @csrf
            <input type="text" name="work_type" value="{{ $workout->work_type }}">
            <input type="date" name="date" value="{{ $workout->date }}">
            <input type="submit" value="変更する"></input>
        </form>
    </div>
</div>
@endsection