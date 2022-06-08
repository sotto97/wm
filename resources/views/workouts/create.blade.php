@extends('layouts.app')

@section('content')
<div id="addMenu" class="w-full h-screen">
    <div class="p-4">
        <form @submit.prevent="addNewMenu">
            @csrf
            <div class="input-group mb-3">
                <input v-model="check_date" type="date" name="check_date" class="form-control">
            </div>

            <div class="input-group mb-3">
                <input v-model="weight" class="form-control" type="number" step="0.1" name="work_type" placeholder="体重">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">kg</span>
                </div>
            </div>

            <div class="input-group mb-3">
                <input v-model="bmi" type="number" step="0.1" name="bmi" class="form-control" placeholder="BMI">
            </div>

            <div class="input-group mb-3">
                <input v-model="fat" type="number" step="0.1" name="fat" class="form-control" placeholder="体脂肪率">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">%</span>
                </div>
            </div>

            <div class="input-group mb-3">
                <input v-model="muscle" type="number" step="0.1" name="muscle" class="form-control" placeholder="筋肉量">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">kg</span>
                </div>
            </div>

            <div class="input-group mb-3">
                <input v-model="visceral_fat" type="number" step="0.1" name="visceral_fat" class="form-control" placeholder="内臓脂肪">
            </div>

            <div class="input-group mb-3">
                <input v-model="metabolism" type="number" step="0.1" name="metabolism" class="form-control" placeholder="基礎代謝">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">kcal/日</span>
                </div>
            </div>
            <input class="transition duration-500 rounded-full w-full py-2 px-4 mx-auto text-white text-center bg-green-500 hover:bg-green-700" type="submit" value="登録する">
            @csrf
            <div class="input-group mb-3">
                <input v-model="work_type" type="text" name="work_type">
            </div>
            <input v-model="date" type="date" name="date">
            <input type="submit" value="登録する">
        </form>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#addMenu",
        data: {
            work_type: '',
            date: '<?php echo date('
            Y - m - d ') ?>',
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