@extends('layouts.app')

@section('content')
<div id="showUser" class="bg-current">
    <div class="container">
        <table class="table table-hover table-dark text-white">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">名前</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">{{ $user->id }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">
                        <a href="{{ route('u.edit', ['id' => $user->id]) }}" class="hover:no-underline hover:border-transparent">
                            <p class="transition duration-500 w-full mx-auto p-1 text-white text-center border hover:bg-green-500 rounded-full">Edit</p>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#showUser",
        data: {

        },
        methods: {

        }
    });
</script>
@endsection