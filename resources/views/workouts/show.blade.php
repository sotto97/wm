@extends('layouts.app')

@section('content')
<div class="w-full h-screen" style="background-color: #202039;">
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
        <tr>
            <td>{{ $workout->work_type }}</td>
            <td>{{ $workout->date }}</td>
        </tr>
    </table>

    <form action="{{ route('wo.edit', ['id' => $workout->id]) }}">
        <button class="w-1/3 h-8 p-1 text-white text-center bg-green-500" type=" submit">編集する</button>
    </form>


    <form action="{{ route('wo.destroy', $workout->id) }}" method="post">
        @csrf
        <button class="w-1/3 h-8 p-1 text-white text-center bg-indigo-500" type=" submit">削除する</button>
    </form>
</div>
@endsection　