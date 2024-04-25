<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\yetu;

class yetuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Yetu';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new yetu());

        $grid->column('id', __('Id'));
        $grid->column('image_name', __('Image name'))->image('/uploads/image/', 100, 100);
        $grid->column('sender_id', __('Sender id'));
        $grid->column('sender_email', __('Sender email'));
        $grid->column('description', __('Description'));
        $grid->column('nameing', __('Nameing'));
        $grid->column('links', __('Links'));
        $grid->column('purpose', __('Purpose'));
        $grid->column('explain', __('Explain'));
        $grid->column('due_date', __('Due date'));
        $grid->column('users', __('Users'));
        $grid->column('amount', __('Amount'));
        $grid->column('comun', __('Comun'));
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
        $show = new Show(yetu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image_name', __('Image name'))->image('/uploads/image/');
        $show->field('sender_id', __('Sender id'));
        $show->field('sender_email', __('Sender email'));
        $show->field('description', __('Description'));
        $show->field('nameing', __('Nameing'));
        $show->field('links', __('Links'));
        $show->field('purpose', __('Purpose'));
        $show->field('explain', __('Explain'));
        $show->field('due_date', __('Due date'));
        $show->field('users', __('Users'));
        $show->field('amount', __('Amount'));
        $show->field('comun', __('Comun'));
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
        $form = new Form(new yetu());

        $form->image('image_name', __('Image name'))->move('/uploads/image/');
        $form->text('sender_id', __('Sender id'));
        $form->text('sender_email', __('Sender email'));
        $form->text('description', __('Description'));
        $form->text('nameing', __('Nameing'));
        $form->text('links', __('Links'));
        $form->text('purpose', __('Purpose'));
        $form->text('explain', __('Explain'));
        $form->date('due_date', __('Due date'))->default(date('Y-m-d'));
        $form->text('users', __('Users'));
        $form->text('amount', __('Amount'));
        $form->text('comun', __('Comun'));

        return $form;
    }
}
