<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('dashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <span class="text-primary">
          <h3>KRCT</h3>
        </span>
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2"></span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
    </a>
  </div>

  <div class="menu-divider mt-0"></div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->

    {{-- <li class="menu-item active open"> --}}


    <li class="menu-item">
      <a href="{{ url('dashboard/') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{ route('userContactList') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Site Contacts</div>

        <?php 
          use App\Models\UserContact;
          $newMsgCount = UserContact::where('read_status', 0)->get();
        ?>

        <span class="badge rounded-pill bg-danger ms-auto">{{ count($newMsgCount) }}</span>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{ route('topHeader') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Top Header</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('slider') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Slider</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('eventNotice') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Event Notice</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{ route('bot') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Board Of Trustees</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{ route('aboutUs') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">About Us</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('missionVission') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Mission/Vission</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('chairperson') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Chairman Section</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('krctService') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Services</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Media</div>
      </a>
    </li>



    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Gallery Section</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="{{ route('backendGllery') }}" class="menu-link">
            <div class="text-truncate" data-i18n="Gallery">Gallery</div>
          </a>
        </li>
        <li class="menu-item active">
          <a href="{{ route('category') }}" class="menu-link">
            <div class="text-truncate" data-i18n="Analytics">Category</div>
          </a>
        </li>
      </ul>
    </li>




    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Team</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="{{ route('krctStaff') }}" class="menu-link">
            <div class="text-truncate" data-i18n="Gallery">Staff</div>
          </a>
        </li>
        <li class="menu-item active">
          <a href="{{ route('volunteerBackend') }}" class="menu-link">
            <div class="text-truncate" data-i18n="Analytics">Volunteers</div>
          </a>
        </li>
      </ul>
    </li>






    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Medical Info</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="" class="menu-link">
            <div class="text-truncate" data-i18n="Gallery">Online Serial</div>
          </a>
        </li>
        <li class="menu-item active">
          <a href="" class="menu-link">
            <div class="text-truncate" data-i18n="Analytics">Page Info Setup</div>
          </a>
        </li>
      </ul>
    </li>


    <li class="menu-item">
      <a href="{{ route('newsAndArticles') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">News & Articles</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('donateNow') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Donate Section</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{ route('testimonial') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Testimonial</div>
      </a>
    </li>




    <li class="menu-item">
      <a href="{{ route('smallGallery') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Footer Small Gallery</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Basic">Footer</div>
      </a>
    </li>

    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Dropdown Example</div>
        <span class="badge rounded-pill bg-danger ms-auto">5</span>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="index.html" class="menu-link">
            <div class="text-truncate" data-i18n="Analytics">Analytics</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="index.html" class="menu-link">
            <div class="text-truncate" data-i18n="Analytics">Analytics</div>
          </a>
        </li>
      </ul>
    </li>

  </ul>
</aside>