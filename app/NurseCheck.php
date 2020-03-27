<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class NurseCheck extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nurse_checks';

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
    protected $fillable = ['SIS', 'DIA', 'BPM', 'wound', 'infection', 'tube', 'patient_id', 'nurse_id'];

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function nurse()
    {
        return $this->belongsTo('App\User', 'nurse_id', 'id');
    }

    public function getTubeAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'เปลี่ยนสายอาหารเรียบร้อย'],
            ["id" => 2, "v" => 'ผู้ป่วยไม่ได้ใส่สายอาหาร'],
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
}