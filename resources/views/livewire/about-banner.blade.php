<section class="grid grid-cols-2" id="about-me">
    <div></div>
    <div>
        <div class="mt-20 lg:mt-40 lg:ml-16 text-right">
            <div class="mt-6 text-xl font-light text-true-gray-500 antialiased">
                {{ Str::of($content->content)->toHtmlString()}}
            </div>
        </div>
    </div>
</section>
<!-- /hero section -->
