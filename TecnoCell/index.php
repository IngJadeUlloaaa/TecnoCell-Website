<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>TecnoCell</title>
    <link rel="stylesheet" type="text/css" href="style_Index.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        
        /*#content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #fff;
            padding: 50px;
        }*/
    </style>
</head>
<body>
    <header class="container-father-navmenu-home">
        <video id="video-background" autoplay loop muted>
            <source src="resources/pexels-tima-miroshnichenko-7203927 (1080p).mp4" type="video/mp4">
            <!-- Agrega otros formatos de video para mayor compatibilidad -->
        </video>
        <article class="container-jr-navmenu-home">
            <!--left-->
            <div class="container-data-left-navmenu-home">
                <ul class="container-list-left-navmenu-home">
                    <li class="links-list-left-navmenu-home"><a href="#" class="link-navmenu-left-home"><i class="uil uil-bars"></i>Home</a></li>
                    <li class="links-list-left-navmenu-home"><a href="javascript:void(0);" class="link-navmenu-left-home" onclick="searchProducts()"><i class="uil uil-search"></i>Search</a></li>
                </ul>
            </div>
            <!--center-->
            <div class="container-data-center-home-navmenu-home">
                <div class="container-data-principal-center-navmenu-home">
                    <h2 class="title-center-navmenu-home">TECNO-CELL</h2>
                </div>
            </div>
            <!--right-->
            <div class="container-right-navmenu-home">
                <ul class="container-list-right-navmenu-home">
                    <li class="links-list-right-navmenu-home"><a href="#" class="link-navmenu-right-home"><i class="uil uil-shopping-cart-alt"></i>Store</a></li>
                    <li class="links-list-right-navmenu-home"><a href="https://www.facebook.com/profile.php?id=100083208826905&mibextid=ZbWKwL" class="link-navmenu-right-home"><i class="uil uil-mobile-android"></i>Contact</a></li>
                </ul>
            </div>
        </article>
        <!--buttons-->
        <section class="container-father-buttons-home">
            <article class="container-jr-buttons-home">
                <div class="container-button-left-buttons-home">
                    <h2 class="title-banner-buttons-home">¡Donde el Diseño y la Tecnologia se Unen!</h2>
                </div>
                <!--buttons-->
                <div class="container-padding-buttons-home">
                    <a href="samsung.html" class="container-jr-buttons-home">
                        <button class="btn-link-home">Dispositivos Samsung</button>
                    </a>
                    <a href="iphone.html" class="container-jr-buttons-home">
                        <button class="btn-link-home">Dispositivos Iphone</button>
                    </a>
                <div>
            </article>
        </section>
    </header>
    <script>
        function searchProducts() {
            // Obtiene el texto ingresado por el usuario en el campo de búsqueda
            const searchTerm = prompt("¡Ingrese el producto que Desea Buscar!");

            // Convierte el texto ingresado a minúsculas para que no sea sensible a mayúsculas y minúsculas
            const searchTermLower = searchTerm.toLowerCase();

            // Redirige al usuario a la página correspondiente según su búsqueda
            if (searchTermLower === 'samsung') {
                window.location.href = 'samsung.html';
            } else if (searchTermLower === 'iphone') {
                window.location.href = 'iphone.html';
            } else {
                alert('Producto no encontrado.');
            }
        }
    </script>
</body>
</html>