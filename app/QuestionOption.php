<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
  public function comments() {
    return $this->hasMany(Result::class, 'option_id', 'option_id');
  }
}
