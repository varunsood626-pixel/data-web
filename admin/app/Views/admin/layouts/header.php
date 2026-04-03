<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Datar Admin Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Datar Admin Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="Datar Admin Dashboard"
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
    <style>
        .app-header .icon-b {
            font-size: 28px;
            color: #3b9ce6;
        }
        .app-header .nav-link {
            height: 1.5rem;
            width: 2em;
        }
            .sidebar-wrapper .nav-treeview > .nav-item > .nav-link:hover {
                background-color:#0a5cab;
            }        .sidebar-wrapper .nav-treeview > .nav-item > .nav-link.active, .sidebar-wrapper .nav-treeview > .nav-item > .nav-link.active:hover, .sidebar-wrapper .nav-treeview > .nav-item > .nav-link.active:focus{
            background-color: #0a5cab;
        }
        .flex-column a {
            text-decoration: none;
        }
        .sidebar-brand .brand-link .brand-image {
            max-height: 40px;
        }
        
        .btn-check:checked + .btn, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show{
            background-color: #0a5cab;
        }
        
        
        
        .hamburger { position: relative; left: 0; top: 0; }

        .hamburger { cursor: pointer; padding: 15px 35px 16px 0px; }
        .hamburger span, .hamburger span:before, .hamburger span:after {
          cursor: pointer;
          border-radius: 1px;
          height: 3px;
          width: 35px;
          background: #0a5cab;
          position: absolute;
          display: inline-block;
          content: '';
        }
        .hamburger span:before {
          top: -10px; 
        }
        .hamburger span:after {
          bottom: -10px;
        }
        /*
        #hamburger span, #hamburger span:before, #hamburger span:after {
          transition: all 200ms ease-in-out;
        }
        */
        .hamburger span, .hamburger span:before, .hamburger span:after {
        -webkit-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); 
           -moz-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); 
             -o-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); 
                transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); /* easeInOutCubic */
        }
        .hamburger.active span {
          background-color: transparent;
        }
        .hamburger.active span:before, .hamburger.active span:after {
          top: 0;
        }
        .hamburger.active span:before {
          transform: rotate(45deg);
        }
        .hamburger.active span:after {
          transform: translateY(-10px) rotate(-45deg);
          top: 10px;
        }
        
        
        .sign-out {
            width: 80px;
            padding: 5px;
            background: #0a5cab;
            border: 1px #0a5cab solid;
            color: white;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            border-radius: 4px;
            font-weight: 500;
        }
        .sign-out:hover {
                background: #0a5cab;
                border: 1px #0a5cab solid;
                color: white;
            }
        
        
    </style>

  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link icon-b hamburger active" data-lte-toggle="sidebar" href="#" role="button">
                <!--<i class="bi bi-list"></i>-->
                <span></span>
              </a>
            </li>
            
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            
            
            <!--end::Notifications Dropdown Menu-->
            <!--begin::Fullscreen Toggle-->
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="#" data-lte-toggle="fullscreen">-->
            <!--    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>-->
            <!--    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>-->
            <!--  </a>--> 
            <!--</li>-->
            <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item">
                <a href="<?=base_url();?>login/logout" class="btn btn-default btn-flat float-end text-white sign-out">Sign out</a>
            </li>
        
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->