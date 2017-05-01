@extends ('layouts.master')


@section ('content')
	<div class="col-sm-8 blog-main">
		<h1>{{ $post->title }}</h1>

		@if (count($post->tags))
			<ul class="tag_list"> 
				<label>Tags: &nbsp;</label>
				@foreach ($post->tags as $tag)
					<li class="tag_link" >
						<a href="/lara/posts/tags/{{ $tag->name }}">
							{{ $tag->name }} &nbsp;
						</a>
					</li>
				@endforeach
			</ul>
		@endif

		<p>{{ $post->body }}</p>

		<hr>

		<div class="comments">
			<ul class="list-group">
			@foreach ($post->comments as $comment)
				<li class="list-group-item comment-list">
					<a class="col-sm-2 nopadding" href="/lara/user/{{ $post->user->id }}">
						<img id="comment-img" src="{{ $post->user->avatar_url }}">
					</a>

					<div class="col-sm-8">
						<strong>
							<a href="/lara/user/{{ $post->user->id }}">{{ $post->user->name }} </a>&nbsp;
						</strong>			
						
						<p style="display: inline-flex; color:#cacaca!important;"> {{ $comment->created_at->diffForHumans() }} &nbsp;</p>
	
						<p> {{ $comment->body }} </p>
					</div>					
				</li>
			@endforeach
			</ul>
		</div>

		{{-- Add a comment --}}
		
		@if (Auth::guest())
		@else
		<div class="card">
			<div class="card-block">
				<form method="POST" action="{{ $post->id }}/comments">
					{{ csrf_field() }}				

					<div class="form-group">
						<textarea name="body" placeholder="Your comment here." class="form-control" required ></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment!</button>
					</div>
				</form>

				@include ('layouts.errors')
			</div>			
		</div>
		@endif
	</div>	
@endsection