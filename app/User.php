<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //テーブル名
    protected  $table = 'm_user';

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
}
