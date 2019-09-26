<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $primaryKey = 'result_id';

    public function questionTitle(){
      return $this->hasMany(Question::class, 'question_id', 'question_id');
    }

    public function questions() {
      return $this->hasMany(Question::class, 'survey_id', 'survey_id');
    }

}
