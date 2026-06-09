<x-layout title="Séries"> <!-- O título da página é passado como parâmetro para o layout, e pode ser acessado dentro do layout através da variável $title -->

  <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

  <ul class="list-group">
    @foreach($series as $serie)
      <li class="list-group-item">
        {{ $serie->name }}
      </li>
    @endforeach
  </ul>

  <!-- @{{ nome }} Para exibir o valor de uma variável sem que o Blade tente interpretá-la, basta colocar um @ antes da variável -->
  <!-- <script>
    const series = {{ Js::from($series) }}; // Permite php entender código JS e não tratar como entidade inválida
  </script> -->
</x-layout>