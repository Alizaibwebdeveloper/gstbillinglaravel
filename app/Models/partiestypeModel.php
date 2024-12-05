<?php

namespace App\Models;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class partiestypeModel extends Model
{
    use HasFactory;
    protected $table = 'parties_type';

    static public function getRecordAll(){
        $return = self::select('parties_type.*');
        $return = $return->paginate(2);

        return $return;
    }
}
