<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="{{ route('home') }}" class="nav__logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 50px;">
            </a>
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="{{ route('home') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Home</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="{{ route('about') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>About Us</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Projects</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Studio</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="{{ route('contact') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Contact</span>
                     </a>
                  </li>
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-large-line"></i>
               </div>

               <div class="nav__social">
                  <a href="https://www.instagram.com/" target="_blank" class="nav__social-link">
                     <i class="ri-instagram-line"></i>
                  </a>

                  <a href="https://github.com/" target="_blank" class="nav__social-link">
                     <i class="ri-github-line"></i>
                  </a>

                  <a href="https://dribbble.com/" target="_blank" class="nav__social-link">
                     <i class="ri-dribbble-line"></i>
                  </a>

                  <a href="https://www.linkedin.com/" target="_blank" class="nav__social-link">
                     <i class="ri-linkedin-box-line"></i>
                  </a>
               </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line"></i>
            </div>
         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <main>
         <!-- Insert page sections -->
      </main>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>
