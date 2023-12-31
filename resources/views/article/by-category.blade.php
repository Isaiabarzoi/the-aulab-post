<x-layout>

<div class="container-fluid p-5 text-center text-dark">
    <div class="row justify-content-center">
        <h1 class="display-2">
            Categoria {{$category->name}}
        </h1>
        <hr>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-around">
        @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-2">
                <div class="card zoom card-size">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top img-cover" alt="" height="200">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{$article->title}}</h5>
                        <p class="small text-muted fst-italic text-capitalize text-truncate">{{$article->category->name}}</p>
                        <span class="text-muted small fst-italic text-truncate">Tempo di lettura {{$article->readDuration()}} min</span>
                        <p class="card-text text-truncate">{{$article->subtitle}}</p>
                        <div class="card-footer text-muted d-flex justify-contentbetween align-items-center text-truncate">
                            Redatto il {{$article->created_at->format('d/m/Y')}} da &nbsp <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="text-secondary">{{$article->user->name}}</a>
                        </div>
                    </div>
                    <a href="{{route('article.show', compact('article'))}}" class="btn btn_color_2 border-dark">Leggi</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="text-center">
    <input action="action" type="button" value="Torna indietro" class="btn btn-outline-dark my-5" onclick="window.history.go(-1); return false;" />
</div>

 <!-- Back to top button -->
 <button type="button" class="btn btn-floating btn-lg btn_color mx-3" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
 </button>

</x-layout>



