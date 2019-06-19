<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Songs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return parent::toArray($request);
      /*
      return [
          'SongID' => $this->SongID,
          'Title' => $this->Title,
          'Artist' => $this->Artist,
          'Year' => $this->Year,
          'FormatID' => $this->FormatID,
          'Lead' => $this->Lead
        ];
        */
    }
}
