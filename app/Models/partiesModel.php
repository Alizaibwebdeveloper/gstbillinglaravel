<?php

namespace App\Models;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class partiesModel extends Model
{
    use HasFactory;
    protected $table = 'parties';
    static public function getRecordAll()
    {
        $return = self::select('parties.*'); // Query to select all records from the 'parties' table
        $return = $return->paginate(5);    // Paginate the results (20 items per page)
        return $return;                     // Return the paginated instance
    }

    static public function  SinglegetRecord($id){

       return  self::find($id);
    }
    
}
