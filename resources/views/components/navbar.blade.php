<nav class="navbar navbar-inverse">
    <div class="navbar-header">
       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">Menu</a>
    </div>
    <div class="collapse navbar-collapse js-navbar-collapse">
       <ul class="nav navbar-nav">
          <li><a href="/">Bosh Sahifa</a></li>
          <li><a href="{{ route('about') }}">Biz Haqimizda</a></li>
          <li><a href="{{route('news') }}">Yangilik</a></li>
          <li class="dropdown mega-dropdown">
             <a href="match" class="dropdown-toggle" data-toggle="dropdown">O'yinlar<span class="caret"></span></a>        
             <ul class="dropdown-menu mega-dropdown-menu">
                <li class="col-sm-8">
                   <ul>
                      <li class="dropdown-header">Men Collection</li>
                      <div id="menCollection" class="carousel slide" data-ride="carousel">
                         <div class="carousel-inner">
                            <div class="item active">
                               <div class="banner-for-match"><a href="#"><img class="img-responsive" src="images/match-banner1.jpg" alt="#" /></a></div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                               <div class="banner-for-match"><a href="#"><img class="/img-responsive" src="/images/match-banner1.jpg" alt="#" /></a></div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                               <div class="banner-for-match"><a href="#"><img class="img-responsive" src="images/match-banner1.jpg" alt="#" /></a></div>
                            </div>
                            <!-- End Item -->                                
                         </div>
                         <!-- End Carousel Inner -->
                         <!-- Controls -->
                         <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                         </a>
                         <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                         </a>
                      </div>
                      <!-- /.carousel -->
                   </ul>
                </li>
                <li class="col-sm-4">
                   <ul class="menu-inner">
                      <li class="dropdown-header">Next Matchs</li>
                      <li><a href="#">Contrary vs classical</a></li>
                      <li><a href="#">Discovered vs undoubtable</a></li>
                      <li><a href="#">Contrary vs classical</a></li>
                      <li><a href="#">Discovered vs undoubtable</a></li>
                      <li><a href="#">Contrary vs classical</a></li>
                      <li><a href="#">Discovered vs undoubtable</a></li>
                      <li><a href="#">Contrary vs classical</a></li>
                      <li><a href="#">Discovered vs undoubtable</a></li>
                   </ul>
                </li>
             </ul>
          </li>
          <li><a href="{{ route('posts.index') }}">Blog</a></li>
          <li><a href="{{ route('contact') }}">A'loqa</a></li>
          @auth
         
           <li><a href="{{ route('posts.create') }}">Post yaratish</a></li>
           <form action="{{route('logout')}}" method="POST">
            <div>
               {{auth()->user()->name}} 
             </div>
            @csrf
            <button class="btn btn-danger mr-3 d-none d-lg-block">chiqish</button>
         </form>
           @else
           <li><a href="{{ route('login') }}">KIrish</a></li>
          @endauth
           
    </div>
    <!-- /.nav-collapse -->
 </nav>