<?php

declare(strict_types=1);

namespace App\Observers;

use App\Part;

class PartObserver
{
    /**
     * Handle the part "creation" event.
     */
    public function creating(Part $part): void
    {
        $part->slug = sluggify($part->title);
    }

    /**
     * Handle the part "created" event.
     */
    public function created(Part $part): void
    {
        // Just app/public because the image attribute already includes 'parts' folder name
        $part->addMedia(storage_path('app/public/' . $part->image))
            ->preservingOriginal()
            ->toMediaCollection();
    }
}