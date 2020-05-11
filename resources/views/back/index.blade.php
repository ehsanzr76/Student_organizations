@include('back.header')

<body main-theme-layout="rtl">
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="loader bg-white">
      <div class="whirly-loader"> </div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper">
    <!-- Page Header Start-->
    @include('back.topnav')
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">

      <!-- Page Sidebar Start-->
      @include('back.sidebar')
      <!-- Page Sidebar Ends-->
      <!-- Right sidebar Start-->

      <!-- Right sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">


          @include('back.bottom-topnav')
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

          salam

        </div>


        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      @include('back.footer')