<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id            Project ID            
 * @property integer $customer_id   Customer ID
 * @property string $name           Project name
 * @property string $description    Project description
 * @property string $created_at     Object creation datetime
 * @property string $updated_at     Object update datetime    
 */
class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /*
     -- Relationships
    */


    /*
     -- Scopes
    */

     
    /*
     -- Accessors
    */

    /*
     -- Mutators
    */


    /*
     -- Utility
    */
}
