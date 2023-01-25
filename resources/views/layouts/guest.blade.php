<html>
    <head>
        <title>Homepage</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="mx-2 xl:m-auto xl:mt-4 max-w-3xl xl:rounded-xl text-xl xl:flex justify-around gap-2 bg-blue-900 text-white p-4">
            <div class="hidden xl:inline">|</div>
            <div><a href="">Homepage</a></div>
            <div class="hidden xl:inline">|</div>
            <div><a href="">Quem somos</a></div>
            <div class="hidden xl:inline">|</div>
            <div><a href="">A nossa missão</a></div>
            <div class="hidden xl:inline">|</div>
            <div><a href="">Contactos</a></div>
            <div class="hidden xl:inline">|</div>
        </div>
        <div class="w-full">
            {{ $slot }}
        </div>
    </body>
</html>