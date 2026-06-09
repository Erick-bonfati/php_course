<x-layout title="Nova série">
  <form action="/series/salvar" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
   
  </form>
</x-layout>