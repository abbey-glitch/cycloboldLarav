@include("includes.head")
<body class="sidebar-dark">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include("includes.top-strip-nav")
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="dashboard-header d-flex flex-column grid-margin">
            <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
              <div class="d-flex align-items-center">
                <h4 class="mb-0 font-weight-bold">Welcome {{ auth()->guard('admin')->user()->firstname }}!</h4>
                <span class="tx-12 mx-3"></span>
                <div class="d-none d-md-flex">
                  <p class="text-muted mb-0 tx-13 cursor-pointer">Home</p>
                  <i class="mdi mdi-chevron-right text-muted"></i>
                  <p class="text-muted mb-0 tx-13 cursor-pointer">Dashboard</p>
                </div>
              </div>
              
            </div>
     
          </div>

          <div class="row"></div>


          <div class="row">
            <div class="col-xl-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Limited Access</h6>
                  <p class="mb-2 text-muted"><strong>Your access is limited on this platform.</strong></p>
                  <p class="mb-2 text-muted">Contact an Administrator with the right privileges</p>
                  <hr>
                  <p>{{ $message  ?? "" }}</p>
                  
                  <p>Click here to <u><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('logout') }}
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            
                            @csrf
                      </form>
              </a></u></p>
                  <div class="table-responsive mt-5">
                        

                  </div>
                </div>
              </div>
            </div>
                <div class="col-xl-4 grid-margin stretch-card">
              <div class="row">
                <div class="col-md-6 col-xl-12 stretch-card grid-margin">
         
                </div>
                <div class="col-md-6 col-xl-12 grid-margin-md grid-margin-xl-0 stretch-card">
            
                </div>
              </div>
            </div>
          </div>



        </div>
        <!-- content-wrapper ends -->
          @include("includes.footer")
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <script type="text/javascript">
  



  </script>
</body>


</html>

