<section class="grid grid-cols-2" id="hero">
    <div></div>
    <div>
        <div class="mt-20 lg:mt-40 lg:ml-16 text-right">
            <div class="text-8xl font-semibold text-gray-900 leading-none"><h1>👋 &nbsp;
                    <span contenteditable="true">{{$title->content}}</span>
                </h1></div>
            <div class="mt-10 text-l font-light text-true-gray-500 antialiased">{{$subtitle->content}}</div>
            <div class="mt-6 text-l font-light text-true-gray-500 antialiased">
                {{ Str::of($profession->content)->toHtmlString()}}
            </div>

        </div>
        <div class="mt-12 lg:mt-32 lg:ml-20 text-right">
            <bottom type="button"
                    class=" items-center justify-center w-12 h-12 rounded-full bg-cool-gray-100 text-gray-800 animate-bounce hover:text-gray-900 hover:bg-cool-gray-50 transition duration-300 ease-in-out cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </bottom>
        </div>
    </div>
</section>
<!-- /hero section -->
