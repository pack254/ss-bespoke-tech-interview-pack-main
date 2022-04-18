<?php

namespace SSTechInterview\Page;
use Page;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;

class HomePage extends Page
{
    /**
     * Build out 8 mock images for the gallery
     * @return ArrayList
     */
    public function getGalleryImages()
    {
        $images = ArrayList::create();

        for ($i = 1; $i <= 8; $i++) {
            $images->push(ArrayData::create([
                'Title' => 'Image ' . $i,
                'Url' => 'https://placekitten.com/200/300',
            ]));
        }

        return $images;
    }
}
