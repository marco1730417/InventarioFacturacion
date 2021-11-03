<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Clientes</h6>
        
        <!--   <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button" wire:click="create()"
>+&nbsp; New User</a> -->
@if($updateMode)
            @include('livewire.updatecliente')
            @else
        @include('livewire.createcliente')
    @endif
            

        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ruc</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Informacion</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Direccion</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($clientes_info as $user)
       
  
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                    
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $user->nombre }}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
            
                    <p class="text-xs text-secondary mb-0">{{ $user->ruc }}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                  <span class="text-secondary text-xs font-weight-bold">{{$user->email}}</span> <span class="badge badge-sm bg-gradient-info">{{$user->telefono}} </span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$user->direccion}}</span>
                  </td>
                  <td class="align-middle">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" wire:click="delete({{ $user->id }})" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" wire:click="edit({{ $user->id }})" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>


                  </td>
                </tr>
                @endforeach
             
              
            
         
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
