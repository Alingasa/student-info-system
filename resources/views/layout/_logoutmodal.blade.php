<div class="logout">
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        
              
              
      
          <div class="modal-body"><center><h3 class="modal-title" id="exampleModalLabel">Are you sure to logout?</h3><img src="my_dashboard/img/warning.png" style="width: 60px;"></center></div>
          <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </div>
  </div>
</div>
</div>
