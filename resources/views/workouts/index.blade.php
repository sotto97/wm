@extends('layouts.app')

@section('content')
<div class="w-full h-screen" style="background-color: #202039;">
    <section class="decide_color">
        <div class="p-4">
            <span class="flex mb-4">
                <p class="w-1/3 h-8 p-1 text-white text-center bg-green-500">This is a text</p>
                <p class="text-white mx-2 mt-1">this is a context</p>
            </span>

            <span class="flex mb-4">
                <p class="w-1/3 h-8 p-1 bg-teal-500 text-white text-center" style="background-color: #55CE70;">this is test</p>
                <p class="text-white mx-2 mt-1">this is a context</p>
            </span>

            <span class="flex mb-4">
                <p class="w-1/3 h-8 p-1 bg-teal-500 text-white text-center bg-teal-400">this is test</p>
                <p class="text-white mx-2 mt-1">this is a context</p>
            </span>
        </div>
    </section>

    <a class="" href="{{ route('wo.create') }}">
        <p class="w-1/3 h-8 p-1 text-white text-center bg-green-500">
            Add Today's workout
        </p>
    </a>

    <table class="workouts_all text-white">
        <tr>
            <th>部位</th>
            <th>日程</th>
        </tr>
        @foreach ($workouts as $wo)
        <tr>
            <td>{{ $wo->work_type }}</td>
            <td>{{ $wo->date }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection　