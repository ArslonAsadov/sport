<x-layouts.main>


    <x-slot:title>
        Blog
    </x-slot:title>


    <x-page-header>
        Blog
    </x-page-header>

  
    </div>
    </section>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                @foreach ($posts as $post)
                    <div class="col-md-3 column">
                        <div class="card">
                            <img class="img-responsive" src="images/img-1-4.jpg" alt="John" style="width:100%">
                            <div class="">
                                <h4>{{ $post->title }}</h4>
                                <p class="title">{{ $post->short_content }}</p>
                                <p>
                                <div class="center btn btn-custom py-1">
                                    <a class="button" href="{{ route('posts.show', ['post' => $post->id]) }}">O'qish</a>
                                </div>
                                <div class="center btn btn-custom py-1">
                                    <a class=" button" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
                                </div>
                                <div class="center btn btn-custom py-1">
                                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST"
                                        onsubmit="return confirm('Haqiqatan ham buni oʻchirib tashlamoqchimisiz?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button" href="">Destroy</button>
                                        
                                    </form>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
              
                
            </div>
        </div>
        <div class="container">
            <ul class="pagination">
              <li>
                <a href="#">Prev</a>
              </li>
              <li>
                <a href="#">1</a>
              </li>
              <li class="active">
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">5</a>
              </li>
              <li>
                <a href="#">Next</a>
              </li>
            </ul>
          </div>
          {{ $posts->links() }}
    </section>

</x-layouts.main>
