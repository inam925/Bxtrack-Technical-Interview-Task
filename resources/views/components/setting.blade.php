@props(['heading'])
<section class="max-w-4xl mx-auto py-8">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <ul>
                <h4 class="font-semibold mb-4">Links</h4>
                <li class="{{ request()->is('books') ? 'text-blue-500' : '' }}">
                    <a href="/books">All Books</a>
                </li>
                <li
                    class="{{ request()->is('books/create') ? 'text-blue-500' : '' }} transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
                    <a href="/books/create">Add a new Book</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel class="w-full mx-auto">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
