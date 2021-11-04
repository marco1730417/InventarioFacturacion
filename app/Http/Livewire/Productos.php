<?php

namespace App\Http\Livewire;
use App\Models\Producto;
 
use Search; // Use the search trait we created earlier
use Livewire\Component;

class Productos extends Component
{



    public $productos_info,$nombre,$codigo,$descripcion,$iva,$unidades,$selected_id,$searchTerm;
    public $updateMode = false;

    public function render()
    {
     /*    $productos_info= Producto::all();
        return $productos_info; */
        $this->productos_info = Producto::all();
        return view('livewire.productos'
          
    );
    }

    public function UpdateModes(){
        $this->updateMode=false;
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->unidades = null;
        $this->iva = null;
        $this->codigo = null;
        $this->descripcion = null;
        
    }
    public function store()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'unidades' => 'required',
            'codigo' => 'required'
        ]);
        Producto::create([
            'nombre' => $this->nombre,
            'unidades' => $this->unidades,
            'iva' => $this->iva,
            'codigo' => $this->codigo,
            'descripcion' => $this->descripcion
            

        ]);
        $this->resetInput();
    }
    public function edit($id)
    {
        $record = Producto::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->unidades = $record->unidades;
        $this->iva = $record->iva;
        $this->codigo = $record->codigo;
        $this->descripcion = $record->descripcion;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'nombre' => 'required|min:5',
            'unidades' => 'required|unidades:rfc,dns',
            'codigo' => 'required'
        ]);
        if ($this->selected_id) {
            $record = Producto::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'unidades' => $this->unidades,
                'iva' => $this->iva,
                'codigo' => $this->codigo,
                'descripcion' => $this->descripcion
                
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    
 
  
    
    public function delete($id)
    {
        Producto::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
