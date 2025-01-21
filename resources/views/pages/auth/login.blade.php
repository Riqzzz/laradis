@extends('Layouts.auth')

@section('body')

    <section class="bg-gray vh-100" {{-- fullsreen --}}>
        <div class="container h-100 pt-5">
            <div class="row justify-content-center">
                <div class="col12 col-lg-3">
                    <a href="" class="nav-link mb-5 text-center">
                        <img src="{{ url('assets/images/Logo-footer.png')}}" class="h-32px" alt="Login Logo">
                    </a>
                    <div class="card mb-5">
                        <form action="">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email@example.com" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-end-0 pe-0 rounded-0 rounded-start"
                                        id="password" name="password" placeholder="password">
                                    <span class="input-group-text bg-white border-start-0 pe-auto">
                                        <a href="javascript:;" id="password-toogle">
                                            <img src="{{ url('assets/images/eye-slash.png')}}" id="password-toogle-img" alt="Toogle Password">
                                        </a>
                                    </span>
                                  </div>
                            </div>
                            <div class="mb-3 d-grid" {{-- d-grid>> grid button login full sesuai form email dan password --}}>
                                <button type="submit" class="btn btn-primary rounded-2">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        Dont have an account? 
                            <a href="#" class="text-underline">
                                <u class="text-primary">Sign up</u>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        var isPasswordRevealed  = false;

        $('#password-toogle').on('click', function(){
            isPasswordRevealed = !isPasswordRevealed;

            if (isPasswordRevealed){
                $('#password-toogle-img').attr('src', "{{ url('assets/images/eye.png') }}");
                $('#password').attr('type', 'text');
            }
            else {
                $('#password-toogle-img').attr('src', "{{ url('assets/images/eye-slash.png') }}");
                $('#password').attr('type', 'password');
            }
        })
    </script>
@endsection
