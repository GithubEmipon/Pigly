<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightLogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'weight',
        'calories',
        'exercise_time',
        'exercise_content',
    ];

    public static $rules = array(
        'date' => 'required',
        'weight' =>'required|integer|digit_between:4 |decimal:1',
        'calories' => 'required|integer',
        'exercise_time' => 'required',
        'exercise_content' => 'required',
    );

    public function getDetail()
    {
        $txt = 'ID:' . $this->id . ' ' . $this->date . '(' . $this->weight . '' . ') ' . $this->calories . $this->exercise_time . '' . ') ' . $this->exercise_content ;
        return $txt;
    }

        public function WeightLog()
        {
            return $this->hasOne('App\Models\WeightLogs');
        }
        public function WeightLogs()
        {
            return $this->hasMany('App\Models\WeightLogs');
        }
}
