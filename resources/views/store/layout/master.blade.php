<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{ asset('store') }}/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="icon" href="http://templatecs.com/demo/template/wine/images/favicon.ico">
        <!-- jQuery UI -->
        <link rel="stylesheet" type="text/css" href="css/jquery/jquery-ui.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <!-- Owl-coursel -->
        <link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.transitions.css">
        <!--magnific popup-->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css"/>
        <!-- Font-awesome -->
        <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
        <!-- Animate -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <!-- Style-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        @stack('styles')
    </head>
    <body>
        <div class="preloader"><i class="fa fa-spinner"></i></div>
        @include('store.layout.components.header')
        
        @yield('main')

        @include('store.layout.components.footer')

        <!-- jQuery -->
		<script src="js/jquery/jquery-2.2.4.min.js"></script>
		<!-- jQuery UI -->
		<script src="js/jquery/jquery-ui.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Owl-coursel -->
		<script src="js/owl-coursel/owl.carousel.js"></script>
		<!-- Magnific popup-->
		<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- Classie -->
		<script src="js/classie.js"></script>
		<!-- Script -->
        <script src="js/script.js"></script>
        
        @stack('scripts')
	</body>
</html>