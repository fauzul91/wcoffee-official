<?php

namespace App\Livewire;

use Livewire\Component;

class MitraStatusModal extends Component
{
    public $showModal = false;
    public $status;

    public function mount()
    {
        $user = auth()->user();
        if ($user && $user->mitraApproval && !$user->mitraApproval->is_notified) {
            $this->status = $user->mitraApproval->status;
            $this->showModal = in_array($this->status, ['approved', 'rejected']);
        }
    }

    public function closeModal()
    {
        $this->showModal = false;

        // Set is_notified = true setelah modal muncul
        $approval = auth()->user()->mitraApproval;
        if ($approval) {
            $approval->is_notified = true;
            $approval->save();
        }
    }
    public function render()
    {
        return view('livewire.mitra-status-modal');
    }
}
