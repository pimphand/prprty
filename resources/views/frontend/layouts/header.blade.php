      <!--*********************************************************************************************************-->
      <!--HEADER **************************************************************************************************-->
      <!--*********************************************************************************************************-->
      <header id="ts-header" class="fixed-top">

          <!-- SECONDARY NAVIGATION
        =============================================================================================================-->

          <!--PRIMARY NAVIGATION
        =============================================================================================================-->
          <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
              <div class="container">

                  <!--Brand Logo-->
                  <a class="navbar-brand" href="{{ route('home') }}">
                      <img src="{{ asset('frontend') }}/assets/img/logo.png" alt="">
                  </a>

                  <!--Responsive Collapse Button-->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary"
                      aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <!--Collapsing Navigation-->
                  <div class="collapse navbar-collapse" id="navbarPrimary">

                      <!--LEFT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                      <ul class="navbar-nav">

                          <!--HOME (Main level)
                        =============================================================================================-->
                          <li class="nav-item">
                              <!--Main level link-->
                              <a class=" nav-link {{ request()->is('/') ? 'active' : '' }}"
                                  href="{{ route('home') }}">
                                  Home
                              </a>
                          </li>
                          <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                              <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                          </li>
                          <!--end HOME nav-item-->
                          <li class="nav-item {{ request()->is('propety') ? 'active' : '' }}">
                              <a class="nav-link mr-2" href="{{ route('propety') }}">Properti</a>
                          </li>
                          <!--LISTING (Main level)
                        =============================================================================================-->
                          <li class="nav-item {{ request()->is('berita') ? 'active' : '' }}">

                              <!--Main level link-->
                              <a class="nav-link" href="{{ route('news') }}">Berita</a>

                          </li>
                          <!--end LISTING nav-item-->

                          <!--PAGES (Main level)
                            
                        =============================================================================================-->
                          <li class="nav-item {{ request()->is('berita') ? 'active' : '' }}">
                              <a class="nav-link mr-2" href="{{ route('contact') }}">Kontak</a>
                          </li>

                          <!--end CONTACT nav-item-->

                      </ul>
                      <!--end Left navigation main level-->

                      <!--RIGHT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                      <ul class="navbar-nav ml-auto">

                          <!--LOGIN (Main level)
                        =============================================================================================-->
                          {{-- <li class="nav-item">
                              <a class="nav-link" href="login.html">Login</a>
                          </li>

                          <!--REGISTER (Main level)
                        =============================================================================================--> --}}

                          <!--SUBMIT (Main level)
                        =============================================================================================-->
                          {{-- <li class="nav-item">
                              <a class="nav-link text-dark" href="register.html">Register</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
                          </li> --}}

                      </ul>
                      <!--end Right navigation-->

                  </div>
                  <!--end navbar-collapse-->
              </div>
              <!--end container-->
          </nav>
          <!--end #ts-primary-navigation.navbar-->

      </header>
      <!--end Header-->
