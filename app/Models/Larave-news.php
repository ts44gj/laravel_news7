<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Larave_news extends Model
{
    
        //テーブル名
        protected $table = "migrations";
    
        //可変項目
        protected $fillable = 
        [
            'id',
            'migration',
            'batch',
            
        ];
    }

