<?php

namespace App\Livewire;

use App\Models\Allergen;
use App\Models\Dish;
use App\Models\DishAllergen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ModifyDishScreen extends Component
{
    public $selectedOption = null;
    public array $dishes;
    public array $data;
    public array $allergens;
    public array $dishAllergens;
    public $schoolId;
    public $readOnly = 'readonly';


    public function render()
    {
        $this->schoolId = User::where('id', Auth::id())->value('school_id');
        $this->dishes = Dish::where('school_id', $this->schoolId)->pluck('name')->toArray();
        $this->allergens = Allergen::all()->toArray();

        return view('livewire.modify-dish-screen');
    }

    public function handleChange()
    {
        if($this->selectedOption ==  ""){ return; }
        $this->readOnly = true;
        $this->data = Dish::where('school_id', $this->schoolId)
              ->where('name', $this->selectedOption)
              ->get()->toArray();
        $this->dishAllergens = DishAllergen::where('dish_id', $this->data[0]['id'])->pluck('allergen_id')->toArray();
        $this->readOnly = null;
        
    }
}
