<x-layout>
    <x-setting heading="Add a new Book">
        <form action="/books" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="author" />
            <x-form.input name="edition" />
            <x-form.input name="no_of_pages" type="number" />

            <x-form.button>Add</x-form.button>
        </form>
    </x-setting>
</x-layout>
