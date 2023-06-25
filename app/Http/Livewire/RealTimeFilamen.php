<?php

namespace App\Http\Livewire;

use App\Models\Filamen;
use Livewire\Component;

class RealTimeFilamen extends Component
{
    public $dataFilamen;

    protected $listeners = ['filamenAdded' => 'refreshDataFilamen'];

    public function mount()
    {
        $filamens = Filamen::latest()->limit(20)->get()->reverse();
        $data = [];

        foreach ($filamens as $filamen) {
            $data['label'][] = $filamen->created_at->format('H:i:s');
            $data['data1'][] = $filamen->arus_filamen;
            $data['data2'][] = $filamen->tegangan_potensio;
        }

        $this->dataFilamen = json_encode($data);
    }

    public function render()
    {
        return view('livewire.real-time-filamen');
    }

    public function refreshDataFilamen()
    {
        $filamens = Filamen::latest()->limit(20)->get()->reverse();
        $data = [];

        foreach ($filamens as $filamen) {
            $data['label'][] = $filamen->created_at->format('H:i:s');
            $data['data1'][] = $filamen->arus_filamen;
            $data['data2'][] = $filamen->tegangan_potensio;
        }

        $this->dataFilamen = json_encode($data);
        $this->emit('refreshDataFilamen', ['data' => $this->dataFilamen]);
    }
}
