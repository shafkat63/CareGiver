@extends('layout.public')
@section('title','Login')
@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card UserLogin">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="{{url('/')}}" class="app-brand-link gap-2">
                <img src="{{ asset('assets/img/subarta.png') }}" width="150px"/>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome! 👋</h4>

            <form id="formAuthentication" class="mb-3" action="#" method="POST">@csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email or Username</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus/>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="button" onclick="checkLogin()">Sign in</button>
              </div>
            </form>
            <p class="text-center">
              Don't have an account? <a href="{{ url('registration') }}">Register here</a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("password").addEventListener("keyup", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                checkLogin();
            }
        });
    });

    function checkLogin() {
        var UseId  = $("#email").val();
        var UseUser  = $("#password").val();
        if (UseId!=''){
            if (UseUser!=''){
                loginNow();
            } else{
                swal({
                    text: "Enter Your Password Here !!",
                    icon: "error",
                    timer: '3000'
                });
            }
        } else{
            swal({
                text: "Enter Your Email Here !!",
                icon: "error",
                timer: '3000'
            });
        }

    }

    function loginNow() {
    const url = "{{ url('requestLogin') }}";
    
    $.ajax({
        url: url,
        type: "POST",
        data: new FormData($(".UserLogin form")[0]),
        contentType: false,
        processData: false,
        success: function(data) {
            if (data.statusCode === 200) {
                window.location.href = data.route;
                $('.UserLogin form')[0].reset(); // Optionally reset the form
            } else if (data.statusCode === 401) {
                swal({
                    text: "Login Failed: Invalid credentials.",
                    icon: "error",
                    timer: 3000
                });
            }
        },
        error: function(data) {
            swal({
                title: "Oops",
                text: "An error occurred",
                icon: "error",
                timer: 1500
            });
        }
    });
    return false;
}

</script>
