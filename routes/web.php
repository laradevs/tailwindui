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

Route::view('/tailwind/ui/marketing/page-sections/hero-sections-1', 'tailwind.ui.marketing.page-sections.hero-sections-1');
Route::view('/tailwind/ui/marketing/page-sections/hero-sections-2', 'tailwind.ui.marketing.page-sections.hero-sections-2');
Route::view('/tailwind/ui/marketing/page-sections/hero-sections-3', 'tailwind.ui.marketing.page-sections.hero-sections-3');
Route::view('/tailwind/ui/marketing/page-sections/hero-sections-4', 'tailwind.ui.marketing.page-sections.hero-sections-4');
Route::view('/tailwind/ui/marketing/page-sections/hero-sections-5', 'tailwind.ui.marketing.page-sections.hero-sections-5');
Route::view('/tailwind/ui/marketing/page-sections/hero-sections-6', 'tailwind.ui.marketing.page-sections.hero-sections-6');

Route::view('/tailwind/ui/marketing/page-sections/feature-sections', 'tailwind.ui.marketing.page-sections.feature-sections');
Route::view('/tailwind/ui/marketing/page-sections/cta-sections', 'tailwind.ui.marketing.page-sections.cta-sections');
Route::view('/tailwind/ui/marketing/page-sections/pricing-sections', 'tailwind.ui.marketing.page-sections.pricing-sections');
Route::view('/tailwind/ui/marketing/page-sections/faqs-sections', 'tailwind.ui.marketing.page-sections.faqs-sections');
Route::view('/tailwind/ui/marketing/page-sections/newsletter-sections', 'tailwind.ui.marketing.page-sections.newsletter-sections');
Route::view('/tailwind/ui/marketing/page-sections/stats', 'tailwind.ui.marketing.page-sections.stats');
Route::view('/tailwind/ui/marketing/page-sections/testimonials', 'tailwind.ui.marketing.page-sections.testimonials');
Route::view('/tailwind/ui/marketing/page-sections/footers', 'tailwind.ui.marketing.page-sections.footers');
Route::view('/tailwind/ui/marketing/page-sections/logo-clouds', 'tailwind.ui.marketing.page-sections.logo-clouds');
Route::view('/tailwind/ui/marketing/page-sections/blog-sections', 'tailwind.ui.marketing.page-sections.blog-sections');
Route::view('/tailwind/ui/marketing/page-sections/contact-sections', 'tailwind.ui.marketing.page-sections.contact-sections');
Route::view('/tailwind/ui/marketing/page-sections/content-sections', 'tailwind.ui.marketing.page-sections.content-sections');

Route::view('/tailwind/ui/marketing/elements/banners/floating-at-bottom', 'tailwind.ui.marketing.elements.banners.floating-at-bottom');
Route::view('/tailwind/ui/marketing/elements/banners/header-banner', 'tailwind.ui.marketing.elements.banners.header-banner');
Route::view('/tailwind/ui/marketing/elements/banners/header-centered', 'tailwind.ui.marketing.elements.banners.header-centered');
Route::view('/tailwind/ui/marketing/elements/banners/sticky-footer', 'tailwind.ui.marketing.elements.banners.sticky-footer');
Route::view('/tailwind/ui/marketing/elements/flyout-menus', 'tailwind.ui.marketing.elements.flyout-menus');
Route::view('/tailwind/ui/marketing/elements/headers/header-1', 'tailwind.ui.marketing.elements.headers.header-1');
Route::view('/tailwind/ui/marketing/elements/headers/header-2', 'tailwind.ui.marketing.elements.headers.header-2');
Route::view('/tailwind/ui/marketing/elements/headers/header-3', 'tailwind.ui.marketing.elements.headers.header-3');
Route::view('/tailwind/ui/marketing/elements/headers/header-4', 'tailwind.ui.marketing.elements.headers.header-4');

