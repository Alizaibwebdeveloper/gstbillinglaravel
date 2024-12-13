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
    static public function getRecordAll($request)
    {
        $return = self::select('parties_type.*');
        
        // Search start
        if (!empty($request->input('id'))) { // Use $request->input() instead of Request::get()
            $return = $return->where('parties_type.id', '=', $request->input('id'));
        }
        if (!empty($request->input('parties_type_name'))) {
            $return = $return->where('parties_type.parties_type_name', 'like', '%' . $request->input('parties_type_name') . '%');
        }
        
        // Search end
    
        $return = $return->paginate(2);
    
        return $return;
    }
    
}
