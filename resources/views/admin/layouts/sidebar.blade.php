 <div class="left side-menu">
     <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
         <i class="mdi mdi-close"></i>
     </button>

     <!-- LOGO -->
     <div class="topbar-left">
         <div class="text-center">
             <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Urora</a>-->
             <a href="index.html" class="logo">
                 <img src="{{ asset('backend') }}/assets/images/logo-lg.png" alt="" class="logo-large">
             </a>
         </div>
     </div>

     <div class="sidebar-inner slimscrollleft" id="sidebar-main">

         <div id="sidebar-menu">
             <ul>
                 <li class="menu-title">Main</li>

                 <li>
                     <a href="{{ route('dashboard') }}" class="waves-effect">
                         <i class="mdi mdi-view-dashboard"></i>
                         <span> Dashboard
                             <span class="badge badge-pill badge-primary float-right">7</span>
                         </span>
                     </a>
                 </li>
                 <li class="menu-title">Property</li>
                 <li class="has_sub">
                     <a href="{{ route('category.index') }}" class="waves-effect">
                         <i class="mdi mdi-animation"></i>
                         <span>List Kategori</span>
                     </a>
                 </li>
                 <li class="has_sub">
                     <a href="{{ route('proprety.index') }}" class="waves-effect">
                         <i class="mdi mdi-home-variant"></i>
                         <span> List Propreti </span>
                     </a>
                 </li>
                 <li class="has_sub">
                     <a href="{{ route('image.index') }}" class="waves-effect">
                         <i class="mdi mdi-folder-image"></i>
                         <span> Foto Ruangan </span>
                     </a>
                 </li>
                 <li class="menu-title">Berita</li>

                 <li class="has_sub">
                     <a href="{{ route('news.index') }}" class="waves-effect">
                         <i class="mdi mdi-newspaper"></i>
                         <span> List Berita </span>
                     </a>
                 </li>

                 <li class="menu-title">Settings</li>

                 <li class="has_sub">
                     <a href="{{ route('slider.index') }}" class="waves-effect">
                         <i class="mdi mdi-folder-multiple-image"></i>
                         <span> Slider </span>
                     </a>
                 </li>

                 <li class="has_sub">
                     <a href="{{ route('product.index') }}" class="waves-effect">
                         <i class="mdi mdi-cart"></i>
                         <span>Produk Ungulan</span>
                     </a>
                 </li>
             </ul>
         </div>
         <div class="clearfix"></div>
     </div>
     <!-- end sidebarinner -->
 </div>
