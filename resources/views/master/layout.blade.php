<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>{{ env('APP_NAME', 'Laravel') }}</title> -->
    <title>@yield('title')</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
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

        @media (min-width:640px) {
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

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
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

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <!-- ================= Navbar ================= -->
    <div class="bg-white d-flex align-items-center fixed-top shadow px-2" style="min-height: 56px; z-index: 5">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-around">
                <!-- logo -->
                <div class="col d-flex align-items-center">
                    <div class="ms-2 justify-content-lg-start">
                        <!-- mobile -->
                        <span class="d-lg-none">
                            <div style="min-height: 40px">
                                <a class="navbar-brand">Navbar</a>
                            </div>
                        </span>
                        <!-- desktop -->
                        <span class="d-none d-lg-block">
                            <div style="min-height: 40px; min-width: 230px">
                                <a class="navbar-brand">Navbar</a>
                            </div>
                        </span>
                    </div>
                </div>
                <!-- search -->
                <div class="col d-flex align-items-center">
                    <!-- search bar -->
                    <div class="input-group ms-2 justify-content-end justify-content-lg-center" type="button">
                        <!-- mobile -->
                        <span class="input-group-prepend d-lg-none" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-circle" style="min-height: 40px">
                                <i class="fas fa-search text-muted"></i>
                            </div>
                        </span>
                        <!-- desktop -->
                        <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <p class="m-0 fs-7 text-muted">Search...</p>
                            </div>
                        </span>
                        <!-- search menu -->
                        <ul class="dropdown-menu overflow-auto border-0 shadow p-3" aria-labelledby="searchMenu" style="width: 20em; max-height: 600px">
                            <!-- search input -->
                            <li>
                                <input type="text" class="rounded-pill border-0 bg-gray dropdown-item" placeholder="Search..." autofocus />
                            </li>
                            <!-- search 1 -->
                            <li class="my-4">
                                <div class="alert fade show dropdown-item p-1 m-0 d-flex align-items-center justify-content-between" role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </li>
                            <!-- search 2 -->
                            <li class="my-4">
                                <div class="alert fade show dropdown-item p-1 m-0 d-flex align-items-center justify-content-between" role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- menus -->
                <div class="col d-flex align-items-center justify-content-end justify-content-lg-end">
                    <!-- add -->
                    <div class="mx-4">
                        <button type="button" class="btn px-4">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- notifications -->
                    <div class="mx-4">
                        <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2" style="width: 38px; height: 38px" type="button" id="notMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="fas fa-bell"></i>
                        </div>
                        <!-- notifications dd -->
                        <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notMenu" style="width: 23em; max-height: 600px; overflow-y: auto">
                            <!-- header -->
                            <li class="p-1">
                                <div class="d-flex justify-content-between">
                                    <h2>Notifications</h2>
                                    <div>
                                        <i class="fas fa-ellipsis-h pointer p-2 rounded-circle bg-gray" type="button" data-bs-toggle="dropdown"></i>
                                        <!-- news -->
                                        <div class="d-flex justify-content-between mx-2">
                                            <h5>New</h5>
                                            <a href="#" class="text-decoration-none">See All</a>
                                        </div>
                                        <!-- news 1 -->
                            <li class="my-2 p-1">
                                <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                                    <div class="d-flex align-items-center justify-content-evenly">
                                        <div class="p-2">
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                                        </div>
                                        <div>
                                            <p class="fs-7 m-0">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Harum unde amet at nulla quae porro.
                                            </p>
                                            <span class="fs-7 text-primary">about an hour ago</span>
                                        </div>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary"></i>
                                </a>
                            </li>
                            <!-- news 2 -->
                            <li class="my-2 p-1">
                                <a href="#" class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                                    <div class="d-flex align-items-center justify-content-evenly">
                                        <div class="p-2">
                                            <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                                        </div>
                                        <div>
                                            <p class="fs-7 m-0">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Harum unde amet at nulla quae porro.
                                            </p>
                                            <span class="fs-7 text-primary">about an hour ago</span>
                                        </div>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- secondary menu -->
                    <div class="mx-4">
                        <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2" type="button" id="secondMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <img src="https://source.unsplash.com/collection/happy-people" class="rounded-circle me-2" alt="avatar" style="width: 38px; height: 38px; object-fit: cover" />
                            <!-- <i class="fas fa-caret-down"></i> -->
                        </div>
                        <!-- secondary menu dd -->
                        <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="width: 23em">
                            <!-- avatar -->
                            <li class="dropdown-item p-1 rounded d-flex">
                                <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover" />
                                <div>
                                    <p class="m-0">Cat</p>
                                    <p class="m-0 text-muted">cat@gmail.com</p>
                                </div>
                            </li>
                            <hr />
                            <!-- options -->
                            <!-- 1 -->
                            <li class="dropdown-item p-1 my-3 rounded" type="button">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <div class="d-flex" data-bs-toggle="dropdown">
                                            <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                                <p class="m-0">Change Profile</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- 2 -->
                            <li class="dropdown-item p-1 my-3 rounded" type="button">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <div class="d-flex" data-bs-toggle="dropdown">
                                            <i class="fas fa-question-circle bg-gray p-2 rounded-circle"></i>
                                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                                <p class="m-0">Help & Support</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <hr />
                            <!-- 3 -->
                            <li class="dropdown-item p-1 my-3 rounded" type="button">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="#" class="d-flex text-decoration-none text-dark">
                                            <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                            <div class="ms-3 d-flex justify-content-between align-items-center w-100">
                                                <p class="m-0">Log Out</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>