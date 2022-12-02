<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="../../vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
            <a class="navbar-brand brand-logo" href="{{route('home.index')}}"
              ><img src="{{asset('images/logo.svg')}}" alt="logo"
            /></a>
            <a class="navbar-brand brand-logo-mini" href="{{route('home.index')}}"
              ><img src="{{asset('images/logo-mini.svg')}}" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>



        <!-- /////////////////////////////////////////////////////// -->







        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
            <a class="navbar-brand brand-logo" href="{{route('home.index')}}"
              ><img src="images/logo.svg" alt="logo"
            /></a>
            <a class="navbar-brand brand-logo-mini" href="{{route('home.index')}}"
              ><img src="images/logo-mini.svg" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>

        <!-- .......//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        
      <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-search d-none d-lg-block w-100">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search now"
                  aria-label="search"
                  aria-describedby="search"
                />
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-1">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-message-text mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="messageDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Messages
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="images/faces/face4.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="images/faces/face2.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="images/faces/face3.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Johnson</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
              <img
                      src="{{asset('images/faces/face5.jpg')}}"
                      alt="image"
                      class="profile-pic"
                    />
                <span class="nav-profile-name">Louis Barnett</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>





        






        <!-- /////////////////////////////////////// -->
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home.index')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home.index')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Edit</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home.index')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">View</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home.index')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Delete</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">









            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                      <h2>All Your Student Data,</h2>
                      <p class="mb-md-0">Your analytics database.</p>
                    </div>
                    <div class="d-flex">
                      <i class="mdi mdi-home text-muted hover-cursor"></i>
                      <p class="text-muted mb-0 hover-cursor">
                        &nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;
                      </p>
                      <p class="text-primary mb-0 hover-cursor">Analytics</p>
                    </div>
                  </div>
                  <div
                    class="d-flex justify-content-between align-items-end flex-wrap"
                  >
                    <button
                      type="button"
                      class="btn btn-light bg-white btn-icon me-3 d-none d-md-block"
                    >
                      <i class="mdi mdi-download text-muted"></i>
                    </button>
                    <button
                      type="button"
                      class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0"
                    >
                      <i class="mdi mdi-clock-outline text-muted"></i>
                    </button>
                    <button
                      type="button"
                      class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0"
                    >
                      <i class="mdi mdi-plus text-muted"></i>
                    </button>
                    <button class="btn btn-primary mt-2 mt-xl-0">
                      Generate report
                    </button>
                  </div>
                </div>
              </div>










              <div class="col-md-6 mx-auto grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update your Data</h4>
                    <form action="/home/{{$data->id}}/edit" method="post" class="forms-sample">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input
                          type="text"
                          value="{{$data->name}}"
                          name="name"
                          class="form-control"
                          id="exampleInputUsername1"
                          placeholder="Enter Product Category Name"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Roll </label>
                        <input
                          type="number"
                          value="{{$data->roll}}"
                          name="roll"
                          class="form-control"
                          id="exampleInputUsername1"
                          placeholder="Enter Product Category Name"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Phone</label>
                        <input
                          type="number"
                          value="{{$data->phone}}"
                          name="phone"
                          class="form-control"
                          id="exampleInputUsername1"
                          placeholder="Enter Product Category Name"
                        />
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input
                          type="email"
                          value="{{$data->email}}"
                          name="name"
                          class="form-control"
                          id="exampleInputUsername1"
                          placeholder="Enter Product Category Name"
                        />
                      </div> -->
                      <button type="submit" class="btn btn-primary me-2">
                        Update
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
        <!-- <div class="main-panel">
          <div class="content-wrapper">
            
          </div>
      </div> -->

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
