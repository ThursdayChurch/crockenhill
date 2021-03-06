<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-inner">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        MENU
      </button>
      <a class="navbar-brand" href="/">
          <img src="/images/White.png" alt="Crockenhill Baptist Church logo">
          <span>Crockenhill Baptist Church</span>
      </a>
    </div>
    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">

        @foreach ($pages as $page)
          @if (\Request::is($page['route'].'/*'))
            <li class="active">
            {!! link_to($page['route'], $page['name']) !!}
            </li>        
          @elseif  (\Request::is($page['route']))
            <li class="active">
            {!! link_to($page['route'], $page['name']) !!}
            </li> 
          @else
            <li>
              {!! link_to($page['route'], $page['name']) !!}
            </li>
          @endif

        @endforeach
        
        <!-- <li>
          <a href="http://www.facebook.com/crockenhill">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        
        <li>
          <a href="http://www.twitter.com/crockenhill">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
      
        <li>
          <a href="http://www.facebook.com/crockenhill">
            <i class="fa fa-google-plus"></i>
          </a>
        </li> -->
        
      </ul>
    </div>
	</div>
</nav>
