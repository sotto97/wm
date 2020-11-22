@extends('layouts.app')

@section('content')
<div class="bg-current">
    <div class="container">
        <div class="mt-2">
            <a href="{{ route('wo.create') }}">
                <p class="w-1/3 h-8 p-1 mx-auto text-white text-center bg-green-500 hover:no-underline">
                    Add Today's workout
                </p>
            </a>
        </div>

        <table class="workouts_all text-white">
            <tr>
                <th>部位</th>
                <th>日程</th>
            </tr>
            @foreach ($workouts as $wo)
            <tr>
                <td>{{ $wo->work_type }}</td>
                <td>
                    <a href="{{ route('wo.show', ['id' => $wo->id]) }}" method="get">
                        {{ $wo->date }}
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#app",
        data: {

        },
        methods: {

        }
    });
</script>
@endsection