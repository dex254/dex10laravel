<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\omba;

class OmbaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Omba';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new omba());

        $grid->column('id', __('Id'));
        $grid->column('sender_id', __('Sender id'));
        $grid->column('sender_email', __('Sender email'));
        $grid->column('themes', __('Themes'));
        $grid->column('colors', __('Colors'));
        $grid->column('due_date', __('Due date'));
        $grid->column('usage', __('Usage'));
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
        $show = new Show(omba::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sender_id', __('Sender id'));
        $show->field('sender_email', __('Sender email'));
        $show->field('themes', __('Themes'));
        $show->field('colors', __('Colors'));
        $show->field('due_date', __('Due date'));
        $show->field('usage', __('Usage'));
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
        $form = new Form(new omba());

        $form->text('sender_id', __('Sender id'));
        $form->text('sender_email', __('Sender email'));
        $form->text('themes', __('Themes'));
        $form->text('colors', __('Colors'));
        $form->date('due_date', __('Due date'))->default(date('Y-m-d'));
        $form->text('usage', __('Usage'));

        return $form;
    }
}
