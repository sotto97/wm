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

        <table class="table table-hover table-dark text-white">
            <thead class="text-center">
                <tr>
                    <th>日程</th>
                    <th>部位</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($workouts as $wo)
                <tr>
                    <td>{{ $wo->date }}</td>
                    <td>{{ $wo->work_type }}</td>
                    <td>
                        <a href="{{ route('wo.show', ['id' => $wo->id]) }}">
                            <p class="transition duration-500 w-full mx-auto p-1 text-white text-center border hover:bg-green-500 rounded-full">詳細</p>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
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