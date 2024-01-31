 <!-- Bootstrap core JavaScript-->
 <script src={{asset("my_dashboard/vendor/jquery/jquery.min.js")}}></script>
 <script src={{asset("my_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

 <!-- Core plugin JavaScript-->
 <script src={{asset("my_dashboard/vendor/jquery-easing/jquery.easing.min.js")}}></script>

 <!-- Custom scripts for all pages-->
 <script src={{asset("my_dashboard/js/sb-admin-2.min.js")}}></script>

 <!-- Page level plugins -->
 <script src={{asset("my_dashboard/vendor/chart.js/Chart.min.js")}}></script>

 <!-- Page level custom scripts -->
 <script src={{ asset("my_dashboard/js/demo/chart-area-demo.js")}}></script>
 <script src={{asset("my_dashboard/js/demo/chart-pie-demo.js")}}></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    showConfirmButton: false,
                    timer: 2500
                });
                @elseif(session('update_success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    showConfirmButton: false,
                    timer: 2500
                });
            @endif
        </script>
        
        <script>
            @if(session('delete'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    showConfirmButton: false,
                    timer: 2500
                });
            @endif
        </script>
     <!-- Add this script at the end of your file, after including the SweetAlert library -->


