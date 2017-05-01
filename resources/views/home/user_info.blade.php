@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 user-info-form">  
    <div class="panel panel-primary">
        <div class="panel-heading user-info-heading">
            <img id="avatar_img" style="width: 150px; height: 150px; margin: 5px;" src="{{ $user->avatar_url }}" />
            <h2>{{ $user->name }} {{ $user->last_name }}</h2>
        </div>
        <div class="panel-body">           
                <div class="row">
                    <div class="col-md-6">
                        <label class="col-md-2 control-label">Info:</label>
    
                        <div class="col-md-10">                        
                            <p>23 years old, 
                                @if ( $user->gender == 1)
                                     Male.
                                @else                             
                                     Female.
                                @endif
                            </p>
                            <p>From {{ $user->country }}.</p>                            
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">Contacts:</label>
    
                        <div class="col-md-8">
                            <p> {{ $user->email }} </p>
                            <p> {{ $user->phone }} </p>                 
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-md-12">
                        <textarea readonly class="form-control">{{ $user->about }}</textarea>
                    </div>
                </div>  

                <div class="row"> 
                    <div class="col-md-12">
                        <p>Join project on <strong>{{ $user->created_at->formatLocalized('%A %d %B %Y') }}</strong>.</p>
                        <p>Last login was <strong>{{ $user->updated_at->diffForHumans() }}</strong>.</p>
                        <p>Posts created: <strong>{{ $user_posts }}</strong>.</p>
                        <p>Comments posted: <strong>{{ $user_comments }}</strong>.</p>                        
                    </div>
                </div>  
        </div>
    </div> 
</div>
@endsection