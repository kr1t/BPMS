<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patients';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['avatar', 'uid', 'name', 'date_of_birth', 'blood_type', 'address', 'drug_allergy', 'symptoms', 'nurse_id', 'caregiver_name'];

    public function user()
    {
        return $this->belongsTo('App\User', 'nurse_id');
    }
}