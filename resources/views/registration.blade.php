@extends('layout.public')
@section('title', 'Register')
@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card UserRegister">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{ url('/') }}" class="app-brand-link gap-2">
              <img src="{{ asset('assets/img/subarta.png') }}" width="150px" />
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Welcome! 👋</h4>

          <form id="dataFrom" class="mb-3" method="POST">@csrf
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name"
                autofocus />
              <span id="error-name" class="validation-invalid-label"></span>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
              <span id="error-email" class="validation-invalid-label"></span>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" autocomplete="new-password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <span id="error-password" class="validation-invalid-label"></span>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password_confirmation" autocomplete="new-password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <span id="error-password_confirmation" class="validation-invalid-label"></span>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="button" onclick="SaveData()">Sign up</button>
            </div>
            <span id="error-save" class="validation-invalid-label"></span>
          </form>
          <p class="text-center">
            Already have an account? <a href="{{ url('login') }}">Login here</a>
          </p>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>
@endsection

<script>
  function SaveData() {
        var varUrl = "{{ url('requestRegister') }}";
        var varData = $("#dataFrom").serialize();

        $.ajax({
            type: "POST",
            url: varUrl,
            data: varData,
            success: function (response) {
                console.log(response);
                $('.validation-invalid-label').html('');
                if (response.code == '200') {
                    swal({
                        title: response.status,
                        text: response.msg,
                    }).then((value) => {
                        if (value) {
                            window.location.href = response.routeUrl;
                        }
                    });
                } else if (response.code == '201') {
                    swal({
                        title: response.status,
                        text: response.msg,
                    });
                } else if (response.status == 'error') {
                    $.each(response.data, function (field, messages) {
                        $('#error-' + field).html(messages.join('<br>'));
                    });
                } else {
                    $("#error-save").html("An unexpected error occurred during processing. Please try again.");
                }
            },
            error: function () {
                console.log(varUrl);
                console.log(varData);
                $('.validation-invalid-label').html('');
                $("#error-save").html("An unexpected error occurred during processing. Please try again.");
            }
        });
    }
</script>