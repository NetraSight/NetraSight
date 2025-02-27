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
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-orange-500 text-white"
                                                href="{{ route('onboarding-02') }}">2</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-orange-500 text-white"
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

                            <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">Company information
                            </h1>
                            <!-- Form -->
                            <form>
                                <div class="space-y-4 mb-8">
                                    <!-- Company Name -->
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="company-name">Company Name
                                            <span class="text-red-500">*</span></label>
                                        <input id="company-name" class="form-input w-full" type="text" />
                                    </div>
                                    <!-- City and Postal Code -->
                                    <div class="flex space-x-4">
                                        <div class="flex-1">
                                            <label class="block text-sm font-medium mb-1" for="city">City <span
                                                    class="text-red-500">*</span></label>
                                            <input id="city" class="form-input w-full" type="text" />
                                        </div>
                                        <div class="flex-1">
                                            <label class="block text-sm font-medium mb-1" for="postal-code">Postal Code
                                                <span class="text-red-500">*</span></label>
                                            <input id="postal-code" class="form-input w-full" type="text" />
                                        </div>
                                    </div>
                                    <!-- Street Address -->
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="street">Street Address
                                            <span class="text-red-500">*</span></label>
                                        <input id="street" class="form-input w-full" type="text" />
                                    </div>
                                    <!-- Country -->
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="country">Country <span
                                                class="text-red-500">*</span></label>
                                        <select id="country" class="form-select w-full">
                                            <option>USA</option>
                                            <option>Italy</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a class="text-sm underline hover:no-underline"
                                        href="{{ route('onboarding-02') }}">&lt;- Back</a>
                                    <a class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white ml-auto"
                                        href="{{ route('onboarding-04') }}">Next Step -&gt;</a>
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
