<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>ElFaro_GrupoCares_Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('styles.css'); }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- FUENTE CARGADA DESDE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- FUENTE CARGADA DESDE GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> <!-- FUENTE CARGADA DESDE GOOGLE FONTS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--LIBRERIA DE BOOTSTRAP-->
</head>
<body>



    <!-- Navbar -->
    @include('components.elfaro-components.navbar')
    <!-- Navbar -->

    <!-- Seccion Publicidad-->
    @include('components.elfaro-components.seccion-publicidad')
    <!-- Seccion Publicidad-->
    <main>

        <!-- Container de Noticias -->
        <div class="container">

            {{-- Seccion noticias --}}
            @include('components.elfaro-components.seccion-noticias-main')
            {{-- Seccion noticias --}}


            <!-- Row para crear articulos -->
            <div id="crear_articulo" class="row align-items-center justify-content-center">
                @include('components.elfaro-components.form-agregar-noticias')
               
                <!--CARDS DE NOTICIAS CHICAS-->
                @include('components.elfaro-components.seccion-noticias-mini')
                <!--CARDS DE NOTICIAS CHICAS-->
            </div>


            <!-- Formulario de Contacto -->
            @include('components.elfaro-components.contact-form')           
            <!-- Formulario de Contacto -->
        </div>
        <!-- Footer -->
        @include('components.elfaro-components.footer')
        <!-- Footer -->
    </main>

    <script src="codigo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>