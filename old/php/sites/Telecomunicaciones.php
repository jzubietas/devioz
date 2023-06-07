<?php

require_once '../../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/apple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2023 05:25:55 GMT -->
<head>
<meta charset="utf-8" />
<title>Devioz Admin | Dashboard</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="../../assets/css/vendor.min.css" rel="stylesheet" />
<link href="../../assets/css/apple/app.min.css" rel="stylesheet" />
<script src="../../assets/plugins/ionicons/dist/ionicons/ionicons.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>


<link href="../../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
<link href="../../assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="../../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />

</head>
<body>

<div id="loader" class="app-loader">
<span class="spinner"></span>
</div>


<div id="app" class="app app-header-fixed app-sidebar-fixed ">

<div id="header" class="app-header">

<div class="navbar-header">
<a href="index.html" class="navbar-brand"><span class="navbar-logo"><ion-icon name="cloud"></ion-icon></span> <b class="me-1">Devioz</b> Admin</a>
<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>


<div class="navbar-nav">
<div class="navbar-item navbar-form">
<form action="#" method="POST" name="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter keyword" />
<button type="submit" class="btn btn-search"><ion-icon name="search"></ion-icon></button>
</div>
</form>
</div>
<div class="navbar-item dropdown">
<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
<ion-icon name="notifications"></ion-icon>
<span class="badge">5</span>
</a>
<div class="dropdown-menu media-list dropdown-menu-end">
<div class="dropdown-header">NOTIFICATIONS (5)</div>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<i class="fa fa-bug media-object bg-gray-400"></i>
</div>
<div class="media-body">
<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
<div class="text-muted fs-10px">3 minutes ago</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<img src="../../assets/img/user/user-1.jpg" class="media-object" alt="" />
<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
</div>
<div class="media-body">
<h6 class="media-heading">John Smith</h6>
<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
<div class="text-muted fs-10px">25 minutes ago</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<img src="../../assets/img/user/user-2.jpg" class="media-object" alt="" />
<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
</div>
<div class="media-body">
<h6 class="media-heading">Olivia</h6>
<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
<div class="text-muted fs-10px">35 minutes ago</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<i class="fa fa-plus media-object bg-gray-400"></i>
</div>
<div class="media-body">
<h6 class="media-heading"> New User Registered</h6>
<div class="text-muted fs-10px">1 hour ago</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<i class="fa fa-envelope media-object bg-gray-400"></i>
<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
</div>
<div class="media-body">
<h6 class="media-heading"> New Email From John</h6>
<div class="text-muted fs-10px">2 hour ago</div>
</div>
</a>
<div class="dropdown-footer text-center">
<a href="javascript:;" class="text-decoration-none">View more</a>
</div>
</div>
</div>
<div class="navbar-item navbar-user dropdown">
<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
<img src="../../assets/img/user/user-13.jpg" alt="" />
<span>
<span class="d-none d-md-inline">Adam Schwartz</span>
<b class="caret"></b>
</span>
</a>
<div class="dropdown-menu dropdown-menu-end me-1">
<a href="extra_profile.html" class="dropdown-item">Edit Profile</a>
<a href="email_inbox.html" class="dropdown-item d-flex align-items-center">
Inbox
<span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span>
</a>
<a href="calendar.html" class="dropdown-item">Calendar</a>
<a href="settings.html" class="dropdown-item">Settings</a>
<div class="dropdown-divider"></div>
<a href="login.html" class="dropdown-item">Log Out</a>
</div>
</div>
</div>

</div>


<div id="sidebar" class="app-sidebar">

<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

<div class="menu">
<div class="menu-profile">
<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
<div class="menu-profile-cover with-shadow"></div>
<div class="menu-profile-image">
<img src="../../assets/img/user/user-13.jpg" alt="" />
</div>
<div class="menu-profile-info">
<div class="d-flex align-items-center">
<div class="flex-grow-1">
Sean Ngu
</div>
<div class="menu-caret ms-auto"></div>
</div>
<small>Frontend developer</small>
</div>
</a>
</div>
<div id="appSidebarProfileMenu" class="collapse">
<div class="menu-item pt-5px">
<a href="javascript:;" class="menu-link">
<div class="menu-icon"><i class="fa fa-cog"></i></div>
<div class="menu-text">Settings</div>
</a>
</div>
<div class="menu-item">
<a href="javascript:;" class="menu-link">
<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
<div class="menu-text"> Send Feedback</div>
</a>
</div>
<div class="menu-item pb-5px">
<a href="javascript:;" class="menu-link">
<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
<div class="menu-text"> Helps</div>
</a>
</div>
<div class="menu-divider m-0"></div>
</div>
<div class="menu-header">Navigation</div>
<div class="menu-item has-sub active">
<a href="javascript:;" class="menu-link">
<div class="menu-icon">
<ion-icon name="pulse-outline"></ion-icon>
</div>
<div class="menu-text">Rubros</div>

</div>


