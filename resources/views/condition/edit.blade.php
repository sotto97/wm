@extends('layouts.app')

@section('content')
<div id="editCondition" class="w-full h-screen">
    <div class="container">
        <div class="w-1/3 mt-4 mx-auto">
            <form @submit.prevent="updateCondition">
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

                <input class="transition duration-500 rounded-full w-full py-2 px-4 mx-auto text-white text-center bg-green-500 hover:bg-green-700" type="submit" value="更新する"></input>
            </form>
        </div>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#editCondition",
        data: {
            user_id: '{{ $condition->user_id }}',
            check_date: '{{ $condition->check_date }}',
            weight: '{{ $condition->weight }}',
            bmi: '{{ $condition->bmi }}',
            fat: '{{ $condition->fat }}',
            muscle: '{{ $condition->muscle }}',
            visceral_fat: '{{ $condition->visceral_fat }}',
            metabolism: '{{ $condition->metabolism }}',
        },
        methods: {
            updateCondition() {
                axios.post('/condition/update/' + '{{ $condition->id }}', {
                        user_id: this.user_id,
                        check_date: this.check_date,
                        weight: this.weight,
                        bmi: this.bmi,
                        fat: this.fat,
                        muscle: this.muscle,
                        visceral_fat: this.visceral_fat,
                        metabolism: this.metabolism,
                    })
                    .then(response => {
                        console.log(true);
                        window.location.href = '/condition';
                    })
                    .catch(error => {
                        console.log(false)
                    })
            }
        }
    })
</script>

@endsection