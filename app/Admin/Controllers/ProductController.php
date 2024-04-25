<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\product;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image')->image();
        $grid->column('description', __('Description'));
        $grid->column('date', __('Date'));
        $grid->column('colors', __('Colors'));
        $grid->column('amount', __('Amount'));
        $grid->column('purpose', __('Purpose'));
        $grid->column('use', __('Use'));
        $grid->column('frameworks', __('Frameworks'));
        $grid->column('database', __('Database'));
        $grid->column('reviews', __('Reviews'));
        $grid->column('models', __('Models'));
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
        $show = new Show(product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image')->image();
        $show->field('description', __('Description'));
        $show->field('date', __('Date'));
        $show->field('colors', __('Colors'));
        $show->field('amount', __('Amount'));
        $show->field('purpose', __('Purpose'));
        $show->field('use', __('Use'));
        $show->field('frameworks', __('Frameworks'));
        $show->field('database', __('Database'));
        $show->field('reviews', __('Reviews'));
        $show->field('models', __('Models'));
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
        $form = new Form(new product());

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->text('description', __('Description'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('colors', __('Colors'));
        $form->text('amount', __('Amount'));
        $form->text('purpose', __('Purpose'));
        $form->text('use', __('Use'));
        $form->text('frameworks', __('Frameworks'));
        $form->text('database', __('Database'));
        $form->text('reviews', __('Reviews'));
        $form->text('models', __('Models'));

        return $form;
    }
}
