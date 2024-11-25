<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- <article class="max-w-screen-sm py-8 border-b border-gray-500">
        <h2 class="mb-1 text-3xl text-gray-800">{{$post['title']}}</h2>
        <div class="text-gray-500 flex mt-3">
            <img class="h-8 w-8 rounded-full me-3" src="https://64.media.tumblr.com/e7d92ce442b656351332f7134ed46a10/5626cc71dd31e6f2-95/s640x960/6b1e179bcb8d11b99074f0d8cd4f158f5e4a9378.png" alt=""> {{$post['author']}}
        </div>
        <body>
           <p class="my-4 font-light">{{$post['blog']}}</p> 
            <a href="/blog" class="text-blue-500 hover:underline">&laquo; Back to blog</a>
        </body>
    </article> --}}
    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src={{$post['image']}}
                                alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post['author'] }}</a>

                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08"
                                        title="February 8th, 2022">{{ date('d-m-Y', strtotime($post->created_at)) }}</time>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post['title'] }}</h1>
                </header>
                <p class="my-4 font-light">{{$post['blog']}}</p> 
            <a href="/blog" class="text-blue-500 hover:underline">&laquo; Back to blog</a>
            </article>
            </section>
        </div>
    </main>






</x-layout>
