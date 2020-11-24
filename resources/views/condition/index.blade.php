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
                    <th scope="col" class="w-2/12">測定日</th>
                    <th scope="col" class="w-1/12">体重(kg)</th>
                    <th scope="col" class="w-1/12">BMI</th>
                    <th scope="col" class="w-2/12">体脂肪率(%)</th>
                    <th scope="col" class="w-2/12">筋肉量(kg)</th>
                    <th scope="col" class="w-2/12">基礎代謝(kcal/日)</th>
                    <th scope="col" class="w-2/12"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conditions as $c)
                <tr>
                    <td scope="row" class="w-2/12">{{ $c->check_date }}</td>
                    <td class="w-1/12">{{ $c->weight }}</td>
                    <td class="w-1/12">{{ $c->bmi }}</td>
                    <td class="w-2/12">{{ $c->fat }}</td>
                    <td class="w-2/12">{{ $c->muscle }}</td>
                    <td class="w-2/12">{{ $c->metabolism }}</td>
                    <td class="w-2/12">
                        <a href="{{ route('condition.edit', ['id' => $c->id]) }}" class="hover:no-underline">
                            <p class="transition duration-500 w-full mx-auto rounded-full p-1 text-white text-center bg-green-500 hover:bg-green-600">Edit</p>
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