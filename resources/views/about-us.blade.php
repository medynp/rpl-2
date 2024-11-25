<x-layout>
    <x-slot:title>{{$title}}</x-slot>

    @foreach ($aboutme as $about )
        <article class="max-w-screen-sm py-8 border-b border-gray-500">
        <h2 class="mb-1 text-3xl text-gray-800">{{$about['title']}}</h2>
        <div class="text-gray-500 flex mt-3">
            <img class="h-8 w-8 rounded-full me-3" src="https://i.pinimg.com/originals/c2/a3/c1/c2a3c14076c6f5def1dbcd91639306fc.png" alt=""> {{$about['author']}}
        </div>
        <body>
           <p class="my-4 font-light">{{Str::limit($about['blog'],50)}}</p> 
            <a href="/post-about-us/{{ $about['slug']}}" class="text-blue-500 hover:underline">Read More &raquo;</a>
        </body>
    </article>
    @endforeach  
</x-layout>