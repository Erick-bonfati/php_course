<x-layout title="Editar série '{!! $series->name !!}'">
  <form action="{{ route('series.update', $series->id) }}" method="post" :update="true">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input 
          type="text" 
          class="form-control" 
          id="name" 
          name="name" 
          @isset($name)value="{{ $series->name }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</x-layout>