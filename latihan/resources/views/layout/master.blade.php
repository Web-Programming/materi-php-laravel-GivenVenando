<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
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
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
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
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search-->
            <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="bi bi-search"></i>
              </a>
            </li>
            <!--end::Navbar Search-->
            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-chat-text"></i>
                <span class="navbar-badge badge text-bg-danger">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../../dist/assets/img/user1-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-end fs-7 text-danger"
                          ><i class="bi bi-star-fill"></i
                        ></span>
                      </h3>
                      <p class="fs-7">Call me whenever you can...</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../../dist/assets/img/user8-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-end fs-7 text-secondary">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">I got your message bro</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../../dist/assets/img/user3-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-end fs-7 text-warning">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">The subject goes here</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
            <!--end::Messages Dropdown Menu-->
            <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-bell-fill"></i>
                <span class="navbar-badge badge text-bg-warning">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-envelope me-2"></i> 4 new messages
                  <span class="float-end text-secondary fs-7">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-people-fill me-2"></i> 8 friend requests
                  <span class="float-end text-secondary fs-7">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                  <span class="float-end text-secondary fs-7">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
              </div>
            </li>
            <!--end::Notifications Dropdown Menu-->
            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li>
            <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="img/gambarkartun1.png"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline">Given Venando</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="img/gambarkartun1.png"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    Given Venando
                    <small>NPM   = 2428250046</small>
                    <small>Kelas = IF2B</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <li class="user-body">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-4 text-center"><a href="#">Followers</a></div>
                    <div class="col-4 text-center"><a href="#">Sales</a></div>
                    <div class="col-4 text-center"><a href="#">Friends</a></div>
                  </div>
                  <!--end::Row-->
                </li>
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="data:image/jpeg;base64,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"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Universitas MDP</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
      @include('layout.sidebar')
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      @yield('content')
      <!--end::App Main-->
      <!--begin::Footer-->
       @include('layout.footer')
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
      crossorigin="anonymous"
    ></script>
    <!-- sortablejs -->
    <script>
      const connectedSortables = document.querySelectorAll('.connectedSortable');
      connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
          group: 'shared',
          handle: '.card-header',
        });
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>
    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>
    <!-- ChartJS -->
    <script>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      const sales_chart_options = {
        series: [
          {
            name: 'Digital Goods',
            data: [28, 48, 40, 19, 86, 27, 90],
          },
          {
            name: 'Electronics',
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
        chart: {
          height: 300,
          type: 'area',
          toolbar: {
            show: false,
          },
        },
        legend: {
          show: false,
        },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth',
        },
        xaxis: {
          type: 'datetime',
          categories: [
            '2023-01-01',
            '2023-02-01',
            '2023-03-01',
            '2023-04-01',
            '2023-05-01',
            '2023-06-01',
            '2023-07-01',
          ],
        },
        tooltip: {
          x: {
            format: 'MMMM yyyy',
          },
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options,
      );
      sales_chart.render();
    </script>
    <!-- jsvectormap -->
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
      integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
      integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
      crossorigin="anonymous"
    ></script>
    <!-- jsvectormap -->
    <script>
      const visitorsData = {
        US: 398, // USA
        SA: 400, // Saudi Arabia
        CA: 1000, // Canada
        DE: 500, // Germany
        FR: 760, // France
        CN: 300, // China
        AU: 700, // Australia
        BR: 600, // Brazil
        IN: 800, // India
        GB: 320, // Great Britain
        RU: 3000, // Russia
      };

      // World map by jsVectorMap
      const map = new jsVectorMap({
        selector: '#world-map',
        map: 'world',
      });

      // Sparkline charts
      const option_sparkline1 = {
        series: [
          {
            data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
      sparkline1.render();

      const option_sparkline2 = {
        series: [
          {
            data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
      sparkline2.render();

      const option_sparkline3 = {
        series: [
          {
            data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
      sparkline3.render();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
