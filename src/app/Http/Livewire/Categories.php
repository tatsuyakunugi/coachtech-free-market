<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public $categories;
    public $category;
    public $showModal = false;

    public function mount($categories)
    {
        $this->categories = $categories;
    }

    public function render()
    {
        return view('livewire.categories');
    }

    public function openModal()
    {
        $this->showModal = true;
    }
 
    public function closeModal()
    {
        $this->showModal = false;
    }
}
