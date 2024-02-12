{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Компании" icon="lar la-building" :link="backpack_url('company')" />
<x-backpack::menu-item title="Филиалы" icon="la la-question" :link="backpack_url('filial')" />
<x-backpack::menu-item title="Персонал" icon="la la-question" :link="backpack_url('personal')" />
<x-backpack::menu-item title="Цены" icon="la la-question" :link="backpack_url('price')" />
<x-backpack::menu-item title="Услуги" icon="la la-question" :link="backpack_url('service')" />
<x-backpack::menu-item title="Тип компании" icon="la la-align-left" :link="backpack_url('type-company')" />
<x-backpack::menu-item title="Пользователи" icon="la la-question" :link="backpack_url('user')" />
