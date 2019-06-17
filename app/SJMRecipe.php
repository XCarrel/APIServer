<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SJMRecipe extends Model
{
    public $table = 'SJM_Recipes';

    public function ingredients()
    {
        return $this->belongsToMany('App\SJMIngredients', "SJM_ingredients_recipes");
    }
}
