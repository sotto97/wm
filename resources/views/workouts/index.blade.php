@extends('layouts.header')

@section('content')
<div class="w-full h-screen" style="background-color: #202039;">
    <div class="p-4">
        <span class="flex mb-4">
            <p class="w-1/3 h-8 p-1 text-white text-center" style="background-color: #00D224;">this is test</p>
            <p class="text-white mx-2 mt-1">this is a context</p>
        </span>

        <span class="flex mb-4">
            <p class="w-1/3 h-8 p-1 bg-teal-500 text-white text-center" style="background-color: #55CE70;">this is test</p>
            <p class="text-white mx-2 mt-1">this is a context</p>
        </span>

        <span class="flex mb-4">
            <p class="w-1/3 h-8 p-1 bg-teal-500 text-white text-center" style="background-color: #37D4BB;">this is test</p>
            <p class="text-white mx-2 mt-1">this is a context</p>
        </span>
    </div>
</div>
@endsection　