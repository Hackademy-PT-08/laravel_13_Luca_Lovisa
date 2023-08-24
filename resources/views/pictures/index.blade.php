<x-layout>

    
<div class="container">
    <div class="row">
    

        @foreach ($pictures as $picture)

        <div class="col-4">
            <div class="card">

                <img  class="card-img-top" src="{{asset('storage/'.$picture->image)}}" alt="">
                        <div class="card-body">
                        <div class="card-title">
                            Nome del Quadro:{{$picture->title}}
                        </div>
                        <div class="card-text">
                        Descrizione : {{$picture->description}}
                        </div>
                        <div class="card-text">
                        Prezzo : {{$picture->price}}
                        </div>
                        <div class="card-text">
                         Autore annuncio : {{$picture->user->name}} 
                        </div>
                </div>
            </div>
        </div>    
        @endforeach
    </div>
</div>
</x-layout>