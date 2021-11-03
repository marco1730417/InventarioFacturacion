<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Ingrese el nombre" wire:model="nombre">
      @error('nombre') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="col">
      <input type="text" class="form-control"  placeholder="Ingrese el ruc" wire:model="ruc" >
      @error('ruc') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Ingrese un telefono" wire:model="telefono">
      @error('telefono') <span class="text-red-500">{{ $message }}</span>@enderror
      
    </div>
    <div class="col">
      <input type="text" class="form-control" wire:model="email"
                                placeholder="Ingrese Email" >
                                @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                                
    </div>
  </div>
  <br>
  <div class="row">
   
    <div class="col">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingrese direccion" wire:model="direccion" rows="3"></textarea>
  
                                @error('direccion') <span class="text-red-500">{{ $message }}</span>@enderror
                                
    </div>

    <div class="col">
    <button type="button" wire:click.prevent="update()"  class="btn btn-success">Actualizar</button>


   <button wire:click="UpdateModes()" type="button" class="btn btn-info">
                            Nuevo Cliente
                    </button>   
    </div>

  </div>
</form>