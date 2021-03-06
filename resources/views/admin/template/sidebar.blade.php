<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboardadmin" class="nav-link {{ Request::is('dashboardadmin') ? 'active' : '' }}">
              <span data-feather="shopping-cart"></span>
              Semua Pesanan
            </a>
          </li>
          <li class="nav-item">
            <a href="/pelanggan" class="nav-link {{ Request::is('/pelanggan') ? 'active' : '' }}">
              <span data-feather="user"></span>
              Pelanggan
            </a>
          </li>
        </ul>
      </div>
    </nav>