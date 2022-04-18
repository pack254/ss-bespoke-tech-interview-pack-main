<?php

namespace SSTechInterview\Page;
use Page;

class InterviewCandidatePage extends Page
{
  private static $has_many = [
      'InterviewCandidates' => InterviewCandidate::class,
  ];
}