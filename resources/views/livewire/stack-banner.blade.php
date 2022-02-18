<section class="shadow-xl drop-shadow-xl" id="stack">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Stack</h2>

        <div class="mt-6 grid grid-cols-6 gap-y-10 gap-x-4 sm:grid-cols-3 md:grid-cols-6 lg:grid-cols-12 xl:gap-x-4">

            @foreach($items as $item)
                <div class="group relative">
                    <div class="w-full min-h-10 aspect-w-1 aspect-h-1 rounded-md overflow-hidden shadow-none drop-shadow-none group-hover:opacity-75 lg:aspect-none">
                        {{Str::of($item->icon)->toHtmlString()}}
                    </div>
                    <div class="mt-4 flex justify-between content-center">
                        <div class="text-center">
                            <span class="px-1 inline-flex text-xs leading-5 font-semibold rounded-half bg-green-100 text-green-800"> {{$item->description}} </span>
                            <span class="px-1 inline-flex text-xs leading-5 font-semibold rounded-half bg-blue-100 text-green-800"> {{($item->tag == 'XP' ? 'experienced' : 'learning')}} </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
