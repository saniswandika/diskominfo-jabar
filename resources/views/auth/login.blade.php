@extends('layouts.FrontPage')
@section('template')
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800 mt-10">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
                <img
                        aria-hidden="true"
                        class="object-cover w-full h-full dark:hidden"
                        src="{{ asset('assets/img/logoDiskominfo-.jpg') }}"
                        alt="Office"
                />
                <img
                        aria-hidden="true"
                        class="hidden object-cover w-full h-full dark:block"
                        src="../assets/img/login-office-dark.jpeg"
                        alt="Office"
                />
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                <div class="w-full">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <h1
                            class="mb-4 text-xl text-center font-semibold text-gray-700 dark:text-gray-200"
                    >
                        Login Admin
                    </h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Email</span>
                            <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Jane Doe"
                                    type="email" name="email" value="{{ old('email','admin@test.com') }}" required
                                    autofocus
                            />
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Password</span>
                            <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="password"
                                    type="password"
                                    value="password"
                                    name="password"
                                    required autocomplete="current-password"
                            />
                        </label>

                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                       name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <!-- You should use a button here, as the anchor is only used for the example  -->
                        <button
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                type="submit"
                        >
                            Log in
                        </button>
                    </form>

                    <hr class="my-8"/>
                </div>
            </div>
        </div>
    </div>
@endsection
