<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id            Customer ID
 * @property string $name           Customer name
 * @property string $created_at     Object creation datetime
 * @property string $updated_at     Object update datetime
 */
class Customer extends Model
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

    /**
     * Get the projects that belong to this customer.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

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
