<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\projects;

class projectsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'projects';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new projects());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('date', __('Date'));
        $grid->column('description', __('Description'));
        $grid->column('image')->image();
        $grid->column('amount', __('Amount'));
        $grid->column('quantity', __('Quantity'));
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
        $show = new Show(projects::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('serialnumber', __('Serialnumber'));
        $show->field('image', __('Image'));
        $show->field('date', __('Date'));
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
        $form = new Form(new projects());

        $form->text('name', __('Name'));
        $form->text('serialnumber', __('Serialnumber'));
        $form->image('image', __('Image'));
        $form->text('date', __('Date'));

        return $form;
    }
}
