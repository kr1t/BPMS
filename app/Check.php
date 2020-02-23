<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Check extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'checks';

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
    protected $fillable = ['urine_color', 'skin', 'food_type', 'respiratory_system', 'bedsore', 'phlegm', 'patient_id'];

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function getUrineColorAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'สีปกติ'],
            ["id" => 2, "v" => 'สีเหลืองเข้ม'],
            ["id" => 3, "v" => 'สีเหลืองปนเลือด']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
    public function getSkinAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'ผิวปกติ'],
            ["id" => 2, "v" => 'ผิวแห้งกร้าน'],
            ["id" => 3, "v" => 'ผิวมัน']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
    public function getFoodtypeAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'นม'],
            ["id" => 2, "v" => 'ผัก+นม'],
            ["id" => 3, "v" => 'ผัก+ไข่']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
    public function getRespiratorySystemAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'หายใจได้เอง'],
            ["id" => 2, "v" => 'มีเครื่องช่วยหายใจ'],
            ["id" => 3, "v" => 'เจาะคอ']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
    public function getBedsoreAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'ก้น'],
            ["id" => 2, "v" => 'ข้อศอก'],
            ["id" => 3, "v" => 'ข้อเท้า']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
    public function getPhlegmAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'สีใสปกติ'],
            ["id" => 2, "v" => 'สีเหลืองอ่อน'],
            ["id" => 3, "v" => 'สีเขียว']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
}