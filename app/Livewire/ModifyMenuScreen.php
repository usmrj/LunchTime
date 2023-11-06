<?php

namespace App\Livewire;

use Livewire\Component;

class ModifyMenuScreen extends Component
{
    public $selectedMonth;
    public $selectedDishes = []; // Initialize this array with default dishes
    public $addDishFormVisible = false;
    public $selectedDayToAddDish; // Store the selected day for adding a dish

    // Previous methods and code here
    public function toggleDishes($day)
    {
        // Toggle between Main and Soup dishes for the selected day
        $this->selectedDishes[$day] = ($this->selectedDishes[$day] === 'Main') ? 'Soup' : 'Main';
    }

    public function showAllergens($day)
    {
        // Implement code to display allergens for the selected day on hover
        // You can use JavaScript or CSS to show/hide allergens
    }

    public function handleDrag($day)
    {
        // Implement drag-and-drop functionality here
    }

    public function showAddDishForm($day)
    {
        $this->addDishFormVisible = true;
        $this->selectedDayToAddDish = $day;
    }

    public function addDishToDay($day)
    {
        // Implement code to add the selected Main and Soup dishes to the specified day
        // You can store this information in your data structure
        $this->addDishFormVisible = false;
    }
    public function render()
    {
        return view('livewire.modify-menu-screen');
    }
}
