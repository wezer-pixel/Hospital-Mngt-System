<nav class="sidebar sidebar-offcanvas shadow-xl" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      Kenyan Doctors
    </div>

    <ul class="nav">

      <li class="nav-item nav-category p-2">
        <span class="nav-link">Navigation</span>
      </li>

      <li class="nav-item menu-items py-1 px-2">
        <a class="nav-link" href="{{url('show_doctor')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Doctors</span>
        </a>
      </li>

      <li class="nav-item menu-items p-2">
        <a class="nav-link" href="{{url('add_doctor_view')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Doctors</span>
        </a>
      </li>

      <li class="nav-item menu-items p-2">
        <a class="nav-link" href="{{url('show_appointment')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li>


    </ul>
  </nav>
