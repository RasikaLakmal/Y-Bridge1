<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body{
    margin-top:20px;
    background:#f8f8f8
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.btn {
    width:120px;
    padding:5px;
}
.profilep {
  width: 140px;
  height: 140px;
}
</style>
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <!--div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div-->
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                  <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    <a href="#">
                    <img src="https://conferenceoeh.com/wp-content/uploads/profile-pic-dummy.png" class="profilep" alt="Photo of 3 cats">
                    
                  </a>
                      <!--span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span-->
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $c->NameWithInitials}}</h4>
                    <p class="mb-0">{{ $c->CompanyPersonalEmailID}}</p>
                    <!--div class="text-muted"><small>Last seen 2 hours ago</small></div-->
                    <!--div class="mt-2">
                      <--button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button-->
                    </div-->
                  </div>

                  <div class="btn-toolbar">
                  <div class="text-center text-sm-right">
                  </div>
                  
        
          
            <div class="px-xl-3">
               <div>
            <button id="myBtn"type="button" class="btn btn-primary">Edit Profile</button>
            </div>
              <button class="btn btn-block btn-warning" style="height:40px;" >
                <!--i class="fa fa-sign-out"></i-->
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                
              </button>
              
            </div>
            
          </div>
          
        </div>
        
          
           
        
      
                  
                
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                      <div class="col-xs-12 col-sm-8">
                    
                      <p><strong>CompanyName: </strong> {{ $c->CompanyName}} </p>
                    <p><strong>Company Personal Email: </strong> {{ $c->CompanyPersonalEmailID}} </p>
                    <p><strong>Designation: </strong> {{ $c->Designation}}</ </p>
                    <p><strong>LinkedIn: </strong><a href="{{ $c->LinkedIn}} "> {{ $c->LinkedIn}}</a> </p>
                    <p><strong>Fields Of Interests: </strong> {{ $c->FieldOfInterests}} </p>
                    <p><strong>ContactNumber: </strong> {{ $c->ContactNumber}} </p>
                    <p><strong>Bio: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                    <p><h5>Languages</h5>
                        <span class="tags">html5</span> 
                        <span class="tags">css3</span>
                        <span class="tags">jquery</span>
                        <span class="tags">bootstrap3</span>
                    </p>
                </div>   
                      </div>
                    </div>
                    <!--div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" placeholder="••••••"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                        <div class="mb-2"><b>Keeping in Touch</b></div>
                        <div class="row">
                          <div class="col">
                            <label>Email Notifications</label>
                            <div class="custom-controls-stacked px-2">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                <label class="custom-control-label" for="notifications-news">Newsletter</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div-->
                    <!--div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div-->
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>

  </div>
</div>
</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="POST" action="/updatestudent">
        @csrf
        <input class="form-control" type="text" name="namewi" placeholder="Name with initials" required="required" value="{{ $c->NameWithInitials}}"><br>
        <input type="hidden" name="id" value="{{ $c->CompanyPersonalEmailID}}" >
        <input class="form-control" type="text" name="comn" placeholder="Company Name" required="required" value="{{ $c->CompanyName}}"><br>
        <input class="form-control" type="text" name="designation" placeholder="Designation" required="required" value="{{ $c->Designation}}"><br>
        <input class="form-control" type="text" name="linkedin" placeholder="LinkedIn" required="required" value="{{ $c->LinkedIn}}"><br>
        <input class="form-control" type="text" name="foi" placeholder="Fields of Interests" required="required" value="{{ $c->FieldOfInterests}}"><br>
        <input class="form-control" type="text" name="cn" placeholder="Contact Number" required="required" value="{{ $c->ContactNumber}}"><br>
        <input class="form-control" type="password" name="pwrd" placeholder="Old Password" required="required" ><br>
        <input class="form-control" type="password" name="nwpswrd" placeholder="New Password" required="required"><br>
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>
<script>
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>