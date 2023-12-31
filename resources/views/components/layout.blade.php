<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.component.home') }}">Start Bootstrap</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                
                <ul class="navbar-nav ms-auto">
                    @each('partials._menu_itens', $menuItens, 'item')
                </ul>
            </div>
        </div>
    </nav>
    <div class="mt-5"></div>
    {{ $slot }}

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <x-footer-section>
                    <x-slot name="title">
                        <h4 class="text-uppercase mb-4">Location</h4>
                    </x-slot>

                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p>
                </x-footer-section>
                <!-- Footer Social Icons-->
                <x-footer-section>
                    <x-slot name="title">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                    </x-slot>

                    <x-social-item link="facebook">
                        <i class="fab fa-fw fa-facebook-f"></i>
                    </x-social-item>
                    <x-social-item link="twitter">
                        <i class="fab fa-fw fa-twitter"></i>
                    </x-social-item>
                    <x-social-item link="linkedin">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </x-social-item>
                    <x-social-item link="dribbble">
                        <i class="fab fa-fw fa-dribbble"></i>
                    </x-social-item>
                </x-footer-section>
                <!-- Footer About Text-->
                <x-footer-section>
                    <x-slot name="title">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    </x-slot>

                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </x-footer-section>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
