<x-layout>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
           
            <form action="" method="get">
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                              </svg>
                              
                        </div>
                        <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search For Article" type="text" name="search" id="search" required="" autocomplete="off">
                    </div>
                    <div>
                        <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <x-slot:title>{{$title}}</x-slot>
    <section class="dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
            <div class="grid gap-8 lg:grid-cols-3">
    @foreach ($posts as $post )
        {{-- <article class="max-w-screen-sm py-8 border-b border-gray-500">
            <h2 class="mb-1 text-3xl text-gray-800">{{$post['title']}}</h2>
            <div class="text-gray-500 flex mt-3">
                <img class="h-8 w-8 rounded-full me-3" src="https://i.pinimg.com/736x/32/af/50/32af50366049ba84277b7b1b6cfb0cd9.jpg" alt=""> {{$post['author']}} |&nbsp;{{ date('d-m-Y', strtotime($post->created_at))}}
        </div>
        <body>
           <p class="my-4 font-light">{{Str::limit($post['blog'],60)}}</p> 
            <a href="/post/{{ $post['slug']}}" class="text-blue-500 hover:underline">Read More &raquo;</a>
        </body>
    </article> --}}



                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                            Article
                        </span>
                        <span class="text-sm">{{ date('d-m-Y', strtotime($post->created_at))}}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{$post['title']}}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{Str::limit($post['blog'],60)}}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full" src={{$post['image']}} alt="Bonnie Green avatar" />
                            <span class="font-medium dark:text-white">
                                {{$post['author']}}
                            </span>
                        </div>
                        <a href="/post/{{ $post['slug']}}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>
                               
    @endforeach  
    
</div>  

</div>
{{$posts->links()}}   
</section>
</x-layout>