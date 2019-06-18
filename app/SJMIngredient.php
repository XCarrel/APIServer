<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SJMIngredient extends Model
{
    public $table = "SJM_ingredients";

    public function recipes()
    {
        return $this->belongsToMany('App\SJMRecipe', "SJM_ingredients_recipes","ingredient_id","recipe_id");
    }
}
