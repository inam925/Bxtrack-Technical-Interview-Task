<x-layout>
    <section class="px-6">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-3 lg:text-center lg:pt-14 mb-2">

                </div>

                <div class="col-span-8 w-full p-2
                        border border-gray-200 rounded">
                    <div class="hidden lg:flex flex-col flex:wrap justify-between mb-6">
                        <a href="/books"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Books
                        </a>
                        <h1
                            class="font-bold text-3xl lg:text-4xl mb-4 w-full p-2
                        border border-gray-200 rounded">
                            {{ $book->title }}
                        </h1>
                        <p
                            class="mt-2 block text-gray-400 text-xs w-full p-2
                        border border-gray-200 rounded">
                            Added at <time>{{ $book->created_at->diffForHumans() }}</time>
                        </p>

                        <div class="space-y-4 lg:text-lg leading-loose">
                            <p class="w-full p-2
                        border border-gray-200 rounded">Author:
                                {!! $book->author !!}</p>
                            <p class="w-full p-2
                        border border-gray-200 rounded">Edition:
                                {!! $book->edition !!}</p>
                            <p class="w-full p-2
                        border border-gray-200 rounded">No of Pages:
                                {!! $book->no_of_pages !!}</p>
                        </div>
                    </div>
            </article>
        </main>
    </section>
</x-layout>
