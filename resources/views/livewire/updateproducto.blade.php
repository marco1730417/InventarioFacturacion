<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Ingrese el nombre" wire:model="nombre">
      @error('nombre') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="col">
      <input type="text" class="form-control"  placeholder="Ingrese el unidades" wire:model="unidades" >
      @error('unidades') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Ingrese un codigo" wire:model="codigo">
      @error('codigo') <span class="text-red-500">{{ $message }}</span>@enderror
      
    </div>
    <div class="col">
      <input type="text" class="form-control" wire:model="codigo"
                                placeholder="Ingrese codigo" >
                                @error('codigo') <span class="text-red-500">{{ $message }}</span>@enderror
                                
    </div>
  </div>
  <br>
  <div class="row">
   
    <div class="col">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingrese descripcion" wire:model="descripcion" rows="3"></textarea>
  
                                @error('descripcion') <span class="text-red-500">{{ $message }}</span>@enderror
                                
    </div>

    <div class="col">
    <button type="button" wire:click.prevent="store()"  class="btn btn-success">Guardar</button>
      
    </div>

  </div>
</form>