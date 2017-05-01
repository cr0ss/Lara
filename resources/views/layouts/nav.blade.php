<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="{{ url('/') }}">Home</a>
      <a class="nav-link" href="{{ url('/posts') }}">Posts</a>
      @if (Auth::check())
        <a class="nav-link" href="{{ url('/posts/create') }}">Create post</a> 
      @endif      
      <a class="nav-link" href="#">About</a>
        <!-- Authentication Links -->
        @if (Auth::guest())
            <a class="ml-auto nav-link" href="{{ route('login') }}">Login</a>
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        @else
            <a class="ml-auto nav-img-link" href="{{ url('/user') }}/{{ Auth::user()->id }}">
              <img id="nav-img" src="{{ Auth::user()->avatar_url }}">
            </a>
            <a class="nav-link" href="{{ url('/user') }}/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a>
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>                              
            
        @endif                    
    </nav>
  </div>
</div>
