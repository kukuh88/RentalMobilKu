   <!-- ======= Header ======= -->
   {{-- <header id="header" class="header fixed-top d-flex align-items-center"> --}}
   <header id="header" class="header fixed-top d-flex align-items-center">

       <div class="d-flex align-items-center justify-content-between">
           <a href="/dashboard" class="logo d-flex align-items-center">
               {{-- <img src="{{ asset('admin/assets/img/logo.png') }}" alt=""> --}}
               <span class="d-none d-lg-block">Rental Mobilku</span>
           </a>

           <i class="bi bi-list toggle-sidebar-btn"></i>


       </div><!-- End Logo -->

       <nav class="header-nav ms-auto">
           <ul class="d-flex align-items-center">

               <li class="nav-item d-block d-lg-none">
                   <a class="nav-link nav-icon search-bar-toggle " href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                       <form class="nav-link bg-white border-0" id="frm-logout" action="{{ route('logout') }}"
                           method="POST" style="display: none;">
                           {{ csrf_field() }}<i class="bi bi-box-arrow-left"></i>
                           <span data-feather="log-out "></span>
                       </form>
                       <button type="submit" class="nav-link bg-white border-0"><i class="bi bi-box-arrow-left"></i>
                           <span data-feather="log-out "></span>
                       </button>
                   </a>
               </li>


               <li class=" nav-item d-block d-lg-none nav-item dropdown">

                   <a class="nav-link nav-icon search-bar-toggle" href="#" data-bs-toggle="dropdown">

                       <i class="bi bi-gear"></i>
                   </a><!-- End Profile Iamge Icon -->

                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                       <li class="dropdown-header">

                           {{-- <h6>PT DAK</h6> --}}
                       </li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>

                       <li>
                           <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                               <i class="bi bi-person"></i>
                               <span>My Profile</span>
                           </a>
                       </li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>

                       <li>
                           <a class="dropdown-item d-flex align-items-center" href="/bug">
                               <i class="bi bi-question-circle"></i>
                               <span>Need Help?</span>
                           </a>
                       </li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>

                       <li>
                           <a class="dropdown-item d-flex align-items-center">
                               <form action="/logout" method="POST">
                                   @csrf
                                   <button type="submit" class="nav-link bg-white border-0"><i
                                           class="bi bi-box-arrow-left"></i>
                                       Sign Out<span data-feather="log-out "></span>
                                   </button>
                               </form>
                           </a>
                       </li>

                   </ul><!-- End Profile Dropdown Items -->
               </li><!-- End Profile Nav -->

               <li class="nav-item dropdown">

                   <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                       <i class="bi bi-bell"></i>
                       <span class="badge bg-primary badge-number">0</span>
                   </a><!-- End Notification Icon -->

                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                       <li class="dropdown-header">
                           You have new notifications
                           <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                       </li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>

                       <li class="notification-item">
                   </ul><!-- End Notification Dropdown Items -->

               </li><!-- End Notification Nav -->


               <li class="nav-item dropdown pe-3">

                   <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                       data-bs-toggle="dropdown">

                       <span class="d-none d-md-block dropdown-toggle ps-2">Setting</span>
                   </a><!-- End Profile Iamge Icon -->

                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                       <li class="dropdown-header">

                           <h6>PT DAK</h6>
                       </li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>

                       <li>
                           <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                               <i class="bi bi-person"></i>
                               <span>My Profile</span>
                           </a>
                       </li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>

                       <li>
                           <a class="dropdown-item d-flex align-items-center" href="/bug">
                               <i class="bi bi-question-circle"></i>
                               <span>Need Help?</span>
                           </a>
                       </li>
                       <li>
                           <hr class="dropdown-divider">
                       </li>

                       <li>
                           <a class="dropdown-item d-flex align-items-center">
                               <form action="/logout" method="POST">
                                   @csrf
                                   <button type="submit" class="nav-link bg-white border-0"><i
                                           class="bi bi-box-arrow-left"></i>
                                       Sign Out<span data-feather="log-out "></span>
                                   </button>
                               </form>
                           </a>
                       </li>

                   </ul><!-- End Profile Dropdown Items -->
               </li><!-- End Profile Nav -->

           </ul>
       </nav><!-- End Icons Navigation -->

   </header><!-- End Header -->
