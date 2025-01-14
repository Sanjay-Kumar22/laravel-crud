<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 11 Multi Auth</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <style>
            body {
                background: #f4f7fc;
            }
            .card {
                border: none;
                border-radius: 12px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }
            .card-body {
                padding: 1.5rem 2rem;
            }
            .btn-primary {
                background-color: #5c6bc0;
                border: none;
            }
            .btn-primary:hover {
                background-color: #3f51b5;
            }
            .form-floating input {
                border-radius: 8px;
                box-shadow: none;
            }
            .form-floating label {
                color: #7a7a7a;
            }
            .form-floating input:focus {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-color: #5c6bc0;
            }
            .link-secondary {
                color: #5c6bc0;
                text-decoration: none;
            }
            .link-secondary:hover {
                text-decoration: underline;
            }
            .gap-md-4 {
                gap: 10px;
            }
            .container {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
        </style>
    </head>
    <body>
        <section class="p-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <h4 class="fw-bold">Register Here</h4>
                                    <p class="text-muted">Create your account to get started</p>
                                </div>
                                <form action="{{route('user.validate')}}" method="POST">
                                    @csrf
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" 
                                                    class="form-control @error('fname') is-invalid @enderror" 
                                                    name="fname" 
                                                    id="fname" 
                                                    placeholder="Firstname"
                                                    value="{{ old('fname') }}">
                                                <label for="fname">Firstname</label>
                                                @error('fname')
                                                    <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" 
                                                    class="form-control @error('lname') is-invalid @enderror" 
                                                    name="lname" 
                                                    id="lname" 
                                                    placeholder="Lastname"
                                                    value="{{ old('lname') }}">
                                                <label for="lname">Lastname</label>
                                                @error('lname')
                                                    <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" 
                                                    class="form-control @error('email') is-invalid @enderror" 
                                                    name="email" 
                                                    id="email" 
                                                    placeholder="name@example.com"
                                                    value="{{ old('email') }}">
                                                <label for="email">Email</label>
                                                @error('email')
                                                    <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" 
                                                    class="form-control @error('password') is-invalid @enderror" 
                                                    name="password" 
                                                    id="password" 
                                                    placeholder="Password">
                                                <label for="password">Password</label>
                                                @error('password')
                                                    <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" 
                                                    class="form-control @error('password_confirmation') is-invalid @enderror" 
                                                    name="password_confirmation" 
                                                    id="password_confirmation" 
                                                    placeholder="Confirm Password">
                                                <label for="password_confirmation">Confirm Password</label>
                                                @error('password_confirmation')
                                                    <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn btn-primary py-3" type="submit">Register Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <hr class="mt-4 mb-3 border-secondary-subtle">
                                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-center">
                                            <a href="#!" class="link-secondary">Already have an account? Login here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
