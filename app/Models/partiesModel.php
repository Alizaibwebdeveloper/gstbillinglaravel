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
}
