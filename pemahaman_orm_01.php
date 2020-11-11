<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //
    protected $table = 'school';

    public static function filter()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = school::where('created_at','>=',date('2020-01-01'))
                ->andWhere('created_at','<=',date('2020-01-30'))
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }
}