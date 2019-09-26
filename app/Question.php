<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $primaryKey = 'question_id';
  public function surveyTitle(){
    return $this->belongsTo('App\Survey','survey_id','survey_id');
  }

  public function options() {
    return $this->hasMany(QuestionOption::class, 'question_id', 'question_id');
  }

  public function questionTitle(){
    return $this->hasMany(Result::class, 'question_id', 'question_id');
  }



}
