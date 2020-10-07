<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Control API</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(1, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="text-gray-600 dark:text-gray-400">User Control API</h1>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white underline">
                                Description
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <p>This is a Back-end API for User Registration.</p>
                                <p>You can create, list, update and show users, with a JSON response.</p>
                                <p>A PHP Laravel 8 API, with JWT tokenizer to keep data safe from invasors and with MVC
                                    structure.</p>
                                <p>The AdminController is responsable for any function protected from another logged users,
                                    for example, delete and create users, as same a list of all users registered and all
                                    logs.</p>
                                <p>UserController contains another functions less sensitive, like your own data and update
                                    your own register.</p>
                                <p>For example, has a admin user on database with email "professorx@user.com" with pass
                                    "senha123" and a common user register with email "genos@user.com" with same pass
                                    "senha123".</p>
                                <p>So, this is it...</p>
                                <p>Thanks people!!!</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white underline">
                                Getting started
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <ul>
                                    <li class="has-line-data" data-line-start="30" data-line-end="32">
                                        <p class="has-line-data" data-line-start="30" data-line-end="31">First you need
                                            clone this repository!</p>
                                    </li>
                                    <li class="has-line-data" data-line-start="32" data-line-end="33">
                                        <p class="has-line-data" data-line-start="32" data-line-end="33">To install
                                            dependencies:</p>
                                    </li>
                                </ul>
                                <blockquote>
                                    <p class="has-line-data" data-line-start="33" data-line-end="34">$ composer install</p>
                                </blockquote>
                                <ul>
                                    <li class="has-line-data" data-line-start="35" data-line-end="36">.Env configuration:
                                    </li>
                                </ul>
                                <blockquote>
                                    <p class="has-line-data" data-line-start="36" data-line-end="37">Rename .env.example to
                                        .env.</p>
                                </blockquote>
                                <ul>
                                    <li class="has-line-data" data-line-start="38" data-line-end="39">Database
                                        Configuration
                                    </li>
                                </ul>
                                <blockquote>
                                    <p class="has-line-data" data-line-start="39" data-line-end="40">The .sqlite file is
                                        included with repository, on
                                        “/database” direcotry</p>
                                </blockquote>
                                <ul>
                                    <li class="has-line-data" data-line-start="41" data-line-end="42">Run the project:</li>
                                </ul>
                                <blockquote>
                                    <p class="has-line-data" data-line-start="42" data-line-end="43">$ php artisan serve</p>
                                </blockquote>
                                <ul>
                                    <li class="has-line-data" data-line-start="45" data-line-end="46">Or… to consume this
                                        API just use the following
                                        heroku link with the routes defined bellow:
                                    </li>
                                </ul>
                                <blockquote>
                                    <p class="has-line-data" data-line-start="46" data-line-end="47"><a
                                            href="https://usercontrolgabebruno.herokuapp.com/">https://usercontrolgabebruno.herokuapp.com/</a>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white underline">
                                Technology
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <p class="has-line-data" data-line-start="20" data-line-end="21">Here are the technologies
                                    used in this project.</p>
                                <ul>
                                    <li class="has-line-data" data-line-start="22" data-line-end="23">Composer (For
                                        dependencies)
                                    </li>
                                    <li class="has-line-data" data-line-start="23" data-line-end="24">Laravel 8</li>
                                    <li class="has-line-data" data-line-start="24" data-line-end="25">SQLite3</li>
                                    <li class="has-line-data" data-line-start="25" data-line-end="26">JWT Authentication
                                        1.0.1
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white underline">How to
                                use
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <pre>
    The DB was previously created and with some data,
    but you can run
    $ php artisan migrate:fresh and
    $ php artisan db:seed
    on you terminal to recreate the tables and
    populate with some data.
                                </pre>
                                <p class="has-line-data" data-line-start="71" data-line-end="72"><strong>The parameters for
                                        new users are:</strong></p>
                                <pre>
    'name'           -&gt; string
    'email'          -&gt; unique, string
    'phone'          -&gt; string
    'address'        -&gt; string
    'cpf'            -&gt; unique, string
    'permission'     -&gt; int
    'password'       -&gt; bcrypt('string')
                                </pre>
                                <p class="has-line-data" data-line-start="81" data-line-end="82"><em>The fileds are just a
                                        string, without any
                                        verification in this first version.</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white underline">
                                Routes
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"><p class="has-line-data"
                                                                                          data-line-start="53"
                                                                                          data-line-end="54">
                                    <h2><strong>The routes defined are:</strong></h2></p>

                                <pre>
    - api/auth/login         POST - This route receive an email and password to login.
                                </pre>
                                <p class="has-line-data" data-line-start="57" data-line-end="58"><strong>Routes for any
                                        logged user:</strong></p>
                                <pre>
    - api/user/me            GET - Get you own user data.
    - api/user/update        PUT - Update your own profile.
    - api/auth/logout        POST - Logout user.
                                </pre>
                                <p class="has-line-data" data-line-start="62" data-line-end="63"><strong>Routes for admin
                                        (Admin is defined by
                                        “permission = 1” on table users):</strong></p>
                                <pre>
    - api/user/{id}          GET - Get all data from any user by id.
    - api/user               GET - List all users in database.
    - api/logs               GET - List all logs registered on database.
    - api/user/update/{id}   PUT - Update an user by your id.
    - api/user/delete/{id}   DELETE - Destroy users by id parameter.
    - api/user/store         POST - Create new user.
                                 </pre>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white underline">
                                Other Information
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <h2> Links</h2>
                                <ul>
                                    <li class="has-line-data" data-line-start="85" data-line-end="86">Link of deployed API: <a
                                            href="https://usercontrolgabebruno.herokuapp.com">https://usercontrolgabebruno.herokuapp.com</a></li>
                                    <li class="has-line-data" data-line-start="86" data-line-end="88">Repository: <a
                                            href="https://github.com/gabebruno/UserControl">https://github.com/gabebruno/UserControl</a></li>
                                </ul>
                                <h2 class="code-line" data-line-start=88 data-line-end=89><a id="Versioning_88"></a>Versioning</h2>
                                <p class="has-line-data" data-line-start="90" data-line-end="91">1.0.0.0</p>
                                <h2 class="code-line" data-line-start=93 data-line-end=94><a id="Authors_93"></a>Authors</h2>
                                <ul>
                                    <li class="has-line-data" data-line-start="95" data-line-end="97"><strong>Gabriel Bruno Almeida</strong>: @gabebruno
                                        (<a href="https://github.com/gabebruno">https://github.com/gabebruno</a>)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>

