<x-layout>
    <x-setting :heading="'Edit Book: ' . $book->title">
        <form action="/books/{{ $book->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="old('title', $book->title)" required />
            <x-form.input name="author" :value="old('author', $book->author)" required />
            <x-form.input name="edition" :value="old('edition', $book->edition)" required />
            <x-form.input name="no_of_pages" :value="old('no_of_pages', $book->no_of_pages)" required />

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
