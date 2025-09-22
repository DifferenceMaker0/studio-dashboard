<!DOCTYPE html>
<html lang="en" style="height: auto;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/regular.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

          <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif 

</head>
<body class="sidebar-mini" style="height: auto;">
<div class="wrapper"> 
   
  <x-starter::navbar />
  <x-starter::sidebar />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 818.667px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <!-- Main Container -->
      <div class="container-fluid">

        <!-- Row #1 -->
        <div class="row">
          <!-- #1.a 6-col -->
          <div class="col-lg-6">
            <span>Col 6 </span>
            <!-- a Card -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Row 1 Card 1</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.a.card -->

            <!-- b Card -->
            <div class="card card-primary card-outline">
              <div class="card-body">

                <div class="ribbon-wrapper ribbon-lg">
                  <div class="ribbon bg-info">
                    Ribbon Large
                  </div>
                </div>

                <h5 class="card-title">Row 1 Card 2</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /b.card -->

            <!-- c 4-col -->
            <div class="col-sm-4">
              <span>Col-sm-4</span>
              <!-- Ribbon Box -->
              <div class="position-relative p-3 bg-gray" style="height: 180px"> 
                <div class="ribbon-wrapper ribbon-lg">
                  <div class="ribbon bg-info">
                    Ribbon Large
                  </div>
                </div>
                <span>Ribbon Large</span> 
                <br />
                <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
              </div><!-- /.ribbonBox -->
            </div><!-- /.c.col-md-4 --> 
          </div><!-- /.1.a.col-md-6 -->

          <!-- #1.b 6-col -->
          <div class="col-lg-6">
            <!-- a Card -->
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">

                <div class="ribbon-wrapper ribbon-lg">
                  <div class="ribbon bg-info">
                    Ribbon Large
                  </div>
                </div>

                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div><!-- /a.card -->

            <!-- b Card -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div><!-- /.b.card -->
          </div><!-- /.1.b.col-md-6 -->
        </div><!-- /#1.row --> 

        <!-- Row #2 -->
        <div class="row">
          <!-- #2.a 6-col -->
          <div class="col-lg-6">

            <!-- a Progressbar -->
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
            </div><!-- /.a.progressbar --> 

            <div style="display:block;position:relative;width:100%;border:1px solid black;">
            <!-- b vstack -->
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
      <button class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
      <button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
      <button class="nav-link" id="v-pills-settings-tab" data-toggle="pill" data-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><i class="fa fa-home" aria-hidden="true"></i>Home</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><i class="fa fa-user" aria-hidden="true"></i>Profile </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><i class="fa fa-microphone-slash" aria-hidden="true"></i>Messages</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>Settings</div>
    </div>
  </div>
</div><!-- /.b.vstack -->

            <div class="hstack gap-3">
              <input class="form-control me-auto" type="text" placeholder="Add your item here..." aria-label="Add your item here...">
              <button type="button" class="btn btn-secondary">Submit</button>
              <div class="vr"></div>
              <button type="button" class="btn btn-outline-danger">Reset</button>
            </div>
            </div>

          </div><!-- /2.a.col-md-6 -->

          <!-- #2.b 6-col -->
          <div class="col-lg-6">

            <!-- a Progressbar -->
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
            </div><!-- /.a.progressbar --> 

          </div><!-- /2.b.col-md-6 --> 
        </div><!-- /#2.row --> 

        <!-- Row #3 -->
        <div class="row">
          <!-- #3.a 6-col -->
          <div class="col-lg-6"> 

            <!-- -->
            <div>  
            </div><!-- /.a. --> 

            <!-- b -->
            <div></div><!-- /.b. -->

          </div><!-- /#3.a.col-md-6 -->

          <!-- #3.b 6-col -->
          <div class="col-lg-6"> 

            <!-- a -->
            <div></div><!-- /.a. -->

            <!-- b -->
            <div></div><!-- /.b. -->

          </div><!-- /#3.b.col-md-6 --> 
        </div><!-- /#3.row --> 

        <!-- Row #4 -->
        <div class="row">
          <!-- #4.a 6-col -->
          <div class="col-lg-6"> 

            <!-- a -->
            <div></div><!-- /.a. -->

            <!-- b -->
            <div></div><!-- /.b. -->

          </div><!-- /#4.a.col-md-6 -->

          <!-- #4.b 6-col -->
          <div class="col-lg-6"> 

            <!-- a -->
            <div></div><!-- /.a. -->

            <!-- b -->
            <div></div><!-- /.b. -->

          </div><!-- /#4.b.col-md-6 -->
        </div><!-- /#4.row -->

      </div><!-- /.main-container-fluid -->
    </div><!-- /.main-content -->

  </div><!-- /.content-wrapper --> 
 
  <x-starter::control-sidebar />
  <x-starter::footer />
  <div id="sidebar-overlay"></div>

</div><!-- ./wrapper -->



<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
  
</body></html>