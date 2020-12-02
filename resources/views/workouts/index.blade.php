@extends('layouts.app')

@section('content')
<div class="bg-current">
    <div class="container">
        <div class="my-4 w-1/3 mx-auto">
            <a href="{{ route('wo.create') }}" class="hover:no-underline">
                <p class="transition duration-500 rounded-full py-2 px-4 mx-auto text-white text-center bg-green-500 hover:bg-green-700">
                    Add Today's Condition
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