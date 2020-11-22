@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <p>※既にログインしています</p>
                        <button class="w-full h-auto bg-indigo-500 text-white">
                            トップページへ戻る
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection