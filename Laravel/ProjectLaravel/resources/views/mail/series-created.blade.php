<x-mail::message>
# {{ $nomeSerie }} criada com sucesso

A série {{ $nomeSerie }} foi criada com {{ $qtdTemporadas }} temporada(s) e {{ $episodiosPorTemporada }} episódio(s) por temporada.

<x-mail::button :url="route('seasons.index', $idSerie)">
Ver séries
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>