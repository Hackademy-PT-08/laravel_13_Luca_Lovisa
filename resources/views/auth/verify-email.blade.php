<x-layout>

    <p>Email di conferma della registrazione</p>

    <form action=" /email/verification-notification" method="post">
        @csrf
        <input type="submit" value="Invia di nuovo email di verifica">
    </form>
</x-layout>