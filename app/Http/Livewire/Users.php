<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public function render()
    {
        $users = User::orderBy('position')->get();
        return view('livewire.users',['users' => $users]);
    }
}
