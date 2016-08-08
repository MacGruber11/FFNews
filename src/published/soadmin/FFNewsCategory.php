<?php
/**
 * Created by PhpStorm.
 * User: stepanov
 * Date: 08.08.2016
 * Time: 16:04
 */

use MacGruber11\FFNews\Models\FFNewsCategory as Category;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Category::class, function (ModelConfiguration $model) {
    $model->setTitle('News categories');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Title')->setHtmlAttribute('class', 'text-muted'),
            AdminColumn::text('slug')->setLabel('slug')->setHtmlAttribute('class', 'text-muted'),
        ]);

        $display->paginate(15);

        return $display;
    });

    // Create And Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('title', 'Title')->required(),
            AdminFormElement::text('slug', 'slug')->required()
        );

        return $form;
    });
})
    ->addMenuPage(Category::class, 0)
    ->setIcon('fa fa-bank');