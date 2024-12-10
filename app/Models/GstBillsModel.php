<?php

namespace App\Models;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class GstBillsModel extends Model
{

    use HasFactory;

    protected $table = 'gst_bills';

    static public function getRecordAll(){

    $return = self::select('gst_bills.*','parties_type.parties_type_name');
    $return = $return->join('parties_type', 'parties_type_id','gst_bills.parties_type_id');
    $return = $return->paginate(5);
    return $return;
    }
    
}