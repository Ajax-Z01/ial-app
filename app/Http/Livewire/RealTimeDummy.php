<?php

namespace App\Http\Livewire;

use App\Models\Dummy;
use Livewire\Component;

class RealTimeDummy extends Component
{
    public $dataDummy;

    protected $listeners = ['dummyAdded' => 'refreshData'];

    public function mount()
    {
        $dumies = Dummy::latest()->limit(10)->get();
        foreach ($dumies as $dummy) {
            $data['label'][] = $dummy->created_at->format('H:i:s');
            $data['data'][] = $dummy->data_dummy;
        }
        $this->dataDummy = json_encode($data);
    }

    public function render()
    {
        return view('livewire.real-time-dummy');
    }

    public function refreshData()
    {
        $dumies = Dummy::latest()->limit(10)->get()->reverse();
        foreach ($dumies as $dummy) {
            $data['label'][] = $dummy->created_at->format('H:i:s');
            $data['data'][] = $dummy->data_dummy;
        }
        $this->dataDummy = json_encode($data);
        $this->emit('refreshChart', ['data' => $this->dataDummy]);
    }
}
