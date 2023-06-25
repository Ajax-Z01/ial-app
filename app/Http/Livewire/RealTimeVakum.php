<?php

namespace App\Http\Livewire;

use App\Models\Vakum;
use Livewire\Component;

class RealTimeVakum extends Component
{
    public $dataVakum;

    protected $listeners = ['vakumAdded' => 'refreshDataVakum'];

    public function mount()
    {
        $vakums = Vakum::latest()->limit(20)->get()->reverse();
        $data = [];

        foreach ($vakums as $vakum) {
            $data['label'][] = $vakum->created_at->format('H:i:s');
            $data['data1'][] = $vakum->tekanan_vakum_penning_mbar;
            $data['data2'][] = $vakum->tekanan_vakum_pirani_mbar;
        }

        $this->dataVakum = json_encode($data);
    }

    public function render()
    {
        return view('livewire.real-time-vakum');
    }

    public function refreshDataVakum()
    {
        $vakums = Vakum::latest()->limit(20)->get()->reverse();
        $data = [];

        foreach ($vakums as $vakum) {
            $data['label'][] = $vakum->created_at->format('H:i:s');
            $data['data1'][] = $vakum->tekanan_vakum_penning_mbar;
            $data['data2'][] = $vakum->tekanan_vakum_pirani_mbar;
        }

        $this->dataVakum = json_encode($data);
        $this->emit('refreshDataVakum', ['data' => $this->dataVakum]);
    }
}
