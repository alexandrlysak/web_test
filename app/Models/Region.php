<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Region extends Model
{
    use HasFactory;

    public static function insertData($data)
    {
		$value = DB::table('regions')->where([
    		['title', '=', $data['title']],
    		['state', '=', $data['state']]
		])->get();
      	
      	if ($value->count() == 0) {
      		$data['created_at'] =new \DateTime();
      		$data['updated_at'] =new \DateTime();
        	DB::table('regions')->insert($data);
        	return 1;
      	} else {
      		return 0;
      	}
   	}

   	public static function clear()
   	{
   		DB::table('regions')->truncate();
   	}

}
