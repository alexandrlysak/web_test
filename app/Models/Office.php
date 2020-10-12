<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Office extends Model
{
    use HasFactory;

    public static function insertData($data)
    {
		$value = DB::table('offices')->where([
			['title', '=', $data['title']],
    		['city', '=', $data['city']],
    		['state', '=', $data['state']]
		])->get();
      	
      	if ($value->count() == 0) {
      		$data['created_at'] =new \DateTime();
      		$data['updated_at'] =new \DateTime();
        	DB::table('offices')->insert($data);
        	return 1;
      	} else {
      		return 0;
      	}
   }

   	public static function clear()
   	{
   		DB::table('offices')->truncate();
   	}
}
