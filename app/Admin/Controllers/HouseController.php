<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\House;

class HouseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'House';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new House());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('location', __('Location'));
        $grid->column('image1', __('Image1'));
        $grid->column('image2', __('Image2'));
        $grid->column('image3', __('Image3'));
        $grid->column('image4', __('Image4'));
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
        $show = new Show(House::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('location', __('Location'));
        $show->field('image1', __('Image1'));
        $show->field('image2', __('Image2'));
        $show->field('image3', __('Image3'));
        $show->field('image4', __('Image4'));
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
        $form = new Form(new House());

        $form->text('name', __('Name'));
        $form->text('location', __('Location'));
        $form->text('image1', __('Image1'));
        $form->text('image2', __('Image2'));
        $form->text('image3', __('Image3'));
        $form->text('image4', __('Image4'));

        return $form;
    }
}
