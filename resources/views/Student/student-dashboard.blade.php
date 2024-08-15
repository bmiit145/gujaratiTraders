<!doctype html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Student Dashboard</title>

    <!-- Favicon -->

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"

        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"

        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>

</head>



<body>



    <aside class="sidebar sidebar-default sidebar-rounded ">

        <div class="sidebar-header d-flex align-items-center justify-content-start">

            <a href="../dashboard/index.html" class="sidebar-brand dis-none align-items-center justify-content-center">

                <img src="{{ asset('images/Header-logo.png') }}" alt="" class="img-fluid">

            </a>

            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">

                <i class="icon">

                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>

                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"

                            stroke-width="1.5"></path>

                    </svg>

                </i>

            </div>

        </div>





        <div class="sidebar-body p-0 data-scrollbar">

            <ul class="sidebar-list-main">

                <li>

                    <a href="#">

                        <div class="d-flex align-items-center">

                            <svg width="25" viewBox="0 0 25 25" fill="#fff" xmlns="http://www.w3.org/2000/svg"

                                class="mx-2">

                                <path

                                    d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"

                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"

                                    stroke-linejoin="round"></path>

                            </svg>

                            <div class="ps-3">Dashboard</div>

                        </div>

                    </a>

                </li>

                @auth

                    @if (Auth::user()->is_role != 2)

                        <li>

                            <a href="{{ route('admin.student.list') }}">

                                <div class="d-flex align-items-center">

                                    <svg width="25" viewBox="0 0 25 25" fill="none"

                                        xmlns="http://www.w3.org/2000/svg" class="mx-2">

                                        <path

                                            d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"

                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"

                                            stroke-linejoin="round"></path>

                                    </svg>

                                    <div class="ps-3">Students</div>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="{{ route('admin.course') }}">

                                <div class="d-flex align-items-center">

                                    <svg width="25" viewBox="0 0 25 25" fill="none"

                                        xmlns="http://www.w3.org/2000/svg" class="mx-2">

                                        <path

                                            d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"

                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"

                                            stroke-linejoin="round"></path>

                                    </svg>

                                    <div class="ps-3">Courses</div>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="{{ route('admin.youtube_video') }}">

                                <div class="d-flex align-items-center">

                                    <svg width="25" viewBox="0 0 25 25" fill="none"

                                        xmlns="http://www.w3.org/2000/svg" class="mx-2">

                                        <path

                                            d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"

                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"

                                            stroke-linejoin="round"></path>

                                    </svg>

                                    <div class="ps-3">Youtube Videos</div>

                                </div>

                            </a>

                        </li>

                    @endif

                @endauth

                <li>

                    <a href="{{ route('student.student_all_video') }}">

                        <div class="d-flex align-items-center">

                            <i class="fa-solid fa-video px-2 fs-5"></i>

                            <div class="ps-3">Open Videos</div>

                        </div>

                    </a>

                </li>

            </ul>

        </div>

    </aside>





    <main class="main-content">

        <div>

            <!--Nav Start-->

            <nav class="navbar navbar-expand-sm bg-body-tertiary" style="border-bottom: 1px solia black;">

                <div class="container-fluid">

                    <div class="d-flex">

                        <div class="sidebar-toggle sidebar-toggle-2" data-toggle="sidebar" data-active="true">

                            <i class="icon">

                                <svg width="20px" height="20px" viewBox="0 0 30 30">

                                    <path fill="currentColor"

                                        d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">

                                    </path>

                                </svg>

                            </i>

                        </div>

                        <div class="px-2 fs-5"><b>Student Dashboard</b></div>

                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"

                        aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">

                        <div class="d-flex align-items-center px-3 py-2 w-100">



                            <div class="d-flex justify-content-end ms-auto">

                              <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">

                                    <path d="M17.9028 8.85107L13.4596 12.4641C12.6201 13.1301 11.4389 13.1301 10.5994 12.4641L6.11865 8.85107" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>

                                </svg>

                                <svg width="25" viewBox="0 0 25 25" fill="none"

                                    xmlns="http://www.w3.org/2000/svg" class="me-3">

                                    <path

                                        d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"

                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"

                                        stroke-linejoin="round"></path>

                                </svg>

                            </div>



                            <div class="d-flex align-items-center">

                                <div style="width: 50px;height: 50px;" class="me-3">

                                    <img src="https://st3.depositphotos.com/15648834/17930/v/450/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"

                                        alt="" class="img-fluid">

                                </div>

                                <div>

                                    <div class="fw-bold">Name</div>

                                    <div role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        <div class="dropdown">

                                            <div

                                                class="dropdown-toggle text-dark text-decoration-none super-admin-header-dropdown">

                                                {{ auth()->user()->full_name }}

                                            </div>

                                            <ul class="dropdown-menu">

                                                <li>

                                                    <a href="{{ route('student.profile') }}"

                                                        onclick="event.preventDefault(); document.getElementById('profile').submit();"

                                                        class='dropdown-item'>

                                                        Profile

                                                    </a>

                                                    <form id="profile" action="{{ route('student.profile') }}"

                                                        method="post" class="d-none">

                                                        @csrf

                                                    </form>

                                                </li>



                                                <li>

                                                    <a href="{{ route('logout_function') }}"

                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"

                                                        class='dropdown-item'>

                                                        Logout

                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout_function') }}"

                                                        method="post" class="d-none">

                                                        @csrf

                                                    </form>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </nav>

        </div>

        @yield('content')

    </main>



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <script src="{{ asset('js/script.js') }}"></script>

    
    <script>
        
        document.addEventListener('keydown', function(event) {
  if (event.metaKey && event.key === 'g') {
    event.preventDefault();
    console.log('Ctrl+G is disabled on this page.');
  }
});
    </script>

</body>

</html>

