<x-layout>

<div class="container">
<div class="card p-5">
<form action="{{route('pictures.update',$picture->id)}}" method="post" enctype="multipart/form-data">

    @csrf

    @method('put')
    
  <div class="mb-3">
    <label for="Titolo" class="form-label">Inserisci il titolo dell'opera</label>
    <input type="text" class="form-control" id="titolo" name="titolo" value="{{$picture->title}}">
  <div class="mb-3">
    <label for="Descrizione" class="form-label">Inserisci la descrizione dell'opera</label>
    <textarea class="form-control" id="descrizione" name="descrizione">{{$picture->description}}</textarea>
  </div>
  <div class="mb-3">
    <label for="prezzo" class="form-label">Inserisci il prezzo</label>
    <input type="number" class="form-control" id="prezzo" name="prezzo" value="{{$picture->price}}">
  </div>
  <div class="mb-3">
  <label for="immagine" class="form-label">Inserisci il file</label>
  <input class="form-control" type="file" id="immagine" name="immagine">
</div>
  <button type="submit" class="btn btn-primary">Aggiorna</button>
</form>

</div>
</div>

</x-layout>