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

Route::view('/tailwind/ui/navigation/navbars', 'tailwind.ui.navigation.navbars');
Route::view('/tailwind/ui/navigation/pagination', 'tailwind.ui.navigation.pagination');
// Route::view('/tailwind/ui/navigation/sidebar-navigation', 'tailwind.ui.navigation.sidebar-navigation');
Route::view('/tailwind/ui/navigation/tabs', 'tailwind.ui.navigation.tabs');
Route::view('/tailwind/ui/navigation/vertical-navigation', 'tailwind.ui.navigation.vertical-navigation');

Route::view('/tailwind/ui/overlays/modals-1', 'tailwind.ui.overlays.modals-1');
Route::view('/tailwind/ui/overlays/modals-2', 'tailwind.ui.overlays.modals-2');
Route::view('/tailwind/ui/overlays/modals-3', 'tailwind.ui.overlays.modals-3');
Route::view('/tailwind/ui/overlays/modals-4', 'tailwind.ui.overlays.modals-4');
Route::view('/tailwind/ui/overlays/modals-5', 'tailwind.ui.overlays.modals-5');
Route::view('/tailwind/ui/overlays/modals-6', 'tailwind.ui.overlays.modals-6');

Route::view('/tailwind/ui/overlays/notifications', 'tailwind.ui.overlays.notifications');

Route::view('/tailwind/ui/overlays/slide-overs-1', 'tailwind.ui.overlays.slide-overs-1');
Route::view('/tailwind/ui/overlays/slide-overs-2', 'tailwind.ui.overlays.slide-overs-2');
Route::view('/tailwind/ui/overlays/slide-overs-3', 'tailwind.ui.overlays.slide-overs-3');
Route::view('/tailwind/ui/overlays/slide-overs-4', 'tailwind.ui.overlays.slide-overs-4');
Route::view('/tailwind/ui/overlays/slide-overs-5', 'tailwind.ui.overlays.slide-overs-5');
Route::view('/tailwind/ui/overlays/slide-overs-6', 'tailwind.ui.overlays.slide-overs-6');

Route::view('/tailwind/ui/elements/avatars', 'tailwind.ui.elements.avatars');
Route::view('/tailwind/ui/elements/button-groups', 'tailwind.ui.elements.button-groups');
Route::view('/tailwind/ui/elements/buttons', 'tailwind.ui.elements.buttons');
Route::view('/tailwind/ui/elements/dropdowns', 'tailwind.ui.elements.dropdowns');

Route::view('/tailwind/ui/layout/containers', 'tailwind.ui.layout.containers');
Route::view('/tailwind/ui/layout/panels', 'tailwind.ui.layout.panels');

Route::view('/tailwind/ui/feedback/alerts', 'tailwind.ui.feedback.alerts');

Route::view('/tailwind/ui/page-examples/page-1', 'tailwind.ui.page-examples.page-1');
Route::view('/tailwind/ui/page-examples/page-2', 'tailwind.ui.page-examples.page-2');
Route::view('/tailwind/ui/page-examples/page-3', 'tailwind.ui.page-examples.page-3');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
