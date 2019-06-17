<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SJMIngredients extends Model
{
    public $table = "SJM_ingredients";

    public function recipes()
    {
        return $this->belongsToMany('App\SJMRecipes', "SJM_ingredients_recipes");
    }
}
