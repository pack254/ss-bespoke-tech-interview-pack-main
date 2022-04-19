<?php
use SilverStripe\ORM\DataObject;

Class SimpleFormComment extends DataObject{
    private static $db = [
        'Name' => 'Text',
        'Commnet' => 'Text'
    ];

    private static $has_one = [
        'SimpleTestPage' => SimpleTestPage::class
    ];
}