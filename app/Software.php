<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    //テーブル名
    protected  $table = 't_software';

    //主キー
    protected $primaryKey = 'software_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * モデルの主キーを自動増分させるか否か
     *
     * @var boolean
     */
    public $incrementing = false;

    public function scopeSoftwareName($query,$software_name){
        return $query->where('software_name','like',"%{$software_name}%");
    }

    public function scopeCorrespondingHardware($query,$corresponding_hardware){
        return $query->where('corresponding_hardware','=',$corresponding_hardware);
    }

    public function scopeGenre($query,$genre){
        return $query->where('genre','=',$genre);
    }
}
