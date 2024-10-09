<?php

namespace App\Traits;

use App\Models\ContentBlock;

trait HasContentBlocks
{
    public function contentBlocks()
    {
        return $this->morphMany(ContentBlock::class, 'blockable');
    }

    public function addContentBlock($type, $content)
    {
        return $this->contentBlocks()->create([
            'type' => $type,
            'content' => $content,
            'blockable_id' => $this->id,
            'blockable_type' => get_class($this),
        ]);
    }

    public function removeContentBlock($id)
    {
        return $this->contentBlocks()->where('id', $id)->delete();
    }
}
