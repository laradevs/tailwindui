@extends('layouts.tailwind-ui')

@section('title', 'Content Sections')

@section('content')
<!-- This component requires Tailwind CSS >= 1.5.1 and @tailwindcss/ui >= 0.4.0 -->
<div class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="relative h-full text-lg max-w-prose mx-auto">
            <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                viewBox="0 0 404 384">
                <defs>
                    <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
            </svg>
            <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384"
                fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                viewBox="0 0 404 384">
                <defs>
                    <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
            </svg>
        </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto mb-6">
            <p class="text-base text-center leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Introducing
            </p>
            <h1
                class="mt-2 mb-8 text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                JavaScript for Beginners</h1>
            <p class="text-xl text-gray-500 leading-8">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem.
                At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla
                orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien.</p>
        </div>
        <div class="prose prose-lg text-gray-500 mx-auto">
            <p>Faucibus commodo massa rhoncus, volutpat. <strong>Dignissim</strong> sed <strong>eget risus
                    enim</strong>. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio
                penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat.
                Dignissim sed eget risus enim. <a href="#">Mattis mauris semper</a> sed amet vitae sed turpis id.</p>
            <ul>
                <li>Quis elit egestas venenatis mattis dignissim.</li>
                <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
                <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
            </ul>
            <p>Quis semper vulputate aliquam venenatis egestas sagittis quisque orci. Donec commodo sit viverra aliquam
                porttitor ultrices gravida eu. Tincidunt leo, elementum mattis elementum ut nisl, justo, amet, mattis.
                Nunc purus, diam commodo tincidunt turpis. Amet, duis sed elit interdum dignissim.</p>
            <h2>From beginner to expert in 30 days</h2>
            <p>Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis arcu ipsum urna nibh.
                Pharetra, euismod vitae interdum mauris enim, consequat vulputate nibh. Maecenas pellentesque id sed
                tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam
                turpis ipsum eu a sed convallis diam.</p>
            <blockquote>
                <p>Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque
                    tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.</p>
            </blockquote>
            <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet
                vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque
                erat velit.</p>
            <figure>
                <img class="w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=facearea&w=1310&h=873&q=80&facepad=3"
                    alt="" width="1310" height="873">
                <figcaption>Sagittis scelerisque nulla cursus in enim consectetur quam.</figcaption>
            </figure>
            <h3>Everything you need to get up and running</h3>
            <p>Purus morbi dignissim senectus mattis <a href="#">adipiscing</a>. Amet, massa quam varius orci dapibus
                volutpat cras. In amet eu ridiculus leo sodales cursus tristique. Tincidunt sed tempus ut viverra
                ridiculus non molestie. Gravida quis fringilla amet eget dui tempor dignissim. Facilisis auctor
                venenatis varius nunc, congue erat ac. Cras fermentum convallis quam.</p>
            <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet
                vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque
                erat velit.</p>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This component requires Tailwind CSS >= 1.5.1 and @tailwindcss/ui >= 0.4.0 -->
<div class="relative bg-white">
    <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
            <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80"
                alt="">
        </div>
    </div>
    <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
        <div class="lg:col-start-2 lg:pl-8">
            <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
                <p class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Work with us</p>
                <h1
                    class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Our Process</h1>
                <p class="text-lg leading-7 text-gray-500 mb-5">Sagittis scelerisque nulla cursus in enim consectetur
                    quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu
                    morbi.</p>
                <div class="prose text-gray-500">
                    <p>Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget
                        pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.</p>
                    <p>Bibendum eu nulla feugiat justo, elit adipiscing. Ut tristique sit nisi lorem pulvinar. Urna,
                        laoreet fusce nibh leo. Dictum et et et sit. Faucibus sed non gravida lectus dignissim imperdiet
                        a.</p>
                    <p>Dictum magnis risus phasellus vitae quam morbi. Quis lorem lorem arcu, metus, egestas netus
                        cursus. In.</p>
                    <ul>
                        <li>Quis elit egestas venenatis mattis dignissim.</li>
                        <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
                        <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
                    </ul>
                    <p>Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate
                        aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id
                        ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.</p>
                    <h2>How we’re different</h2>
                    <p>Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam.
                        Montes, magna cursus nulla feugiat dignissim id lobortis amet. Laoreet sem est phasellus eu
                        proin massa, lectus. Diam rutrum posuere donec ultricies non morbi. Mi a platea auctor mi.</p>
                    <p>Mauris ullamcorper imperdiet nec egestas mi quis quam ante vulputate. Vel faucibus adipiscing
                        lacus, eget. Nunc fermentum id tellus donec. Ut metus odio sit sit varius non nunc orci. Eu, mi
                        neque, ornare suspendisse amet, nibh. Facilisi volutpat lectus id sapien dis mauris rhoncus. Est
                        rhoncus, interdum imperdiet ac eros, diam mauris, tortor. Risus id sit molestie magna.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This component requires Tailwind CSS >= 1.5.1 and @tailwindcss/ui >= 0.4.0 -->
