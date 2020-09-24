<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{Route('home')}}" class="nav-link">Acceuil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{Route('vente.index')}}" class="nav-link">Vente</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
      @include('partials.search')

    <!-- Right navbar links -->
    <ul class="navbarr-nav ml-auto">
      
      <li class="nav-item">
          <i class="fa fa-sign-out"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->