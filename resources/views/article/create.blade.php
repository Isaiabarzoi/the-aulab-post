<x-layout>

    <div class="container mt-5">
      <div class="row border rounded p-2 shadow">
        <div class="col-12">
          <h1 class="display-2 text-center">Inserisci articolo</h1>
          
          <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
  
            @csrf
  
            <div class="mb-3">
              <label for="title" class="form-label fw-bold">Titolo</label>
              <input name="title" type="text" class="rounded-pill form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}">
    
              @error('title')
                 <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            </div>
            <div>
                <label for="subtitle" class="form-label fw-bold">Sottotitolo</label>
                <input name="subtitle" type="text" class="rounded-pill form-control @error('subtitle') is-invalid @enderror" id="subtitle" value="{{old('subtitle')}}">
              </div>
    
              @error('subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <div class="mb-3">
              <label for="image" class="form-label fw-bold">Immagine</label>
              <input name="image" type="file" class="rounded-pill form-control @error('image') is-invalid @enderror" id="image">
            </div>
    
              @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <div class="mb-3">
                <label for="category" class="form-label fw-bold">Categoria</label>
                <select name="category" class="rounded-pill form-control text-capitalize @error('category') is-invalid @enderror" id="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
    
              @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <div class="mb-3">
                <label for="body" class="form-lable fw-bold">Corpo del testo</label>
                <textarea name="body" id="body" cols="30" rows="7" class="rounded-4 form-control" @error('body') is-invalid @enderror>{{old('body')}}</textarea>
            </div>
            
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
              <label for="tags" class="form-label fw-bold">Tags</label>
              <input name="tags" id="tags" class="rounded-pill form-control" placeholder="Dividi ogni tag con una virgola" value="{{old('tags')}}" @error('tags') is-invalid @enderror>
            </div>

            @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="mt-2">
                <button class="btn btn-dark text-white rounded-pill">Inserisci articolo</button>
                <a class="btn btn-outline-dark rounded-pill" href="{{route('home')}}">Torna alla home</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  
  </x-layout>