<div class="bg-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
        <div class="mx-auto text-base max-w-prose lg:max-w-none">
            <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Case Study</p>
            <h1
                class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                Meet Whitney</h1>
        </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <div class="relative mb-8 lg:mb-0 lg:row-start-1 lg:col-start-2">
                <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none"
                    viewBox="0 0 404 384">
                    <defs>
                        <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                </svg>
                <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                    <figure>
                        <div class="relative pb-7/12 lg:pb-0">
                            <img src="https://images.unsplash.com/photo-1546913199-55e06682967e?ixlib=rb-1.2.1&auto=format&fit=crop&crop=focalpoint&fp-x=.735&fp-y=.55&w=1184&h=1376&q=80"
                                alt="" width="1184" height="1376"
                                class="rounded-lg shadow-lg object-cover object-center absolute inset-0 w-full h-full lg:static lg:h-auto">
                        </div>
                        <figcaption class="flex mt-3 text-sm text-gray-500">
                            <svg class="flex-none w-5 h-5 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Photograph by Marcus O’Leary
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="text-base max-w-prose mx-auto lg:max-w-none">
                    <p class="text-lg leading-7 text-gray-500 mb-5">Sagittis scelerisque nulla cursus in enim
                        consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed
                        aenean erat arcu morbi.</p>
                </div>
                <div class="prose text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                    <p>Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget
                        pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.</p>
                    <p>Bibendum eu nulla feugiat justo, elit adipiscing. Ut tristique sit nisi lorem pulvinar. Urna,
                        laoreet fusce nibh leo. Dictum et et et sit. Faucibus sed non gravida lectus dignissim imperdiet
                        a.</p>
                    <p>Dictum magnis risus phasellus vitae quam morbi. Quis lorem lorem arcu, metus, egestas netus
                        cursus. In.</p>
                    <ul>
                        <li>Quis elit egestas venenatis mattis dignissim.</li>
                        <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
                        <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
                    </ul>
                    <p>Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate
                        aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id
                        ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.</p>
                    <h2>How we helped</h2>
                    <p>Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam.
                        Montes, magna cursus nulla feugiat dignissim id lobortis amet. Laoreet sem est phasellus eu
                        proin massa, lectus. Diam rutrum posuere donec ultricies non morbi. Mi a platea auctor mi.</p>
                    <p>Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque
                        tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This component requires Tailwind CSS >= 1.5.1 and @tailwindcss/ui >= 0.4.0 -->
<div class="py-16 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-base max-w-prose mx-auto lg:max-w-none">
            <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions</p>
            <h1
                class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                What makes us different</h1>
        </div>
        <div class="relative z-10 text-base max-w-prose mx-auto mb-8 lg:max-w-5xl lg:mx-0 lg:pr-72">
            <p class="text-lg text-gray-500 leading-7">Sagittis scelerisque nulla cursus in enim consectetur quam.
                Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.
                Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.</p>
        </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-start">
            <div class="relative z-10 mb-12 lg:mb-0">
                <div class="mb-10 prose text-gray-500 mx-auto lg:max-w-none">
                    <p>Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget
                        pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.</p>
                    <ul>
                        <li>Quis elit egestas venenatis mattis dignissim.</li>
                        <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
                        <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
                    </ul>
                    <p>Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate
                        aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id
                        ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.</p>
                    <h2>We’re here to help</h2>
                    <p>Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam.
                        Montes, magna cursus nulla feugiat dignissim id lobortis amet. Laoreet sem est phasellus eu
                        proin massa, lectus. Diam rutrum posuere donec ultricies non morbi. Mi a platea auctor mi.</p>
                </div>
                <div class="flex text-base max-w-prose mx-auto lg:max-w-none">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out">
                            Contact sales
                        </a>
                    </div>
                    <div class="rounded-md shadow ml-4">
                        <a href="#"
                            class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo transition duration-150 ease-in-out">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative text-base max-w-prose mx-auto lg:max-w-none">
                <svg class="absolute top-0 right-0 -mt-20 -mr-20 lg:top-auto lg:right-auto lg:bottom-1/2 lg:left-1/2 lg:mt-0 lg:mr-0 xl:top-0 xl:right-0 xl:-mt-20 xl:-mr-20"
                    width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="bedc54bc-7371-44a2-a2bc-dc68d819ae60" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#bedc54bc-7371-44a2-a2bc-dc68d819ae60)" />
                </svg>
                <blockquote class="relative bg-white rounded-lg shadow-lg">
                    <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
                        <img src="https://tailwindui.com/img/logos/workcation-color.svg" alt="Workcation" class="h-8">
                        <div class="relative text-lg text-gray-700 leading-7 font-medium mt-8">
                            <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-200"
                                fill="currentColor" viewBox="0 0 32 32">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative">Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur
                                pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis
                                amet. Laoreet sem est phasellus eu proin massa, lectus.</p>
                        </div>
                    </div>
                    <cite
                        class="flex items-center sm:items-start bg-indigo-600 rounded-b-lg not-italic py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
                        <div class="rounded-full border-2 border-white mr-4 sm:-mt-15 sm:mr-6">
                            <img class="w-12 h-12 sm:w-20 sm:h-20 rounded-full bg-indigo-300"
                                src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.5&w=160&h=160&q=80"
                                alt="">
                        </div>
                        <span class="text-indigo-300 font-semibold leading-6">
                            <strong class="text-white font-semibold">Judith Black</strong>
                            <br class="sm:hidden">
                            CEO at Workcation
                        </span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This component requires Tailwind CSS >= 1.5.1 and @tailwindcss/ui >= 0.4.0 -->
