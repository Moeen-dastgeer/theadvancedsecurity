<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile | Dummy Project</title>
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
                <div class="col-md-8">
                    <div class="card  mt-0 pt-0">
                        <div class="card-header">
                            <p class="card-title">Edit Profile</p>
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
                            <form method="POST" action="{{ route('profile') }}">
                                @CSRF
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{old('first_name', $user->first_name)}}">
                                            @error('first_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{old('last_name', $user->last_name)}}">
                                            @error('last_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email" class="form-control" disabled value="{{old('email', $user->email)}}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone', $user->phone)}}">
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-1">
                                            <label for="address1">Address 1</label>
                                            <input type="text" name="address1" id="address1" class="form-control" value="{{old('address1', $user->address1)}}">
                                            @error('address1')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-1">
                                            <label for="address2">Address 2</label>
                                            <input type="text" name="address2" id="address2" class="form-control" value="{{old('address2', $user->address2)}}">
                                            @error('address2')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="city">City</label>
                                            <input type="text" name="city" id="city" class="form-control" value="{{old('city', $user->city)}}">
                                            @error('city')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="zipcode">Zip code</label>
                                            <input type="text" name="zipcode" id="zipcode" class="form-control" value="{{old('zipcode', $user->zipcode)}}">
                                            @error('zipcode')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="state">State</label>
                                            <input type="text" name="state" id="state" class="form-control" value="{{old('state', $user->state)}}">
                                            @error('state')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="country">Country</label>
                                            <input type="text" name="country" id="country" class="form-control" value="{{old('country', $user->country)}}">
                                            @error('country')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
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
