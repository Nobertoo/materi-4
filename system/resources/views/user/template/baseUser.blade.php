<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>MERAMPUT SHOP</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('public')}}/client/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('public')}}/client/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public')}}/client/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('public')}}/client/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('public')}}/client/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('public')}}/client/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('user/template.section.header')
   
@include('user/template.section.sidebar')
   

@yield('content')


@include('user/template.section.footer')
@stack('script')

</body>

</html>