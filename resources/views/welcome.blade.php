{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}--}}
{{--        </style>--}}

{{--        <style>--}}
{{--            body {--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body class="antialiased">--}}
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">--}}
{{--                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">--}}
{{--                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">--}}
{{--                        <g clip-path="url(#clip0)" fill="#EF3B2D">--}}
{{--                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                </div>--}}

{{--                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-2">--}}
{{--                        <div class="p-6">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>--}}
{{--                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>--}}
{{--                            </div>--}}

{{--                            <div class="ml-12">--}}
{{--                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">--}}
{{--                    <div class="text-center text-sm text-gray-500 sm:text-left">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">--}}
{{--                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--                            </svg>--}}

{{--                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">--}}
{{--                                Shop--}}
{{--                            </a>--}}

{{--                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">--}}
{{--                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>--}}
{{--                            </svg>--}}

{{--                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">--}}
{{--                                Sponsor--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">--}}
{{--                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}


    <!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Mohmd Zamli | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fusion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
{!! Html::style('assets/website/css/bootstrap.min.css') !!}
{!! Html::style('assets/website/css/style.css') !!}

<!-- timeline -->
{!! Html::style('assets/website/css/timeline.css') !!}

<!-- font-awesome icons -->
{!! Html::style('assets/website/css/font-awesome.min.css') !!}

{!! Html::style('assets/message/css/sweetalert.css') !!}



<!-- Message alert -->
    {!! Html::script('assets/message/js/sweetalert-dev.js') !!}

    <style>
        .imgResize{
            width: 450px;
            height: 222px;
        }

        .serviceImg{
            width: 271px;
            height: 182px;
        }

    </style>
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- header -->

<nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-fixed-top">
    <div class="container">
        <h1 class="wthree-logo">
            <a href="{{url('/')}}" id="logoLink"><span >M</span>ohmd</a>
        </h1>
        <div class="nav-item  position-relative">
            <a href="#menu" id="toggle">
                <span></span>
            </a>
            <div id="menu">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#about" class="scroll">About</a></li>
                    <li><a href="#services" class="scroll">Services</a></li>
                    <li><a href="#skills" class="scroll">Skills</a></li>
                    <li><a href="#portfolio" class="scroll">Latest Works</a></li>
                    <li><a href="#testi" class="scroll">Customers Opinions</a></li>
                    <li><a href="#contact" class="scroll">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- //header -->
<!-- banner -->
<div id="home" class="banner-w3pvt  d-flex justify-content-center align-items-center clip-wthree">
    <div class="container">
        <div class="row">
            <div class="offset-lg-6"></div>
            <img src="{{url('assets/website/images/mohmd.png')}}" alt="" class="img-fluid" />
            <div class="col-lg-6 bnr-txt-w3pvt  d-sm-flex justify-content-center align-items-center">
                <div class="bnr-w3pvt-txt">
                    <h4>Hi,I'm</h4>
                    <h2>Mohmd Zamli</h2>
                    <h3>an interactive web Developer with passion of creativity</h3>
                    <p class="text-white mt-sm-4 mt-2">I have a great grasp of working with PHP Laravel,
                        I have developed many websites with many ideas such as cms, API, e-commerce, company personal website</p>
                    <a href="#about" class="scroll bnr-btn">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- about -->
<section class="about-w3layouts sec-space" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-sec-w3layouts_pvt">
                    <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
                    <h4 class="w3layouts_pvt-head">About Me</h4>
                    <p class="title-text text-capitalize" style="font-weight: bold">Professional Web Developer</p>
                </div>
                <div class="ab-pvtw3 my-4">
                    <p class="my-3" style="font-weight: bold">
                        I'm Mohmd Zamli expert in web development. I have a great grasp of working with php Laravel , Vuejs.
                        I have developed many websites with many ideas such as cms, API,<br> E-Commerce, Company personal website
                    </p>
                    <p style="font-weight: bold"> I have experience in the following languages.
                        html, html5, css, css3 ,PHP, Mysql

                        And the following frameworks
                        Laravel , Vuejs , Bootstrap , Ajax</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6  mt-md-4 w3pvt-ab text-center position-relative">
                <div class="ab-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                    <img src="{{url('assets/website/images/s5.png')}}" alt="" class="img-fluid rounded-circle">
                </div>
                <h4 class="feed-title my-3">positive solutions</h4>
                <p style="font-weight: bold">Create high-performance, interactive, user-friendly applications helping companies bring their business to a whole new level.</p>

            </div>
            <div class="col-lg-3 col-md-6 mt-4 w3pvt-ab text-center">
                <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                    <img src="{{url('assets/website/images/s6.png')}}" alt="" class="img-fluid rounded-circle">
                </div>
                <h4 class="feed-title my-3">satisfied customers</h4>
                <p style="font-weight: bold">I will take you through every stage of the development process from a thorough analysis of a business idea to deployment and ongoing support.</p>

            </div>
        </div>
        <div class="row ab-grid-bottom">
            <div class="col-lg-3 col-md-6 my-lg-4 w3pvt-ab text-center  position-relative">
                <div class="ab-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                    <img src="{{url('assets/website/images/s1.png')}}" alt="" class="img-fluid rounded-circle">
                </div>
                <h4 class="feed-title my-3">Business Consulting</h4>


            </div>
            <div class="col-lg-3 col-md-6 my-lg-4 mt-md-0 mt-4 w3pvt-ab text-center position-relative">
                <div class="ab-border rsp-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                    <img src="{{url('assets/website/images/s2.png')}}" alt="" class="img-fluid rounded-circle">
                </div>
                <h4 class="feed-title my-3">Apps Design</h4>


            </div>
            <div class="col-lg-3 col-md-6 my-lg-4 mt-sm-5 mt-4 w3pvt-ab text-center position-relative">
                <div class="ab-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                    <img src="{{url('assets/website/images/s3.png')}}" alt="" class="img-fluid rounded-circle">
                </div>
                <h4 class="feed-title my-3">Apps Development</h4>


            </div>
            <div class="col-lg-3 col-md-6 mt-lg-4 mt-sm-5 mt-4 w3pvt-ab text-center">
                <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                    <img src="{{url('assets/website/images/s4.png')}}" alt="" class="img-fluid rounded-circle">
                </div>
                <h4 class="feed-title my-3">great services</h4>


            </div>

            <p style="font-weight: bold">-focuses on the delivery of the apps designed to enhance the clients’ business.</p>
            <p style="font-weight: bold">-make applications tailored to specific industries considering not only technical side of the solutions,
                but also peculiarities of each business domain.

            </p>
        </div>
    </div>
</section>
<!-- about -->
<!-- carousel -->
<div class="cliptop-blog-wthree" id="services">
    <div class="container">
        <div class="title-sec-w3layouts_pvt">
            <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
            <h4 class="w3layouts_pvt-head text-white">My Services</h4>
            <p class="title-text text-capitalize" style="font-weight: bold">I am one of the best in this Fieald</p>
        </div>
        <ul class="demo mt-5 pt-lg-5">
            <li>
                <h5 style="margin-left: 50px;"><span>Web Development</span></h5>
                <div class="gallery-grid1">


                    <img src="{{url('assets/website/images/websites.gif')}}" alt=" " class="img-fluid serviceImg box20" />
                    <div class="p-mask">
                        <h4>Web Development</h4>
                        <p>Web applications enable your power users and business professionals to complete complex tasks faster.</p>
                    </div>
                </div>
            </li>
            <li>
                <h5 style="margin-left: 50px;"><span>API Programming</span></h5>
                <div class="gallery-grid1">
                    <img src="{{url('assets/website/images/api.gif')}}" alt=" " class="img-fluid serviceImg box20" />
                    <div class="p-mask">
                        <h4>API Programming</h4>
                        <p>clean code of Rest Laravel Api</p>
                    </div>
                </div>
            </li>
            <li>
                <h5 style="margin-left: 50px;"><span>Fixed Problems</span></h5>
                <div class="gallery-grid1">
                    <img src="{{url('assets/website/images/debug.gif')}}" alt=" " class="img-fluid serviceImg box20" />
                    <div class="p-mask">
                        <h4>Fixed Problems</h4>
                        <p>Debug code & Fixed website Problems.</p>
                    </div>
                </div>
            </li>

            <li>
                <h5 style="margin-left: 50px;"><span>CMS & E-Commerce</span></h5>
                <div class="gallery-grid1">
                    <img src="{{url('assets/website/images/ecommerce2.gif')}}" alt=" " class="img-fluid serviceImg box20" />
                    <div class="p-mask">
                        <h4>CMS & E-Commerce Platform</h4>
                        <p>Custom CMS & E-Commerce Platform For you</p>
                    </div>
                </div>
            </li>


        </ul>

    </div>
</div>
<!-- //carousel -->
<!-- timeline -->
<section class="timeline-w3pvt" id="skills">
    <div class="container">
        <div class="row">
            <div id="timeline">
                <div class="row timeline-movement timeline-movement-top">
                    <div class="timeline-badge timeline-future-movement">
                        <p>Skills</p>
                    </div>
                </div>
                <div class="row timeline-movement">
                    <div class="timeline-badge center-left">

                    </div>
                    <div class="col-lg-6  timeline-item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="timeline-panel credits  anim animate fadeInLeft">
                                    <div class="timeline-panel-ul clearfix">
                                        <div class="lefting-wrap">
                                            <ul>
                                                <li class="img-wraping"><a href="#"><img src="{{url('assets/website/images/php.jpg')}}" class="img-fluid"
                                                                                         alt="user-image" /></a></li>
                                            </ul>
                                        </div>
                                        <div class="righting-wrap">
                                            <ul>
                                                <li><a href="#" class="importo">-Programming using (Laravel Framework , Wordpress). </a></li>
                                                <li><span class="causale " style="color:#000; font-weight: 600;">
                                                        </span> </li>
                                                <li><a href="#" class="importo" style="color: #ffc107;">-Programming using language (php , php oop)</a> </li>
                                                <li>
                                                    <p><small class="text-muted">
                                                        </small></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row timeline-movement">
                    <div class="timeline-badge center-right">
                    </div>
                    <div class="offset-lg-6 col-lg-6  timeline-item">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-12">
                                <div class="timeline-panel debits  anim animate  fadeInRight">
                                    <div class="timeline-panel-ul clearfix">
                                        <div class="lefting-wrap">
                                            <ul>
                                                <li class="img-wraping"><a href="#"><img src="{{url('assets/website/images/mysql.png')}}" class="img-fluid"
                                                                                         alt="user-image" /></a></li>
                                            </ul>
                                        </div>
                                        <div class="righting-wrap">
                                            <ul>
                                                <li><a href="#" class="importo" style="color: #c51f1a">-Programing Rest Laravel API.</a></li>
                                                <li><a href="#" class="importo" style="color: #ffc107;">-Design mysql databases. </a> </li>
                                                <li><a href="#" class="importo" style="color:#0d82bf;">- Programing content Management System (CMS) . </a> </li>
                                                <p><small class="text-muted"><span class=""></span>
                                                    </small></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row timeline-movement">
                    <div class="timeline-badge center-left">
                    </div>
                    <div class="col-lg-6  timeline-item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="timeline-panel credits  anim animate  fadeInLeft">
                                    <div class="timeline-panel-ul  clearfix">
                                        <div class="lefting-wrap">
                                            <ul>
                                                <li class="img-wraping"><a href="#"><img src="{{url('assets/website/images/paypal.png')}}" class="img-fluid"
                                                                                         alt="user-image" /></a></li>
                                            </ul>
                                        </div>
                                        <div class="righting-wrap">
                                            <ul>
                                                <li><a href="#" class="importo" style="color:#0d82bf;">- Programing E-Commerce Systems . </a> </li>
                                                <li><a href="#" class="importo">-Integrate Payment Gateway Paypal , Visa and MasterCard. </a></li>
                                                <li><a href="#" class="importo" style="color: #ffc107;">-Debug Of code and Fixed Problems </a> </li>

                                                <li>
                                                    <p><small class="text-muted"><span class=""></span>
                                                        </small></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row timeline-movement timeline-movement-top">
                    <div class="timeline-badge timeline-future-movement">
                        <p>more</p>
                    </div>
                </div>
                <div class="row timeline-movement">
                    <div class="timeline-badge center-right">
                    </div>
                    <div class="offset-lg-6 col-lg-6  timeline-item">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-11">
                                <div class="timeline-panel debits  anim animate  fadeInRight">
                                    <div class="timeline-panel-ul clearfix">
                                        <div class="lefting-wrap">
                                            <ul>
                                                <li class="img-wraping"><a href="#"><img src="{{url('assets/website/images/zoom.jpg')}}" class="img-fluid"
                                                                                         alt="user-image" /></a></li>
                                            </ul>
                                        </div>
                                        <div class="righting-wrap">
                                            <ul>
                                                <li><a href="#" class="importo" style="color: #0d82bf">-Integreated with(Wiziq,Facebook,Google,twitter,
                                                        Zoom,WhatsApp,Alexa)</a></li>
                                                <li><a href="#" class="importo" style="color: #ffc107;">-Using Git On Github and Bitbucket</a> </li>
                                                <li>
                                                    <p><small class="text-muted"><span class=""></span>
                                                        </small></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row timeline-movement">
                    <div class="timeline-badge center-left">

                    </div>
                    <div class="col-lg-6  timeline-item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="timeline-panel credits  anim animate  fadeInLeft">
                                    <div class="timeline-panel-ul clearfix">
                                        <div class="lefting-wrap">
                                            <ul>
                                                <li class="img-wraping"><a href="#"><img src="{{url('assets/website/images/html2.jpg')}}" class="img-fluid"
                                                                                         alt="user-image" /></a></li>
                                            </ul>
                                        </div>
                                        <div class="righting-wrap">
                                            <ul>
                                                <li><a href="#" class="importo" style="color:#0d82bf;">-Programming using (Vue Framework). </a> </li>
                                                <li><a href="#" class="importo">-Design using language (html, html5, css, css3, Bootstrap)  </a></li>
                                                <li>
                                                    <p><small class="text-muted"><span class=""></span>
                                                        </small></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //timeline -->
<!-- portfolio -->
<section class="wthree-row w3-gallery cliptop-portfolio-wthree" id="portfolio">
    <div class="container">
        <div class="title-sec-w3layouts_pvt">
            <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
            <h4 class="w3layouts_pvt-head text-white">latest Works</h4>
            <p class="title-text text-capitalize" style="font-weight: bold">Be the next!</p>
        </div>
        <div class="row blog pt-5 mt-md-3">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1" ></li>
                        <li data-target="#blogCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex team-agile-row">
                                <div class="col-lg-4 col-md-6 w3-slide-grid">
                                    <h5><a href="#">Abqri</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/abqri.jpg')}}" alt="" class="img-fluid imgResize" />
                                        <div class="box-content">
                                            <h3 class="title">Abqri Website</h3>
                                            <span class="post text-capitalize"></span>
                                        </div>
                                        <ul class="icon">
                                            <li>
                                                <a target="_blank" href="https://www.abqri.com">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-md-0 mt-4  w3-slide-grid">
                                    <h5><a href="#">Radio Bethlehem 2000</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/rb2000.jpg')}}" alt="" class="img-fluid imgResize" />
                                        <div class="box-content">
                                            <h3 class="title">Radio Bethlehem 2000 Agency</h3>
                                            <span class="post text-capitalize">News</span>
                                        </div>
                                        <ul class="icon">

                                            <li>
                                                <a target="_blank" href="https://www.rb2000.ps/">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 w3-slide-grid">
                                    <h5><a href="#">Genev Company</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/genev.jpg')}}" alt="" class="img-fluid imgResize" />
                                        <div class="box-content">
                                            <h3 class="title">Genev</h3>
                                            <span class="post text-capitalize"></span>
                                        </div>
                                        <ul class="icon">
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.item-->
                        <div class="carousel-item ">
                            <div class="d-flex team-agile-row">
                                <div class="col-lg-4 col-md-6  w3-slide-grid">
                                    <h5><a href="#">One Building</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/building.jpg')}}" alt="" class="img-fluid imgResize" />
                                        <div class="box-content">
                                            <h3 class="title">One Building</h3>
                                            <span class="post"></span>
                                        </div>
                                        <ul class="icon">

                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-md-0 mt-4  w3-slide-grid">
                                    <h5><a href="#">Arabylink</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/arabylink.jpg')}}" alt="" class="img-fluid"/>
                                        <div class="box-content">
                                            <h3 class="title">Arabylink</h3>
                                            <span class="post"></span>
                                        </div>
                                        <ul class="icon">
                                            <li>
                                                <a target="_blank" href="https://beta.arabylink.com">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4  w3-slide-grid">
                                    <h5><a href="#">Gupscn</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/gupscn.jpg')}}" alt="" class="img-fluid imgResize" />
                                        <div class="box-content">
                                            <h3 class="title">Gupscn</h3>
                                            <span class="post"></span>
                                        </div>
                                        <ul class="icon">

                                            <li>
                                                <a target="_blank" href="http://www.gupscn.com">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="carousel-item">
                            <div class="d-flex team-agile-row">
                                <div class="col-lg-4 col-md-6  w3-slide-grid">
                                    <h5><a href="#">Doros Vip</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/dorosvip.png')}}"  alt="" class="img-fluid imgResize" />
                                        <div class="box-content">
                                            <h3 class="title">Doros Vip</h3>
                                            <span class="post"></span>
                                        </div>
                                        <ul class="icon">

                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-md-0 mt-4  w3-slide-grid">
                                    <h5><a href="#">Holon Translation</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/holontrans.png')}}" style="height:222px" alt="" class="img-fluid"/>
                                        <div class="box-content">
                                            <h3 class="title">Holon Translation</h3>
                                            <span class="post"></span>
                                        </div>
                                        <ul class="icon">
                                            <li>
                                                <a target="_blank" href="https://holontranslation.com">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4  w3-slide-grid">
                                    <h5><a href="#">Basma</a></h5>
                                    <div class="box20">
                                        <img src="{{url('assets/website/images/bassma.png')}}" alt="" class="img-fluid imgResize" />
                                        <div class="box-content">
                                            <h3 class="title">Basma</h3>
                                            <span class="post"></span>
                                        </div>
                                        <ul class="icon">

                                            <li>
                                                <a target="_blank" href="http://basmaorg.org">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->

            </div>
        </div>
    </div>

    <!-- //gallery container -->
</section>
<!-- //portfolio -->
<!-- testimonials -->
<div class="testimonials" id="testi" style="height: 400px;">
    <div class="container">
        <div class="title-sec-w3layouts_pvt">
            <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
            <h4 class="w3layouts_pvt-head text-red">Customers opinions</h4>
            <p class="title-text text-capitalize"></p>
        </div>


        <br><br>
        <div class="callbacks_container">

            <ul class="rslides" id="slider3">

                <li>
                    <div class="row testi-w3pvt">
                        <div class="col-lg-6 col-md-6">
                            <div class="testi-agile">
                                <p>
                                    We are appreciative and pleased with Mohmd Zamli’ creativity, timeliness, and quality of work.
                                    <br>                and was around to correct any issues even after the project completed
                                </p>
                            </div>
                            <div class="testi-pos">

                                <h4>Ahmed Saffi</h4>
                                <span>Director</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="testi-agile">
                                <p>
                                    The fact that dealing with Mohmd Zamli was very comfortable, fast and quality and we have received more than fantastic services at competitive prices  & I look forward to working with him again
                                </p>
                            </div>
                            <div class="testi-pos">

                                <h4>Karam Amin</h4>
                                <span>Website Manger</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row testi-w3pvt">
                        <div class="col-lg-6 col-md-6">
                            <div class="testi-agile">
                                <p>
                                    Being the owner of a startup is difficult enough without having to learn the technical nuances of a CMS.
                                    Mohmd Zamli helped our company to build a new ecommerce website that deals with business-to-business and business-to-consumers.

                                </p>
                            </div>
                            <div class="testi-pos">

                                <h4>Arim John</h4>
                                <span>E-Commerce Owner</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="testi-agile">
                                <p>
                                    Mohmd Zamli  was outstanding. He was able to take the idea I had in my head and turn it into an app. I am thrilled with the result. He was very easy to talk to and communicated every step of the way. I would highly recommend him.

                                </p>
                            </div>
                            <div class="testi-pos">

                                <h4>Omar Yusuf</h4>
                                <span>Company Manger</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- //testimonials -->
<!-- contact -->
<div class="section" id="contact" >
    <div class="map-grid clipbottom-wthree">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d399190.19666497776!2d34.198686244674384!3d31.525627925640226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f054e542767%3A0x7ff98dc913046392!2sGaza!5e0!3m2!1sen!2s!4v1544218191085"
                style="border:0" allowfullscreen></iframe>
        <div class="w3layouts-contact-pos  clipbottom-wthree">
            <div class="w3layouts-contact-pos-grid" style="@if ($errors->any()) margin-top: -120px  @endif">
                <div class="title-sec-w3layouts_pvt">
                    <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
                    <h4 class="w3layouts_pvt-head text-white">contact me</h4>
                    <p class="title-text text-capitalize" style="font-weight: bold">Feel free to contact me</p>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                {!! Form::open(['url'=>['/contact'],'method'=>'post' , 'class' => 'contact-wthree']) !!}

                {{ csrf_field() }}
                <div class="form-group d-flex">
                    <label>
                        <span class="fa fa-user text-white" aria-hidden="true"></span>
                    </label>
                    <input class="form-control" type="text" placeholder="Enter your name..." name="name"
                           required="">
                </div>
                <div class="form-group d-flex">
                    <label>
                        <span class="fa fa-envelope text-white" aria-hidden="true"></span>
                    </label>
                    <input class="form-control" type="email" placeholder="Enter your email..." name="email"
                           required="">
                </div>
                <div class="form-group d-flex">
                    <label>
                        <span class="fa fa-edit text-white"></span>
                    </label>
                    <input class="form-control" type="text" placeholder="Subject" name="subject" required="">
                </div>
                <div class="form-group">
                            <textarea class="form-control" rows="5" id="contact-comment" name="message" placeholder="Your message"
                                      required></textarea>
                </div>
                <div class="contact-btn">
                    <button type="submit" class="btn btn-block text-uppercase">Submit</button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<section class="contact-details">
    <div class="container-fluid px-0">
        <div class="row m-0 contact-row-w3pvt py-5">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center p-0">
                        <span class="field-icon fa fa-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-10 cd-grid">
                        <ul>
                            <li>+972599959594</li>
                            <li>+972569959594</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-lg-0 my-4">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center p-0">
                        <span class="field-icon fa fa-map-marker" aria-hidden="true"></span>
                    </div>
                    <div class="col-10 cd-grid">
                        <p>Aljwazat St. Rafah , Gaza<br>
                            Palestine.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center p-0">
                        <span class="field-icon fa fa-envelope-o fa-lg" aria-hidden="true"></span>
                    </div>
                    <div class="col-10 cd-grid">
                        <ul>
                            <li>
                                <a href="mailto:info@example.com">info@mohmdzamli.com</a>
                            </li>
                            <li>
                                <a href="mailto:info@example.com">zamlimohmd@gmail.com</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contact -->
<!-- social -->
<section class="social_w3ls_pvt position-relative py-5">
    <div class="container py-lg-5">
        <ul class="py-4">
            <li><a target="_blank" href="https://www.facebook.com/MohmdZamli"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
            <li><a target="_blank" href="https://twitter.com/ZamliMohmd"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
            <li><a target="_blank" href="https://plus.google.com/u/1/111554850434411371332"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/mohmd-zamli-5948b6167/"><span class="fa fa-linkedin"
                                                                                                   aria-hidden="true"></span></a></li>
            <li><a target="_blank" href="https://github.com/MohmdZamli"><span class="fa fa-github" aria-hidden="true"></span></a></li>
        </ul>
    </div>
</section>
<!-- //social -->
<!-- footer -->
<footer>
    <div class="container">
        <div class="cpy-right text-center">
            <p class="text-white">© {{date('Y')}} Mohmd Zamli. All rights reserved</p>
        </div>
    </div>
</footer>
<!-- //footer -->
<!-- js -->
{!! Html::script('assets/website/js/jquery-2.2.3.min.js') !!}

<!-- //js -->
<!--  menu toggle -->
{!! Html::script('assets/website/js/menu.js') !!}

<!-- testimonials  Responsiveslides -->
{!! Html::script('assets/website/js/responsiveslides.min.js') !!}

<script>
    // You can also use"$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- //testimonials  Responsiveslides -->
<!-- gallery -->
{!! Html::script('assets/website/js/jquery.picEyes.js') !!}

<script>
    $(function () {
        //picturesEyes($('.demo li'));
        $('.demo li').picEyes();
    });
</script>
<!-- //gallery -->
<!-- Scrolling Nav JavaScript -->
{!! Html::script('assets/website/js/scrolling-nav.js') !!}
{!! Html::script('assets/website/js/timeline.js') !!}
{!! Html::script('assets/website/js/move-top.js') !!}
{!! Html::script('assets/website/js/easing.js') !!}

<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
{!! Html::script('assets/website/js/SmoothScroll.min.js') !!}

<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!! Html::script('assets/website/js/bootstrap.min.js') !!}
{!! Html::script('assets/message/js/sweetalert.min.js') !!}
</body>

</html>
