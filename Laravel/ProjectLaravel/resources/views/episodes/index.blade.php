<x-layout title="Episódios" :mensagem-sucesso="$mensagemSucesso">
  <ul class="list-group">
    <form method="post">
      @csrf
      @foreach($episodes as $episode)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Episódio {{ $episode->number }}
          
          <input type="checkbox" 
                 name="episodes[]" 
                 value="{{ $episode->id }}"
                 @if($episode->watched) checked @endif>

        </li>
      @endforeach
    </ul>

    <button class="btn btn-primary mt-4">Salvar</button>
  </form>
</x-layout>