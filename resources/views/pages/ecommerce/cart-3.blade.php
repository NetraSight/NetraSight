<x-app-layout>
    <div class="lg:relative lg:flex">

        <!-- Content -->
        <div class="px-4 sm:px-6 lg:px-8 py-8 lg:grow lg:pr-8 xl:pr-16 2xl:ml-[80px]">
            <div class="lg:max-w-[640px] lg:mx-auto">

                <!-- Cart items -->
                <div class="mb-6 lg:mb-0">
                    <div class="mb-3">
                        <div class="flex text-sm font-medium text-gray-400 dark:text-gray-500 space-x-2">
                            <span class="text-gray-500 dark:text-gray-400">Review</span>
                            <span>-&gt;</span>
                            <span class="text-gray-500 dark:text-gray-400">Payment</span>
                            <span>-&gt;</span>
                            <span class="text-orange-500">Confirm</span>
                        </div>
                    </div>
                    <header class="mb-6">
                        <!-- Title -->
                        <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold mb-2">Thank you for
                            your order</h1>
                        <p>You will soon receive a confirmation email with details of your order and a link to download
                            the files.</p>
                    </header>
                    <!-- Billing Information -->
                    <div>
                        <div class="text-gray-800 dark:text-gray-100 font-semibold mb-4">Billing Information</div>
                        <form>
                            <div class="space-y-4">
                                <!-- 1st row -->
                                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-name">Name</label>
                                        <input id="card-name" class="form-input w-full" type="text"
                                            value="Patrick" />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-surname">Surname</label>
                                        <input id="card-surname" class="form-input w-full" type="text"
                                            value="Sullivan" />
                                    </div>
                                </div>
                                <!-- 2nd row -->
                                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-address">Address</label>
                                        <input id="card-address" class="form-input w-full" type="text" />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-city">Town/City</label>
                                        <input id="card-city" class="form-input w-full" type="text" />
                                    </div>
                                </div>
                                <!-- 3rd row -->
                                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1"
                                            for="card-state">State/Country</label>
                                        <input id="card-state" class="form-input w-full" type="text" />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-country">Country <span
                                                class="text-red-500">*</span></label>
                                        <select id="card-country" class="form-select w-full">
                                            <option>Italy</option>
                                            <option>USA</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 4th row -->
                                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1"
                                            for="card-postcode">Postcode</label>
                                        <input id="card-postcode" class="form-input w-full" type="text" />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-vat">VAT ID</label>
                                        <input id="card-vat" class="form-input w-full" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit"
                                        class="btn bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300">Download
                                        Invoice</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Divider -->
                    <hr class="my-6 border-t border-gray-100 dark:border-gray-700/60" />
                    <!-- Billing footer -->
                    <div
                        class="bg-gray-50 dark:bg-gray-950/30 rounded border border-gray-200 dark:border-gray-700/60 p-4">
                        <div
                            class="text-center md:text-left md:flex md:items-center md:justify-between space-y-2 md:space-y-0 md:space-x-2">
                            <div class="text-sm">Enjoy a <span class="font-medium text-gray-800 dark:text-gray-100">20%
                                    OFF</span> discount on your next order 🎉</div>
                            <div class="relative inline-flex text-center px-3 py-1 rounded bg-green-500">
                                <div class="absolute w-3 h-3 rounded-full bg-white dark:bg-gray-950 left-0 -translate-x-1/2 top-1/2 -translate-y-1/2"
                                    aria-hidden="true"></div>
                                <div class="absolute w-3 h-3 rounded-full bg-white dark:bg-gray-950 right-0 translate-x-1/2 top-1/2 -translate-y-1/2"
                                    aria-hidden="true"></div>
                                <span class="text-sm text-green-50 font-medium uppercase">XMAS22</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Sidebar -->
        <div>
            <div
                class="lg:sticky lg:top-16 bg-gradient-to-r from-white/30 dark:from-gray-800/30 lg:overflow-x-hidden lg:overflow-y-auto no-scrollbar lg:shrink-0 border-t lg:border-t-0 lg:border-l border-gray-200 dark:border-gray-700/60 lg:w-[320px] xl:w-[352px] 2xl:w-[calc(352px+80px)] lg:h-[calc(100dvh-64px)]">
                <div class="py-8 px-4 lg:px-8 2xl:px-12">
                    <div class="max-w-sm mx-auto lg:max-w-none">
                        <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-6">Order Summary</h2>
                        <div class="space-y-6">

                            <!-- Order Details -->
                            <div>
                                <div class="text-gray-800 dark:text-gray-100 font-semibold mb-2">Order Details</div>
                                <!-- Cart items -->
                                <ul>
                                    <!-- Cart item -->
                                    <li class="flex items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                                        <a class="block mr-2 xl:mr-4 shrink-0" href="#0">
                                            <img class="w-16 xl:w-20" src="{{ asset('images/related-product-01.jpg') }}"
                                                width="200" height="142" alt="Product 01" />
                                        </a>
                                        <div class="grow">
                                            <a href="#0">
                                                <h4
                                                    class="text-sm font-medium text-gray-800 dark:text-gray-100 leading-tight">
                                                    The Complete Front-End Development Course!</h4>
                                            </a>
                                        </div>
                                        <div class="text-sm font-medium text-gray-800 dark:text-gray-100 ml-2">$69</div>
                                    </li>
                                    <!-- Cart item -->
                                    <li class="flex items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                                        <a class="block mr-2 xl:mr-4 shrink-0" href="#0">
                                            <img class="w-16 xl:w-20"
                                                src="{{ asset('images/related-product-02.jpg') }}" width="200"
                                                height="142" alt="Product 02" />
                                        </a>
                                        <div class="grow">
                                            <a href="#0">
                                                <h4
                                                    class="text-sm font-medium text-gray-800 dark:text-gray-100 leading-tight">
                                                    Web Development Ultimate Course 2024</h4>
                                            </a>
                                        </div>
                                        <div class="text-sm font-medium text-gray-800 dark:text-gray-100 ml-2">$69
                                        </div>
                                    </li>
                                    <!-- Cart item -->
                                    <li
                                        class="flex items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                                        <a class="block mr-2 xl:mr-4 shrink-0" href="#0">
                                            <img class="w-16 xl:w-20"
                                                src="{{ asset('images/related-product-03.jpg') }}" width="200"
                                                height="142" alt="Product 03" />
                                        </a>
                                        <div class="grow">
                                            <a href="#0">
                                                <h4
                                                    class="text-sm font-medium text-gray-800 dark:text-gray-100 leading-tight">
                                                    Full-Stack JavaScript Course!</h4>
                                            </a>
                                        </div>
                                        <div class="text-sm font-medium text-gray-800 dark:text-gray-100 ml-2">$69
                                        </div>
                                    </li>
                                </ul>
                                <!-- Fees, discount and total -->
                                <ul>
                                    <li
                                        class="flex items-center justify-between py-3 border-b border-gray-200 dark:border-gray-700/60">
                                        <div class="text-sm">Subtotal</div>
                                        <div class="text-sm font-medium text-gray-800 dark:text-gray-100 ml-2">$205
                                        </div>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-3 border-b border-gray-200 dark:border-gray-700/60">
                                        <div class="text-sm">Taxes</div>
                                        <div class="text-sm font-medium text-gray-800 dark:text-gray-100 ml-2">$48
                                        </div>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-3 border-b border-gray-200 dark:border-gray-700/60">
                                        <div class="flex items-center">
                                            <span class="text-sm mr-2">Discount</span>
                                            <span
                                                class="text-xs inline-flex whitespace-nowrap font-medium uppercase bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400 rounded-full text-center px-2.5 py-1">XMAS22</span>
                                        </div>
                                        <div class="text-sm font-medium text-gray-800 dark:text-gray-100 ml-2">-$25
                                        </div>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-3 border-b border-gray-200 dark:border-gray-700/60">
                                        <div class="text-sm">Total</div>
                                        <div class="text-sm font-medium text-green-600 ml-2">$205</div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Payment Details -->
                            <div>
                                <div class="text-gray-800 dark:text-gray-100 font-semibold mb-4">Payment Details</div>
                                <div class="text-sm rounded border border-gray-200 dark:border-gray-700/60 p-3">
                                    <div class="flex items-center justify-between space-x-2">
                                        <!-- CC details -->
                                        <div class="flex items-center">
                                            <!-- Mastercard icon -->
                                            <svg class="shrink-0 mr-3" width="32" height="24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect fill="#1F2937" width="32" height="24" rx="3" />
                                                <ellipse fill="#E61C24" cx="12.522" cy="12" rx="5.565"
                                                    ry="5.647" />
                                                <ellipse fill="#F99F1B" cx="19.432" cy="12" rx="5.565"
                                                    ry="5.647" />
                                                <path
                                                    d="M15.977 7.578A5.667 5.667 0 0 0 13.867 12c0 1.724.777 3.353 2.11 4.422A5.667 5.667 0 0 0 18.087 12a5.667 5.667 0 0 0-2.11-4.422Z"
                                                    fill="#F26622" />
                                            </svg>
                                            <div>Ending with <span class="text-gray-800 dark:text-gray-100">2478</span>
                                            </div>
                                        </div>
                                        <!-- Expiry -->
                                        <div class="italic ml-2">Expires 12/23</div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <div class="mb-4">
                                    <a href="{{ route('pay') }}"
                                        class="btn w-full bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">View
                                        Your Order</a>
                                </div>
                                <div class="text-xs text-gray-500 italic text-center">Should you ever change your mind,
                                    we offer a 14-day, no-questions-asked refund policy.</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
