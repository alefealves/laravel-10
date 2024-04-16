<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplySupportResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request)
  {
    // return [
    //   'id' => $this->id,
    //   'support_id' => $this->support_id,
    //   'content' => $this->content,
    //   'created_at' => $this->created_at,
    // ];
    return collect($this->resource);
  }
}
