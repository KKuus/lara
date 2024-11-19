@extends('partials.layout')
@section('title', 'Register')
@section('content')

<div class="container mx-auto">
    <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
        <div class="card-body">
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Email</span>

                        </div>
                        <input name="email" type="email" placeholder="Email" value="{{old('Email')}}" class="input input-bordered w-full max-w-xs" required autofocus />
                        <div class="label">
                            @error('email')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
        <!-- Email Address -->
           <!--<div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="input input-bordered w-full max-w-xs" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>-->

        <div class="flex items-center justify-end mt-4">
        <button class="btn">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>

        </div>
     </div>
</div>

