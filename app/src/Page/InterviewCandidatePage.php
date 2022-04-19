<?php

namespace SSTechInterview\Page;
use Page;
use SilverStripe\Forms\TextField;
class InterviewCandidatePage extends Page
{
  private static $db = [
    'text' => 'Text'
  ];

  private static $has_many = [
      'InterviewCandidates' => InterviewCandidate::class,
  ];

  /**
   * CMS Fields
   * @return FieldList
   */
  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab('Root.Main', TextField::create('text','Text Field'),'Content');
    return $fields;
  }
}