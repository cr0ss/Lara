<div class="col-sm-4 ">
  <a class="top-post" href="/lara/posts/{{ $post->id }}">
    <h4 class="top-post-title">        
      {{ $post->title }}            
    </h4>     

    <p class="blog-post-meta">
      {{ $post->user->name }} on
      {{ $post->created_at->toFormattedDateString() }}        
    </p>  
    
  </a>   
</div>
    
