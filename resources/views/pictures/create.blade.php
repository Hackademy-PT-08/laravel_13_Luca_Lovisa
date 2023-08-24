<x-layout>


@if ($errors->any())
    @foreach ($errors->all() as $error)

      <p>{{$error}}</p>

    @endforeach

@endif

<div class="container">
<div class="card p-5">
<form action="{{route('pictures.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="Titolo" class="form-label">Inserisci il titolo dell'opera</label>
    <input type="text" class="form-control" id="titolo" name="titolo" value="{{old('titolo')}}">
  <div class="mb-3">
    <label for="Descrizione" class="form-label">Inserisci la descrizione dell'opera</label>
    <textarea class="form-control" id="descrizione" name="descrizione">{{old('descrizione')}}</textarea>
  </div>
  <div class="mb-3">
    <label for="prezzo" class="form-label">Inserisci il prezzo</label>
    <input type="number" class="form-control" id="prezzo" name="prezzo" value="{{old('prezzo')}}">
  </div>
  <div class="mb-5">
  <label for="immagine" class="form-label">Inserisci il file</label>
  <input class="form-control" type="file" id="immagine" name="immagine">
</div>
<div class="my-3">
<select name="categorie[]" class="form-select form-select-lg mb-3" aria-label="Large select example" multiple>
  @foreach ($categories as $category)
  <option value="{{$category->id}}">{{$category->title}}</option>
  @endforeach
</select>
</div>
  <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>

</div>
</div>

</x-layout>
