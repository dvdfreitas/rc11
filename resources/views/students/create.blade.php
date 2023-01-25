<x-guestLayout>
    <div>
        <form action="/students/store" method="POST">
            @csrf
            <div>Número de processo: <input class="border m-2" name="id" type="text"></div>
            <div>Nome: <input class="border m-2" name="name" type="text"></div>
            <div>Email: <input class="border m-2" name="email" type="text"></div>
            <div>Data de nascimento: <input class="border m-2" name="birthdate" type="text"></div>
            <input type="submit" value="Submeter" class="bg-green-200 p-4 rounded">
        </form>
    </div>
</x-guestLayout>