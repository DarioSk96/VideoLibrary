<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable = ['naslov', 'opis', 'zanr'];
}
