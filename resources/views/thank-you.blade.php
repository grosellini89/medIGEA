<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>ciao {{ $name }} Grazie per averci contattato</h1>
            <h2>ti fisseremo a breve un appuntamento</h2>
            <p>i tuoi dati sono:</p>
            <ul>
                <li>{{ $email }}</li>
                <li>{{ $message }}</li>

            </ul>
        </div>
      
    </div>
</div>

 </x-layout>
