<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CheckinResource;
use App\Models\Checkin;

class CheckinController extends Controller
{
    public function byDate($date) {
        $items = Checkin::where('checkin_datetime', $date)->get();

        return CheckinResource::collection($items);
    }

    public function byFirstName($name) {
        $items = Checkin::where('first_name', $name)->get();

        return CheckinResource::collection($items);
    }

    public function byLastName($name) {
        $items = Checkin::where('last_name', $name)->get();

        return CheckinResource::collection($items);
    }

    public function byDepartment($dept) {
        $items = Checkin::where('department', $dept)->get();

        return CheckinResource::collection($items);
    }

    public function get($id) {
        $item = Checkin::find($id)->get();

        return CheckinResource::collection($item);
    }

    public function insert($request) {

    }

    public function update($id, $request) {

    }

    public function delete($id, $request) {

    }
}
