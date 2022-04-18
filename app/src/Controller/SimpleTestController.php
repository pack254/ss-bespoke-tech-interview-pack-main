<?php
namespace SSTechInterview\Page;
use PageController;
class SimpleTestController extends PageController
{

    private static $allowed_actions = [
        'CommentSimpleForm'
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

    public function HandleSubmit($data, $form){
        $comment = SimpleFormComment::create();
        $comment->SimpleFromPageID = $this->ID;
        $form->saveInfo($comment);
        $comment->write();
        return $this->redirectBack();

    }
}

