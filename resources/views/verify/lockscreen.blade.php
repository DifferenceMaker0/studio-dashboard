@extends('layouts.sso')

@section('content')  
<div>  
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">John Doe</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="../../dist/img/user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="password">

        <div class="input-group-append">
          <button type="button" class="btn">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="login.html">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2021 <b><a href="https://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->
</div>

<!-- Inactivity Lockscreen -->
<script> 
let inactivityTimeout;
const inactivityDuration = 5000; // 5 seconds in milliseconds

function resetInactivityTimer() {
  clearTimeout(inactivityTimeout); // Clear any existing timer
  inactivityTimeout = setTimeout(handleInactivity, inactivityDuration);
}

function handleInactivity() {
    console.log("User is inactive!");
    const lockout = document.getElementsByTagName('body');
    lockout.className = '';
    lockout.classList.add('hold-transition', 'lockscreen');
}

// Attach event listeners to reset the timer on user activity
window.addEventListener("mousemove", resetInactivityTimer);
window.addEventListener("keypress", resetInactivityTimer);
window.addEventListener("click", resetInactivityTimer);
window.addEventListener("scroll", resetInactivityTimer);
window.addEventListener("touchstart", resetInactivityTimer); // For touch devices

// Initialize the timer on page load
resetInactivityTimer();

// Actually no dont change class but redirect window

// submit=js(void) handle event 
// handleEvent.onSubmit({
// if(password === $users->id.password){
//     console.log(`Welcome back {{ $username }}`);
    // const lockout = document.getElementsByTagName('body');
    // lockout.className = '';
    // lockout.classList.add('hold-transition', 'login-page');
// }})
</script>
@stop