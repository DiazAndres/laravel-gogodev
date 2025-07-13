<div style="border: 1px solid black; border-radius: 5px; padding: 10px; margin: 5px;">
    <h3>{{ $title }}</h3>
    {{-- Para decirle que es contenido estatico y no importa si se cambia la ruta en web.php --}}
    {{-- asset es para mandar a llamar recursos estaticos (en alguna carpeta en especifico ) --}}
    <img src="{{ asset('assets/img/kurzgesagt-04.jpeg') }}" alt="Example Flutter" width="100">
    <p>{{ $content }}</p>
</div>
