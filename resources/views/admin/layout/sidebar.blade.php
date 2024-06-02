<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#product" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="product" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('product') }}">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
          <li>
            <a href="{{ route('product.create') }}">
              <i class="bi bi-circle"></i><span>create</span>
            </a>
          </li>

        </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#testimony" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Testimony</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="testimony" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ route('testimony') }}">
                  <i class="bi bi-circle"></i><span>view</span>
                </a>
              </li>
              <li>
                <a href="{{ route('testimony.create') }}">
                  <i class="bi bi-circle"></i><span>create</span>
                </a>
              </li>

            </ul>
            </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('contact') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>




    </ul>

  </aside>
