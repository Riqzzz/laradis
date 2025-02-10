@extends('Layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-5">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">
                            Discussions
                        </div>
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">
                            >
                        </div>
                    </div>
                    <h2 class="mb-0">
                        How to add a custom validation in Laravel
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="card card-discussions mb-5">
                        <div class="row">
                            <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                <a href="">
                                    <img src="{{ url('assets/images/like.png') }}" class="like-icon mb-1" alt="Like Discussions">
                                </a>
                                <span class="fs-4 color-gray mb-1">12</span>
                            </div>
                            <div class="col-11">
                                <p>
                                    I am working on a blogging application in Laravel 8. There are 4 user roles, among 
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among 
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among 
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among 
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among 
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among 
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user roles, among 
                                    which, the 
                                </p>
                                <div class="mb-3">
                                    <a href=""><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                                </div>
                                <div class="row align-items-start justify-content-center">
                                    <div class="col">
                                        <div class="color-gray me-2">
                                            <a href="javascript:;" id="share-discussion"><small>Share</small></a>
                                            <input type="text" value="{{ url('discussions/lorem') }}" id="current-url" class="d-none">
                                        </div>
                                    </div>
                                    <div class="col-5 col-lg-3 d-flex">
                                        <a href="#" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1">
                                            <img src="{{ url('assets/images/Avatar-sm.png') }}" alt="Avatar-Discussions" class="avatar">
                                        </a>
                                        <div class="fs-12px lh-1">
                                            <span class="text-primary">
                                                <a href="" class="fw-bold d-flex text-break mb-1 align-items-start">towick</a>
                                            </span>
                                            <span class="color-gray">7 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mb-5">2 Answers</h3>
                    
                    <div class="mb-5">
                        <div class="card card-discussions">
                            <div class="row">
                                <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                    <a href="">
                                        <img src="{{ url('assets/images/like.png') }}" alt="Like" class="like-icon mb-1">
                                    </a>
                                    <span class="fs-4 color-gray mb-1">12</span>
                                </div>
                                <div class="col-11">
                                    <p>
                                        lorem ipsum dolor sit amet contecstur lorem ipsum dolor sit amet contecsturlorem ipsum dolor sit amet contecsturlorem ipsum dolor sit amet contecstur
                                    </p>
                                    <div class="row align-items-end justify-content-end">
                                        <div class="col-5 col-lg-3 d-flex">
                                            <a href="#" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1">
                                                <img src="{{ url('assets/images/Avatar-sm.png') }}" alt="Avatar-Discussions" class="avatar">
                                            </a>
                                            <div class="fs-12px lh-1">
                                                <span class="text-primary">
                                                    <a href="" class="fw-bold d-flex text-break mb-1 align-items-start">mamangz</a>
                                                </span>
                                                <span class="color-gray">6 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="card card-discussions">
                            <div class="row">
                                <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                    <a href="">
                                        <img src="{{ url('assets/images/like.png') }}" alt="Like" class="like-icon mb-1">
                                    </a>
                                    <span class="fs-4 color-gray mb-1">12</span>
                                </div>
                                <div class="col-11">
                                    <p>
                                        lorem ipsum dolor sit amet contecstur lorem ipsum dolor sit amet contecsturlorem ipsum dolor sit amet contecsturlorem ipsum dolor sit amet contecstur
                                    </p>
                                    <div class="row align-items-end justify-content-end">
                                        <div class="col-5 col-lg-3 d-flex">
                                            <a href="#" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1">
                                                <img src="{{ url('assets/images/Avatar-sm.png') }}" alt="Avatar-Discussions" class="avatar">
                                            </a>
                                            <div class="fs-12px lh-1">
                                                <span class="text-primary">
                                                    <a href="" class="fw-bold d-flex text-break mb-1 align-items-start">lotsum</a>
                                                </span>
                                                <span class="color-gray">9 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fw-bold text-center">
                        Please <a href="" class="text-primary">sign in</a> or <a href="" class="text-primary">create</a> an account to participate in this discussions.
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <h3>All Categories</h3>
                        <div>
                            <a href="">
                                <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                <span class="badge rounded-pill text-bg-light">Facade</span>
                                <span class="badge rounded-pill text-bg-light">Helper</span>
                            </a>
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
            $('#share-discussion').click(function(){
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