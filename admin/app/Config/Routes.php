<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');

// Login Routes
$routes->get('login', 'Login::index');
$routes->post('login/checkLogin', 'Login::checkLogin');
$routes->get('login/logout', 'Login::logout');

// Dashboard Routes
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/homepage', 'Dashboard::homepage');
$routes->get('dashboard/solutions_screening', 'Dashboard::solutions_screening');
$routes->get('dashboard/trucheck', 'Dashboard::trucheck');
$routes->get('dashboard/trublood', 'Dashboard::trublood');
$routes->get('dashboard/exacta', 'Dashboard::exacta');
$routes->get('dashboard/CellDx', 'Dashboard::CellDx');
$routes->get('dashboard/Chemo', 'Dashboard::Chemo');
$routes->get('dashboard/Cancertrack', 'Dashboard::Cancertrack');
$routes->get('dashboard/Pinaka', 'Dashboard::Pinaka');
$routes->get('dashboard/Targetmrd', 'Dashboard::Targetmrd');
$routes->get('dashboard/contact_us', 'Dashboard::contact_us');
$routes->get('dashboard/whoweare', 'Dashboard::whoweare');
$routes->get('dashboard/contact_us_enquiry', 'Dashboard::contact_us_enquiry');
$routes->get('dashboard/policy_terms', 'Dashboard::policy_terms');
$routes->get('dashboard/DataProtection', 'Dashboard::DataProtection');
$routes->get('dashboard/cookiespolicy', 'Dashboard::cookiespolicy');
$routes->get('dashboard/privacypolicy', 'Dashboard::privacypolicy');
$routes->get('dashboard/footerform', 'Dashboard::footerform');
$routes->get('dashboard/latest_cancer_advancements', 'Dashboard::latest_cancer_advancements');
$routes->get('dashboard/latest_add', 'Dashboard::latest_add');
$routes->get('dashboard/informationsecuritymanagementsystempolicy', 'Dashboard::informationsecuritymanagementsystempolicy');

$routes->post('Dashboard/update_page/(:any)', 'Dashboard::update_page/$1');
$routes->post('dashboard/update_page/contact_us', 'Dashboard::update_page/contact_us');

// Team Routes


$routes->get('team', 'Team::index');
$routes->get('Team', 'Team::index');
$routes->get('team/create', 'Team::create');
$routes->post('team/create', 'Team::create');
$routes->get('team/edit/(:num)', 'Team::edit/$1');
$routes->post('team/edit/(:num)', 'Team::edit/$1');
$routes->get('team/delete/(:num)', 'Team::delete/$1');

// FAQ Routes
$routes->get('faqs', 'Faqs::index');
$routes->get('Faqs', 'Faqs::index');
$routes->get('faqs/create', 'Faqs::create');
$routes->post('faqs/create', 'Faqs::create');
$routes->get('faqs/edit/(:num)', 'Faqs::edit/$1');
$routes->post('faqs/edit/(:num)', 'Faqs::edit/$1');
$routes->get('faqs/delete/(:num)', 'Faqs::delete/$1');

// Event Routes
$routes->get('event', 'Event::index');
$routes->get('event/create', 'Event::create');
$routes->post('event/create', 'Event::create');
$routes->get('event/edit/(:num)', 'Event::edit/$1');
$routes->post('event/edit/(:num)', 'Event::edit/$1');
$routes->get('event/delete/(:num)', 'Event::delete/$1');

// Publications Routes
$routes->get('publications', 'Publications::index');
$routes->get('publications/create', 'Publications::create');
$routes->post('publications/create', 'Publications::create');
$routes->post('publications/store', 'Publications::store');
$routes->get('publications/edit/(:num)', 'Publications::edit/$1');
$routes->post('publications/edit/(:num)', 'Publications::edit/$1');
$routes->post('publications/update/(:num)', 'Publications::update/$1');
$routes->get('publications/delete/(:num)', 'Publications::delete/$1');

// Meta Tags Routes
$routes->get('meta_tags', 'Meta_tags::index');
$routes->get('meta_tags/create', 'Meta_tags::create');
$routes->post('meta_tags/store', 'Meta_tags::store');
$routes->get('meta_tags/edit/(:num)', 'Meta_tags::edit/$1');
$routes->post('meta_tags/update/(:num)', 'Meta_tags::update/$1');
$routes->get('meta_tags/delete/(:num)', 'Meta_tags::delete/$1');

// Latest/News Routes
$routes->get('letest', 'Letest::index');
$routes->get('letest/create', 'Letest::create');
$routes->post('letest/create', 'Letest::create');
$routes->get('letest/edit/(:num)', 'Letest::edit/$1');
$routes->post('letest/edit/(:num)', 'Letest::edit/$1');
$routes->get('letest/delete/(:num)', 'Letest::delete/$1');

// Test Portfolio Routes
$routes->get('testportfolio', 'Testportfolio::index');

$routes->get('Testportfolio', 'Testportfolio::index');
$routes->get('Testportfolio/create', 'Testportfolio::create');
$routes->post('Testportfolio/create', 'Testportfolio::create');
$routes->get('Testportfolio/edit/(:num)', 'Testportfolio::edit/$1');
$routes->post('Testportfolio/edit/(:num)', 'Testportfolio::edit/$1');
$routes->get('Testportfolio/delete/(:num)', 'Testportfolio::delete/$1');
$routes->get('testportfolio/create', 'Testportfolio::create');
$routes->post('testportfolio/create', 'Testportfolio::create');
$routes->get('testportfolio/edit/(:num)', 'Testportfolio::edit/$1');
$routes->post('testportfolio/edit/(:num)', 'Testportfolio::edit/$1');
$routes->get('testportfolio/delete/(:num)', 'Testportfolio::delete/$1');

$routes->get('dashboard/informationsecuritymanagementsystempolicy', 'Dashboard::informationsecuritymanagementsystempolicy');
$routes->post('dashboard/update_page/informationsecuritymanagementsystempolicy', 'Dashboard::update_page/informationsecuritymanagementsystempolicy');

// Welcome Route
$routes->get('welcome', 'Welcome::index');
$routes->get('test', function () {
    return 'Test route is working!';
});
