<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="yeli, guías electrónicas, administración de dispositivos" />
    <meta name="description" content="Yeli Supermercados CENCOSUD" /> 
    <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com " />
    <title>..:: Drop - @yield('title') ::..</title> 
    
    @stack('css')
</head>

<body>
     
           
             <!--contenido-->
    @yield('content')
    <!--/contenido-->
            
    @stack('scripts')
</body>

</html>