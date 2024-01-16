<x-layouts.main>
    <x-slot:title>
       Postni Uzgartirish #{{$post->id}}
    </x-slot:title>
    <x-page-header>
        Postni Uzgartirish #{{$post->id}}
    </x-page-header>
    <div class="col-md-6">
        <div class="contact-us">
            <form action="{{ route('posts.update',['post'=> $post->id]) }}" method="POST">
             @method("PUT")
                @csrf
                <ul>
                    <input type="text" class="form-control p-4" name="title" value="{{$post->title}}" placeholder="Sarlavha">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   

                    <input type="text" class="form-control p-4" name="short_content"value="{{$post->short_content}}" placeholder="short_content">
                    @error('short_content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control p-4" name="content" placeholder="Content">{{$post->content}}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-secondary btn-block py-3 px-5" type="submit">Saqlash</button>
                </ul>
                <div class="hidden-me" id="contact_form_responce">
                    <p></p>
                </div>
            </form>
        </div>
    </div>
          

</x-layouts.main>