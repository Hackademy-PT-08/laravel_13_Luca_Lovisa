<x-layout>

    <h1>Mio Profilo</h1>

    <form action="/user/profile-information" method="post">
        @csrf
        @method('put')

        <label for="name">Nome</label>
        <input type="name" name="name" id="name" value="{{auth()->user()->name}}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{auth()->user()->email}}">

        <input type="submit" value="Aggiorna">

    </form>


  <br><br>

    <form action="/user/password" method="post">
        @csrf
        @method('put')

        <label for="current_password">Password corrente</label>
        <input type="password" name="current_password" id="current_password">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="password_confirmation">Conferma la password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">

        <input type="submit" value="Aggiorna Password">

    </form>


    <div class="container">
        <div class="row">
            <h2 class="text-center col-12 my-5">I miei Quadri</h2>
            @foreach($pictures as $picture)
            <div class="col-4">
            <div class="card">

                <img  class="card-img-top" src="{{asset('storage/'.$picture->image)}}" alt="">
                <div class="card-body">
                <div class="card-title">
                    {{$picture->title}}
                </div>
                <div class="card-text">
                    {{$picture->description}}
                </div>
                <div class="card-text">
                    {{$picture->price}}
                </div>
                <div class="card-text">
                    {{$picture->title}} 
                </div>
                <div class="card-text">
                <a class="btn btn-primary" href="{{route('pictures.edit',$picture->id)}}" role="button">Modifica</a>
                </div>
                <div class="card-text">
                    <form action="{{route('pictures.destroy',$picture->id)}}" method="post">
                        @csrf

                        @method('DELETE')
                        
                        <input type="submit" class="btn btn-danger" value="Elimina">
                    </form>
                </div>
                </div>
            </div>
        </div>
            @endforeach
        </div>
    </div>

</x-layout>