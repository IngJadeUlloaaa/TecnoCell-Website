<?php
session_start();

if (!isset($_SESSION['nombre']) || !isset($_SESSION['correo'])) {
  // El usuario no ha iniciado sesión, redireccionar a la página de inicio de sesión
  header("Location: login.html");
  exit();
}

// Obtener la información del usuario desde la sesión
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$correo = $_SESSION['correo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="interface_style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>
    <!--dashboard-->
    <section class="container-father-dashboard-home">
        <article class="data-left-dashboard-home">
            <div class="container-name-dashboard-home">
                <h2 class="title-name-dashboard-home">TecnoCell</h2>
            </div>
            <div class="container-links-dashboard-home">
                <ul class="container-links-list-dashboard-home">
                    <li class="list-dashboard-home"><a href="#contenido-home" class="links-dashboard-home"
                            onclick="cambiarContenido('contenido-home')"><i class="uil uil-estate"></i>Home</a></li>
                    <li class="list-dashboard-home"><a href="#contenido-about" class="links-dashboard-home"
                            onclick="cambiarContenido('contenido-about')"><i class="uil uil-book-alt"></i>About</a></li>
                    <li class="list-dashboard-home"><a href="#contenido-images" class="links-dashboard-home"
                            onclick="cambiarContenido('contenido-images')"><i class="uil uil-image"></i>Images</a></li>
                    <li class="list-dashboard-home"><a href="#contenido-video" class="links-dashboard-home"
                            onclick="cambiarContenido('contenido-video')"><i class="uil uil-video"></i>Videos</a></li>
                    <li class="list-dashboard-home"><a href="#contenido-contact" class="links-dashboard-home"
                            onclick="cambiarContenido('contenido-contact')"><i
                                class="uil uil-comment-dots"></i>Contact</a></li>
                </ul>
            </div>
            <div class="container-account-name-home">
                <h2 class="title-account-name-home">Account Pages</h2>
            </div>
            <div class="container-links-accounts-home">
                <ul class="links-list-accounts-home">
                    <li class="list-dashboard-home"><a href="#contenido-profile" class="links-dashboard-home"
                            onclick="cambiarContenido('contenido-profile')"><i
                                class="uil uil-user"></i>Profile</a></li>
                    <li class="list-dashboard-home"><a href="index.php" class="links-dashboard-home"><i
                                class="uil uil-signin"></i>Sign In</a></li>
                    <li class="list-dashboard-home"><a href="login.html" class="links-dashboard-home"><i
                                class="uil uil-signout"></i>Sign Up</a></li>
                </ul>
            </div>
            <div class="container-father-btn-dashboard-home">
                <div class="container-jr-btns-dashboard-home">
                    <div class="container-information-dashboard-home">
                        <button class="btn-more_information-dashboard-home">MORE INFORMATION</button>
                    </div>
                    <div class="container-exit-dashboard-home">
                        <button class="btn-exit-dashboard-home">EXIT</button>
                    </div>
                </div>
            </div>
        </article>
        <!--home-->
        <article class="container-father-banner-home" id="contenido-derecha">
            <div class="container-img-banner-home" id="contenido-home">
                <video id="video-background" autoplay loop muted class="container-video-dashboard">
                    <source src="resources/pexels-anna-shvets-5461001 (1440p).mp4" type="video/mp4"
                        class="video-banner-home">
                </video>
                <div class="container-data-home">
                    <h2 class="title-data-home">Welcome to TecnoCell</h2>
                    <p class="description-data-home">¡Donde la Tecnologia y el Diseño se unen!</p>
                    <a href="index.php" class="container-btn-data-home">
                        <button class="btn-sign-data-home">Sign in</button>
                    </a>
                </div>
            </div>
        </article>
    </section>
    <!-- Other Containers-->
    <div id="contenido-derecha" class="container-father-about-home" style="display: none;">
        <!-- Contenido de la sección About -->
        <article class="container-jr-about-home" id="contenido-about">
            <div class="container-data-left-about-home">
                <div class="container-title-principal-about-home">
                    <h2 class="title-principal-about-home">EMPRESAS DE TODO EL MUNDO CONFIAN EN NOSOTROS</h2>
                </div>
                <div class="container-logo-about-home">
                    <ul class="list-logo-about-home">
                        <li class="list-dashboard-about"><i class="uil uil-amazon" id="lg-about-home"></i>Amazon</li>
                        <li class="list-dashboard-about"><i class="uil uil-adobe" id="lg-about-home"></i>AirLine</li>
                        <li class="list-dashboard-about"><i class="uil uil-head-side" id="lg-about-home"></i>Mercado
                            Libre</li>
                    </ul>
                </div>
            </div>
            <div class="container-card-home-left-about-home">
                <div class="container-jr-card-home-left-about-home">
                    <div class="container-img-card-about-home">
                        <img src="resources/clths1.jpg" alt="" class="img-card-about-home" />
                    </div>
                    <div class="container-card-left-about-home">
                        <h2 class="tittle-card-left-about-home">Acerca de Nosotros</h2>
                        <p class="description-card-left-about-home">¡En Tecnocell, somos apasionados por la tecnología de vanguardia y nos especializamos en ofrecer lo mejor de lo mejor. Nuestra tienda está dedicada a brindarte una experiencia única en la adquisición de celulares Samsung y Apple de alta gama!</p>
                        <a href="" class="container-card-left-links-about-home">
                            <p class="links-card-left-about-home">Mas Informacion Acerca de Nosotros</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-card-home-right-about-home">
                <div class="container-jr-card-home-right-about-home">
                    <div class="container-card-right-about-home">
                        <h2 class="tittle-card-right-about-home">Acerca de Nosotros</h2>
                        <p class="description-card-right-about-home">¡Con un equipo entusiasta y conocedor, estamos comprometidos a proporcionarte productos de primera calidad y servicios excepcionales. Ya sea que estés buscando el último modelo de iPhone o el último Samsung Galaxy, en Tecnocell encontrarás una amplia selección de dispositivos móviles que se adaptan a tus necesidades y superan tus expectativas!</p>
                        <a href="" class="container-card-right-links-about-home">
                            <p class="links-card-right-about-home">Mas Informacion Acerca de Nosotros</p>
                        </a>
                    </div>
                    <div class="container-img-card-about-home">
                        <img src="resources/clths2.jpg" alt="" class="img-card2-about-home" />
                    </div>
                </div>
            </div>
        </article>
    </div>
    <!--images-->
    <div id="contenido-derecha" class="container-father-images-home" style="display: none;">
        <!-- Contenido de la sección Images -->
        <article id="contenido-images" class="container-jr-images-home">
            <div class="container-img-images-home">
                <img src="resources/i1.jpg" alt="" class="img-banner-images-home" />
                <img src="resources/i2.jpg" alt="" class="img-banner-images-home" />
                <img src="resources/s1.jpg" alt="" class="img-banner-images-home" />
                <img src="resources/s2.jpg" alt="" class="img-banner-images-home" />
                <img src="resources/i3.jpg" alt="" class="img-banner-images-home" />
                <img src="resources/i4.jpg" alt="" class="img-banner-images-home" />
                <img src="resources/s3.jpg" alt="" class="img-banner-images-home" />
                <img src="resources/s4.jpg" alt="" class="img-banner-images-home" />
            </div>
        </article>
    </div>
    <!--videos-->
    <section id="contenido-derecha" class="container-father-videos-home" style="display: none;">
        <!-- Contenido de la sección Videos -->
        <div id="contenido-video" class="container-jr-videos-home">
            <video id="slider" autoplay muted loop class="container-video-home">
                <source src="resources/v3.mp4" type="video/mp4">
            </video>
            <ul class="navigation">
                <li onclick="videUrl('resources/vv1.mp4')" class="link-videos-home"><img src="resources/vvv1.png" alt=""
                        class="img-videos-home"></li>
                <li onclick="videUrl('resources/v2.mp4')" class="link-videos-home"><img src="resources/vvv2.png" alt=""
                        class="img-videos-home"></li>
                <li onclick="videUrl('resources/v3.mp4')" class="link-videos-home"><img src="resources/vvv3.png" alt=""
                        class="img-videos-home"></li>
                <li onclick="videUrl('resources/v4.mp4')" class="link-videos-home"><img src="resources/vvv4.png" alt=""
                        class="img-videos-home"></li>
                <li onclick="videUrl('resources/v5.mp4')" class="link-videos-home"><img src="resources/vvv5.png" alt=""
                        class="img-videos-home"></li>
            </ul>
        </div>
    </section>
    <script type="text/javascript">
        function videUrl(hmmmmm) {
            document.getElementById("slider").src = hmmmmm;
        }
    </script>
    <!--contact-->
    <section id="contenido-derecha" class="container-father-contact-home" style="display: none;">
        <div id="contenido-contact" class="container-jr-contact-home">
            <form class="container-data-contact-home">
                <div class="container-title-pricipal-contact-home">
                    <h2 class="title-principal-form-contact-home">¡Aqui nos puedes Contactar!</h2>
                </div>
                <label for="nombre" class="label-form-contact-home">Name:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Name" required class="container-input-form-contact-home"><br><br>

                <label for="apellido" class="label-form-contact-home">Last Name:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Last Name" required class="container-input-form-contact-home"><br><br>

                <label for="correo" class="label-form-contact-home">Email:</label>
                <input type="email" id="correo" name="correo" required placeholder="Email" class="container-input-form-contact-home"><br><br>

                <label for="telefono" class="label-form-contact-home">CellPhone:</label>
                <input type="tel" id="telefono" name="telefono" required placeholder="CellPhone" class="container-input-form-contact-home"><br><br>

                <label for="mensaje" class="label-form-contact-home">Messages:</label><br>
                <textarea id="mensaje" name="mensaje" rows="4" cols="30" required placeholder="Messages" class="container-input-textarea-form-contact-home"></textarea><br><br>
                <div class="container-btn-form-contact-home">
                    <input type="submit" value="Enviar" class="btn-form-contact-home">
                </div>
            </form>
            <div class="container-img-contact-home">
                <img src="resources/body-contact.png" alt="" class="img-contact-home">
            </div>
        </div>
    </section>
    <!--profile-->
    <div id="contenido-derecha" class="container-father-profile-home" style="display: none;">
        <!-- Contenido de la sección Images -->
        <article id="contenido-profile" class="container-jr-profile-home">
            <div class="contaiener-data-profile-home">
                <h2 class="title-principal-profile-home">Bienvenido <?php echo $nombre; ?> <?php echo $apellido; ?></h2>
                <p class="description-profile-home">Correo electrónico: <?php echo $correo; ?></p>
            </div>
            <video autoplay muted loop class="container-video-profile-home">
                <source src="resources/backg-profile.mp4" type="video/mp4" class="video-profile-home">
            </video>
        </article>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scroll.js"></script>
</body>

</html>