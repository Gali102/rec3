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
class RequestCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Request::class);
        CRUD::setRoute('admin/request');
        CRUD::setEntityNameStrings('Заявка', 'Заявки');
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
                'name' => 'company_id',
                'label' => 'Компания',
                'type' => 'select',
                'tab' => 'Simple',
            ],
            [
                'name' => 'user_id',
                'label' => 'Пользователь',
                'type' => 'select',
                'tab' => 'Simple',
            ],
            [
                'name' => 'service_id',
                'label' => 'Услуга',
                'type' => 'select',
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

        CRUD::field('company_id')
            ->type('select')
            ->label('Компания');
        CRUD::field('user_id')
            ->type('select')
            ->label('Пользователь');
        CRUD::field('service_id')
            ->type('select')
            ->label('Услуга');
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
                'name' => 'company_id',
                'label' => 'Компания',
                'type' => 'select',
                'tab' => 'Simple',
            ],
            [
                'name' => 'user_id',
                'label' => 'Пользователь',
                'type' => 'select',
                'tab' => 'Simple',
            ],
            [
                'name' => 'service_id',
                'label' => 'Услуга',
                'type' => 'select',
                'tab' => 'Simple',
            ],
        ]);
    }
}
