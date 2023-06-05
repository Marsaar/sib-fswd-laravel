<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            @if (Session::get('error'))
              <div class="alert alert-danger mt-3" role="alert">
                A simple danger alert—check it out!
              </div>
            @endif
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up</h5>
                <form action="{{ route('signup.store') }}" method="POST">
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
                    <label for="floatingInput">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="phone">
                    <label for="floatingInput">Phone</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Sign Up</button>
                  </div>
                  <hr class="my-4">
                  <div class="d-grid mb-2">
                    <label class="form-label">Do you already have an account? let's Log in</label>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                      <i class="fab fa-google me-2"></i> Log in
                    </a>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>