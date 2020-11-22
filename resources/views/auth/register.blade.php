@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <div class="m-auto w-full">
        <div class="card w-1/2 m-auto">
            <div class="card-body">
                <!-- head text -->
                <div>
                    <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        アカウント作成
                    </h2>
                </div>
                <!-- login form -->
                <form class="mt-3" method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    <!-- name field -->
                    <div>
                        <input id="name" type="text" name="name" class="form-control appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="ユーザーネーム" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- email field -->
                    <div>
                        <input id="email" type="email" name="email" class="form-control appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="メールアドレス" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- password field -->
                    <div>
                        <input id="password" type="password" class="form-control appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="password" placeholder="パスワード" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- confirm password field -->
                    <div>
                        <input id="password-confirm" type="password" class="form-control appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="password_confirmation" placeholder="パスワード確認用" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- submit -->
                    <div class="mt-3">
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <i class="fas fa-lock text-indigo-300"></i> </span>
                            サインアップ
                        </button>
                    </div>

                    <!-- if don't have an account -->
                    <div class="text-sm text-center mt-3">
                        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                            アカウントを既にお持ちですか？
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection