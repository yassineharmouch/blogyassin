<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    
        protected $fillable = [
        ];
        protected $guarded = [];
        protected $dates = ['date', ];
    
        public function module(){
            return $this->belongsTo('App\Module');
        }
        public function absence(){
            return $this->belongsTo('\App\Absence');
        }
}
