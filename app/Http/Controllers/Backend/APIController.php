<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Region;
use App\Models\Office;

use Validator;

class APIController extends Controller
{
	public function clearDBAction()
	{
		try {
			Region::clear();
			Office::clear();
      	} catch (Exception $ex) {
      		return json_encode([
				'code' => 200,
				'data' => [
					'status' => 0,
					'message' => 'DB Error'
				]
			]);
      	}

		return json_encode([

			'code' => 200,
			'data' => [
				'status' => 1,
				'message' => 'DB Cleared Success'
			]
		]);
	}

	public function uploadReqionsAction(Request $request)
	{
		$file = $request->file;

		$importedCount = 0;

		if ($file) {
			$fileName = $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
		    $tempPath = $file->getRealPath();
		    $fileSize = $file->getSize();
		    $mimeType = $file->getMimeType();

        	// Validate
      		$validExtension = 'csv';
      		$maxFileSize = 2097152;

      		if ($extension == $validExtension) {

      			if ($fileSize <= $maxFileSize) {

      				$location = 'uploads';
      				$file->move($location, $fileName);
      				$filePath = public_path($location."/".$fileName);

      				$importDataArr = array_map( function($data) { 
      					return str_getcsv($data, ";");
      				}, file($filePath));

      				array_shift($importDataArr);

      				try {

						foreach ($importDataArr as $importData) {
      						$insertData = [
      							'title' => $importData[1],
      							'state' => $importData[2]
      						];
      						$importedCount += Region::insertData($insertData);
      					}

      				} catch (Exception $ex) {
      					return json_encode([
							'code' => 200,
							'data' => [
								'status' => 0,
								'message' => 'DB Error Import Data'
							]
						]);
      				}

      			} else {

      				return json_encode([
						'code' => 200,
						'data' => [
							'status' => 0,
							'message' => 'File too large. File must be less than 2MB'
						]
					]);
      			}

      		} else {

      			return json_encode([
					'code' => 200,
					'data' => [
						'status' => 0,
						'message' => 'Invalid File Extension'
					]
				]);
      		}
		}

		if ($importedCount == 0) {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 0,
					'message' => 'Nothing to import ...'
				]
			]);
		} else {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 1,
					'message' => 'Regions Upload Success [imported '.$importedCount.' items]'
				]
			]);
		}
	}

	public function uploadOfficesAction(Request $request)
	{
		$file = $request->file;

		$importedCount = 0;

		if ($file) {
			$fileName = $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
		    $tempPath = $file->getRealPath();
		    $fileSize = $file->getSize();
		    $mimeType = $file->getMimeType();

        	// Validate
      		$validExtension = 'csv';
      		$maxFileSize = 2097152;

      		if ($extension == $validExtension) {

      			if ($fileSize <= $maxFileSize) {

      				$location = 'uploads';
      				$file->move($location, $fileName);
      				$filePath = public_path($location."/".$fileName);

      				$importDataArr = array_map( function($data) { 
      					return str_getcsv($data, ";");
      				}, file($filePath));

      				array_shift($importDataArr);

      				try {

						foreach ($importDataArr as $importData) {
      						$insertData = [
      							'title' => $importData[1],
      							'city' => $importData[2],
      							'state' => $importData[3],
      							'zip' => $importData[4],
      							'coord_1' => $importData[5],
      							'coord_2' => $importData[6]
      						];
      						$importedCount += Office::insertData($insertData);
      					}

      				} catch (Exception $ex) {
      					return json_encode([
							'code' => 200,
							'data' => [
								'status' => 0,
								'message' => 'DB Error Import Data'
							]
						]);
      				}

      			} else {
      				return json_encode([
						'code' => 200,
						'data' => [
							'status' => 0,
							'message' => 'File too large. File must be less than 2MB'
						]
					]);
      			}

      		} else {
      			return json_encode([
					'code' => 200,
					'data' => [
						'status' => 0,
						'message' => 'Invalid File Extension'
					]
				]);
      		}
		}

		if ($importedCount == 0) {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 0,
					'message' => 'Nothing to import ...'
				]
			]);
		} else {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 1,
					'message' => 'Offices Upload Success [imported '.$importedCount.' items]'
				]
			]);
		}
	}

	public function searchOfficesAction(Request $request)
	{

		$validator = Validator::make($request->all(), [
			'zip' => 'required'
		]);
		if ($validator->fails()) {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 0
				]
			]);
		}

		// ZIP Search
		$zip = $request->zip;
		$office = Office::where('zip', $zip)->first();

		if (!$office) {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 1
				]
			]);
		}

		$region = Region::where('state', $office->state)->first();
		$offices = Office::where('state', $office->state)->get();

		if ($region && count($offices) > 0) {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 2,
					'region' => $region,
					'offices' => $offices
				]
			]);
		} else {
			return json_encode([
				'code' => 200,
				'data' => [
					'status' => 1
				]
			]);
		}
	}
}