<x-guestLayout>
    <div class="my-4">
        <a href="/students/create" class="bg-red-400 p-2 rounded hover:bg-red-500 text-white ">Inserir aluno</a>
    </div>
    <div class="grid grid-cols-3 gap-3 rounded">
        @foreach ($students as $student)
            <div class="border bg-slate-300 p-4">
                {{ $student->name }}
            </div>
        @endforeach
    </div>
</x-guestLayout>