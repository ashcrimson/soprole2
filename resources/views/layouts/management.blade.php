<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soprole | @yield('title')</title>

    @stack('extra-css')

    <!-- Favi icon --> 
    <link href="https://www.soprole.cl//content/dam/countries/chile/soprole/website_asset/favsoprolechile.png" rel="icon">
    <!-- Icons Bootstrap -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Alertifyjs -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('management/css/style.css') }}">
    <!-- Devexpress -->
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.2.4/css/dx.light.css" />
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.2.4/css/dx.light.css" /> --}}

</head>

<body>
    <div id="spinner-div" class="pt-5">
        <div class="spinner-border text-danger" role="status">
        </div>
    </div>
    <div id="wrapper">
        @if (!isset($header))
        <div class="container-fluid">
            <!-- NAVBAR -->
            <div class="row navbar-row">
                <div class="col">
                    <nav class="navbar navbar-dark fixed-top flex-md-nowrap shadow">
                        <figure class="navbar-brand">
                            <a href="{{ route('administracion.index') }}">
                                <h1 class="display-6 mx-3 mt-3 text-uppercase"> {{ config('app.name') }}</h1>
                            </a>
                        </figure>
                        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        
                        <div class="dropdown dropdown-dashboard">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->nombre }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-admin" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('administracion.profile')}}"><i class="bi bi-person-fill"></i> Mi cuenta</a></li>
                                <li><a class="dropdown-item" id="logout"><i class="bi bi-box-arrow-left"></i> Cerrar sesión</a></li>
                                <form id="form-log-out" method="POST" action="{{ route('administracion.logout') }}">
                                    @csrf
                                </form>
                                <script>
                                    document.getElementById("logout").addEventListener("click", function() {
                                        document.getElementById("form-log-out").submit();
                                    });
                                </script>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- SIDEBAR MENU -->
            <div class="row">
                <div class="col-3">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="accordion my-3" id="accordionExampleY">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOneY">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseOneY" aria-expanded="true" aria-controls="collapseOneY">
                                        <i class="bi bi-stack mx-2"></i> Páginas
                                    </button>
                                </h2>
                                <div id="collapseOneY" class="accordion-collapse collapse" aria-labelledby="headingOneY" data-mdb-parent="#accordionExampleY">
                                    <div class="">
                                        <div class="list-group list-group-light">
                                            @foreach ($paginas as $pagina)
                                                <a href="{{ route('administracion.page.index', ['page' => $pagina->slug])}}" class="list-group-item list-group-item-action px-5 border-0"> {{ ucfirst($pagina->nombre) }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>

                <div class="col-9">
                    @include('../_partials/messages')
                    @yield('content')
                </div>
            </div>
        </div>
        @else
            @include('../_partials/messages')

            <div class="container my-4">
                @yield('content')
            </div>
            
        @endif
    </div>

    <!-- Alertifyjs -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Devexpress -->
    <script type="text/javascript" src="https://cdn3.devexpress.com/jslib/22.1.6/js/dx.all.js"></script>
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>

    
    <!-- Script -->
    <script src="{{ asset('management/js/app.js') }}"></script>

    @stack('extra-js')


</body>

</html>
