<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fatih Karagümrük Spor Kulübü</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">  <image id="image0" width="128" height="128" x="0" y="0"
                                                                                                                                                                                                                                                                       href="data:image/png;base64,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
ZVJlYWR5ccllPAAAAABJRU5ErkJggg==" />
</svg>

                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Tc Kimlik Numarası</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="tc" placeholder="" name="tc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">İsim</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div class="form-group">
                                        <label for="name">İsim</label>
                                        <input type="text" class="form-control" id="name" placeholder="" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Soyisim</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <input type="text" class="form-control" id="name" placeholder="" name="name">

                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Mevki</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <input type="text" class="form-control" id="position" placeholder="" name="position">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Karagümrük Spor Kulübü 2022
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