<div class="menu-item "><a href="#" class="menu-link"><div class="menu-icon-img"><img src="../../assets/img/logo/logo-bs19.png" alt="" /></div><div class="menu-text">Telecomunicaciones</div></a></div>


<div class="menu-item d-flex">
<a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><ion-icon name="arrow-back" class="me-1"></ion-icon> <div class="menu-text">Colapsar</div></a>
</div>

</div>

</div>

</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>


<div id="content" class="app-content">

<ol class="breadcrumb float-xl-end">

<li class="breadcrumb-item active">Portada</li>
</ol>

<h1 class="page-header"><center>Rubro Telecomunicaciones</center></h1>



<div class="col-xl-12">
<div class="mb-10px fs-10px mt-10px"><b class="text-dark">Portada</b></div>

<div class="card border-0">
<img class="card-img-top" src="../../assets/img/gallery/Telecomunicaciones.jpg" alt="" />
<div class="card-body">
<h4 class="card-title mb-3px">Nosotros</h4>
<p class="card-text">Somos una empresa dedicada al desarrollo de Software, gestión y administración de bases de datos, big data, automatización, arquitectura devops, gestión de procesos para toda innovación TI.</p>
<a href="javascript:;" class="btn btn-sm btn-default">Quiero saber más</a>
</div>
</div>
























<div class="col-xl-12">
<div class="mb-10px fs-10px mt-20px"><b class="text-dark">Nuestros Servicios</b></div>

<div class="card-group">

<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/Movistar.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">Movistar</h4>
<p class="card-text">Brindar a través de nuestros productos y servicios en el sector de las telecomunicaciones 
  la optima satisfacción a nuestros distribuidores y clientes. Sustentados por una empresa económicamente próspera 
  comprometida con el desarrollo de su personal y de la sociedad donde se ubica</p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>


<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/Claro.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">Claro</h4>
<p class="card-text">Proveer servicios de telecomunicaciones con la más alta calidad, más amplia cobertura y constante 
  innovación para anticiparnos a las necesidades de comunicación de nuestros clientes; generar el mayor bienestar y 
  desarrollo personal y profesional de nuestros trabajadores, proporcionar bienestar y desarrollo a la comunidad </p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>


<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/Bitel.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">Bitel</h4>
<p class="card-text"> Bitel siempre trata de ser creativo y cambiarnos a nosotros mismos para contribuir a mejorar la 
  calidad de vida de los peruanos y la sociedad. Asimismo, Bitel continúa innovando, en conjunto con los clientes para 
  crear productos y servicios que hacen la vida y trabajo fácil.</p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>


<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/Entel.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">Entel</h4>
<p class="card-text">Hacer que vivamos mejor conectados, contribuyendo a transformar responsablemente el Perú. Ser un 
  referente en el sector de las telecomunicaciones, brindando una experiencia distintiva, un lugar donde las personas 
  se realizan, una empresa que desafía al mercado y crece de manera sostenible.</p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>

</div>

<div class="card-group">

<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/Win.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">WIN</h4>
<p class="card-text">WIN es el operador 100% peruano que brinda Internet por Fibra óptica al hogar (FTTH) con velocidades 
  desde 50 Mbps hasta 1000 Mbps. Ser la empresa de telecomunicaciones más valorada por nuestros clientes y nuestra gente. 
  Garantizar la mejor experiencia de servicio de conectividad al mundo digital para el bienestar de nuestros clientes.</p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>


<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/DirecTV.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">DirecTV</h4>
<p class="card-text">Transformar el panorama de la comunicación mediante una combinación irresistible y diversa de contenido, 
  tecnología y servicio convirtiendo a DIRECTV en la selección favorita del consumidor. Hacer de DIRECTV® la mejor experiencia 
  televisiva del mundo.</p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>

<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/Virgin.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">Virgin</h4>
<p class="card-text">Cambiar el estereotipo de una empresa de comunicaciones, pues entrega bolsas de comunicación 
  (internet) a por mayor, lo cual le conviene a los clientes que desean adquirir mas la conexión a la internet que 
  preocuparse por llamadas que cualquier otra empresa puede ofrecerle.</p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>


<div class="card">
<img class="card-img-top" src="../../assets/img/gallery/Orange.jpg" alt="Card image cap" />
<div class="card-body">
<h4 class="card-title">Orange</h4>
<p class="card-text">Grupo Orange busca convertir la compra en línea en la mejor experiencia tecnológica para nuestros 
  clientes. Grupo Orange está integrada por personas apasionadas en poner a disposición productos de alto contenido 
  tecnológico para mejorar la calidad de vida y superar las expectativas de nuestros clientes.</p>
<!--p class="card-text text-gray">Last updated 3 mins ago</p-->
</div>
</div>




</div>

</div>




























</div>

</div>

</div>


<div class="theme-panel">
<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
<h5>App Settings</h5>

<div class="theme-list">
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class="theme-teal" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
<div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
</div>

