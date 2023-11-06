<?php

namespace App\Http\Controllers;

use App\Models\Allergen;
use App\Models\Dish;
use App\Models\DishAllergen;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DishController extends Controller
{
    public function index()
    {
        $allergens = Allergen::all();
        return view('AddDish', [
            'allergens' => $allergens
        ]);
    }

    public function indexEdit()
    {
        return view('ModifyDish');
    }

    public function create(Request $request)
    {
        $schoolId = User::where('id', Auth::id())->value('school_id');

        $data = $request->validate([
            'name' => 'required',
            'allergens' => '',
            'ingr1' => 'required',
            'ingr2' => '',
            'ingr3' => '',
            'ingr4' => '',
            'ingr5' => '',
            'school_id' => '',
            'IsMain' => '',
            'IsAlternative' => ''
        ]);
        if (Dish::where('name', $data['name'])->exists()) {
            return redirect()->route('add-dish')->with('success', 'Obiad ' . $data['name'] . ' już istnieje');
        }
        $allergens = [];

        if (isset($data['allergens'])) {
            $allergens = $data['allergens'];
            unset($data['allergens']);
        }

        $data['school_id'] = $schoolId;
        $data['IsMain'] = isset($data['IsMain']) ? 1 : 0;
        $data['IsAlternative'] = isset($data['IsAlternative']) ? 1 : 0;
        $newDish = new Dish($data);
        $newDish->save();


        $data = [];
        foreach($allergens as $allergen)
        {
            $data['dish_id'] = $newDish->id;
            $data['allergen_id'] = $allergen;
            $DishAllergen = new DishAllergen($data);
            $DishAllergen->save();
        }

        return redirect()->route('add-dish')->with('success', 'Pomyślnie dodano obiad: ' . $newDish['name'] . '');
    }

    public function edit(Request $request)
    {
        $schoolId = User::where('id', Auth::id())->value('school_id');
        $data = $request->validate([
            'name' => 'required',
            'allergens' => '',
            'ingr1' => 'required',
            'ingr2' => '',
            'ingr3' => '',
            'ingr4' => '',
            'ingr5' => '',
            'school_id' => '',
            'IsMain' => '',
            'IsAlternative' => ''
        ]);
        $allergens = [];

        if (isset($data['allergens'])) {
            $allergens = $data['allergens'];
            unset($data['allergens']);
        }
        $data['school_id'] = $schoolId;
        $data['IsMain'] = isset($data['IsMain']) ? 1 : 0;
        $data['IsAlternative'] = isset($data['IsAlternative']) ? 1 : 0;
        $dish = Dish::where('school_id', $schoolId)
        ->where('name', $data['name'])
        ->first();
        $dish->fill($data);
        $dish->save();

        $dishAllergens = DishAllergen::where('dish_id', $dish['id'])->get()->toArray();

        foreach($allergens as $allergen)
        {
            if(!in_array($allergen, $dishAllergens))
            {
                $data['dish_id'] = $dish['id'];
                $data['allergen_id'] = $allergen;
                $DishAllergen = new DishAllergen($data);
                $DishAllergen->save();
            }
        }

        foreach($dishAllergens as $dishAllergen)
        {
            if(!in_array($dishAllergen, $allergens))
            {
                $record = DishAllergen::find($dishAllergen['id']);
                $record->delete();
            }
        }


        return redirect()->route('modify-dish')->with('success', 'Pomyślnie zmodyfikowano obiad: ' . $dish['name'] . '');

    }
}