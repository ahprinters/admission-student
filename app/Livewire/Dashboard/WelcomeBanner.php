<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class WelcomeBanner extends Component
{
    public $user;
    public $message;

    public $newStudentsToday = 0;
    public $newTeachersToday = 0;
    public $todayFees = 0;
    public $todayRate = 0;

    public function mount()
    {
        $this->user = Auth::user();
        $this->message = 'Welcome to the dashboard.';

        // Controller থেকে যেসব logic ছিল
        $this->newStudentsToday = 12;
        $this->newTeachersToday = 3;
        $this->todayFees = 18500;
        $this->todayRate = 92;
    }

    public function render()
    {
        return view('livewire.dashboard.welcome-banner');
    }
}
