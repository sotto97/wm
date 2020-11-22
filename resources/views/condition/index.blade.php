@extends('layouts.app')

@section('content')
<div class="bg-current">
    <div class="container">
        <div class="my-2">
            <a href="{{ route('condition.create') }}">
                <p class="w-1/3 h-8 p-1 mx-auto text-white text-center bg-green-500 hover:no-underline">
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
                </tr>
            </thead>
            <tbody>
                @foreach ($conditions as $c)
                <tr>
                    <td scope="row">
                        <a href="{{ route('condition.show', ['id' => $c->id]) }}" method="get">
                            {{ $c->check_date }}
                        </a>
                    </td>
                    <td>{{ $c->weight }}</td>
                    <td>{{ $c->bmi }}</td>
                    <td>{{ $c->fat }}</td>
                    <td>{{ $c->muscle }}</td>
                    <td>{{ $c->metabolism }}</td>
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