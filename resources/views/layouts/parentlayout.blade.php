<html>
<head>
    <title>test </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-----------------------THEME FILES------------------------>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>
<body>
@section('sidebar')
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="http://127.0.0.1:8000/" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Accès Rapide</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="component-alert.html">Emploi du temps</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-badge.html">Cahier de textes</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-breadcrumb.html">Absences</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-button.html">Comportement</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-card.html">Notes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Collaboratif</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="http://127.0.0.1:8000/Forum">Forum</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="http://127.0.0.1:8000/cours">Cours et documents</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="form-layout.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Messagerie</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="form-layout.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Agenda de l'établissement</span>
                        </a>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Pédagogie</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="form-element-input.html">Ressources Pédagogiques</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-input-group.html">Cahier de textes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Vie Scolaire</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="form-editor-quill.html">Absences</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-editor-ckeditor.html">Comportement</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-pentagon-fill"></i>
                            <span>Evaluation</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="ui-widgets-chatbox.html">Compétences</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="ui-widgets-pricing.html">Notes</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
@show
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    @yield('content')
</div>
@section('footer')
    <script src="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendors/apexcharts/apexcharts.js')}}"></script>
   <script src="{{asset('js/dashboard.js')}}"></script>--}}
    <script src="{{asset('js/main.js')}}"></script>
@show
</body>
</html>