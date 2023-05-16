<div>
    @foreach ($heroes as $hero)
        @if ($hero->image_vertical)
            <img style="display: none" id="img_{{ $loop->index }}" class="w-full h-[800px] object-cover" src="/img/heroes/{{ $hero->image_vertical }}"/>
        @else
            <img style="display: none" id="img_{{ $loop->index }}" class="w-full h-[800px] object-cover" src="/img/heroes/{{ $hero->image }}"/>
        @endif
    @endforeach

    <div class="flex">
        <div onclick="nextImage()" class="bg-blue-400 text-white h-24 w-24">Esquerda</div>
        <div onclick="" class="bg-blue-400 text-white h-24 w-24">Direita</div>
    </div>



    <script>
        selectedImage = 0;
        document.getElementById('img_' + selectedImage).style.display = 'block';

        function nextImage() {
            document.getElementById('img_' + selectedImage).style.display = 'none';
            selectedImage++;
            if (selectedImage == {{ count($heroes)}}) 
                selectedImage = 0;
            document.getElementById('img_' + selectedImage).style.display = 'block';
        }

        setInterval(()=> { 
            nextImage();    
         }, 2000);
    </script>    
    
</div>