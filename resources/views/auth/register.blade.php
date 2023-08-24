<x-layout>

        <h2>Crea al profilo</h2>

   <form action="/register" method="post">
   @csrf
        <label for="name">Nome</label>
        <input type="name" name="name" id="name">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="password_confirmation">Conferma la password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">

        <input type="submit" value="Registrati">

   </form> 


</x-layout>