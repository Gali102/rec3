<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompanyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CompanyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CompanyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Company::class);
        CRUD::setRoute('admin/company');
        CRUD::setEntityNameStrings('компания', 'компании');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
//        CRUD::setFromDb(); // set columns from db columns.
//dd(auth()->id());
        CRUD::setColumns([
            [
                'name' => 'id',
                'label' => 'ID',
                'type' => 'number',
                'tab' => 'Simple',
            ],
            [
                'name' => 'name',
                'label' => 'Название',
                'type' => 'text',
                'tab' => 'Simple',
            ],
            [
                'name' => 'slug',
                'label' => 'Ссылка на сайт',
                'type' => 'text',
                'tab' => 'Simple',
            ],
            [
                'name' => 'phone',
                'label' => 'Телефон',
                'type' => 'text',
                'tab' => 'Simple',
            ],
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CompanyRequest::class);
//        CRUD::setFromDb(); // set fields from db columns.

        CRUD::field('name')
            ->type('text')
            ->label('Название');
        CRUD::field('slug')
            ->type('text')
            ->label('Ссылка на сайт');
        CRUD::field('logo')
            ->type('upload')
            ->upload(true)
            ->withFiles(true)
            ->label('Логотип');
        CRUD::field('phone')
            ->type('text')
            ->label('Телефон');
        CRUD::field('telegram')
            ->type('text')
            ->label('Ссылка на телеграм');
        CRUD::field('whatsapp')
            ->type('text');
        CRUD::field('type_id')
            ->type('select')
            ->label('Тип компании');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
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
                'label' => 'Название',
                'type' => 'text',
                'tab' => 'Simple',
            ],
            [
                'name' => 'slug',
                'label' => 'Ссылка на сайт',
                'type' => 'text',
                'tab' => 'Simple',
            ],
            [
                'name' => 'phone',
                'label' => 'Телефон',
                'type' => 'text',
                'tab' => 'Simple',
            ],
            [
                'name' => 'telegram',
                'label' => 'Ссылка на телеграм',
                'type' => 'text',
                'tab' => 'Simple',
            ],
            [
                'name' => 'whatsapp',
                'label' => 'Whatsapp',
                'type' => 'text',
                'tab' => 'Simple',
            ],
            [
                'name' => 'type_id',
                'label' => 'Тип компании',
                'type' => 'select',
                'tab' => 'Simple',
            ],
        ]);
    }
}
