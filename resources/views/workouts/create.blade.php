@extends('layouts.app')

@section('content')
<div id="addMenu" class="w-full h-screen">
    <div class="p-4">
        <form @submit.prevent="addNewMenu">
            @csrf
            <div class="input-group mb-3">
            <input v-model="work_type" type="text" name="work_type">
            </div>
            <input v-model="date" type="date" name="date">
            <v-select :options="options" v-model="name" class="bg-white"></v-select>
            <input type="submit" value="登録する"></input>
        </form>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#addMenu",
        data: {
            work_type: '',
            date: '<?php echo date('Y-m-d') ?>',
            name: '',
            options: [
                '太郎',
                '次郎',
                '三郎',
                '花子'
            ]
        },
        methods: {
            addNewMenu() {
                axios.post('/wo/store', {
                        work_type: this.work_type,
                        date: this.date,
                    })
                    .then(response => {
                        console.log(true);
                        window.location.href = '/wo';
                    })
                    .catch(error => {
                        console.log(false)
                    })
            }
        }
    })
</script>

@endsection