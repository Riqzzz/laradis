@extends('Layouts.auth')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <form action="">
                        <div class="d-flex flex-column flex-md-row mb-4">
                            <div class="edit-avatar-wrapper mb-3 mb-md-0 mx-auto mx-md-0">
                                <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                                    <img src="{{ url('assets/images/Avatar-sm.png') }}" alt="Avatar-user" class="avatar" id="avatar">
                                </div>
                                <label for="picture" class="btn p-0 edit-avatar-show">
                                    <img src="{{ url('assets/images/Edit-avatar.png') }}" alt="Edit Avatar">
                                </label>
                                <input type="file" class="d-none" id="picture" name="picture" accept="image/*">
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="username" autocomplete="off">
                                </div>
                                <div>
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start"
                                            id="password" name="password" placeholder="password" autocomplete="off">
                                        <span class="input-group-text bg-white border-start-0 pe-auto">
                                            <a href="javascript:;" id="password-toogle">
                                                <img src="{{ url('assets/images/eye-slash.png')}}" id="password-toogle-img" alt="Toogle Password">
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="fs-12px color-gray pb-3">
                                    Empty this if you don't want to change your password
                                </div>
                                <div>
                                    <label for="password" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start"
                                            id="password" name="password" placeholder="password" autocomplete="off">
                                        <span class="input-group-text bg-white border-start-0 pe-auto">
                                            <a href="javascript:;" id="password-toogle">
                                                <img src="{{ url('assets/images/eye-slash.png')}}" id="password-toogle-img" alt="Toogle Password">
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="fs-12px color-gray pb-3">
                                    Empty this if you don't want to change your password
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary me-4" type="submit">Save</button>
                            <a href="{{ route('user profile') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        $('#picture').on('change', function(event){
            var output = $('#avatar');
            output.attr('src', URL.createObjectURL(event.target.files[0])); //targeting avatar yg mau di upload(digunakan)
            output.onload = function(){
                URL.revokeObjectURL(output.attr('src')) //replace avatar sebelumnya dengan yg baru
            }
        })    
    </script>    
@endsection