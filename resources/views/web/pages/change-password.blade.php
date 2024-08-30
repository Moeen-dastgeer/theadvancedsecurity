<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password | Dummy Project</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/web/bootstrap.min.css') }}" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">

</head>

<body>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="{{ url('/') }}" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">Dummy Project</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('profile') }}">Profile</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ Route('change.password') }}">Change Password</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('myaccount') }}">{{ Auth::guard('web')->user()->name }}</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#" >Logout</a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>
                </nav>
            </div>
        </header>

        <main>
            <div class="row justify-content-center py-3">
                <div class="col-md-6">
                    <div class="card  mt-0 pt-0">
                        <div class="card-header">
                            <p class="card-title">Change Password</p>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('change.password') }}">
                                @CSRF
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="text" name="current_password" id="current_password" class="form-control">
                                    @error('current_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-1">
                                    <label for="new_password">New Password</label>
                                    <input type="text" name="password" id="new_password" class="form-control">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-1">
                                    <label for="password_confirmation">Confirm New Password</label>
                                    <input type="text" name="password_confirmation" id="password_confirmation"
                                        class="form-control">
                                    @error('password_confirmation')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <h3>Dummy Project</h3>
                    <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
                </div>
                <div class="col-4">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool
                                stuff</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random
                                feature</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team
                                feature</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for
                                developers</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another
                                one</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last
                                time</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource
                                name</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another
                                resource</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final
                                resource</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none"
                                href="#">Locations</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
