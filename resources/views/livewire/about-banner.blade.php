<section class="grid grid-cols-2 mb-20" id="about-me">
    <div class="block mt-10 lg:mt-20 lg:ml-16">
        <div class="lg:text-right lg:ml-auto">
            <div class="relative inline-block z-10 pt-11 lg:pt-0 flex justify-center items-center h-screen">
                <img
                    src="{{ asset('img/myself.png') }}"
                    alt="hero"
                    class="max-w-full lg:ml-auto"
                />
                <span class="absolute -left-8 -bottom-8 z-[-1]">
                    <svg
                        width="93"
                        height="93"
                        viewBox="0 0 93 93"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="2.5" cy="2.5" r="2.5" fill="#000"/>
                      <circle cx="2.5" cy="24.5" r="2.5" fill="#000"/>
                      <circle cx="2.5" cy="46.5" r="2.5" fill="#000"/>
                      <circle cx="2.5" cy="68.5" r="2.5" fill="#000"/>
                      <circle cx="2.5" cy="90.5" r="2.5" fill="#000"/>
                      <circle cx="24.5" cy="2.5" r="2.5" fill="#000"/>
                      <circle cx="24.5" cy="24.5" r="2.5" fill="#000"/>
                      <circle cx="24.5" cy="46.5" r="2.5" fill="#000"/>
                      <circle cx="24.5" cy="68.5" r="2.5" fill="#000"/>
                      <circle cx="24.5" cy="90.5" r="2.5" fill="#000"/>
                      <circle cx="46.5" cy="2.5" r="2.5" fill="#000"/>
                      <circle cx="46.5" cy="24.5" r="2.5" fill="#000"/>
                      <circle cx="46.5" cy="46.5" r="2.5" fill="#000"/>
                      <circle cx="46.5" cy="68.5" r="2.5" fill="#000"/>
                      <circle cx="46.5" cy="90.5" r="2.5" fill="#000"/>
                      <circle cx="68.5" cy="2.5" r="2.5" fill="#000"/>
                      <circle cx="68.5" cy="24.5" r="2.5" fill="#000"/>
                      <circle cx="68.5" cy="46.5" r="2.5" fill="#000"/>
                      <circle cx="68.5" cy="68.5" r="2.5" fill="#000"/>
                      <circle cx="68.5" cy="90.5" r="2.5" fill="#000"/>
                      <circle cx="90.5" cy="2.5" r="2.5" fill="#000"/>
                      <circle cx="90.5" cy="24.5" r="2.5" fill="#000"/>
                      <circle cx="90.5" cy="46.5" r="2.5" fill="#000"/>
                      <circle cx="90.5" cy="68.5" r="2.5" fill="#000"/>
                      <circle cx="90.5" cy="90.5" r="2.5" fill="#000"/>
                    </svg>
                  </span>
            </div>
        </div>
    </div>
    <div class="col-span-1">
        <div class="mt-20 lg:mt-40 lg:ml-16 text-right">
            <div class="mt-6 text-l font-light text-true-gray-500 antialiased">
                {{ Str::of($about->content)->toHtmlString()}}
            </div>
        </div>
    </div>
</section>
<!-- /hero section -->
