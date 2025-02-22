@extends('Layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex mb-4">
                        <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                            <img src="{{ url('assets/images/Avatar-sm.png') }}" alt="Avatar-user" class="avatar">
                        </div>
                        <div>
                            <div class="mb-4">
                                <div class="fs-2 fw-bold mb-1 lh-1 text-break" {{-- textbreak untuk batasi nick user agar tidak merusak komponen lain --}}>
                                    towick
                                </div>
                                <div class="color-gray">
                                    member since 1 month ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="current-url" class="d-none" value="{{ request()->url() }}">
                        <a class="btn btn-primary me-4" id="share-profile" href="javacript:;">Share</a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="mb-5">
                        <h2 class="mb-3">My Discussions</h2>
                        <div>
                            <div class="card card-discussions">
                                <div class="row">
                                    <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                        <div class="text-nowrap me-2 me-lg-0">
                                            3 likes
                                        </div>
                                        <div class="text-nowrap color-gray">
                                            3 Answers
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10">
                                        <a href="{{ route('discussions details')}}">
                                            <h3>How to add a custom validation in laravel?</h3>
                                        </a>
                                        <p>I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the "...</p>
                                        <div class="row">
                                            <div class="col me-1 me-lg-2" {{-- marginright 1=4px mobile, desktop 2=8px --}}>
                                                <a href="#">
                                                    <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                                </a>
                                            </div>
                                            <div class="col-5 col-lg-4">
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
                            <div class="card card-discussions">
                                <div class="row">
                                    <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                        <div class="text-nowrap me-2 me-lg-0">
                                            3 likes
                                        </div>
                                        <div class="text-nowrap color-gray">
                                            3 Answers
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10">
                                        <a href="{{ route('discussions details')}}">
                                            <h3>How to add a custom validation in laravel?</h3>
                                        </a>
                                        <p>I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the "...</p>
                                        <div class="row">
                                            <div class="col me-1 me-lg-2" {{-- marginright 1=4px mobile, desktop 2=8px --}}>
                                                <a href="#">
                                                    <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                                </a>
                                            </div>
                                            <div class="col-5 col-lg-4">
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
                        </div>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-3">My Answers</h2>
                        <div>
                            <div class="card card-discussions">
                                <div class="row align-items-center">
                                    <div class="col-2 col-lg-1 text-center">
                                        12
                                    </div>
                                    <div class="col">
                                        <span>Replied to</span>
                                        <span class="fw-bold">
                                            <a href="#" class="text-primary">
                                                How to add custom validation in Laravel
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-discussions">
                                <div class="row align-items-center">
                                    <div class="col-2 col-lg-1 text-center">
                                        12
                                    </div>
                                    <div class="col">
                                        <span>Replied to</span>
                                        <span class="fw-bold">
                                            <a href="#" class="text-primary">
                                                How to add custom validation in Laravel
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        $(document).ready(function(){
            $('#share-profile').click(function(){
                //ketika share-discussions diklik maka akan menampilkan nilai current-url
                var copyText = $('#current-url');

                copyText[0].select();
                copyText[0].setSelectionRange(0, 999999);
                navigator.clipboard.writeText(copyText.val()); 
                //url dari show.blade ditampung di clipboard hasil pastenya sharenya akan sama dengan nilai yg ada pada show.blade

                var alert = $('#alert');
                alert.removeClass('d-none');

                var alertContainer = alert.find('.container'); //direct nilai ke class alert di aler.blade.php
                alertContainer.first().text('Link to this discussions copied succesfully');
                // jika share succes maka akan menampilkan teks diatas
            })
        })
    </script>
@endsection