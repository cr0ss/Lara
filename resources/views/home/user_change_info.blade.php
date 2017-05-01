@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 user-info-form">  
    <div class="panel panel-primary">
        <div class="panel-heading user-info-heading"><h2>Change your account info!</h2></div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" files="true"  enctype="multipart/form-data" action="{{ url('/user') }}/{{ $user->id }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="image" class="col-md-4 control-label">Avatar:</label>

                    <div class="col-md-6" style="text-align: center;">
                    	<img id="avatar_img" style="width: 150px; height: 150px; margin: 5px;" src="{{ $user->avatar_url }}" />

                        <input id="image" style="font-size: 14px;" type="file" class="" name="image">                       
                    </div>
                </div> 

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name:</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-md-4 control-label">Last name:</label>

                    <div class="col-md-6">
                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">                       
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail:</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-md-4 control-label">Country:</label>

                    <div class="col-md-6">
                        <input id="country" type="text" class="form-control" name="country" value="{{ $user->country }}">                       
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-md-4 control-label">Phone:</label>

                    <div class="col-md-6">
                        <input id="phone" type="tel" class="form-control input-medium bfh-phone" data-format="(ddd) ddd-dddd" name="phone" value="{{ $user->phone }}">                       
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="col-md-4 control-label">Gender:</label>

                    <div class="col-md-6">
                        <input id="gender" type="hidden" class="form-control" name="gender" value="{{ $user->gender }}">  

                        <button type="button" id="male" class="btn btn-default gender">Male</button>     
                        <button type="button" id="female" class="btn btn-default gender">Female</button>                
                    </div>
                </div>

                <div class="form-group">
                    <label for="about" class="col-md-4 control-label">About:</label>

                    <div class="col-md-6">
                        <textarea id="about" type="text" class="form-control" name="about">{{ $user->about }}</textarea>                      
                    </div>
                </div>  

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-5">
                        <button type="submit" class="btn btn-primary">Update.</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>
@endsection