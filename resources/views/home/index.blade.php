@extends ('layouts.master')


@section ('content')
<div class="col-sm-8 blog-main"> 
	@if (isset($posts))  
  		<h2 style="text-align: center; font-style: italic; color: red;">Top posts!</h2> 	
  		<div class="top-posts"> 
  			@foreach ($posts as $post)
    	  		@include ('home.post')
    		@endforeach
  		</div>
  		<hr>  
	@endif

	@if (isset($user_posts))  
		<h2 style="text-align: center; font-style: italic; color: green;">Top postsers!</h2> 
		@foreach ($user_posts as $port)			
			<div class="row">			
				<p><strong>{{ $port->user->name }}</strong> make <strong>{{ $port->count }}</strong> posts this week!</p>&nbsp; 
			</div>      		
    	@endforeach
    	<hr>   
	@endif

	@if (isset($user_comments))  
		<h2 style="text-align: center; font-style: italic; color: blue;">Top commenters!</h2> 
		@foreach ($user_comments as $com)			
			<div class="row">			
				<p><strong>{{ $com->user->name }}</strong> make <strong>{{ $com->count }}</strong> comments this week!</p>&nbsp; 
			</div>      		
    	@endforeach    
	@endif

</div><!-- /.blog-main -->
@endsection

