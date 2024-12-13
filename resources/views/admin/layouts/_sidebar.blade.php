<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
        <!--begin::Brand Image--> <img src="{{asset('/dist/assets/img/AdminLTELogo.png')}}" alt="GST  Logo"
          class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span
          class="brand-text fw-light">Gst Billing</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
      <nav class="mt-2"> <!--begin::Sidebar Menu-->
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
          
            <li class="nav-item"> 
                <a href="{{ url('admin/dashboard') }}" class="nav-link @if (Request::segment(2) == 'dashboard') active @endif"> 
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>Dashboard</p>
                </a> 
            </li>
            


          <li class="nav-item"> 
            <a href="{{ url('admin/parties_type') }}" class="nav-link @if (Request::segment(2) == 'parties_type') active @endif"> 
                <i class="nav-icon bi bi-person"></i>
                <p>Parties Types</p>
            </a> 
        </li>


        <li class="nav-item"> 
          <a href="{{ url('admin/parties') }}" class="nav-link @if (Request::segment(2) == 'parties_type') active @endif"> 
              <i class="nav-icon bi bi-person"></i>
              <p>Parties</p>
          </a> 
      </li>



      <li class="nav-item"> 
        <a href="{{ url('admin/gst_bills') }}" class="nav-link @if (Request::segment(2) == 'gst_bills') active @endif"> 
            <i class="nav-icon bi bi-person"></i>
            <p>GST Bills</p>
        </a> 
    </li>


    
    <li class="nav-item"> 
      <a href="{{ url('admin/my_account') }}" class="nav-link @if (Request::segment(2) == 'my_account') active @endif"> 
          <i class="nav-icon bi bi-person"></i>
          <p>My Account</p>
      </a> 
  </li>


        
        </ul> <!--end::Sidebar Menu-->
      </nav>
    </div> <!--end::Sidebar Wrapper-->
  </aside>