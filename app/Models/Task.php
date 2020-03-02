<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id            Task ID
 * @property integer $project_id    Project ID
 * @property string $name           Task name
 * @property string $description    Task description
 * @property string $created_at     Object creation datetime
 * @property string $updated_at     Object update datetime
 */
class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
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
