<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Survey extends Model
{
    protected $primaryKey = 'survey_id';
    public function questions() {
      return $this->hasMany(Question::class, 'survey_id', 'survey_id');
    }
    public function researcherName(){
      return $this->belongsTo('App\User','reseacher_id','id');
    }
    public function deparmentName(){
      return $this->belongsTo('App\Department','department','id');
    }

}
