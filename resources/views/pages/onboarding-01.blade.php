<x-empty-layout>
    <main class="bg-white dark:bg-gray-900">

        <div class="relative flex">

            <!-- Content -->
            <div class="w-full md:w-1/2">

                <div class="min-h-[100dvh] h-full flex flex-col after:flex-1">

                    <div class="flex-1">

                        <!-- Header -->
                        <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                            <!-- Logo -->
                            <a class="block" href="{{ route('dashboard') }}">
                                <img class="w-auto h-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
                            </a>
                            <div class="text-sm">
                                Have an account? <a
                                    class="font-medium text-orange-500 hover:text-orange-600 dark:hover:text-orange-400"
                                    href="{{ route('login') }}">Sign In</a>
                            </div>
                        </div>

                        <!-- Progress bar -->
                        <div class="px-4 pt-12 pb-8">
                            <div class="max-w-md mx-auto w-full">
                                <div class="relative">
                                    <div class="absolute left-0 top-1/2 -mt-px w-full h-0.5 bg-gray-200 dark:bg-gray-700/60"
                                        aria-hidden="true"></div>
                                    <ul class="relative flex justify-between w-full">
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-orange-500 text-white"
                                                href="{{ route('onboarding-01') }}">1</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-white dark:bg-gray-900 text-gray-500 dark:text-gray-400"
                                                href="{{ route('onboarding-02') }}">2</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-white dark:bg-gray-900 text-gray-500 dark:text-gray-400"
                                                href="{{ route('onboarding-03') }}">3</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-white dark:bg-gray-900 text-gray-500 dark:text-gray-400"
                                                href="{{ route('onboarding-04') }}">4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-8">
                        <div class="max-w-md mx-auto">

                            <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">Tell us what’s your
                                situation</h1>
                            <!-- Form -->
                            <form>
                                <div class="space-y-3 mb-8">
                                    <label class="relative block cursor-pointer">
                                        <input type="radio" name="radio-buttons" class="peer sr-only" checked />
                                        <div
                                            class="flex items-center bg-white text-sm font-medium text-gray-800 dark:text-gray-100 p-4 rounded-lg dark:bg-gray-950 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-sm transition">
                                            <svg class="w-6 h-6 shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                                <path class="text-orange-500"
                                                    d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z" />
                                                <path class="text-orange-300"
                                                    d="m11 12.588-9-5V18a1 1 0 0 0 .514.874L11 23.588v-11Z" />
                                                <path class="text-orange-200"
                                                    d="M13 12.588v11l8.486-4.714A1 1 0 0 0 22 18V7.589l-9 4.999Z" />
                                            </svg>
                                            <span>I have a company</span>
                                        </div>
                                        <div class="absolute inset-0 border-2 border-transparent peer-checked:border-orange-400 dark:peer-checked:border-orange-500 rounded-lg pointer-events-none"
                                            aria-hidden="true"></div>
                                    </label>
                                    <label class="relative block cursor-pointer">
                                        <input type="radio" name="radio-buttons" class="peer sr-only" />
                                        <div
                                            class="flex items-center bg-white text-sm font-medium text-gray-800 dark:text-gray-100 p-4 rounded-lg dark:bg-gray-950 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-sm transition">
                                            <svg class="w-6 h-6 shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                                <path class="text-orange-500"
                                                    d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z" />
                                                <path class="text-orange-300"
                                                    d="m11 12.588-9-5V18a1 1 0 0 0 .514.874L11 23.588v-11Z" />
                                            </svg>
                                            <span>I’m a freelance / contractor</span>
                                        </div>
                                        <div class="absolute inset-0 border-2 border-transparent peer-checked:border-orange-400 dark:peer-checked:border-orange-500 rounded-lg pointer-events-none"
                                            aria-hidden="true"></div>
                                    </label>
                                    <label class="relative block cursor-pointer">
                                        <input type="radio" name="radio-buttons" class="peer sr-only" />
                                        <div
                                            class="flex items-center bg-white text-sm font-medium text-gray-800 dark:text-gray-100 p-4 rounded-lg dark:bg-gray-950 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-sm transition">
                                            <svg class="w-6 h-6 shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                                <path class="text-orange-500"
                                                    d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z" />
                                            </svg>
                                            <span>I’m just getting started</span>
                                        </div>
                                        <div class="absolute inset-0 border-2 border-transparent peer-checked:border-orange-400 dark:peer-checked:border-orange-500 rounded-lg pointer-events-none"
                                            aria-hidden="true"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white ml-auto"
                                        href="{{ route('onboarding-02') }}">Next Step -&gt;</a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Image -->
            <div class="hidden md:block absolute top-0 bottom-0 right-0 md:w-1/2" aria-hidden="true">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/onboarding-image.jpg') }}"
                    width="760" height="1024" alt="Onboarding" />
            </div>

        </div>

    </main>
</x-empty-layout>