<div class="theme-panel-divider"></div>
<div class="row mt-10px">
<div class="col-8 control-label text-dark fw-bold">
<div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
<div class="lh-14">
<small class="text-dark opacity-50">
Adjust the appearance to reduce glare and give your eyes a break.
</small>
</div>
</div>
<div class="col-4 d-flex">
<div class="form-check form-switch ms-auto mb-0">
<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
</div>
</div>
</div>
<div class="theme-panel-divider"></div>

<div class="row mt-10px align-items-center">
<div class="col-8 control-label text-dark fw-bold">Header Fixed</div>
<div class="col-4 d-flex">
<div class="form-check form-switch ms-auto mb-0">
<input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
<label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
</div>
</div>
</div>
<div class="row mt-10px align-items-center">
<div class="col-8 control-label text-dark fw-bold">Header Inverse</div>
<div class="col-4 d-flex">
<div class="form-check form-switch ms-auto mb-0">
<input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
<label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
</div>
</div>
</div>
<div class="row mt-10px align-items-center">
<div class="col-8 control-label text-dark fw-bold">Sidebar Fixed</div>
<div class="col-4 d-flex">
<div class="form-check form-switch ms-auto mb-0">
<input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
<label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
</div>
</div>
</div>
<div class="row mt-10px align-items-center">
<div class="col-8 control-label text-dark fw-bold">Sidebar Grid</div>
<div class="col-4 d-flex">
<div class="form-check form-switch ms-auto mb-0">
<input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
<label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
</div>
</div>
</div>
<div class="row mt-10px align-items-center">
<div class="col-md-8 control-label text-dark fw-bold">Gradient Enabled</div>
<div class="col-md-4 d-flex">
<div class="form-check form-switch ms-auto mb-0">
<input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
<label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
</div>
</div>
</div>

<div class="theme-panel-divider"></div>
<h5>Admin Design (5)</h5>

<div class="theme-version">
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/html/index_v2.html" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/default.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/transparent/index_v2.html" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/transparent.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="index_v2.html" class="theme-version-link active">
<span style="background-image: url(../../assets/img/theme/apple.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/material/index_v2.html" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/material.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/facebook/index_v2.html" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/facebook.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/google/index_v2.html" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/google.jpg);" class="theme-version-cover"></span>
</a>
</div>
</div>

<div class="theme-panel-divider"></div>
<h5>Language Version (7)</h5>

<div class="theme-version">
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/html/" class="theme-version-link active">
<span style="background-image: url(../../assets/img/version/html.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/ajax/" class="theme-version-link">
<span style="background-image: url(../../assets/img/version/ajax.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/angularjs/" class="theme-version-link">
<span style="background-image: url(../../assets/img/version/angular1x.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/angularjs14/" class="theme-version-link">
<span style="background-image: url(../../assets/img/version/angular10x.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
<span style="background-image: url(../../assets/img/version/laravel.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/vuejs/" class="theme-version-link">
<span style="background-image: url(../../assets/img/version/vuejs.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/admin/reactjs/" class="theme-version-link">
<span style="background-image: url(../../assets/img/version/reactjs.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="javascript:alert('.NET Core 6.0 MVC Version only available in downloaded version.');" class="theme-version-link">
<span style="background-image: url(../../assets/img/version/dotnet.jpg);" class="theme-version-cover"></span>
</a>
</div>
</div>

<div class="theme-panel-divider"></div>
<h5>Frontend Design (5)</h5>

<div class="theme-version">
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/frontend/one-page-parallax/" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/one-page-parallax.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/frontend/e-commerce/" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/e-commerce.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/frontend/blog/" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/blog.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/frontend/forum/" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/forum.jpg);" class="theme-version-cover"></span>
</a>
</div>
<div class="theme-version-item">
<a href="https://seantheme.com/color-admin/frontend/corporate/" class="theme-version-link">
<span style="background-image: url(../../assets/img/theme/corporate.jpg);" class="theme-version-cover"></span>
</a>
</div>
</div>

<div class="theme-panel-divider"></div>
<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
<a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
</div>
</div>


<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

</div>


<script src="../../assets/js/vendor.min.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/js/app.min.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>


<script src="../../assets/plugins/gritter/js/jquery.gritter.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.canvaswrapper.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.colorhelpers.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.saturated.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.browser.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.drawSeries.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.uiConstants.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.time.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.resize.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.pie.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.crosshair.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.categories.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.navigate.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.touchNavigate.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.hover.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.touch.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.selection.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.symbol.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/flot/source/jquery.flot.legend.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/jvectormap-content/world-mill.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script src="../../assets/js/demo/dashboard.js" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="4b3d24ab14f4f6077a24c14d-text/javascript"></script>
<script type="4b3d24ab14f4f6077a24c14d-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="../../assets/js/rocket-loader.min.js" data-cf-settings="4b3d24ab14f4f6077a24c14d-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bbb723ece770dd5","version":"2023.3.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/apple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2023 05:26:10 GMT -->
</html>