@extends('Layouts.app')

@section('body')
    <section class="container hero">
        <div class="row align-items-center h-100">
          <div class="col-12 col-lg-6">
            <h1>The Laravel <br>Community Forum</h1>
            <p class="mb-4">Empowering the Laravel Community Connect, Share and Learn</p>
            <a href="{{ route('sign-up') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
            <a href="{{ route('discussions')}}" class="btn btn-secondary mb-2 mb-lg-0">Join Discussion</a>
          </div>
          <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
            <img class="hero-image float-lg-end" src="{{ url('assets/images/Hero-Image.png') }}" alt="">
          </div>
        </div>
    </section>
    <section class="container min-h-372px">
      <div class="row">
        <div class="col-12 col-lg-4 text-center"> {{-- 12 kolom mobile full 4 kolom desktop --}}
          <img class="promote-icon mb-2" {{-- marginbottom 2/8px --}} src="{{ url('assets/images/Discussions.png') }}" alt="Discussions">
          <h2>Discussions</h2>
          <p class="fs-3" {{-- font size 3 --}}>34834</p>
        </div>
        <div class="col-12 col-lg-4 text-center"> {{-- 12 kolom mobile full 4 kolom desktop --}}
          <img class="promote-icon mb-2" {{-- marginbottom 2/8px --}} src="{{ url('assets/images/Answers.png') }}" alt="Answer">
          <h2>Answers</h2>
          <p class="fs-3" {{-- font size 3 --}}>65763</p>
        </div>
        <div class="col-12 col-lg-4 text-center"> {{-- 12 kolom mobile full 4 kolom desktop --}}
          <img class="promote-icon mb-2" {{-- marginbottom 2/8px --}} src="{{ url('assets/images/Users.png') }}" alt="Users">
          <h2>Users</h2>
          <p class="fs-3" {{-- font size 3 --}}>57643</p>
        </div>
      </div>
    </section>
    <section class="bg-gray">
      <div class="container py-80px"> {{-- padding atas bawah --}}
        <h2 class="text-center mb-5" {{-- marginbottom 5=48px --}} >Help Others</h2>
        <div class="row">
          <div class="col-12 col-lg-4 mb-3" {{-- 12 mobile 4 desktop marbot 3=16px --}}>
            <div class="card">
              <a href="#">
                <h3>How to add a custom validation in laravel?</h3>
              </a>
              <div>
                <p class="mb-5"> {{-- marbot 5=48px --}}
                  I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the ...
                </p>
                <div class="row">
                  <div class="col me-1 me-lg-2" {{-- marginright 1=4px mobile, desktop 2=8px --}}>
                    <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                  </div>
                  <div class="col-5 col-lg-7">
                    <div class="avatar-sm-wrapper d-inline-block">
                      <a href="#" class="me-1">
                        <img src="{{ url('assets/images/Avatar-sm.png') }}" class="avatar rounded-circle" alt="Avatar">
                      </a>
                    </div>
                    <span class="fs-12px" {{-- fontsize 12px --}}>
                      <a href="#" class="me-1 fw-bold">towick</a>
                      <span class="color-gray">7 hours ago</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-3" {{-- 14 mobile 4 desktop marbot 3=16px --}}>
            <div class="card">
              <a href="#">
                <h3>How to add a custom validation in laravel?</h3>
              </a>
              <div>
                <p class="mb-5"> {{-- marbot 5=48px --}}
                  I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the ...
                </p>
                <div class="row">
                  <div class="col me-1 me-lg-2" {{-- marginright 1=4px mobile, desktop 2=8px --}}>
                    <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                  </div>
                  <div class="col-5 col-lg-7">
                    <div class="avatar-sm-wrapper d-inline-block">
                      <a href="#" class="me-1">
                        <img src="{{ url('assets/images/Avatar-sm.png') }}" class="avatar rounded-circle" alt="Avatar">
                      </a>
                    </div>
                    <span class="fs-12px" {{-- fontsize 12px --}}>
                      <a href="#" class="me-1 fw-bold">leo</a>
                      <span class="color-gray">7 hours ago</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-3" {{-- 14 mobile 4 desktop marbot 3=16px --}}>
            <div class="card">
              <a href="#">
                <h3>How to add a custom validation in laravel?</h3>
              </a>
              <div>
                <p class="mb-5"> {{-- marbot 5=48px --}}
                  I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the ...
                </p>
                <div class="row">
                  <div class="col me-1 me-lg-2" {{-- marginright 1=4px mobile, desktop 2=8px --}}>
                    <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                  </div>
                  <div class="col-5 col-lg-7">
                    <div class="avatar-sm-wrapper d-inline-block">
                      <a href="#" class="me-1">
                        <img src="{{ url('assets/images/Avatar-sm.png') }}" class="avatar rounded-circle" alt="Avatar">
                      </a>
                    </div>
                    <span class="fs-12px" {{-- fontsize 12px --}}>
                      <a href="#" class="me-1 fw-bold">belok</a>
                      <span class="color-gray">7 hours ago</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
      <h2>Ready to Contribute?</h2>
      <p class="mb-4" {{-- marbot 4=32px --}}>Want to make a big impact?</p>
      <div class="text-center">
        <a href="{{ route('sign-up') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
        <a href="{{ route('discussions') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Discussion</a>
      </div>
    </section>
@endsection
