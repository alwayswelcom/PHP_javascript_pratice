<link rel="stylesheet" type="text/css" href="css/estilos_registro.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script src="js/jquery-3.5.1.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="js/FeedEk.js" > </script>
<script src="js/jquery.jgrowl.js"></script>
<header>
    <div class="navbar" id="navbar">
        <a href="index.php" id="index">Inicio</a>
        <a href="portfol.php" id="portfolio">Proyectos</a>
        <a href="presupuesto.html" id="presupuesto">¿Donde estamos?</a>
        <a href="contact.php" id="contacto">Usuarios</a>
    </div>
    </header>
    <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
    </script>