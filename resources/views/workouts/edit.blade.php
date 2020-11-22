@extends('layouts.app')

@section('content')
<div id="editMenu" class="w-full h-screen">
    <div class="p-4">
        <form @submit.prevent="updateMenu">
            @csrf
            <input v-model="work_type" type="text" name="work_type">
            <input v-model="date" type="date" name="date">
            <input type="submit" value="更新する"></input>
        </form>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#editMenu",
        data: {
            work_type: '{{ $workout->work_type }}',
            date: '{{ $workout->date }}',
        },
        methods: {
            updateMenu() {
                axios.post('/wo/update/' + '{{ $workout->id }}', {
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