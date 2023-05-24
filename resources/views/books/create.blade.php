<x-layout>
    <x-setting heading="Add a new Book">
        <form action="/books" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" required />
            <x-form.input name="author" required />
            <x-form.input name="edition" required />
            <x-form.input name="no_of_pages" type="number" required />

            <x-form.button>Add</x-form.button>
        </form>
    </x-setting>
</x-layout>
