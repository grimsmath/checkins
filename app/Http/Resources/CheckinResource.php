<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckinResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request) {
        $item = [
            'id' => $this->Id,
            'checkin_datetime' => $this->checkin_datetime,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'department' => $this->department,
            'university_id' => $this->university_id,
            'library_id' => $this->library_id,
            'access_level' => $this->access_level,
            'exported' => $this->exported
        ];

        return $item;
    }
}
