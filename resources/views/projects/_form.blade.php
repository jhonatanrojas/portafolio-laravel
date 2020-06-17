<div class="input-group mb-3">
  <div class="input-group-prepend">

  </div>
  <div class="custom-file">
    <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Buscar Imagen</label>
  </div>


</div>

<div class="form-group">
  <label for="category_id">Categoria</label>
  <select name="category_id" id="category_id" class="form-control bg-light shadow-sm">
      @foreach ($categories as $id => $category)
  <option value="{{ $id}}"
  @if ($id== old('category_id',$id==$project->category_id))
  selected
  @endif
  >{{$category }}</option>
  
      @endforeach

  </select>
</div>
<div class="form-group">

  <label for="title">Titulo del Proyecto</label>


  <input type="text" name="title" value="{{ old('title',$project->title) }}" class="form-control bg-light shadow-sm 
             @error('title')   is-invalid  
             @else  border-0  @enderror" placeholder="Titulo del Proyecto" id="title">
</div>

<div class="form-group">
  <label for="url">url del proyecto</label>

  <input type="text" name="url" value="{{ old('url',$project->url) }}" class="form-control bg-light shadow-sm 
             @error('url')   is-invalid  
             @else  border-0  @enderror" placeholder="url del proyecto" id="name">


</div>
<div class="form-group">
  <label for="url">Descripcion del Proyecto </label>

  <input type="text" name="description" value="{{ old('description',$project->description) }}" class="form-control bg-light shadow-sm 
                @error('url')   is-invalid  
                @else  border-0  @enderror" placeholder="Descripcion del Proyecto" id="url">


</div>