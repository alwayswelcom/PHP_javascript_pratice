<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Practica obligatoria MasterD" />
    <meta name="robots" content="NOFOLLOW" />
    <meta name="Author" content="Alberto Arana Pinto" />
    <meta name="keywords" content="Practica obligatoria" />
    <meta name="lang" content="es" />
    <meta name="revisit-after" content="2 days" />
    <meta name="category" content="Práctica obligatoria" />
    <title>Práctica obligatoria</title>
<!-- Fichero de estilos -->
<link rel="stylesheet" type="text/css" href="css/estilos.css"> 
<link rel="stylesheet" href="css/estilos_registro.css">  
<link rel="stylesheet" type="text/css" href="css/FeedEk.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.jgrowl.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- Funcion Jquery alerta -->
    <script type="text/javascript">
       $(function()
        {
        $.jGrowl("Bienvenido/a a mi practica.",{ life : 5000});
        });
    </script>
</head>


<body>
    <?php require 'partials/header.php' ?>
<!-- Div de header -->
    <section id="div_seccion_principal">
<!--Div que tiene todo el contenido de la pagina principal -->
        <div class="div_seccion_principal">
            <article>
                <header>
                    <div id=""><h1>Biografia</h1></div>
                </header>
                <span id="imagen_der"><img src="img/foto.jpg"></span>
                <span ><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum tellus ac nisi pretium dignissim. Quisque a porta arcu. Donec vestibulum nulla justo, id vehicula risus finibus in. Sed pretium dictum ligula at malesuada. Ut lobortis malesuada leo mattis pharetra. Proin vestibulum nunc egestas neque sagittis, laoreet lacinia metus elementum. Vivamus pulvinar velit a nisi pretium, vel rhoncus risus scelerisque. Quisque vehicula, mi eleifend venenatis fermentum, libero magna vulputate elit, at fringilla tellus turpis eget nisl. Cras convallis sem ex, eu finibus dui interdum vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum ante ante, eget iaculis tortor volutpat nec. Nulla commodo molestie lectus, luctus faucibus risus interdum non. Nullam rutrum condimentum metus, eget dictum tellus.
                Fusce et lorem consectetur, consequat tellus sed, luctus sem. Vestibulum sed orci vitae turpis sollicitudin blandit finibus non augue. Aliquam maximus nisi ut lectus lacinia pulvinar. Curabitur ut purus tempus sapien fringilla ultricies. Praesent eget augue ac massa mattis consectetur. Nam elementum mattis suscipit. Sed id dui ac massa fringilla semper sed vel lorem.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pretium ornare nibh quis molestie. Maecenas non sapien rutrum, luctus dui ut, malesuada justo. Morbi auctor tincidunt sem vel convallis. Vivamus magna mauris, ultrices egestas pretium vitae, tincidunt nec nisi. Phasellus vestibulum viverra mauris, eu ultricies purus vestibulum sit amet. Vestibulum molestie porta purus. Suspendisse euismod ornare felis sed tempus. Ut ex nisl, eleifend in faucibus eu, varius at leo.</p></span>                
            </article>

            <article>
                <header>
                    <h1>Trabajos anteriores</h1>
                </header>
                    <span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget erat congue, feugiat nibh ut, tincidunt sem. Integer aliquet pellentesque maximus. Cras nibh nibh, rutrum sed euismod eget, aliquet ac erat. Suspendisse iaculis, ipsum at euismod maximus, nisi metus venenatis mi, nec elementum elit eros sed ante. Quisque vitae rhoncus urna. Nulla aliquam dolor sit amet quam hendrerit, ac consectetur elit dignissim. Etiam lacinia nisi dui, vitae efficitur lacus mollis sed. Sed finibus vehicula nulla nec tempor.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper finibus lacus eget venenatis. Maecenas nec nisl sit amet tortor blandit fermentum viverra at arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id ligula at libero feugiat aliquam. Morbi suscipit malesuada orci, id auctor neque sagittis iaculis. Donec consectetur porttitor lacus. Phasellus cursus tempor lorem sed elementum. Praesent scelerisque nisl et scelerisque euismod.</p></span>
            </article>
        </div>
    </section>
<!-- Div y funcion Jquery de RSS -->          
    <section>
        <div id="imagenizquierda">
            <script>
                $('#imagenizquierda').FeedEk({
                    FeedUrl:'https://feeds.elpais.com/mrss-s/pages/ep/site/elpais.com/section/tecnologia/portada',
                    Maxcount: 4,
                    ShowDesc: true,
                    ShowPubDate: false,
                    DescCharacterLimit: 200
                });
            </script>
        </div>
    </section>
<!--Div que contiene el pie de pagina-->
    <footer>
            <div id="div_footer">
            :: Exitae :: Practica Obligatoria :: Todos los derechos reservados ::
            </div>
    </footer>
<!-- Aside de la pagina -->
    <aside >
        <h6>Practica obligatoria</h6>
    </aside>
</body>
</html>