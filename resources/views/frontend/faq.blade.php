<x-layout>
    <section id="faq" class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6 text-center">
                Frequently Asked Questions
            </h2>
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div x-data="{ open: false }"
                    class="border border-gray-200 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between p-4 text-left text-gray-900 dark:text-white focus:outline-none">
                        <span class="text-lg font-medium">What is your return policy?</span>
                        <svg x-show="!open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" class="p-4 text-gray-700 dark:text-gray-300">
                        <p>We offer a 30-day return policy on most products. If you are not satisfied with your
                            purchase, you can return the item for a full refund or exchange. Please ensure that the item
                            is in its original condition and packaging.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ open: false }"
                    class="border border-gray-200 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between p-4 text-left text-gray-900 dark:text-white focus:outline-none">
                        <span class="text-lg font-medium">Do you offer international shipping?</span>
                        <svg x-show="!open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" class="p-4 text-gray-700 dark:text-gray-300">
                        <p>Yes, we offer international shipping to most countries. Shipping costs and delivery times
                            will vary based on your location. You can view the shipping options and costs at checkout.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ open: false }"
                    class="border border-gray-200 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between p-4 text-left text-gray-900 dark:text-white focus:outline-none">
                        <span class="text-lg font-medium">How can I track my order?</span>
                        <svg x-show="!open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" class="p-4 text-gray-700 dark:text-gray-300">
                        <p>Once your order has shipped, you will receive an email with a tracking number and a link to
                            track your package. You can also view your order status in the "My Orders" section of your
                            account.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div x-data="{ open: false }"
                    class="border border-gray-200 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between p-4 text-left text-gray-900 dark:text-white focus:outline-none">
                        <span class="text-lg font-medium">Do you offer product warranties?</span>
                        <svg x-show="!open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill="evenodd"
                                d="M12 16.293l-4.646-4.647a1 1 0 011.414-1.414L12 13.464l3.232-3.232a1 1 0 111.414 1.414L12 16.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" class="p-4 text-gray-700 dark:text-gray-300">
                        <p>Yes, many of our products come with a manufacturer’s warranty. The warranty details are
                            included with your purchase or available on the product page. Please contact our support
                            team if you need more information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>
