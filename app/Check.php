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
    protected $fillable = ['urine_color', 'skin', 'food_type', 'respiratory_system', 'bedsore', 'phlegm', 'patient_id', 'caneat', 'eyes', 'mouth', 'muscles', 'handling', 'note'];

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
    public function getCaneatAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'ผู้ป่วยทานอาหารเองได้'],
            ["id" => 2, "v" => 'ผู้ป่วยใส่สายอาหาร'],
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
    public function getFoodTypeAttribute($id)
    {
        $datas = [
            ["id" => 0, "v" => '-'],
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
            ["id" => 3, "v" => 'สีเหลืองอ่อน']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }

    public function getEyesAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'ตอบสนองได้ปกติ'],
            ["id" => 2, "v" => 'ตอบสนองได้ช้า แต่ยังสามารถมองตามได้'],
            ["id" => 3, "v" => 'อื่นๆ.....']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }


    public function getMouthAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'สนทนาได้ปกติ'],
            ["id" => 2, "v" => 'เจาะคอไม่สามารถสนทนาได้'],
            ["id" => 3, "v" => 'อื่นๆ.....']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }


    public function getMusclesAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'กล้ามเนื้อแขนขาใช้งานได้ปกติ'],
            ["id" => 2, "v" => 'กล้ามเนื้อแขนขาอ่อนแรง'],
            ["id" => 3, "v" => 'กล้ามเนื้อแขนขาไม่สามารถใช้งานได้']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }

    public function getHandlingAttribute($id)
    {
        $datas = [
            ["id" => 1, "v" => 'สามารถหยิบจับสิ่งของทานอาหารด้วยตัวเองได้'],
            ["id" => 2, "v" => 'สามารถหยิบจับสิ่งของได้บ้างกล้ามเนื้อมืออ่อนแรง'],
            ["id" => 3, "v" => 'ไม่สามารถหยิบจับสิ่งของได้เลยช่วยเหลือตัวเองไม่ได้เลย']
        ];
        $first = Arr::first($datas, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });
        return  $first['v'];
    }
}