<div class="py-16 xl:py-36 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
    <div class="max-w-max-content lg:max-w-7xl mx-auto">
        <div class="relative z-10 mb-8 md:mb-2 md:px-6">
            <div class="text-base max-w-prose lg:max-w-none">
                <p class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions</p>
                <h1
                    class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    A better way to send money</h1>
            </div>
        </div>
        <div class="relative">
            <svg class="hidden md:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none"
                viewBox="0 0 404 384">
                <defs>
                    <pattern id="95e8f2de-6d30-4b7e-8159-f791729db21b" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#95e8f2de-6d30-4b7e-8159-f791729db21b)" />
            </svg>
            <svg class="hidden md:block absolute bottom-0 left-0 -mb-20 -ml-20" width="404" height="384" fill="none"
                viewBox="0 0 404 384">
                <defs>
                    <pattern id="7a00fe67-0343-4a3c-8e81-c145097a3ce0" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#7a00fe67-0343-4a3c-8e81-c145097a3ce0)" />
            </svg>
            <div class="relative md:bg-white md:p-6">
                <div class="lg:grid lg:grid-cols-2 lg:gap-6 mb-8">
                    <div class="prose prose-lg text-gray-500 mb-6 lg:max-w-none lg:mb-0">
                        <p>Ultrices ultricies a in odio consequat egestas rutrum. Ut vitae aliquam in ipsum. Duis nullam
                            placerat cursus risus ultrices nisi, vitae tellus in. Qui non fugiat aut minus aut rerum.
                            Perspiciatis iusto mollitia iste minima soluta id.</p>
                        <p>Erat pellentesque dictumst ligula porttitor risus eget et eget. Ultricies tellus felis id
                            dignissim eget. Est augue <a href="#">maecenas</a> risus nulla ultrices congue nunc tortor.
                            Eu leo risus porta integer suspendisse sed sit ligula elit.</p>
                        <ol>
                            <li>Integer varius imperdiet sed interdum felis cras in nec nunc.</li>
                            <li>Quam malesuada odio ut sit egestas. Elementum at porta vitae.</li>
                        </ol>
                        <p>Amet, eu nulla id molestie quis tortor. Auctor erat justo, sed pellentesque scelerisque
                            interdum blandit lectus. Nec viverra amet ac facilisis vestibulum. Vestibulum purus nibh ac
                            ultricies congue.</p>
                    </div>
                    <div class="prose prose-lg text-gray-500">
                        <p>Erat pellentesque dictumst ligula porttitor risus eget et eget. Ultricies tellus felis id
                            dignissim eget. Est augue maecenas risus nulla ultrices congue nunc tortor.</p>
                        <p>Eu leo risus porta integer suspendisse sed sit ligula elit. Elit egestas lacinia sagittis
                            pellentesque neque dignissim vulputate sodales. Diam sed mauris felis risus, ultricies
                            mauris netus tincidunt. Mauris sit eu ac tellus nibh non eget sed accumsan. Viverra ac sed
                            venenatis pulvinar elit. Cras diam quis tincidunt lectus. Non mi vitae, scelerisque felis
                            nisi, netus amet nisl.</p>
                        <p>Eu eu mauris bibendum scelerisque adipiscing et. Justo, elementum consectetur morbi eros,
                            posuere ipsum tortor. Eget cursus massa sed velit feugiat sed ut. Faucibus eros mauris morbi
                            aliquam nullam. Scelerisque elementum sit magna ullamcorper dignissim pretium.</p>
                    </div>
                </div>
                <div class="inline-flex rounded-md shadow">
                    <a href="#"
                        class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out">
                        Contact sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
