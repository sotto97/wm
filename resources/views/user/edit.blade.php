@extends('layouts.app')

@section('content')
<div id="editUser" class="bg-current">
    <div class="container">
        <div class="form-inline">
            <input type="text" class="form-control mb-2 rounded-0" id="inlineFormInputName2" placeholder="ここにメールアドレスを入力">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text rounded-0">@</div>
                </div>
                <select name="" id="" class="form-control rounded-0">
                    <option value="">ドメインを入力</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="gmail.com">softbank.jp</option>
                </select>
                <!-- <input type="text" class="form-control rounded-0" id="inlineFormInputGroupUsername2" placeholder="Username"> -->
            </div>
        </div>
        <table class="table table-hover table-dark text-white">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">名前</th>
                    <th scope="col" class="text-center">Email</th>
                    <th>
                    </th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">
                        <input type="email" v-model="id" class="form-control" disabled>
                    </td>
                    <td class="text-center">
                        <input type="email" v-model="name" class="form-control">
                    </td>
                    <td class="text-center">
                        <input type="email" v-model="email" class="form-control">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('u.edit', ['id' => $user->id]) }}" class="hover:no-underline hover:border-transparent">
                            <p class="transition duration-500 w-full mx-auto p-1 text-white text-center border hover:bg-green-500 rounded-full">Update</p>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#editUser",
        data: {
            id: '{{ $user->id }}',
            name: '{{ $user->name }}',
            email: '{{ $user->email }}',
        },
        methods: {

        }
    });
</script>
@endsection