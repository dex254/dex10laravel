<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\messages;

class messagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'messages';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new messages());

        $grid->column('id', __('Id'));
        $grid->column('sender_id', __('Sender id'));
        $grid->column('receiver_id', __('Receiver id'));
        $grid->column('message', __('Message'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(messages::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sender_id', __('Sender id'));
        $show->field('receiver_id', __('Receiver id'));
        $show->field('message', __('Message'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new messages());

        $form->text('sender_id', __('Sender id'));
        $form->text('receiver_id', __('Receiver id'));
        $form->text('message', __('Message'));

        return $form;
    }
}
