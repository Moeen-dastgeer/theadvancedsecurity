<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Password | Dummy Project</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('web/bootstrap.min.css') }}" rel="stylesheet">
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
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('/') }}">Home</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('contact-us') }}">Contact</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('register') }}">Register</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('login') }}">Login</a>
                </nav>
            </div>
        </header>

        <main>

            <div class="row justify-content-center py-3">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            Forget Password
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>error
                            @endif
                            <div class="my-3 text-sm">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>
                            <form method="POST" action="{{ route('password.email') }}" >
                                @CSRF
                                <div class="form-group my-2">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email"
                                        value="{{ old('email') }}" placeholder="Email"
                                        class="form-control rounded-0">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary rounded-0">Email Password Reset Link</button>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <p class="my-3">
                                            <a href="{{ url('register') }}">Create Account?</a>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="my-3">
                                            <a href="{{ url('/login') }}">Login</a>
                                        </p>
                                    </div>
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
