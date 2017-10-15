
@include('header');
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                                <a href="{{route('allItems')}}">
                                    
                                    market
                               
                                </a>
                        <a href="{{ route('login') }}" >Login</a>
                        <a href="{{ route('register') }}" >Register</a>
                    @endauth
                </div>
            @endif
       </div>
              <div class="bod-container">


                    @include('featured')

            </div> 
    </body>
</html>
