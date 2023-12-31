<x-layout>
    
    <div class="container-fluid p-5 text-center text-dark" >    
        <div class= "row justify-content-center"> 
            <h1 class="display-2">
                Revisione articoli
            </h1>
            <hr>
        </div>
    </div>

    @if (session ('message'))
        <div class="alert alert-warning text-center">
            {{session ('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli rifiutati</h2>
                <x-articles-table :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-floating btn-lg btn_color mx-3" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
      </button>
      
</x-layout>