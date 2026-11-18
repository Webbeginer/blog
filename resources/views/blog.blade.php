<x-layout :title="$title">
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <p class="text-gray-700 text-lg">Selamat datang di halaman detail Blog</p>

  
        <article class="max-w-screen-md border-b border-gray-300  p-6 mb-6 ">
            <h1 class="text-3xl font-bold mb-4">
                {{ $blog['title'] }}
            </h1>
            <div class="mb-4">
                <a href="#" class="text-gray-500">Penulis: {{ $blog->user->name }}</a> | 
                <span class="text-gray-500">Tanggal: {{ $blog->created_at->format('j F Y') }}</span>
            </div>
            <p class="text-gray-700 mb-4">{{ $blog['content'] }}</p>
            <a href="/blogs" class="text-indigo-600 hover:underline"> &laquo; kembali ke blogs ;</a>
        </article> --}}

        <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $blog->user->name }}">
                      <div>
                          <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $blog->user->name }}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $blog->created_at->format('F j, Y') }}</time></p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $blog->title }}</h1>
          </header>
          <p class="lead">Flowbite is an open-source library of UI components built with the utility-first
              classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
              datepickers.</p>
          <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
              you can think things through before committing to an actual design project.</p>
          <p>But then I found a <a href="https://flowbite.com">component library based on Tailwind CSS called
                  Flowbite</a>. It comes with the most commonly used UI components, such as buttons, navigation
              bars, cards, form elements, and more which are conveniently built with the utility classes from
              Tailwind CSS.</p>
          <p>{{ $blog->content }}</p>

           <a href="/blogs" class="text-indigo-600 hover:underline mt-4 inline-block"> &laquo; kembali ke blogs ;</a>
          
      </article>
  </div>
</main>



</x-layout>