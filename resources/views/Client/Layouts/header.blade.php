@section('header')
        <!DOCTYPE html>
<html lang="en">
<head>
    @if(isset($title))
        <title>{!! $title !!}</title>
        <meta property="og:title" content="{!! $title !!}">

    @else
        <title>Chubi - Central Art School Tokyo</title>
        <meta property="og:title" content="Chubi - Central Art School Tokyo">
    @endif
    <meta charset="utf-8">
        <meta name="author" content="Ramesh Dahal">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{asset('public/')}}/favcon(2).png">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/client/')}}/fonts/icomoon/style.css">
        <link rel="stylesheet" href="{{asset('public/client/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <!--fontsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



    <link rel="stylesheet" href="{{asset('public/client/')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('public/client/')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('public/client/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/custom.css">
    <link rel="stylesheet" href="{{asset('public/client/')}}/css/scrollTop.css">

</head>
<body style="background-image: url('{{asset('public/client/')}}/images/bg.jpg');">
<div class="site-wrap">
@endsection