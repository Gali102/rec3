<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class CompanyController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        CRUD::setModel('App\Models\Company');
        CRUD::setRoute('admin/company');
        CRUD::setEntityNameStrings('компания', 'компании');
    }

    public function setupListOperation()
    {
        CRUD::setColumns([
            [
                'name' => 'id',
                'label' => 'ID',
                'type' => 'number',
                'tab' => 'Simple',
            ],
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
                'tab' => 'Simple',
            ],
        ]);
    }

    public function setupCreateOperation()
    {
        CRUD::field('name')->type('text');
        CRUD::field('slug')->type('text')->label('URL Segment (slug)');
        CRUD::field('logo')->type('text');
        CRUD::field('phone')->type('text');
        CRUD::field('telegram')->type('text');
        CRUD::field('whatsapp')->type('text');
        CRUD::field('site')->type('text');
        CRUD::field('user_id')->type('text');
        CRUD::field('type_id')->type('text');
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
