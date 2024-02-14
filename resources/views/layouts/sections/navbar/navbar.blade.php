@if(!isset($navbarHideToggle))
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ?' d-xl-none ' : '' }} my-2 ms-2">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" style="font-size: 1.25rem;">
    <i class="bx bx-menu bx-md"></i>
  </a>
</div>
@endif
