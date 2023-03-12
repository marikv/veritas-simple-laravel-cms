<?php

namespace App\Models;

use App\Base\SluggableModel;

class Block extends SluggableModel
{
    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('block', ['blockSlug' => $this->slug]);
    }
}
