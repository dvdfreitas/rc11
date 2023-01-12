<x-guestLayout>
    <div class="grid grid-cols-4 gap-3">
        @foreach ($users as $user)
            <div class="border p-4 bg-slate-200 rounded shadow-lg">
                <div>{{ $user->name }}</div>
                <div>{{ $user->email }}</div>        
            </div>
        @endforeach
    </div>

    {{ $users->links() }}
</x-guestLayout>