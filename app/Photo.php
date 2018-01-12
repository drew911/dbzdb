<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'file_name',
        'character_id'
    ];

    public function getUrlAttribute() {
      //return str_replace('public', 'storage', $this->file_name);
      $photoUrl = explode ("/", $this->file_name);
      $photoUrl[0] = 'storage';
      $photoUrl = implode ("/", $photoUrl);
      return $photoUrl;
    }
}
