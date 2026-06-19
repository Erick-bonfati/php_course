<x-layout title="Séries"> <!-- O título da página é passado como parâmetro para o layout, e pode ser acessado dentro do layout através da variável $title -->

  <a href="{{route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>

  @isset($mensagemSucesso) <!-- Verifica se a variável $mensagemSucesso está definida -->
    <div class="alert alert-success">
      {{ $mensagemSucesso }} <!-- Exibe o valor da variável $mensagemSucesso -->
    </div>
  @endisset

  <ul class="list-group">
    @foreach($series as $serie)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href='{{ route('seasons.index', $serie->id) }}'>{{ $serie->name }}</a>
        
        <span class="d-flex">
          <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">Editar</a>
           <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Excluir</button>
          </form>
        </span>
       
        
      </li>
    @endforeach
  </ul>

  <!-- @{{ name }} Para exibir o valor de uma variável sem que o Blade tente interpretá-la, basta colocar um @ antes da variável -->
  <!-- <script>
    const series = {{ Js::from($series) }}; // Permite php entender código JS e não tratar como entidade inválida
  </script> -->
</x-layout>