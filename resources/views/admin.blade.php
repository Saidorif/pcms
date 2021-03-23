<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixeel CMS</title>
    <link rel="stylesheet" href="{{asset('admin/assets/font/iconsmind-s/css/iconsminds.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/font/simple-line-icons/css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/fullcalendar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/datatables.responsive.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/glide.core.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/bootstrap-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/bootstrap-datepicker3.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/component-custom-switch.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/quill.snow.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/quill.bubble.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}" />
    <script src="{{asset('admin/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
</head>
<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search">
                <ul class="list-inline m-0 text-center">
                    <a href="/lang/en">ENGLISH</a> /
                    <a href="/lang/oz">O'ZBEK</a>
                </ul>
            </div>
        </div>


        <a class="navbar-logo" href="\">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                         data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                            <img alt="Profile Picture" src="/admin/assets/img/profiles/l-2.jpg" />
                        </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="{{route('dashboard')}}">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('page.index')}}">
                            <i class="iconsminds-blackboard"></i> Pages
                        </a>
                    </li>
                    <li>
                        <a href="{{route('article.index')}}">
                            <i class="iconsminds-digital-drawing"></i> Articles
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsminds-three-arrow-fork"></i> Menu
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                           aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                        </a>
                        <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Menu.Default.html">
                                        <i class="simple-icon-control-pause"></i> <span
                                            class="d-inline-block">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Subhidden.html">
                                        <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                            class="d-inline-block">Subhidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Hidden.html">
                                        <i class="simple-icon-control-start mi-hidden"></i> <span
                                            class="d-inline-block">Hidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Mainhidden.html">
                                        <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                            class="d-inline-block">Mainhidden</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                           aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                        </a>
                        <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                       aria-expanded="true" aria-controls="collapseMenuLevel2"
                                       class="rotate-arrow-icon collapsed">
                                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                    </a>
                                    <div id="collapseMenuLevel2" class="collapse">
                                        <ul class="list-unstyled inner-level-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                           aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                        </a>
                        <div id="collapseMenuDetached" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid">
        @yield('content')
        </div>
    </main>
    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">&copy; Copyright {{date('Y')}}. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="http://pixeel.uz" target="_blank" class="btn-link">PIXEEL.UZ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{asset('admin/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/progressbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/select2.full.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/nouislider.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/Sortable.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/mousetrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/glide.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dore.script.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/quill.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/ckeditor5-build-classic/ckeditor.js')}}"></script>
    <script src="{{asset('admin/assets/js/scripts.js')}}"></script>
</body>
</html>
