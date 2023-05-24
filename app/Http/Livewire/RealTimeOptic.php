<?php

namespace App\Http\Livewire;

use App\Models\Optic;
use Livewire\Component;

class RealTimeOptic extends Component
{
    public $dataOptic;

    protected $listeners = ['opticAdded' => 'refreshDataOptic'];

    public function mount()
    {
        $optics = Optic::latest()->limit(10)->get()->reverse();
        $data = [];

        foreach ($optics as $optic) {
            $data['label'][] = $optic->created_at->format('H:i:s');
            $data['data1'][] = $optic->arus_pemayar;
            $data['data2'][] = $optic->arus_pemfokus;
            $data['data3'][] = $optic->tegangan_pemayar;
            $data['data4'][] = $optic->tegangan_pemfokus;
        }

        $this->dataOptic = json_encode($data);
    }

    public function render()
    {
        return view('livewire.real-time-optic');
    }

    public function refreshDataOptic()
    {
        $optics = Optic::latest()->limit(10)->get()->reverse();
        $data = [];

        foreach ($optics as $optic) {
            $data['label'][] = $optic->created_at->format('H:i:s');
            $data['data1'][] = $optic->arus_pemayar;
            $data['data2'][] = $optic->arus_pemfokus;
            $data['data3'][] = $optic->tegangan_pemayar;
            $data['data4'][] = $optic->tegangan_pemfokus;
        }

        $this->dataOptic = json_encode($data);
        $this->emit('refreshDataOptic', ['data' => $this->dataOptic]);
    }
}
