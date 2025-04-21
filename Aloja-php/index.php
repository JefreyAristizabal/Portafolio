<?php
include 'config/conection.php';
$conn = conectarDB();

session_start();

$sql = "SELECT * FROM HABITACION";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="">
  <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
  <meta name="author" content="web-themes">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    .nav-link.login:hover,
    .nav-link.login:focus {
      color: white !important;
      text-decoration: none !important;
    }

    .nav-link.login:focus {
      outline: none !important;
      box-shadow: none !important;
    }

    .login {
      padding: 0.5rem !important;
      display: flex !important;
      align-items: center !important;
      gap: 1rem !important;
      font-weight: 600 !important;
      color: var(--white) !important;
      background-color: var(--primary-color) !important;
      border-radius: 100% !important;
      cursor: pointer !important;
      transition: 0.3s !important;
      text-decoration: none !important;
    }

    .login:hover {
      background-color: var(--secondary-color) !important;
    }

    .login span {
      padding: 1.8rem !important;
      font-size: 1.5rem !important;
      color: var(--primary-color) !important;
      background-color: var(--white) !important;
      border-radius: 100% !important;
      display: inline-flex !important;
      align-items: center !important; 
      justify-content: center !important;
      height: 2rem !important;
      width: 2rem !important; 
    }

    .nav-item {
      display: flex !important;
      align-items: center !important;
    }

    .navbar-nav {
      display: flex !important;
      align-items: center !important;
    }
  </style>
  <title>Aloja</title>
</head>

