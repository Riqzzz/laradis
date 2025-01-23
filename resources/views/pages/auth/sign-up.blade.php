@extends('Layouts.auth')

@section('body')
    <section class="bg-gray vh-100">
        <div class="container">
            <div class="row pt-5 justify-content-center" {{-- Konten teks berada di tengah contianer/>tengah halaman --}}>
                <div class="col-12 col-lg-6 my-auto mb-5 mb-lg-auto me-0">
                    <div class="d-none d-lg-block" {{-- teks di mobile gada, di desktop muncul--}}>
                        <h2>Join the Laradis Community</h2>
                        <p>
                            <ul>
                                <li>Stuck? Ask in the Discussions</li>
                                <li>Get answers from experienced developers from around the world</li>
                                <li>Contribute by answering questions</li>
                            </ul>
                        </p>
                    </div>
                    <div class="d-block d-lg-none fs-4 text-center">
                        Create your account in a minute, It's free.
                    </div>
                </div>
                <div class="col-12 col-lg-3 h-100">
                    <a href="" class="nav-link mb-5 text-center">
                        <img src="{{ url('assets/images/Logo-footer.png') }}" class="h-32px" alt="Logo Sign-up">
                    </a>
                    <div class="card mb-5">
                        <form action="">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email@example.com" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="username" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start"
                                        id="password" name="password" placeholder="password" autocomplete="off">
                                    <span class="input-group-text bg-white border-start-0 pe-auto">
                                        <a href="javascript:;" id="password-toogle">
                                            <img src="{{ url('assets/images/eye-slash.png')}}" id="password-toogle-img" alt="Toogle Password">
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3 d-grid" {{-- d-grid>> grid button login full sesuai form email dan password --}}>
                                <button type="submit" class="btn btn-primary rounded-2">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">Already have an account? 
                        <a href="#" class="text-underline">
                            <u class="text-primary">Log in</u>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection