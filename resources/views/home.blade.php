@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You Can update your saved data... Let"s try !!') }}</div>
                <form class="container my-5" method="PUT" enctype="multipart/form-data" style="max-width: 600px;">
                    <div>
                      <form id="form" action="" method="post">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" />
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" />
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone_number" id="phone_number" value="{{$user->phone_number}}" />
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}" />
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                                <input type="file" class="form-control" name="profile_image" id="profile_image"/>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <input id="submit" type="button" class="btn btn-success" name="submit" value="submit">
                          </div>
                        </div> <!-- / row -->
                      </form>
                      <ul id="infos"></ul>
                    </div>
                </form>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                <script>
                    $(function (){
                        var $name = $('#name');
                        var $email = $('#email');
                        var $phone_number = $('#phone_number');
                        var $password =  $bycrypt('#phone_number');
                        var $profile_image = $('#profile_image');

                        $('#submit').on('click', function() {
                            var info = {
                                name: $name.val(),
                                email: $email.val(),
                                phone_number: $phone_number.val(),
                                password: $password.val(),
                                profile_image: $profile_image.val(),
                            };

                            $.ajax({
                                type: 'PUT',
                                url: 'http://localhost/tutee/tutee/public/api/userupdate/{{$user->id}}',
                                data: info,
                                success: function(newInfo) {
                                    alert('your data updated successfully. Go check your DB');
                                },
                                error: function(){
                                    alert('error while submitting');
                                }
                            });
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</div>
@endsection
