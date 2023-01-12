<x-guestLayout>
    @foreach ($stories as $story)
        <div class="border">
            <div>{{ $story->title }}</div>
            <div>{{ $story->description }}</div>        
        </div>
    @endforeach
</x-guestLayout>