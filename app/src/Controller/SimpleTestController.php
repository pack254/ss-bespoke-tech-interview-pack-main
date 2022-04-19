<?php
namespace SSTechInterview\Page;
use PageController;
use Model\SimpleFormComment;
class SimpleTestController extends PageController
{

    private static $allowed_actions = [
        'CommentSimpleForm',
        'test'
    ];

    public function CommentSimpleForm()
    {
        $form = Form::create(
            $this,
            'CommentSimpleForm',
            FieldList::create(
                TextField::create('Name'),
                TextareaField::create('Comment'),
            ),
            FieldList::create(
                FormAction::create('HandleSubmit','Submit')
            ),
        );
        return $form;
    }

    public function test()
    {
        die('it works');
    }

    public function HandleSubmit($data, $form){
        $comment = SimpleFormComment::create();
        $comment->SimpleTestPageID = $this->ID;
        $form->saveInfo($comment);
        $comment->write();
        return $this->redirectBack();

    }
}

