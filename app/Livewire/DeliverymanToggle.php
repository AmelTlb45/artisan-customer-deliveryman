<?php

namespace App\Livewire;

use Livewire\Component;

class DeliverymanToggle extends Component
{
    public $deliveryman;

    public function mount($deliveryman)
    {
        $this->deliveryman = $deliveryman;
    }

    public function toggleDispo()
    {
        if ($this->deliveryman->Dispo == "Yes") {
            $this->deliveryman->Dispo = "No";
        } else {
            $this->deliveryman->Dispo = "Yes";
        }

        $this->deliveryman->save();
    }
    public function render()
    {
        return view('users.artisans.list_deliveryman');
    }
}
