<x-layouts.main>


    <x-slot:title>
        show
    </x-slot:title>


    <x-page-header>
        show
    </x-page-header>

    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">

                <div class="col-md-9">



                    <div class="feature-post small-blog">
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="/images/post2.png" class="img-responsive" alt="#" />
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="feature-cont">
                                <div class="post-info">
                                    <img src="/images/profile-img.png" alt="#" />
                                    <span>
                                        <h4>{{ $post->title }}</h4>
                                        <h5>{{ $post->created_at }}</h5>
                                    </span>
                                </div>
                                <div class="post-heading">
                                    <h3>{{ $post->short_content }}</h3>
                                    <p>{{ $post->content }}</p>
                                    <div class="full">
                                        <a class="btn" href="#">Read More</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                
                        
                        
                <div class="col-md-3">
                    <div class="blog-sidebar">
                    </div>
                    <div class="blog-sidebar">
                        <h4 class="heading">Top Categories</h4>
                        {{-- @foreach ($recent_posts as $post) --}}
                        @foreach ($categories as $category )
                            <div class="category-menu">
                                <ul>
                                    <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>{{ $category->name }}</a>
                                        <span class="badge d-flex danger badge-pill">{{ $category->posts()->count() }}</span>
                                    </li> 
                                  
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-5">
                        <img src="img/blog-2.jpg" alt="" class="img-fluid rounded">
                    </div>
                    < <div class="mb-5">
                        <h3 class="mb-4 section-title">Teglar</h3>
                        <div class="d-flex flex-wrap m-n1">
                            @foreach ( $tags as $tag )
                            <a href="" class="btn btn-outline-secondary m-1">{{ $tag->name }}</a>  
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-5">
                        <img src="img/blog-3.jpg" alt="" class="img-fluid rounded">
                    </div>

                    <div class="blog-sidebar">
                        <h4 class="heading">Popular News</h4>
                        <div class="category-menu">
                            <ul>
                                <li>
                                    <span><img src="/images/profile-img2.png" alt="#"></span>
                                    <span>
                                        <p>Two touch penalties, imaginary cards</p>
                                        <p class="date">22 Feb, 2016</p>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <aside id="sidebar" class="left-bar">
                        <div class="feature-matchs">
                            <div class="team-btw-match">
                                <ul>
                                    <li>
                                        <img src="/images/img-01_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li><span>vs</span></li>
                                    <li>
                                        <img src="/images/img-02.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="/images/img-03_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li><span>vs</span></li>
                                    <li>
                                        <img src="/images/img-04_003.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="/images/img-05_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li><span>vs</span></li>
                                    <li>
                                        <img src="/images/img-06.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="/images/img-07_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li><span>vs</span></li>
                                    <li>
                                        <img src="/images/img-08.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <aside id="sidebar" class="left-bar">
                        <div class="banner-sidebar">
                            <img class="img-responsive" src="/images/match-banner1.jpg" alt="#">
                            <h3>Argentina vs Chile|Goals of the match | COPA </h3>
                        </div>


                    </aside>
                    <div class="banner">
                     
                    </div>
                    </aside>
                    <aside id="sidebar" class="left-bar">
                    </div>
             
        </div>
        </div>
    </section>

</x-layouts.main>