<body>
  <div class="container">
    <nav class="navigation">
      <div class="nav__logo" onclick="window.open('index.php', '_self')">
        <img src="img/logo.png" alt="logo" />
      </div>
      <ul class="nav__links">
        <li class="link-nav"><a href="index.php">Inicio</a></li>
        <li class="link-nav"><a href="#">Habitaciones</a></li>
        <li class="link-nav"><a href="#">Contáctanos</a></li>
        <li class="link-nav"><a href="#">Sobre Nosotros</a></li>
      </ul>
      <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
          <ul class="navbar-nav d-flex">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle login" style="border-radius: 3rem !important;"
                     href="#"
                     id="userDropdown"
                     role="button"
                     data-toggle="dropdown"
                     aria-haspopup="true"
                     aria-expanded="false">
                      <span><i class="ri-user-3-fill"></i></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">Perfil</a>
                      <a class="dropdown-item" href="#">Cambiar contraseña</a>

                      <?php if ($_SESSION['rol'] == 'ADMIN'): ?>
                          <a class="dropdown-item" href="#" onclick="window.open('php/adminsite.php', '_self')">Interfaz de admin</a>
                      <?php elseif ($_SESSION['rol'] == 'EMPLEADO'): ?>
                          <a class="dropdown-item" href="#" onclick="window.open('php/panelempleado.php', '_self')">Interfaz de Empleado</a>
                      <?php endif; ?>
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="php/logout.php">Cerrar sesión</a>
                  </div>
              </li>
          </ul>
      <?php else: ?>
          <div class="login" onclick="window.open('html/log-in.html', '_self')">
              <span><i class="ri-user-3-fill"></i></span>
          </div>
      <?php endif; ?>
    </nav>
    <nav class="second-nav">
      <ul class="nav__links-2">
        <li class="link-nav"><a href="#">Inicio</a></li>
        <li class="link-nav"><a href="#">Habitaciones</a></li>
        <li class="link-nav"><a href="#">Contáctanos</a></li>
        <li class="link-nav"><a href="#">Sobre Nosotros</a></li>
      </ul>
    </nav>
    <div class="destination__container">
      <img class="bg__img__1" src="img/bg-dots.png" alt="bg" />
      <img class="bg__img__2" src="img/bg-arrow.png" alt="bg" />
      <div class="socials">
        <span><i class="ri-twitter-fill"></i></span>
        <span><i class="ri-facebook-fill"></i></span>
        <span><i class="ri-instagram-line"></i></span>
        <span><i class="ri-youtube-fill"></i></span>
      </div>
      <div class="content">
        <h1>EXPLORA<br />RESERVA<br /><span>DISFRUTA</span></h1>
        <p>
          Aloja conecta viajeros con anfitriones, ofreciendo alojamientos únicos,
          seguros y accesibles en todo el mundo.
          Con un sistema de reservas fácil y confiable,
          te garantizamos una experiencia auténtica y cómoda en cada destino.
        </p>
        <button class="btn-ini">Contáctanos Ahora</button>
      </div>

      <div class="destination__grid">
        <div class="destination__card">
          <img src="img/destination/destination-1.jfif" alt="destination" />
          <div class="card__content">
            <h4>Edificio Oasis</h4>
            <p>
              El Edificio Oasis en Medellín ofrece diseño moderno,
              comodidad y una ubicación estratégica en la ciudad.
            </p>
            <button class="btn-ini">Ver Más</button>
          </div>
        </div>
        <div class="destination__card">
          <img src="img/destination/destination-2.jpg" alt="destination" />
          <div class="card__content">
            <h4>Residencia Los Andes</h4>
            <p>
              Residencia Los Andes en Bogotá ofrece confort,
              tranquilidad y una ubicación privilegiada en un entorno natural.
            </p>
            <button class="btn-ini">Ver Más</button>
          </div>
        </div>
        <div class="destination__card">
          <img src="img/destination/destination-3.jpg" alt="destination" />
          <div class="card__content">
            <h4>Hotel Caribe</h4>
            <p>
              El Hotel Caribe en Cartagena es un icónico hotel de lujo,
              reconocido por su elegancia, historia y ubicación frente al mar.
            </p>
            <button class="btn-ini">Ver Más</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-2">
    <div class="aloja-alojamientos">
      <h2>Aloja</h2>
      <p>
        En Aloja, ofrecemos una selección de alojamientos ideales para todo tipo de viajeros, desde modernos
        apartamentos en el centro de la ciudad y acogedoras casas familiares en barrios tranquilos hasta cabañas
        rústicas en la montaña y villas de lujo con piscina. También contamos con estudios funcionales para estancias
        cortas y habitaciones privadas en hostales para quienes buscan opciones más accesibles.
      </p>
    </div>
    <section class="section__container">
      <h2>Testimonials</h2>
      <h1>What our customers say</h1>
      <div class="section__grid">
        <div class="section__card">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4>Love the simplicity</h4>
          <p>
            They understood our brand and created a stunning website design.
            Professional, responsive, and on-time delivery. Highly recommended!
          </p>
          <img src="img/reviews/user-1.jpg" alt="user" />
          <h5>Allan Collins</h5>
          <h6>Managing Director</h6>
        </div>
        <div class="section__card">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4>Excellent Designs</h4>
          <p>
            Efficient, reliable, and results-oriented. Visually appealing
            website, improved online visibility. Highly recommended!
          </p>
          <img src="img/reviews/user-2.jpg" alt="user" />
          <h5>Tanya Grant</h5>
          <h6>Ceo & Founder</h6>
        </div>
        <div class="section__card">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4>Efficient and Reliable</h4>
          <p>
            Best decision we made. Stunning website, exceptional support. Always
            available and prompt issue resolution. Hassle-free experience!
          </p>
          <img src="img/reviews/user-3.jpg" alt="user" />
          <h5>Clay Washington</h5>
          <h6>Fashion Designer</h6>
        </div>
      </div>
    </section>
    <div class="container-carousel my-5">
      <h2 class="mb-4 title-carousel">Destinos más populares</h2>
      <div class="slider-container">
        <button class="slider-btn left" id="prevBtn"><i class="bi bi-chevron-left"></i></button>
        <div class="slider-track " id="sliderTrack" style="transform: translateX(0px);">
          <div class="slider-item card">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/eb/1f/cb/outdoor-pool.jpg?w=1200&amp;h=-1&amp;s=1" class="card-img-top" alt="Barranquilla">
            <div class="card-body">
              <h5 class="card-title">Barranquilla</h5>
            </div>
          </div>
          <div class="slider-item card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkZ39An4RTUPbiVKwybrn07AB7NPegEA4XOQ&amp;s" class="card-img-top" alt="Santa Marta">
            <div class="card-body">
              <h5 class="card-title">Santa Marta</h5>
            </div>
          </div>
          <div class="slider-item card">
            <img src="https://image-tc.galaxy.tf/wijpeg-31cp8djaxhqlkidjc7eqxhmcf/imagen-principal-jpg-2.jpg?width=1920" class="card-img-top" alt="París">
            <div class="card-body">
              <h5 class="card-title">París</h5>
            </div>
          </div>
          <div class="slider-item card">
            <img src="https://media.staticontent.com/media/pictures/32546000-d18a-4f9c-a379-6fcbd8fc3982/378x200?op=NONE&amp;enlarge=false&amp;gravity=ce_0_0&amp;quality=80" class="card-img-top" alt="Villa de Leyva">
            <div class="card-body">
              <h5 class="card-title">Villa de Leyva</h5>
            </div>
          </div>
          <div class="slider-item card">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/501583198.jpg?k=cab318a4d36b870776abfb8eeaa2d78311d63ea9897e4e03d5cfeb84fe5b5641&amp;o=&amp;hp=1" class="card-img-top" alt="Villa de Leyva">
            <div class="card-body">
              <h5 class="card-title">Villa de Leyva</h5>
            </div>
          </div>
          <div class="slider-item card">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/501583198.jpg?k=cab318a4d36b870776abfb8eeaa2d78311d63ea9897e4e03d5cfeb84fe5b5641&amp;o=&amp;hp=1" class="card-img-top" alt="Villa de Leyva">
            <div class="card-body">
              <h5 class="card-title">Villa de Leyva</h5>
            </div>
          </div>
          <div class="slider-item card">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/501583198.jpg?k=cab318a4d36b870776abfb8eeaa2d78311d63ea9897e4e03d5cfeb84fe5b5641&amp;o=&amp;hp=1" class="card-img-top" alt="Villa de Leyva">
            <div class="card-body">
              <h5 class="card-title">Villa de Leyva</h5>
            </div>
          </div>
        </div>
        <button class="slider-btn right" id="nextBtn"><i class="bi bi-chevron-right"></i></button>
      </div>
    </div>
    <script>
      
      const sliderContainer = document.querySelector('.slider-container');
      const sliderTrack = document.getElementById('sliderTrack');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
      
      let isMouseDown = false;
      let startX;
      let currentPosition = 0;
      let scrollLeft;
      
      // Función para ajustar la posición del carrusel
      function clampPosition() {
        const containerWidth = sliderContainer.offsetWidth;
        const trackWidth = sliderTrack.scrollWidth;
      
        if (-currentPosition > trackWidth - containerWidth) {
          currentPosition = -(trackWidth - containerWidth);
        }
      
        if (currentPosition > 0) {
          currentPosition = 0;
        }
      
        sliderTrack.style.transform = `translateX(${currentPosition}px)`; // Aplicar el desplazamiento
      }
      
      // Eventos para los botones "Prev" y "Next"
      nextBtn.addEventListener('click', () => {
        currentPosition -= 260; // Desplazamiento a la derecha
        clampPosition();
      });
      
      prevBtn.addEventListener('click', () => {
        currentPosition += 260; // Desplazamiento a la izquierda
        clampPosition();
      });
      
      // Evento de redimensionamiento de la ventana
      window.addEventListener('resize', clampPosition);
      
      // ARRASTRE: Manejamos el arrastre del carrusel con el ratón y la pantalla táctil
      function handleDragStart(e) {
        isMouseDown = true;
        startX = e.pageX || e.touches[0].pageX; // Posición inicial del ratón o toque
        scrollLeft = currentPosition; // Guardamos la posición actual
        sliderContainer.style.cursor = 'grabbing'; // Cambiar el cursor a "agarrando"
        e.preventDefault(); // Prevenir selección de texto
      }
      
      function handleDragMove(e) {
        if (!isMouseDown) return; // Si no estamos arrastrando, no hacer nada
      
        const x = e.pageX || e.touches[0].pageX; // Posición del ratón o toque actual
        const walk = (x - startX); // Calculamos la diferencia con la posición inicial
      
        // Cambiar la dirección del desplazamiento
        currentPosition = scrollLeft + walk; // Invertimos la dirección
      
        clampPosition(); // Aplicamos la nueva posición, con límites
      }
      
      function handleDragEnd() {
        isMouseDown = false;
        sliderContainer.style.cursor = 'default'; // Restauramos el cursor al estado predeterminado
      }
      
      // Evitamos el estilo grab en hover
      sliderContainer.style.cursor = 'default';  // Establecer el cursor predeterminado (sin grab) cuando se hace hover
      
      // Eventos para el ratón (escritorio)
      sliderContainer.addEventListener('mousedown', handleDragStart);
      sliderContainer.addEventListener('mousemove', handleDragMove);
      sliderContainer.addEventListener('mouseup', handleDragEnd);
      sliderContainer.addEventListener('mouseleave', handleDragEnd);
      
      // Eventos para la pantalla táctil (móviles)
      sliderContainer.addEventListener('touchstart', handleDragStart);
      sliderContainer.addEventListener('touchmove', handleDragMove);
      sliderContainer.addEventListener('touchend', handleDragEnd);
      sliderContainer.addEventListener('touchcancel', handleDragEnd);
      
      
  
    </script>
    <div class="card_wrapper">
      <div class="container-carousel">
          <div class="row-carousel">
              <div class="col-12 text-center">
                  <h2 class="head_text">Habitaciones Destacadas</h2>
                  <p class="head_para">Aenean at ligula massa. Donec ipsum elit, placenta sed duierrut<br> dapibus semper turpin Fusce nec premium nuns.</p>
              </div>
              <div class="col-12">
                  <div class="owl-carousel slider_carousel">
                      <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="php/imagenes_habitaciones/<?php echo basename ($row['IMAGEN']); ?>" alt="Habitación">
                            <div class="card_text">
                                <h4><?php echo $row['NOMBRE']; ?></h4>
                                <p>Capacidad: <?php echo $row['CAPACIDAD']; ?> Personas</p>
                            </div>
                        </div>
                      <?php endwhile; ?>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        
        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                loop: false,
                margin: 15,
                stagePadding: 35,
                autoplay: false,
                nav: true,
                navText: ["<i class='far fa-arrow-alt-circle-left'></i>","<i class='far fa-arrow-alt-circle-right'></i>"/*<i class='far fa-arrow-alt-circle-right'></i>*/],
                autoplayTimeout: 1500,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                }
            });
        }
        slider_carouselInit();

    </script>
    <h1 class="title-services">Nuestros Servicios</h1>
    <div class="services">
      <div class="services-grid">
        <div class="services-item">
          <div class="services-icon"><i class="fa-solid fa-wifi"></i><h2>Wi-Fi</h2></div>
          <p>Conéctate sin problemas en todo el hotel con nuestro internet de alta velocidad, disponible en todas las áreas.</p>
        </div>
        <div class="services-item">
          <div class="services-icon"><i class="fa-solid fa-tv"></i><h2>Televisión</h2></div>
          <p>Disfruta de una selección de canales nacionales e internacionales en tu habitación para un entretenimiento completo.</p>
        </div>
        <div class="services-item">
          <div class="services-icon"><i class="fa-solid fa-shirt"></i><h2>Lavandería</h2></div>
          <p>Ofrecemos servicio de lavandería y planchado, con opciones exprés para tu comodidad.</p>
        </div>
        <div class="services-item">
          <div class="services-icon"><i class="fa-solid fa-bowl-food"></i><h2>Alimentación</h2></div>
          <p>Deléitate con opciones gastronómicas frescas y deliciosas, desde un desayuno buffet hasta cenas gourmet. También ofrecemos servicio a la habitación.</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="row">
      <div class="col-footer">
        <img src="img/logo.png" alt="Logo" class="logo-footer">
        <p>Aloja te conecta con los mejores alojamientos, desde acogedoras cabañas hasta modernos apartamentos, para que
          disfrutes de una estancia única y cómoda en cualquier destino.</p>
      </div>
      <div class="col-footer">
        <h3>Office <div class="underline"><span></span></div>
        </h3>
        <p>ITPL Road</p>
        <p>Withefield, Bangalore</p>
        <p>Karnataka, PIN 560066, India</p>
        <p class="email-id">jefreyarisprecian@gmail.com</p>
        <h4>+57 - 3185173933</h4>
      </div>
      <div class="col-footer">
        <h3>Links <div class="underline"><span></span></div>
        </h3>
        <ul>
          <li><a href="">Inicio</a></li>
          <li><a href="">Habitaciones</a></li>
          <li><a href="">Contáctanos</a></li>
          <li><a href="">Sobre Nosotros</a></li>
        </ul>
      </div>
      <div class="col-footer">
        <h3>Redes Sociales <div class="underline"><span></span></div>
        </h3>
        <div class="social-icons-footer">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-whatsapp"></i>
          <i class="fa-brands fa-instagram"></i>
        </div>
      </div>
      <hr class="footer-line">
      <p class="copyright">Aloja &copy; 2025 - Todos Los Derechos Reservados</p>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/472897ad37.js" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>