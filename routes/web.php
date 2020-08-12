<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/tailwind/ui/shells/stacked-layouts-1', 'tailwind.ui.shells.stacked-layouts-1');
Route::view('/tailwind/ui/shells/stacked-layouts-2', 'tailwind.ui.shells.stacked-layouts-2');
Route::view('/tailwind/ui/shells/stacked-layouts-3', 'tailwind.ui.shells.stacked-layouts-3');
Route::view('/tailwind/ui/shells/stacked-layouts-4', 'tailwind.ui.shells.stacked-layouts-4');
Route::view('/tailwind/ui/shells/stacked-layouts-5', 'tailwind.ui.shells.stacked-layouts-5');
Route::view('/tailwind/ui/shells/stacked-layouts-6', 'tailwind.ui.shells.stacked-layouts-6');
Route::view('/tailwind/ui/shells/stacked-layouts-7', 'tailwind.ui.shells.stacked-layouts-7');

Route::view('/tailwind/ui/shells/sidebar-layouts-1', 'tailwind.ui.shells.sidebar-layouts-1');
Route::view('/tailwind/ui/shells/sidebar-layouts-2', 'tailwind.ui.shells.sidebar-layouts-2');
Route::view('/tailwind/ui/shells/sidebar-layouts-3', 'tailwind.ui.shells.sidebar-layouts-3');
Route::view('/tailwind/ui/shells/sidebar-layouts-4', 'tailwind.ui.shells.sidebar-layouts-4');
Route::view('/tailwind/ui/shells/sidebar-layouts-5', 'tailwind.ui.shells.sidebar-layouts-5');
Route::view('/tailwind/ui/shells/sidebar-layouts-6', 'tailwind.ui.shells.sidebar-layouts-6');
Route::view('/tailwind/ui/shells/sidebar-layouts-7', 'tailwind.ui.shells.sidebar-layouts-7');

Route::view('/tailwind/ui/headings/card-headings', 'tailwind.ui.headings.card-headings');
Route::view('/tailwind/ui/headings/page-headings', 'tailwind.ui.headings.page-headings');

Route::view('/tailwind/ui/data-display/description-lists', 'tailwind.ui.data-display.description-lists');
Route::view('/tailwind/ui/data-display/stats', 'tailwind.ui.data-display.stats');

Route::view('/tailwind/ui/lists/grid-lists', 'tailwind.ui.lists.grid-lists');
Route::view('/tailwind/ui/lists/stacked-lists', 'tailwind.ui.lists.stacked-lists');
Route::view('/tailwind/ui/lists/tables', 'tailwind.ui.lists.tables');

Route::view('/tailwind/ui/forms/action-panels', 'tailwind.ui.forms.action-panels');
Route::view('/tailwind/ui/forms/form-layouts', 'tailwind.ui.forms.form-layouts');
Route::view('/tailwind/ui/forms/input-groups', 'tailwind.ui.forms.input-groups');
Route::view('/tailwind/ui/forms/select-menus', 'tailwind.ui.forms.select-menus');
Route::view('/tailwind/ui/forms/sign-in-and-registration', 'tailwind.ui.forms.sign-in-and-registration');
Route::view('/tailwind/ui/forms/toggles', 'tailwind.ui.forms.toggles');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
