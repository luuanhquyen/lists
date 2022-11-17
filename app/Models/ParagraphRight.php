<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParagraphRight extends Model
{
    use HasFactory;
    public function ParagraphLeft()
    {
        return $this->belongsTo(ParagraphLeft::class); 
    }
}
