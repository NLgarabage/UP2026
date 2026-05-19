<x-layout>
    <!-- <x-slot:title>
        aaaaa
    </x-slot>
    <h3>Welcome {{ $name }} {{ $surname }}!</h3> -->

    @foreach ($posts as $post)
     <div>
        <h2>
            {{$post->title}}
        </h2>
        <div>
            {{$post->text}}
        </div>
     </div>
     @endforeach
</x-layout>