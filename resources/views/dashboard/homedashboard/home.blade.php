@include('layout._header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       @include('layout._sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->

            <div id="content">
             
                <!-- Topbar -->
            @include('layout._topbar')
                <!-- End of Topbar -->
               
                <div class="container-fluid pb-2 mb-2">
                
                @yield('content')
                </div>
               
                <!-- Begin Page Content -->
        
      
        <!-- End of Content Wrapper -->
   
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layout.profile._profilemodal')
    @include('layout._logoutmodal')
  
   
   @include('layout._footer')

</body>

</html>