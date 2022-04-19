<?php

namespace SSTechInterview\Page;
use Page;

class SimpleTestPage extends Page
{
   private static $has_many = [
        'SimpleFormComments' => SimpleFormComment::class,
   ];
}