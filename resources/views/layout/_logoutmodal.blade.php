<div class="logout">
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        
              
              
      
        <div class="modal-body">
            <center>
                <h3 class="modal-title" id="exampleModalLabel">Are you sure to logout?</h3>
                <img src="my_dashboard/img/warning.png" style="width: 60px;">
            </center>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">No</button>
            <button class="btn btn-danger" id="confirmLogout">Yes</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        
        <script>
            document.getElementById('confirmLogout').addEventListener('click', function () {
                Swal.fire({
                    title: 'Logging Out...',
                    allowOutsideClick: false,
                    showConfirmButton: false,   
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    },
                });
        
                setTimeout(() => {
                    document.getElementById('logout-form').submit();
                }, 1500); // Adjust the delay as needed
            });
        </script>
        