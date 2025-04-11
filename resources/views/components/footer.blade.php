    <section class="bg-gray-50 border-t dark:bg-gray-900">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 lg:px-8">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <a href="{{ route('admin') }}" aria-label="Go home" title="Company" class="inline-flex items-center">
                        <img src="{{ asset('img/logo/expocito.jpeg') }}" alt="Expocito" class=" w-10 rounded-lg">
                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-900 uppercase">expocito</span>
                    </a>
                    <div class="mt-6 lg:max-w-sm">
                        <p class="text-sm text-gray-800">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.
                        </p>
                        <p class="mt-4 text-sm text-gray-800">
                            Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.
                        </p>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Phone:</p>
                        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">850-123-5021</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Email:</p>
                        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">info@lorem.mail</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Address:</p>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                            aria-label="Our address" title="Our address"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                            312 Lovely Street, NY
                        </a>
                    </div>
                </div>
                <div>
                    <span class="text-base font-bold tracking-wide text-gray-900">Social</span>
                    <div class="flex items-center mt-1 space-x-3">
                        <a href="/" class="transition-transform duration-300 hover:scale-110 inline-block">
                            <img src="{{ asset('img/logo/x.png') }}" alt="x">
                        </a>
                        <a href="/" class="transition-transform duration-300 hover:scale-110 inline-block">
                            <img src="{{ asset('img/logo/instagram.png') }}" alt="instagram">
                        </a>
                        <a href="/" class="transition-transform duration-300 hover:scale-110 inline-block">
                            <img src="{{ asset('img/logo/facebook.png') }}" alt="facebook">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-center pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-gray-600">
                    © Copyright 2020 Lorem Inc. All rights reserved.
                </p>
            </div>
        </div>
    </section>
