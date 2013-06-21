<!DOCTYPE HTML>
<html>

    <head>
        <title>Sistema-Competencias</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        {{ HTML::style('sistema-competencias/css/style.css') }}
        <!-- modernizr enables HTML5 elements and feature detects -->
        {{ HTML::script('sistema-competencias/js/modernizr-1.5.min.js'); }}
    </head>

    <body>
        <div id="main">
            <header>
                <div id="logo">
                    <div id="logo_text">
                        <!-- class="logo_colour", allows you to change the colour of the text -->
                        <h1 style="margin: 10px 0 0 0"><a href="<?php echo URL::to_action('cuenta@index'); ?>"><img style=" height:60px;" alt="" {{ HTML::image('sistema-competencias/images/images.png')}} </img></a></h1>
                    </div>    
                </div>
                <div class="textoidioma"><p></p><p></p></div>
                <span class="idioma">
                    <form method="post" action="#">
                        <tr><input type="text" name="user"/><input type="text" name="pass"/><tr>
                        <tr><input type="submit"></tr>
                    </form>

                </span>
                <nav>
                    <ul class="sf-menu" id="nav">
                        <li class="selected"><a href="<?php echo URL::to_action('cuenta@index'); ?>">Inicio</a></li>
                        <li><a href="#">Quienes Somos</a></li>
                        <li><a href="#">Historia</a></li>
                        <li><a href="#">Academicos</a></li>
                        <li><a href="#">Contactenos</a></li>
                    </ul>
                </nav>
            </header>
            <div id="site_content">
                <div id="sidebar_container">
                    <div class="gallery">
                        <ul class="images">
                            <li class="show"><img width="450" height="450" {{ HTML::image('sistema-competencias/images/estudiantes.jpg')}} alt="photo_one" /></li>
                            <li><img width="450" height="450" {{ HTML::image('sistema-competencias/images/2.jpg')}} alt="photo_two" /></li>
                            <li><img width="450" height="450" {{ HTML::image('sistema-competencias/images/3.jpg')}} alt="photo_three" /></li>
                            <li><img width="450" height="450" {{ HTML::image('sistema-competencias/images/4.jpg')}} alt="photo_four" /></li>
                            <li><img width="450" height="450" {{ HTML::image('sistema-competencias/images/5.jpg')}} alt="photo_five" /></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <h1>Bienvenido</h1>
                    <p>Acá pueden ir [noticias], con respecto a los *académicos* de la escuela.</p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
            </div>
            <footer>
                <p>Copyright &copy; photo_style_two | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
            </footer>
        </div>
        <p>&nbsp;</p>
        <!-- javascript at the bottom for fast page loading -->
        {{ HTML::script('sistema-competencias/js/jquery.js'); }}
        {{ HTML::script('sistema-competencias/js/jquery.easing-sooper.js'); }}
        {{ HTML::script('sistema-competencias/js/jquery.sooperfish.js'); }}
        {{ HTML::script('sistema-competencias/js/image_fade.js'); }}

        <script type="text/javascript">
            $(document).ready(function() {
                $('ul.sf-menu').sooperfish();
            });
        </script>
    </body>
</html>

