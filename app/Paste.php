<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    //
    protected $table = 'pastebin';
    protected $fillable = ['name','NewPaste','expiration_id','languag_id','hash','priv'];

    public function language() {
		return $this->belongsTo('App\Language');
    }
    public function deadline() {
		return $this->belongsTo('App\Deadline');
    }
    public function user() {
		return $this->belongsTo('App\User');
	}
}
