@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <div class="m-auto w-full">
        <div class="w-1/2 m-auto text-center text-white" role="alert">
            <p class="mb-2">※既にログインしています</p>
            <a href="{{ route('wo.index') }}">
                <button class="w-1/3 h-auto p-3 bg-indigo-500 rounded-lg hover:text-white hover:no-underline">
                    トップページへ戻る
                </button>
            </a>
        </div>
    </div>
</div>
@endsection