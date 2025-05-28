<?php
$app->router->get('', [HomeController::class,'index']);
$app->router->get('/about', 'about');
$app->router->get('/company', 'company');
$app->router->get('/mission', 'mission');
$app->router->get('/services', 'services');
$app->router->get('/services/{serviceId}', 'serviceSingle');

$app->router->get('/past-events',[EventController::class,'index']);

$app->router->get('/event/{eventIdentify}',[EventController::class,'show']); //eventSingle

$app->router->get('/clients',[ClientController::class,'index']);
$app->router->get('/gallery', [GalleryController::class,'index']);
$app->router->get('/contact-us', 'contact-us');
$app->router->post('/contact-us', [LeadController::class,'contactUs']);

// admin panel 
$app->router->resource('admin/events', 'event', EventController::class);
$app->router->resource('admin/services', 'service', ServiceController::class);
$app->router->resource('admin/teams', 'team', TeamController::class);
$app->router->resource('admin/testimonials', 'testimonial', TestimonialController::class);
$app->router->resource('admin/leads', 'lead', LeadController::class);
$app->router->resource('admin/clients', 'client', ClientController::class);

$app->router->resource('admin/settings', 'setting', SettingController::class);

$app->router->resource('admin/galleries', 'gallery', GalleryController::class);

$app->router->resource('admin/campaign', 'campaign', CampaignController::class);

$app->router->resource('admin/categories', 'category', CategoryController::class);
