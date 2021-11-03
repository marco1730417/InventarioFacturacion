<?php

namespace App\Http\Livewire;
use App\Models\Cliente;
 

use Livewire\Component;

class Tables extends Component
{
    public $clientes_info,$nombre,$ruc,$direccion,$telefono,$email,$selected_id;
    public $updateMode = false;

    public function render()
    {
     /*    $clientes_info= Cliente::all();
        return $clientes_info; */
        $this->clientes_info = Cliente::all();
        return view('livewire.tables'
          
    );
    }

    public function UpdateModes(){
        $this->updateMode=false;
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->email = null;
        $this->telefono = null;
        $this->ruc = null;
        $this->direccion = null;
        
    }
    public function store()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'ruc' => 'required'
        ]);
        Cliente::create([
            'nombre' => $this->nombre,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'ruc' => $this->ruc,
            'direccion' => $this->direccion
            

        ]);
        $this->resetInput();
    }
    public function edit($id)
    {
        $record = Cliente::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->email = $record->email;
        $this->telefono = $record->telefono;
        $this->ruc = $record->ruc;
        $this->direccion = $record->direccion;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'nombre' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'ruc' => 'required'
        ]);
        if ($this->selected_id) {
            $record = Cliente::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'email' => $this->email,
                'telefono' => $this->telefono,
                'ruc' => $this->ruc,
                'direccion' => $this->direccion
                
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    
 
  
    
    public function delete($id)
    {
        Cliente::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
