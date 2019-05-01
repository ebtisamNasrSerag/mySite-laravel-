<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" 
 {{(app()->getLocale() == 'ar')? 'dir="rtl"' : 'dir="ltr"'}} >
<head>
    <meta charset="utf-8">
  <title>@yield('title')</title>
    <!-- Stylesheets -->

    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- <link href="assets/css/style-rtl.css" rel="stylesheet"> -->
    <link rel="icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>