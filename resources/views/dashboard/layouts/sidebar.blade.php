<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MagPro <sup></sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>المنتجات</span></a>
            </li>



            <hr class="sidebar-divider">


            {{-- <li class="nav-item">
                <a class="nav-link" href="item.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>جميع الاصناف</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>المستخدمين </span></a>
            </li>

            {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">تسجيل الخروج</button>
            </form> --}}

            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button  type="submit"
                        style="background-color: #474aff;margin-left:14px;margin-top:20px; color: white; padding: 10px 18px; border: none; border-radius: 5px; cursor: pointer; font-size: 12px; transition: background-color 0.3s;">
                    تسجيل الخروج
                </button>
            </form>


            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
