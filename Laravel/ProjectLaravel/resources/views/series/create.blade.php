<x-layout title="Nova série">

  <form action="{{ route('series.store') }}" method="post">
    @csrf

    <div class="row mb-3">
      <div class="col-8">
        <label for="name" class="form-label">Nome:</label>
        <input 
          type="text" 
          autofocus
          class="form-control" 
          id="name" 
          name="name" 
          value="{{ old('name') }}">
      </div>

      <div class="col-2">
        <label for="seasonsQty" class="form-label">N° Temporadas:</label>
        <input 
          type="text" 
          class="form-control" 
          id="seasonsQty" 
          name="seasonsQty" 
          value="{{ old('seasonsQty') }}">
      </div>

      <div class="col-2">
        <label for="episodesPerSeason" class="form-label">N° Episódios:</label>
        <input 
          type="text" 
          class="form-control" 
          id="episodesPerSeason" 
          name="episodesPerSeason" 
          value="{{ old('episodesPerSeason') }}">
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</x-layout>