<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = [
        'category_application',
        'name_application', 
        'sale_price_application',
        'image_logo_application',
    ];
    
   /* public function users(){
        return $this -> hasMany('App\User');
    } */

}
