<?php

namespace App\Livewire;

use App\Models\Dish;
use App\Models\School;
use App\Models\ServedDish;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class SatisfactionStatScreen extends Component
{
    public $selectedOption = null;
    public $data = null;
    public $schoolId;
    public $good;
    public $middle;
    public $bad;
    public $good2;
    public $middle2;
    public $bad2;
    public $dates = null;
    public $dishes = null;
    public $error;


    public function render()
    {
        $this->schoolId = User::where('id', Auth::id())->value('school_id');
        return view('livewire.satisfaction-stat-screen');
    }

    public function fetchDataFromDatabase($option)
    {
        $school = School::where('id', $this->schoolId)->first();
        $servedDishes = $school->servedDishes->toArray();
        $dish_ids = [];

        if ($option === 'dish') 
        {
            $this->dates = null;
            foreach($servedDishes as $servedDish)
            {
                $dish_ids[] = $servedDish['dish_id'];
            }
            $this->data = Dish::whereIn('id', $dish_ids)->get()->pluck('name', 'id')->toArray();
        } 
        elseif ($option === 'day') 
        {
            $this->data = null;
            $tenDaysAgo = Carbon::now()->subDays(10);
            $this->dates = ServedDish::where('school_id', $this->schoolId)
            ->where('serving_date', '>=', $tenDaysAgo)
            ->orderBy('serving_date', 'desc')
            ->pluck('serving_date');
            
        }
    }

    public function handleChangeDish()
    {
        if($this->selectedOption ==  ""){ return; }
        $feedbacks = Dish::where('id', $this->selectedOption)->first()->feedbacks->pluck('feedback_value')->toArray();
        $counts = array_count_values($feedbacks);
        $this->good = isset($counts[3]) ? $counts[3] : 0;
        $this->middle = isset($counts[2]) ? $counts[2] : 0;
        $this->bad = isset($counts[1]) ? $counts[1] : 0;
    }

    public function handleChangeDate()
    {
        $this->dishes = null;
        if($this->selectedOption ==  ""){ return; }
        $servedDish = ServedDish::where('serving_date', $this->selectedOption)
        ->where('school_id', $this->schoolId)
        ->get();
        $dishes = [];
        $feedbacks = [];
        foreach($servedDish as $served)
        {
            $dishes[] = $served->dish;
        }
        foreach($dishes as $dish)
        {
            foreach($dish->feedbacks->toArray() as $feedback)
            {
                $feedbacks[] = $feedback['feedback_value'];
            }
            $this->dishes[] = $dish->toArray();
        }
        $counts = array_count_values($feedbacks);
        $this->good2 = isset($counts[3]) ? $counts[3] : 0;
        $this->middle2 = isset($counts[2]) ? $counts[2] : 0;
        $this->bad2 = isset($counts[1]) ? $counts[1] : 0;
    }
}
