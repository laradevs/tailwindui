@extends('layouts.tailwind-ui')

@section('title', 'Testimonials Sections')

@section('content')
<div class="bg-indigo-800">
    <div class="max-w-screen-xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8">
        <div
            class="py-12 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10 md:border-r md:border-indigo-900 lg:pr-16">
            <div class="md:flex-shrink-0">
                <svg fill="none" height="40" viewBox="0 0 105 40">
                    <path fill="#B4C6FC" fill-rule="evenodd"
                        d="M18 1L0 7v19.5l6 2V34l18 6V8.5l-6 2V1zM8 29.167L18 32.5V12.608l4-1.333v25.95L8 32.558v-3.391z"
                        clip-rule="evenodd" />
                    <path fill="#B4C6FC"
                        d="M42.9 28V17.45h-3.51v-3.392h11.486v3.393h-3.53V28H42.9zM59.481 28.254c-4.075 0-6.376-2.028-6.376-6.006v-8.19h4.407v8.014c0 1.814.39 2.71 1.97 2.71 1.56 0 1.95-.896 1.95-2.73v-7.994h4.445v8.15c0 4.193-2.496 6.046-6.396 6.046z" />
                    <path fill="#B4C6FC" fill-rule="evenodd"
                        d="M68.965 14.058V28h4.407v-4.543h1.346c3.607 0 5.538-1.638 5.538-4.544v-.078c0-2.983-1.716-4.777-5.733-4.777h-5.558zm4.407 6.435h.916c1.17 0 1.775-.527 1.775-1.56v-.078c0-1.073-.605-1.502-1.755-1.502h-.936v3.14z"
                        clip-rule="evenodd" />
                    <path fill="#B4C6FC"
                        d="M82.563 14.058V28h9.497v-3.412h-5.07v-10.53h-4.427zM94.562 28V14.058h9.906v3.393h-5.499v1.97h4.368v3.1h-4.368v2.086h5.811V28H94.562z" />
                </svg>
            </div>
            <blockquote class="mt-8 md:flex-grow md:flex md:flex-col">
                <div class="relative text-lg leading-7 font-medium text-white md:flex-grow">
                    <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-600"
                        fill="currentColor" viewBox="0 0 32 32">
                        <path
                            d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                    </svg>
                    <p class="relative">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente
                        alias molestiae. Numquam corrupti in laborum sed rerum et corporis.
                    </p>
                </div>
                <footer class="mt-8">
                    <div class="flex">
                        <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                            <img class="h-12 w-12 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <div class="text-base leading-6 font-medium text-white">Judith Black</div>
                            <div class="text-base leading-6 font-medium text-indigo-200">CEO, Tuple</div>
                        </div>
                    </div>
                </footer>
            </blockquote>
        </div>
        <div
            class="py-12 px-4 border-t-2 border-indigo-900 sm:px-6 md:py-16 md:pr-0 md:pl-10 md:border-t-0 md:border-l lg:pl-16">
            <div class="md:flex-shrink-0">
                <svg fill="none" height="40" viewBox="0 0 180 40">
                    <path fill="#B4C6FC" fill-rule="evenodd"
                        d="M34.746 13.065l7.596 4.385a7.399 7.399 0 00-2.533-4.735h4.066a7.389 7.389 0 00-6.558-2.933l5.518-3.186a7.39 7.39 0 00-6.608.397 7.363 7.363 0 00-2.467 2.316 7.366 7.366 0 00-2.468-2.316 7.388 7.388 0 00-6.607-.397l5.517 3.186a7.39 7.39 0 00-6.557 2.933h4.064a7.402 7.402 0 00-2.53 4.736l7.593-4.385v20.37H27.84V18.193l-5.096 2.942.476-3.922a9.421 9.421 0 01.671-2.525h-3.08L0 19.89l.479 1.915 3.678-.92v12.551H.21v1.974h43.416v-1.974h-8.88V13.065zM17.97 23.569h5.92v9.867h-5.92v-9.867zm-6.907 3.947a1.974 1.974 0 100-3.947 1.974 1.974 0 000 3.947z"
                        clip-rule="evenodd" />
                    <path fill="#B4C6FC"
                        d="M150.544 19.38c1.042 0 1.895-.853 1.895-1.871s-.853-1.895-1.895-1.895c-1.018 0-1.87.877-1.87 1.895a1.89 1.89 0 001.87 1.87zM149.029 32.641h3.055v-11.84h-3.055v11.84zM146.875 20.8v2.937h-2.676v4.926c0 1.279.924 1.302 2.676 1.207v2.771c-4.286.474-5.731-.781-5.731-3.978v-4.926h-2.06v-2.936h2.06v-2.392l3.055-.924v3.316h2.676zM118.495 32.973c2.321 0 4.334-1.232 5.352-3.079l-2.652-1.515c-.474.97-1.492 1.563-2.723 1.563-1.824 0-3.174-1.35-3.174-3.221 0-1.895 1.35-3.244 3.174-3.244 1.207 0 2.226.615 2.699 1.586l2.629-1.54c-.971-1.823-2.984-3.054-5.305-3.054-3.599 0-6.252 2.723-6.252 6.252 0 3.528 2.653 6.252 6.252 6.252z" />
                    <path fill="#B4C6FC" fill-rule="evenodd"
                        d="M134.277 20.8v1.398c-.853-1.066-2.131-1.729-3.86-1.729-3.15 0-5.755 2.723-5.755 6.252 0 3.528 2.605 6.252 5.755 6.252 1.729 0 3.007-.663 3.86-1.729v1.397h3.055v-11.84h-3.055zm-3.292 9.26c-1.871 0-3.268-1.35-3.268-3.34 0-1.988 1.397-3.338 3.268-3.338 1.895 0 3.292 1.35 3.292 3.339 0 1.99-1.397 3.339-3.292 3.339zM166.792 26.72c0 3.53-2.795 6.253-6.276 6.253s-6.252-2.724-6.252-6.252c0-3.529 2.771-6.252 6.252-6.252s6.276 2.723 6.276 6.252zm-9.473 0c0 1.92 1.397 3.269 3.197 3.269 1.824 0 3.221-1.35 3.221-3.268 0-1.918-1.397-3.268-3.221-3.268-1.8 0-3.197 1.35-3.197 3.268z"
                        clip-rule="evenodd" />
                    <path fill="#B4C6FC"
                        d="M175.524 20.469c-1.586 0-2.818.592-3.528 1.658V20.8h-3.055v11.84h3.055v-6.394c0-2.06 1.113-2.936 2.605-2.936 1.373 0 2.344.829 2.344 2.439v6.891H180v-7.27c0-3.15-1.966-4.902-4.476-4.902zM59.267 32.642h3.718L66.087 21.7l3.126 10.94h3.718l4.642-16.576h-3.434l-3.173 12.29-3.481-12.29H64.69l-3.457 12.29-3.174-12.29h-3.433l4.641 16.576z" />
                    <path fill="#B4C6FC" fill-rule="evenodd"
                        d="M83.551 32.973c3.482 0 6.276-2.723 6.276-6.252 0-3.528-2.794-6.252-6.276-6.252-3.48 0-6.252 2.724-6.252 6.252 0 3.529 2.771 6.252 6.252 6.252zm0-2.984c-1.8 0-3.197-1.35-3.197-3.268 0-1.918 1.398-3.268 3.197-3.268 1.824 0 3.221 1.35 3.221 3.268 0 1.918-1.397 3.268-3.22 3.268z"
                        clip-rule="evenodd" />
                    <path fill="#B4C6FC"
                        d="M95.031 20.8v2.037c.616-1.61 2.108-2.273 3.6-2.273v3.41c-1.587-.19-3.6.521-3.6 3.008v5.66h-3.055V20.8h3.055zM111.334 32.642l-4.902-5.992 4.76-5.85h-3.647l-4.073 5.21v-9.946h-3.055v16.578h3.055v-5.376l4.31 5.376h3.552z" />
                </svg>
            </div>
            <blockquote class="mt-8 md:flex-grow md:flex md:flex-col">
                <div class="relative text-lg leading-7 font-medium text-white md:flex-grow">
                    <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-600"
                        fill="currentColor" viewBox="0 0 32 32">
                        <path
                            d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                    </svg>
                    <p class="relative">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente
                        alias molestiae. Numquam corrupti in laborum sed rerum et corporis. Nemo expedita voluptas culpa
                        sapiente alias molestiae.
                    </p>
                </div>
                <footer class="mt-8">
                    <div class="flex">
                        <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                            <img class="h-12 w-12 rounded-full"
                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <div class="text-base leading-6 font-medium text-white">Judith Black</div>
                            <div class="text-base leading-6 font-medium text-indigo-200">CEO, Tuple</div>
                        </div>
                    </div>
                </footer>
            </blockquote>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
    <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"
            width="404" height="404" fill="none" viewBox="0 0 404 404">
            <defs>
                <pattern id="svg-pattern-squares-1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#svg-pattern-squares-1)" />
        </svg>

        <div class="relative">
            <svg class="mx-auto h-10" fill="none" viewBox="0 0 180 40">
                <path fill="#2D3748"
                    d="M59.267 32.642h3.718L66.087 21.7l3.126 10.94h3.718l4.642-16.576h-3.434l-3.173 12.29-3.481-12.29H64.69l-3.457 12.29-3.174-12.29h-3.433l4.641 16.576zM83.551 32.973c3.481 0 6.276-2.723 6.276-6.252 0-3.528-2.794-6.252-6.276-6.252-3.48 0-6.252 2.724-6.252 6.252 0 3.529 2.771 6.252 6.252 6.252zm0-2.984c-1.8 0-3.197-1.35-3.197-3.268 0-1.918 1.398-3.268 3.197-3.268 1.824 0 3.221 1.35 3.221 3.268 0 1.918-1.397 3.268-3.22 3.268zM95.031 22.837v-2.036h-3.055v11.84h3.055v-5.66c0-2.486 2.013-3.196 3.6-3.007v-3.41c-1.492 0-2.984.663-3.6 2.273zM111.334 32.642l-4.902-5.992 4.76-5.85h-3.647l-4.073 5.21v-9.946h-3.055v16.578h3.055v-5.376l4.31 5.376h3.552z" />
                <path fill="#5850EC" fill-rule="evenodd"
                    d="M42.342 17.45l-7.596-4.385v20.371h8.88v1.974H.21v-1.974h3.947v-12.55l-3.678.92L0 19.89l20.81-5.202h3.08a9.421 9.421 0 00-.67 2.525l-.477 3.922 5.096-2.942v15.243h4.933v-20.37l-7.594 4.385a7.402 7.402 0 012.531-4.736h-4.064a7.39 7.39 0 016.557-2.933l-5.517-3.186a7.388 7.388 0 016.607.397 7.366 7.366 0 012.468 2.316 7.363 7.363 0 012.467-2.316 7.39 7.39 0 016.608-.397l-5.518 3.186a7.389 7.389 0 016.558 2.933h-4.066a7.399 7.399 0 012.533 4.735zm-18.45 6.119h-5.92v9.867h5.92v-9.867zm-10.854 1.973a1.974 1.974 0 11-3.947 0 1.974 1.974 0 013.947 0z"
                    clip-rule="evenodd" />
                <path fill="#5850EC"
                    d="M118.495 32.973c2.321 0 4.334-1.232 5.352-3.079l-2.652-1.515c-.474.97-1.492 1.563-2.723 1.563-1.824 0-3.174-1.35-3.174-3.221 0-1.895 1.35-3.244 3.174-3.244 1.207 0 2.226.615 2.699 1.586l2.629-1.54c-.971-1.823-2.984-3.054-5.305-3.054-3.599 0-6.252 2.723-6.252 6.252 0 3.528 2.653 6.252 6.252 6.252zM134.277 20.8v1.398c-.853-1.066-2.131-1.729-3.86-1.729-3.15 0-5.755 2.723-5.755 6.252 0 3.528 2.605 6.252 5.755 6.252 1.729 0 3.007-.663 3.86-1.729v1.397h3.055v-11.84h-3.055zm-3.292 9.26c-1.871 0-3.268-1.35-3.268-3.34 0-1.988 1.397-3.338 3.268-3.338 1.895 0 3.292 1.35 3.292 3.339 0 1.99-1.397 3.339-3.292 3.339zM146.875 23.737v-2.936h-2.676v-3.316l-3.055.924V20.8h-2.06v2.936h2.06v4.926c0 3.197 1.445 4.452 5.731 3.978v-2.77c-1.752.094-2.676.07-2.676-1.208v-4.926h2.676zM150.544 19.38c1.042 0 1.895-.853 1.895-1.871s-.853-1.895-1.895-1.895c-1.018 0-1.87.877-1.87 1.895a1.89 1.89 0 001.87 1.87zm-1.515 13.261h3.055v-11.84h-3.055v11.84zM160.516 32.973c3.481 0 6.276-2.724 6.276-6.252 0-3.529-2.795-6.252-6.276-6.252s-6.252 2.723-6.252 6.252c0 3.528 2.771 6.252 6.252 6.252zm0-2.984c-1.8 0-3.197-1.35-3.197-3.268 0-1.918 1.397-3.268 3.197-3.268 1.824 0 3.221 1.35 3.221 3.268 0 1.918-1.397 3.268-3.221 3.268zM175.524 20.469c-1.586 0-2.818.592-3.528 1.658V20.8h-3.055v11.84h3.055v-6.394c0-2.06 1.113-2.936 2.605-2.936 1.373 0 2.344.829 2.344 2.439v6.891H180v-7.27c0-3.15-1.966-4.902-4.476-4.902z" />
            </svg>
            <blockquote class="mt-8">
                <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                        &ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa
                        sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.&rdquo;
                    </p>
                </div>
                <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                        <div class="md:flex-shrink-0">
                            <img class="mx-auto h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                        </div>
                        <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                            <div class="text-base leading-6 font-medium text-gray-900">Judith Black</div>

                            <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path d="M11 0h3L9 20H6l5-20z" />
                            </svg>

                            <div class="text-base leading-6 font-medium text-gray-500">CEO, Workcation</div>
                        </div>
                    </div>
                </footer>
            </blockquote>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="bg-white overflow-hidden">
    <div class="relative max-w-screen-xl mx-auto pt-20 pb-12 px-4 sm:px-6 lg:px-8 lg:py-20">
        <svg class="absolute top-full left-0 transform translate-x-80 -translate-y-24 lg:hidden" width="784"
            height="404" fill="none" viewBox="0 0 784 404">
            <defs>
                <pattern id="svg-pattern-squares-1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="784" height="404" fill="url(#svg-pattern-squares-1)" />
        </svg>

        <svg class="hidden lg:block absolute right-full top-1/2 transform translate-x-1/2 -translate-y-1/2" width="404"
            height="784" fill="none" viewBox="0 0 404 784">
            <defs>
                <pattern id="svg-pattern-squares-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#svg-pattern-squares-2)" />
        </svg>

        <div class="relative lg:flex lg:items-center">
            <div class="hidden lg:block lg:flex-shrink-0">
                <img class="h-64 w-64 rounded-full xl:h-80 xl:w-80"
                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="" />
            </div>

            <div class="relative lg:ml-10">
                <svg class="absolute top-0 left-0 transform -translate-x-8 -translate-y-24 h-36 w-36 text-indigo-200 opacity-50"
                    stroke="currentColor" fill="none" viewBox="0 0 144 144">
                    <path stroke-width="2"
                        d="M41.485 15C17.753 31.753 1 59.208 1 89.455c0 24.664 14.891 39.09 32.109 39.09 16.287 0 28.386-13.03 28.386-28.387 0-15.356-10.703-26.524-24.663-26.524-2.792 0-6.515.465-7.446.93 2.327-15.821 17.218-34.435 32.11-43.742L41.485 15zm80.04 0c-23.268 16.753-40.02 44.208-40.02 74.455 0 24.664 14.891 39.09 32.109 39.09 15.822 0 28.386-13.03 28.386-28.387 0-15.356-11.168-26.524-25.129-26.524-2.792 0-6.049.465-6.98.93 2.327-15.821 16.753-34.435 31.644-43.742L121.525 15z" />
                </svg>
                <blockquote>
                    <div class="text-2xl leading-9 font-medium text-gray-900">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa
                            sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.
                        </p>
                    </div>
                    <footer class="mt-8">
                        <div class="flex">
                            <div class="flex-shrink-0 lg:hidden">
                                <img class="h-12 w-12 rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" />
                            </div>
                            <div class="ml-4 lg:ml-0">
                                <div class="text-base leading-6 font-medium text-grya-900">Judith Black</div>
                                <div class="text-base leading-6 font-medium text-indigo-600">CEO, Tuple</div>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
