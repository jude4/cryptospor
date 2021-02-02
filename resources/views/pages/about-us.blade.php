@section('title', 'About us')
<x-frontend-layout>
    @include('partials._top_nav', ['title' => 'About Cryptospor'])
    <section class="text-gray-700 body-font">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto lg:px-20 lg:py-24 md:flex-row">
            <div class="w-5/6 mb-10 lg:max-w-lg lg:w-full md:w-1/2 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="frontend/img/about/hgs.png">


            </div>
            <div class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 md:items-start md:text-left">
                <h1 class="mb-8 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-left lg:text-5xl title-font">
                    About Cryptospor
                </h1>
                <p class="mb-8 text-base leading-relaxed text-center text-gray-700 lg:text-left lg:text-1xl">
                    Static Tailwind CSS
                    templates for easy integration
                    with your go-to language.
                    Designing your landing page usually takes weeks.
                    Wickedtemplates has them ready for you so you take care of what really matters.
                    Deploy stunning landing pages in no time.</p>
                <div class="flex justify-center">
                    <a href="#" class="inline-flex items-center font-semibold text-blue-700 md:mb-2 lg:mb-0 hover:text-blue-400 ">
                        Learn More
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="27df4f81-c854-45de-942a-fe90f7a300f9" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#27df4f81-c854-45de-942a-fe90f7a300f9)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">Our</span>
                </span>
               Features
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
            </p>
        </div>
        <div class="grid max-w-screen-lg gap-8 row-gap-10 mx-auto lg:grid-cols-2">
            <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                <div class="mr-4">
                    <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                </div>
                <div>
                    <h6 class="mb-3 text-xl font-bold leading-5">The deep ocean</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I didn't even know we were calling him Big Bear. We never had the chance to.
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
            </div>
            <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                <div class="mr-4">
                    <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                </div>
                <div>
                    <h6 class="mb-3 text-xl font-bold leading-5">When has justice</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        Rough pomfret lemon shark plownose chimaera southern sandfish kokanee northern sea robin Antarctic cod. Yellow-and-black triplefin gulper South American Lungfish mahi-mahi, butterflyfish glass catfish soapfish ling gray mullet!
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
            </div>
            <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                <div class="mr-4">
                    <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                </div>
                <div>
                    <h6 class="mb-3 text-xl font-bold leading-5">Organically grow</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        A slice of heaven. O for awesome, this chocka full cuzzie is as rip-off as a cracker. Meanwhile, in behind the bicycle shed, Hercules Morse, as big as a horse and Mrs Falani were up to no good with a bunch of crook pikelets.
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
            </div>
            <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                <div class="mr-4">
                    <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                </div>
                <div>
                    <h6 class="mb-3 text-xl font-bold leading-5">A slice of heaven</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling. Inspiring, invest synergy capacity building, white paper; silo, unprecedented challenge B-corp problem-solvers.
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
            </div>
        </div>
    </div>


</x-frontend-layout>
