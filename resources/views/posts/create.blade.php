<x-layouts.main>


    <x-slot:title>
        NEW POST
    </x-slot:title>


    <x-page-header>
        NEW POST
    </x-page-header>

    <div class="col-md-6">
        <div class="contact-us">
            <form action="{{ route('posts.store') }}" method="POST">
             
                @csrf
                <ul>
                    <input type="text" class="form-control p-4" name="title" value="{{old('title')}}" placeholder="Sarlavha">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <select name="category_id">
                        
                      @foreach ($categories as $category )
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    {{-- <select name="teg_id">
                        @foreach ($post->tags as $tag )
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                      </select> --}}
                      

                    <input type="text" class="form-control p-4" name="short_content"value="{{old('short_content')}}" placeholder="short_content">
                    @error('short_content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control p-4" name="content" placeholder="Content">{{old('content')}}</textarea>
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
