<x-guestLayout>
    <div class="grid grid-cols-3 lg:grid-cols-5">
        @foreach ($users as $user)
            <div class="border hover:bg-blue-200 bg-blue-100 m-4 p-4 rounded-full">
                <div>{{ $user->profile_photo_path }}</div>
                <div>{{ $user->name }}</div>
                <div>{{ $user->email }}</div>
            </div>
        @endforeach
    </grid>
</x-guestLayout>