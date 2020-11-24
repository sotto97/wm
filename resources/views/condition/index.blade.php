@extends('layouts.app')

@section('content')
<div class="bg-current">
    <div class="container">
        <div class="my-4 w-1/3 mx-auto">
            <a href="{{ route('condition.create') }}" class="hover:no-underline">
                <p class="transition duration-500 rounded-full py-2 px-4 mx-auto text-white text-center bg-green-500 hover:bg-green-700">
                    Add Today's Condition
                </p>
            </a>
        </div>

        <table class="table table-hover table-dark text-white">
            <thead>
                <tr>
                    <th scope="col">測定日</th>
                    <th scope="col">体重</th>
                    <th scope="col">BMI</th>
                    <th scope="col">体脂肪率</th>
                    <th scope="col">筋肉量</th>
                    <th scope="col">基礎代謝</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conditions as $c)
                <tr>
                    <td scope="row">{{ $c->check_date }}</td>
                    <td>{{ $c->weight }}</td>
                    <td>{{ $c->bmi }}</td>
                    <td>{{ $c->fat }}</td>
                    <td>{{ $c->muscle }}</td>
                    <td>{{ $c->metabolism }}</td>
                    <td>
                        <a href="{{ route('condition.edit', ['id' => $c->id]) }}" class="hover:no-underline">
                            <p class="transition duration-500 w-2/3 mx-auto rounded-full p-1 text-white text-center bg-green-500 hover:bg-green-600">EDIT</p>
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