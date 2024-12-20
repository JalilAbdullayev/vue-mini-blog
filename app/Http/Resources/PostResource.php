<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'thumbnail' => $this->getImage()->path,
            'caption' => $this->getImage()->caption,
            'alt_text' => $this->getImage()->description,
            'excerpt' => Str::words(strip_tags($this->content), 30),
            'categories' => CategoryResource::collection($this->whenLoaded('categories'))
        ];
    }
}
