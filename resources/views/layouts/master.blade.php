<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InPro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barre de navigation latérale -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="custom-sidebar h-100">
                    <div class="position-sticky">
                        <!-- Logo de l'application -->
                        <div class="text-center mt-3 mb-3">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo de l'application" class="img-fluid">
                        </div>
                        <div class="text-right">
                            @auth
                                Bienvenue {{ auth()->user()->name }} |
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endauth
                        </div>
                        <!-- Menu de navigation -->
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('index') }}">
                                    Liste des Produits
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('personnels.index') }}">
                                    Liste du personnel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('lieux.index') }}">
                                    Liste des lieux
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('category.index') }}">
                                    Catégories
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Contenu principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row justify-content-center mt-5">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Ajoutez ces lignes pour inclure jQuery et Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
