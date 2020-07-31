<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CateModel extends Model
{
    public $table="p_category";
    protected  $primaryKey="cat_id";
    public $timestamps=false;
    protected  $fillable=["*"];
}
