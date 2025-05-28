<?php
// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// lamination of routes
$app->router->get('/lamination', [LaminationController::class, 'laminationIndex']);
$app->router->get('/lamination/build', [LaminationController::class, 'laminationBuild']);
$app->router->post('/lamination/build', [LaminationController::class, 'laminationRecord']);
$app->router->get('/lamination/{laminationIdentify}/destroy', [LaminationController::class, 'laminationDestroy']);
$app->router->get('/lamination/{laminationIdentify}/modify', [LaminationController::class, 'laminationModify']);
$app->router->post('/lamination/{laminationIdentify}/modify', [LaminationController::class, 'laminationEdit']);
$app->router->get('/lamination/{laminationIdentify}', [LaminationController::class, 'laminationDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// factory of routes
$app->router->get('/factory', [FactoryController::class, 'factoryIndex']);
$app->router->get('/factory/build', [FactoryController::class, 'factoryBuild']);
$app->router->post('/factory/build', [FactoryController::class, 'factoryRecord']);
$app->router->get('/factory/{factoryIdentify}/destroy', [FactoryController::class, 'factoryDestroy']);
$app->router->get('/factory/{factoryIdentify}/modify', [FactoryController::class, 'factoryModify']);
$app->router->post('/factory/{factoryIdentify}/modify', [FactoryController::class, 'factoryEdit']);
$app->router->get('/factory/{factoryIdentify}', [FactoryController::class, 'factoryDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// templete of routes
$app->router->get('/templete', [TempleteController::class, 'templeteIndex']);
$app->router->get('/templete/build', [TempleteController::class, 'templeteBuild']);
$app->router->post('/templete/build', [TempleteController::class, 'templeteRecord']);
$app->router->get('/templete/{templeteIdentify}/destroy', [TempleteController::class, 'templeteDestroy']);
$app->router->get('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteModify']);
$app->router->post('/templete/{templeteIdentify}/modify', [TempleteController::class, 'templeteEdit']);
$app->router->get('/templete/{templeteIdentify}', [TempleteController::class, 'templeteDisplay']);

// Paper of routes
$app->router->get('/Paper', [PaperController::class, 'PaperIndex']);
$app->router->get('/Paper/build', [PaperController::class, 'PaperBuild']);
$app->router->post('/Paper/build', [PaperController::class, 'PaperRecord']);
$app->router->get('/Paper/{PaperIdentify}/destroy', [PaperController::class, 'PaperDestroy']);
$app->router->get('/Paper/{PaperIdentify}/modify', [PaperController::class, 'PaperModify']);
$app->router->post('/Paper/{PaperIdentify}/modify', [PaperController::class, 'PaperEdit']);
$app->router->get('/Paper/{PaperIdentify}', [PaperController::class, 'PaperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// paper of routes
$app->router->get('/paper', [PaperController::class, 'paperIndex']);
$app->router->get('/paper/build', [PaperController::class, 'paperBuild']);
$app->router->post('/paper/build', [PaperController::class, 'paperRecord']);
$app->router->get('/paper/{paperIdentify}/destroy', [PaperController::class, 'paperDestroy']);
$app->router->get('/paper/{paperIdentify}/modify', [PaperController::class, 'paperModify']);
$app->router->post('/paper/{paperIdentify}/modify', [PaperController::class, 'paperEdit']);
$app->router->get('/paper/{paperIdentify}', [PaperController::class, 'paperDisplay']);

// heroVideos of routes
$app->router->get('/heroVideos', [HeroVideosController::class, 'heroVideosIndex']);
$app->router->get('/heroVideos/build', [HeroVideosController::class, 'heroVideosBuild']);
$app->router->post('/heroVideos/build', [HeroVideosController::class, 'heroVideosRecord']);
$app->router->get('/heroVideos/{heroVideosIdentify}/destroy', [HeroVideosController::class, 'heroVideosDestroy']);
$app->router->get('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosModify']);
$app->router->post('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosEdit']);
$app->router->get('/heroVideos/{heroVideosIdentify}', [HeroVideosController::class, 'heroVideosDisplay']);

// heroVideos of routes
$app->router->get('/heroVideos', [HeroVideosController::class, 'heroVideosIndex']);
$app->router->get('/heroVideos/build', [HeroVideosController::class, 'heroVideosBuild']);
$app->router->post('/heroVideos/build', [HeroVideosController::class, 'heroVideosRecord']);
$app->router->get('/heroVideos/{heroVideosIdentify}/destroy', [HeroVideosController::class, 'heroVideosDestroy']);
$app->router->get('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosModify']);
$app->router->post('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosEdit']);
$app->router->get('/heroVideos/{heroVideosIdentify}', [HeroVideosController::class, 'heroVideosDisplay']);

// heroVideos of routes
$app->router->get('/heroVideos', [HeroVideosController::class, 'heroVideosIndex']);
$app->router->get('/heroVideos/build', [HeroVideosController::class, 'heroVideosBuild']);
$app->router->post('/heroVideos/build', [HeroVideosController::class, 'heroVideosRecord']);
$app->router->get('/heroVideos/{heroVideosIdentify}/destroy', [HeroVideosController::class, 'heroVideosDestroy']);
$app->router->get('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosModify']);
$app->router->post('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosEdit']);
$app->router->get('/heroVideos/{heroVideosIdentify}', [HeroVideosController::class, 'heroVideosDisplay']);

// heroVideos of routes
$app->router->get('/heroVideos', [HeroVideosController::class, 'heroVideosIndex']);
$app->router->get('/heroVideos/build', [HeroVideosController::class, 'heroVideosBuild']);
$app->router->post('/heroVideos/build', [HeroVideosController::class, 'heroVideosRecord']);
$app->router->get('/heroVideos/{heroVideosIdentify}/destroy', [HeroVideosController::class, 'heroVideosDestroy']);
$app->router->get('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosModify']);
$app->router->post('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosEdit']);
$app->router->get('/heroVideos/{heroVideosIdentify}', [HeroVideosController::class, 'heroVideosDisplay']);

// heroVideos of routes
$app->router->get('/heroVideos', [HeroVideosController::class, 'heroVideosIndex']);
$app->router->get('/heroVideos/build', [HeroVideosController::class, 'heroVideosBuild']);
$app->router->post('/heroVideos/build', [HeroVideosController::class, 'heroVideosRecord']);
$app->router->get('/heroVideos/{heroVideosIdentify}/destroy', [HeroVideosController::class, 'heroVideosDestroy']);
$app->router->get('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosModify']);
$app->router->post('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosEdit']);
$app->router->get('/heroVideos/{heroVideosIdentify}', [HeroVideosController::class, 'heroVideosDisplay']);

// heroVideos of routes
$app->router->get('/heroVideos', [HeroVideosController::class, 'heroVideosIndex']);
$app->router->get('/heroVideos/build', [HeroVideosController::class, 'heroVideosBuild']);
$app->router->post('/heroVideos/build', [HeroVideosController::class, 'heroVideosRecord']);
$app->router->get('/heroVideos/{heroVideosIdentify}/destroy', [HeroVideosController::class, 'heroVideosDestroy']);
$app->router->get('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosModify']);
$app->router->post('/heroVideos/{heroVideosIdentify}/modify', [HeroVideosController::class, 'heroVideosEdit']);
$app->router->get('/heroVideos/{heroVideosIdentify}', [HeroVideosController::class, 'heroVideosDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// code of routes
$app->router->get('/code', [CodeController::class, 'codeIndex']);
$app->router->get('/code/build', [CodeController::class, 'codeBuild']);
$app->router->post('/code/build', [CodeController::class, 'codeRecord']);
$app->router->get('/code/{codeIdentify}/destroy', [CodeController::class, 'codeDestroy']);
$app->router->get('/code/{codeIdentify}/modify', [CodeController::class, 'codeModify']);
$app->router->post('/code/{codeIdentify}/modify', [CodeController::class, 'codeEdit']);
$app->router->get('/code/{codeIdentify}', [CodeController::class, 'codeDisplay']);

// orders of routes
$app->router->get('/orders', [OrdersController::class, 'ordersIndex']);
$app->router->get('/orders/build', [OrdersController::class, 'ordersBuild']);
$app->router->post('/orders/build', [OrdersController::class, 'ordersRecord']);
$app->router->get('/orders/{ordersIdentify}/destroy', [OrdersController::class, 'ordersDestroy']);
$app->router->get('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersModify']);
$app->router->post('/orders/{ordersIdentify}/modify', [OrdersController::class, 'ordersEdit']);
$app->router->get('/orders/{ordersIdentify}', [OrdersController::class, 'ordersDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// eventCategories of routes
$app->router->get('/eventCategories', [EventCategoriesController::class, 'eventCategoriesIndex']);
$app->router->get('/eventCategories/build', [EventCategoriesController::class, 'eventCategoriesBuild']);
$app->router->post('/eventCategories/build', [EventCategoriesController::class, 'eventCategoriesRecord']);
$app->router->get('/eventCategories/{eventCategoriesIdentify}/destroy', [EventCategoriesController::class, 'eventCategoriesDestroy']);
$app->router->get('/eventCategories/{eventCategoriesIdentify}/modify', [EventCategoriesController::class, 'eventCategoriesModify']);
$app->router->post('/eventCategories/{eventCategoriesIdentify}/modify', [EventCategoriesController::class, 'eventCategoriesEdit']);
$app->router->get('/eventCategories/{eventCategoriesIdentify}', [EventCategoriesController::class, 'eventCategoriesDisplay']);

// events of routes
$app->router->get('/events', [EventsController::class, 'eventsIndex']);
$app->router->get('/events/build', [EventsController::class, 'eventsBuild']);
$app->router->post('/events/build', [EventsController::class, 'eventsRecord']);
$app->router->get('/events/{eventsIdentify}/destroy', [EventsController::class, 'eventsDestroy']);
$app->router->get('/events/{eventsIdentify}/modify', [EventsController::class, 'eventsModify']);
$app->router->post('/events/{eventsIdentify}/modify', [EventsController::class, 'eventsEdit']);
$app->router->get('/events/{eventsIdentify}', [EventsController::class, 'eventsDisplay']);

// services of routes
$app->router->get('/services', [ServicesController::class, 'servicesIndex']);
$app->router->get('/services/build', [ServicesController::class, 'servicesBuild']);
$app->router->post('/services/build', [ServicesController::class, 'servicesRecord']);
$app->router->get('/services/{servicesIdentify}/destroy', [ServicesController::class, 'servicesDestroy']);
$app->router->get('/services/{servicesIdentify}/modify', [ServicesController::class, 'servicesModify']);
$app->router->post('/services/{servicesIdentify}/modify', [ServicesController::class, 'servicesEdit']);
$app->router->get('/services/{servicesIdentify}', [ServicesController::class, 'servicesDisplay']);

// portfolio of routes
$app->router->get('/portfolio', [PortfolioController::class, 'portfolioIndex']);
$app->router->get('/portfolio/build', [PortfolioController::class, 'portfolioBuild']);
$app->router->post('/portfolio/build', [PortfolioController::class, 'portfolioRecord']);
$app->router->get('/portfolio/{portfolioIdentify}/destroy', [PortfolioController::class, 'portfolioDestroy']);
$app->router->get('/portfolio/{portfolioIdentify}/modify', [PortfolioController::class, 'portfolioModify']);
$app->router->post('/portfolio/{portfolioIdentify}/modify', [PortfolioController::class, 'portfolioEdit']);
$app->router->get('/portfolio/{portfolioIdentify}', [PortfolioController::class, 'portfolioDisplay']);

// clients of routes
$app->router->get('/clients', [ClientsController::class, 'clientsIndex']);
$app->router->get('/clients/build', [ClientsController::class, 'clientsBuild']);
$app->router->post('/clients/build', [ClientsController::class, 'clientsRecord']);
$app->router->get('/clients/{clientsIdentify}/destroy', [ClientsController::class, 'clientsDestroy']);
$app->router->get('/clients/{clientsIdentify}/modify', [ClientsController::class, 'clientsModify']);
$app->router->post('/clients/{clientsIdentify}/modify', [ClientsController::class, 'clientsEdit']);
$app->router->get('/clients/{clientsIdentify}', [ClientsController::class, 'clientsDisplay']);

// testimonials of routes
$app->router->get('/testimonials', [TestimonialsController::class, 'testimonialsIndex']);
$app->router->get('/testimonials/build', [TestimonialsController::class, 'testimonialsBuild']);
$app->router->post('/testimonials/build', [TestimonialsController::class, 'testimonialsRecord']);
$app->router->get('/testimonials/{testimonialsIdentify}/destroy', [TestimonialsController::class, 'testimonialsDestroy']);
$app->router->get('/testimonials/{testimonialsIdentify}/modify', [TestimonialsController::class, 'testimonialsModify']);
$app->router->post('/testimonials/{testimonialsIdentify}/modify', [TestimonialsController::class, 'testimonialsEdit']);
$app->router->get('/testimonials/{testimonialsIdentify}', [TestimonialsController::class, 'testimonialsDisplay']);

// inquiries of routes
$app->router->get('/inquiries', [InquiriesController::class, 'inquiriesIndex']);
$app->router->get('/inquiries/build', [InquiriesController::class, 'inquiriesBuild']);
$app->router->post('/inquiries/build', [InquiriesController::class, 'inquiriesRecord']);
$app->router->get('/inquiries/{inquiriesIdentify}/destroy', [InquiriesController::class, 'inquiriesDestroy']);
$app->router->get('/inquiries/{inquiriesIdentify}/modify', [InquiriesController::class, 'inquiriesModify']);
$app->router->post('/inquiries/{inquiriesIdentify}/modify', [InquiriesController::class, 'inquiriesEdit']);
$app->router->get('/inquiries/{inquiriesIdentify}', [InquiriesController::class, 'inquiriesDisplay']);

// teamMembers of routes
$app->router->get('/teamMembers', [TeamMembersController::class, 'teamMembersIndex']);
$app->router->get('/teamMembers/build', [TeamMembersController::class, 'teamMembersBuild']);
$app->router->post('/teamMembers/build', [TeamMembersController::class, 'teamMembersRecord']);
$app->router->get('/teamMembers/{teamMembersIdentify}/destroy', [TeamMembersController::class, 'teamMembersDestroy']);
$app->router->get('/teamMembers/{teamMembersIdentify}/modify', [TeamMembersController::class, 'teamMembersModify']);
$app->router->post('/teamMembers/{teamMembersIdentify}/modify', [TeamMembersController::class, 'teamMembersEdit']);
$app->router->get('/teamMembers/{teamMembersIdentify}', [TeamMembersController::class, 'teamMembersDisplay']);

// blogPosts of routes
$app->router->get('/blogPosts', [BlogPostsController::class, 'blogPostsIndex']);
$app->router->get('/blogPosts/build', [BlogPostsController::class, 'blogPostsBuild']);
$app->router->post('/blogPosts/build', [BlogPostsController::class, 'blogPostsRecord']);
$app->router->get('/blogPosts/{blogPostsIdentify}/destroy', [BlogPostsController::class, 'blogPostsDestroy']);
$app->router->get('/blogPosts/{blogPostsIdentify}/modify', [BlogPostsController::class, 'blogPostsModify']);
$app->router->post('/blogPosts/{blogPostsIdentify}/modify', [BlogPostsController::class, 'blogPostsEdit']);
$app->router->get('/blogPosts/{blogPostsIdentify}', [BlogPostsController::class, 'blogPostsDisplay']);

// faqs of routes
$app->router->get('/faqs', [FaqsController::class, 'faqsIndex']);
$app->router->get('/faqs/build', [FaqsController::class, 'faqsBuild']);
$app->router->post('/faqs/build', [FaqsController::class, 'faqsRecord']);
$app->router->get('/faqs/{faqsIdentify}/destroy', [FaqsController::class, 'faqsDestroy']);
$app->router->get('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsModify']);
$app->router->post('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsEdit']);
$app->router->get('/faqs/{faqsIdentify}', [FaqsController::class, 'faqsDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// faqs of routes
$app->router->get('/faqs', [FaqsController::class, 'faqsIndex']);
$app->router->get('/faqs/build', [FaqsController::class, 'faqsBuild']);
$app->router->post('/faqs/build', [FaqsController::class, 'faqsRecord']);
$app->router->get('/faqs/{faqsIdentify}/destroy', [FaqsController::class, 'faqsDestroy']);
$app->router->get('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsModify']);
$app->router->post('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsEdit']);
$app->router->get('/faqs/{faqsIdentify}', [FaqsController::class, 'faqsDisplay']);

// faqs of routes
$app->router->get('/faqs', [FaqsController::class, 'faqsIndex']);
$app->router->get('/faqs/build', [FaqsController::class, 'faqsBuild']);
$app->router->post('/faqs/build', [FaqsController::class, 'faqsRecord']);
$app->router->get('/faqs/{faqsIdentify}/destroy', [FaqsController::class, 'faqsDestroy']);
$app->router->get('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsModify']);
$app->router->post('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsEdit']);
$app->router->get('/faqs/{faqsIdentify}', [FaqsController::class, 'faqsDisplay']);

// faqs of routes
$app->router->get('/faqs', [FaqsController::class, 'faqsIndex']);
$app->router->get('/faqs/build', [FaqsController::class, 'faqsBuild']);
$app->router->post('/faqs/build', [FaqsController::class, 'faqsRecord']);
$app->router->get('/faqs/{faqsIdentify}/destroy', [FaqsController::class, 'faqsDestroy']);
$app->router->get('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsModify']);
$app->router->post('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsEdit']);
$app->router->get('/faqs/{faqsIdentify}', [FaqsController::class, 'faqsDisplay']);

// faqs of routes
$app->router->get('/faqs', [FaqsController::class, 'faqsIndex']);
$app->router->get('/faqs/build', [FaqsController::class, 'faqsBuild']);
$app->router->post('/faqs/build', [FaqsController::class, 'faqsRecord']);
$app->router->get('/faqs/{faqsIdentify}/destroy', [FaqsController::class, 'faqsDestroy']);
$app->router->get('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsModify']);
$app->router->post('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsEdit']);
$app->router->get('/faqs/{faqsIdentify}', [FaqsController::class, 'faqsDisplay']);

// faqs of routes
$app->router->get('/faqs', [FaqsController::class, 'faqsIndex']);
$app->router->get('/faqs/build', [FaqsController::class, 'faqsBuild']);
$app->router->post('/faqs/build', [FaqsController::class, 'faqsRecord']);
$app->router->get('/faqs/{faqsIdentify}/destroy', [FaqsController::class, 'faqsDestroy']);
$app->router->get('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsModify']);
$app->router->post('/faqs/{faqsIdentify}/modify', [FaqsController::class, 'faqsEdit']);
$app->router->get('/faqs/{faqsIdentify}', [FaqsController::class, 'faqsDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// post of routes
$app->router->get('/post', [PostController::class, 'postIndex']);
$app->router->get('/post/build', [PostController::class, 'postBuild']);
$app->router->post('/post/build', [PostController::class, 'postRecord']);
$app->router->get('/post/{postIdentify}/destroy', [PostController::class, 'postDestroy']);
$app->router->get('/post/{postIdentify}/modify', [PostController::class, 'postModify']);
$app->router->post('/post/{postIdentify}/modify', [PostController::class, 'postEdit']);
$app->router->get('/post/{postIdentify}', [PostController::class, 'postDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// category of routes
$app->router->get('/category', [CategoryController::class, 'categoryIndex']);
$app->router->get('/category/build', [CategoryController::class, 'categoryBuild']);
$app->router->post('/category/build', [CategoryController::class, 'categoryRecord']);
$app->router->get('/category/{categoryIdentify}/destroy', [CategoryController::class, 'categoryDestroy']);
$app->router->get('/category/{categoryIdentify}/modify', [CategoryController::class, 'categoryModify']);
$app->router->post('/category/{categoryIdentify}/modify', [CategoryController::class, 'categoryEdit']);
$app->router->get('/category/{categoryIdentify}', [CategoryController::class, 'categoryDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// categories of routes
$app->router->get('/categories', [CategoriesController::class, 'categoriesIndex']);
$app->router->get('/categories/build', [CategoriesController::class, 'categoriesBuild']);
$app->router->post('/categories/build', [CategoriesController::class, 'categoriesRecord']);
$app->router->get('/categories/{categoriesIdentify}/destroy', [CategoriesController::class, 'categoriesDestroy']);
$app->router->get('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesModify']);
$app->router->post('/categories/{categoriesIdentify}/modify', [CategoriesController::class, 'categoriesEdit']);
$app->router->get('/categories/{categoriesIdentify}', [CategoriesController::class, 'categoriesDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// dimention of routes
$app->router->get('/dimention', [DimentionController::class, 'dimentionIndex']);
$app->router->get('/dimention/build', [DimentionController::class, 'dimentionBuild']);
$app->router->post('/dimention/build', [DimentionController::class, 'dimentionRecord']);
$app->router->get('/dimention/{dimentionIdentify}/destroy', [DimentionController::class, 'dimentionDestroy']);
$app->router->get('/dimention/{dimentionIdentify}/modify', [DimentionController::class, 'dimentionModify']);
$app->router->post('/dimention/{dimentionIdentify}/modify', [DimentionController::class, 'dimentionEdit']);
$app->router->get('/dimention/{dimentionIdentify}', [DimentionController::class, 'dimentionDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// media of routes
$app->router->get('/media', [MediaController::class, 'mediaIndex']);
$app->router->get('/media/build', [MediaController::class, 'mediaBuild']);
$app->router->post('/media/build', [MediaController::class, 'mediaRecord']);
$app->router->get('/media/{mediaIdentify}/destroy', [MediaController::class, 'mediaDestroy']);
$app->router->get('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaModify']);
$app->router->post('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaEdit']);
$app->router->get('/media/{mediaIdentify}', [MediaController::class, 'mediaDisplay']);

// media of routes
$app->router->get('/media', [MediaController::class, 'mediaIndex']);
$app->router->get('/media/build', [MediaController::class, 'mediaBuild']);
$app->router->post('/media/build', [MediaController::class, 'mediaRecord']);
$app->router->get('/media/{mediaIdentify}/destroy', [MediaController::class, 'mediaDestroy']);
$app->router->get('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaModify']);
$app->router->post('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaEdit']);
$app->router->get('/media/{mediaIdentify}', [MediaController::class, 'mediaDisplay']);

// media of routes
$app->router->get('/media', [MediaController::class, 'mediaIndex']);
$app->router->get('/media/build', [MediaController::class, 'mediaBuild']);
$app->router->post('/media/build', [MediaController::class, 'mediaRecord']);
$app->router->get('/media/{mediaIdentify}/destroy', [MediaController::class, 'mediaDestroy']);
$app->router->get('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaModify']);
$app->router->post('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaEdit']);
$app->router->get('/media/{mediaIdentify}', [MediaController::class, 'mediaDisplay']);

// media of routes
$app->router->get('/media', [MediaController::class, 'mediaIndex']);
$app->router->get('/media/build', [MediaController::class, 'mediaBuild']);
$app->router->post('/media/build', [MediaController::class, 'mediaRecord']);
$app->router->get('/media/{mediaIdentify}/destroy', [MediaController::class, 'mediaDestroy']);
$app->router->get('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaModify']);
$app->router->post('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaEdit']);
$app->router->get('/media/{mediaIdentify}', [MediaController::class, 'mediaDisplay']);

// media of routes
$app->router->get('/media', [MediaController::class, 'mediaIndex']);
$app->router->get('/media/build', [MediaController::class, 'mediaBuild']);
$app->router->post('/media/build', [MediaController::class, 'mediaRecord']);
$app->router->get('/media/{mediaIdentify}/destroy', [MediaController::class, 'mediaDestroy']);
$app->router->get('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaModify']);
$app->router->post('/media/{mediaIdentify}/modify', [MediaController::class, 'mediaEdit']);
$app->router->get('/media/{mediaIdentify}', [MediaController::class, 'mediaDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// product of routes
$app->router->get('/product', [ProductController::class, 'productIndex']);
$app->router->get('/product/build', [ProductController::class, 'productBuild']);
$app->router->post('/product/build', [ProductController::class, 'productRecord']);
$app->router->get('/product/{productIdentify}/destroy', [ProductController::class, 'productDestroy']);
$app->router->get('/product/{productIdentify}/modify', [ProductController::class, 'productModify']);
$app->router->post('/product/{productIdentify}/modify', [ProductController::class, 'productEdit']);
$app->router->get('/product/{productIdentify}', [ProductController::class, 'productDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects of routes
$app->router->get('/projects', [ProjectsController::class, 'projectsIndex']);
$app->router->get('/projects/build', [ProjectsController::class, 'projectsBuild']);
$app->router->post('/projects/build', [ProjectsController::class, 'projectsRecord']);
$app->router->get('/projects/{projectsIdentify}/destroy', [ProjectsController::class, 'projectsDestroy']);
$app->router->get('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsModify']);
$app->router->post('/projects/{projectsIdentify}/modify', [ProjectsController::class, 'projectsEdit']);
$app->router->get('/projects/{projectsIdentify}', [ProjectsController::class, 'projectsDisplay']);

// projects routes
$app->router->get('/admin/projects', [ProjectController::class, 'projectIndex']);
$app->router->get('/admin/projects/create', [ProjectController::class, 'projectCreate']);
$app->router->post('/admin/projects/store', [ProjectController::class, 'projectStore']);
$app->router->get('/admin/projects/export', [ProjectController::class, 'projectExport']);
$app->router->post('/admin/projects/import', [ProjectController::class, 'projectImport']);
$app->router->get('/admin/projects/{projectIdentify}/edit', [ProjectController::class, 'projectEdit']);
$app->router->post('/admin/projects/{projectIdentify}/update', [ProjectController::class, 'projectUpdate']);
$app->router->get('/admin/projects/{projectIdentify}', [ProjectController::class, 'projectShow']);
$app->router->post('/admin/projects/{projectIdentify}/delete', [ProjectController::class, 'projectDestroy']);

// projects routes
$app->router->get('/admin/projects', [ProjectController::class, 'projectIndex']);
$app->router->get('/admin/projects/create', [ProjectController::class, 'projectCreate']);
$app->router->post('/admin/projects/store', [ProjectController::class, 'projectStore']);
$app->router->get('/admin/projects/export', [ProjectController::class, 'projectExport']);
$app->router->post('/admin/projects/import', [ProjectController::class, 'projectImport']);
$app->router->get('/admin/projects/{projectIdentify}/edit', [ProjectController::class, 'projectEdit']);
$app->router->post('/admin/projects/{projectIdentify}/update', [ProjectController::class, 'projectUpdate']);
$app->router->get('/admin/projects/{projectIdentify}', [ProjectController::class, 'projectShow']);
$app->router->post('/admin/projects/{projectIdentify}/delete', [ProjectController::class, 'projectDestroy']);

// projects routes
$app->router->get('/admin/projects', [ProjectController::class, 'projectIndex']);
$app->router->get('/admin/projects/create', [ProjectController::class, 'projectCreate']);
$app->router->post('/admin/projects/store', [ProjectController::class, 'projectStore']);
$app->router->get('/admin/projects/export', [ProjectController::class, 'projectExport']);
$app->router->post('/admin/projects/import', [ProjectController::class, 'projectImport']);
$app->router->get('/admin/projects/{projectIdentify}/edit', [ProjectController::class, 'projectEdit']);
$app->router->post('/admin/projects/{projectIdentify}/update', [ProjectController::class, 'projectUpdate']);
$app->router->get('/admin/projects/{projectIdentify}', [ProjectController::class, 'projectShow']);
$app->router->post('/admin/projects/{projectIdentify}/delete', [ProjectController::class, 'projectDestroy']);

// projects routes
$app->router->get('/admin/projects', [ProjectController::class, 'projectIndex']);
$app->router->get('/admin/projects/create', [ProjectController::class, 'projectCreate']);
$app->router->post('/admin/projects/store', [ProjectController::class, 'projectStore']);
$app->router->get('/admin/projects/export', [ProjectController::class, 'projectExport']);
$app->router->post('/admin/projects/import', [ProjectController::class, 'projectImport']);
$app->router->get('/admin/projects/{projectIdentify}/edit', [ProjectController::class, 'projectEdit']);
$app->router->post('/admin/projects/{projectIdentify}/update', [ProjectController::class, 'projectUpdate']);
$app->router->get('/admin/projects/{projectIdentify}', [ProjectController::class, 'projectShow']);
$app->router->post('/admin/projects/{projectIdentify}/delete', [ProjectController::class, 'projectDestroy']);

// projects routes
$app->router->get('/admin/projects', [ProjectController::class, 'projectIndex']);
$app->router->get('/admin/projects/create', [ProjectController::class, 'projectCreate']);
$app->router->post('/admin/projects/store', [ProjectController::class, 'projectStore']);
$app->router->get('/admin/projects/export', [ProjectController::class, 'projectExport']);
$app->router->post('/admin/projects/import', [ProjectController::class, 'projectImport']);
$app->router->get('/admin/projects/{projectIdentify}/edit', [ProjectController::class, 'projectEdit']);
$app->router->post('/admin/projects/{projectIdentify}/update', [ProjectController::class, 'projectUpdate']);
$app->router->get('/admin/projects/{projectIdentify}', [ProjectController::class, 'projectShow']);
$app->router->post('/admin/projects/{projectIdentify}/delete', [ProjectController::class, 'projectDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// eventCategories routes
$app->router->get('/admin/eventCategories', [EventCategoryController::class, 'eventCategoryIndex']);
$app->router->get('/admin/eventCategories/create', [EventCategoryController::class, 'eventCategoryCreate']);
$app->router->post('/admin/eventCategories/store', [EventCategoryController::class, 'eventCategoryStore']);
$app->router->get('/admin/eventCategories/export', [EventCategoryController::class, 'eventCategoryExport']);
$app->router->post('/admin/eventCategories/import', [EventCategoryController::class, 'eventCategoryImport']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}/edit', [EventCategoryController::class, 'eventCategoryEdit']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/update', [EventCategoryController::class, 'eventCategoryUpdate']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}', [EventCategoryController::class, 'eventCategoryShow']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/delete', [EventCategoryController::class, 'eventCategoryDestroy']);

// eventCategories routes
$app->router->get('/admin/eventCategories', [EventCategoryController::class, 'eventCategoryIndex']);
$app->router->get('/admin/eventCategories/create', [EventCategoryController::class, 'eventCategoryCreate']);
$app->router->post('/admin/eventCategories/store', [EventCategoryController::class, 'eventCategoryStore']);
$app->router->get('/admin/eventCategories/export', [EventCategoryController::class, 'eventCategoryExport']);
$app->router->post('/admin/eventCategories/import', [EventCategoryController::class, 'eventCategoryImport']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}/edit', [EventCategoryController::class, 'eventCategoryEdit']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/update', [EventCategoryController::class, 'eventCategoryUpdate']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}', [EventCategoryController::class, 'eventCategoryShow']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/delete', [EventCategoryController::class, 'eventCategoryDestroy']);

// services routes
$app->router->get('/admin/services', [ServiceController::class, 'serviceIndex']);
$app->router->get('/admin/services/create', [ServiceController::class, 'serviceCreate']);
$app->router->post('/admin/services/store', [ServiceController::class, 'serviceStore']);
$app->router->get('/admin/services/export', [ServiceController::class, 'serviceExport']);
$app->router->post('/admin/services/import', [ServiceController::class, 'serviceImport']);
$app->router->get('/admin/services/{serviceIdentify}/edit', [ServiceController::class, 'serviceEdit']);
$app->router->post('/admin/services/{serviceIdentify}/update', [ServiceController::class, 'serviceUpdate']);
$app->router->get('/admin/services/{serviceIdentify}', [ServiceController::class, 'serviceShow']);
$app->router->post('/admin/services/{serviceIdentify}/delete', [ServiceController::class, 'serviceDestroy']);

// eventCategories routes
$app->router->get('/admin/eventCategories', [EventCategoryController::class, 'eventCategoryIndex']);
$app->router->get('/admin/eventCategories/create', [EventCategoryController::class, 'eventCategoryCreate']);
$app->router->post('/admin/eventCategories/store', [EventCategoryController::class, 'eventCategoryStore']);
$app->router->get('/admin/eventCategories/export', [EventCategoryController::class, 'eventCategoryExport']);
$app->router->post('/admin/eventCategories/import', [EventCategoryController::class, 'eventCategoryImport']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}/edit', [EventCategoryController::class, 'eventCategoryEdit']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/update', [EventCategoryController::class, 'eventCategoryUpdate']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}', [EventCategoryController::class, 'eventCategoryShow']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/delete', [EventCategoryController::class, 'eventCategoryDestroy']);

// eventCategories routes
$app->router->get('/admin/eventCategories', [EventCategoryController::class, 'eventCategoryIndex']);
$app->router->get('/admin/eventCategories/create', [EventCategoryController::class, 'eventCategoryCreate']);
$app->router->post('/admin/eventCategories/store', [EventCategoryController::class, 'eventCategoryStore']);
$app->router->get('/admin/eventCategories/export', [EventCategoryController::class, 'eventCategoryExport']);
$app->router->post('/admin/eventCategories/import', [EventCategoryController::class, 'eventCategoryImport']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}/edit', [EventCategoryController::class, 'eventCategoryEdit']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/update', [EventCategoryController::class, 'eventCategoryUpdate']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}', [EventCategoryController::class, 'eventCategoryShow']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/delete', [EventCategoryController::class, 'eventCategoryDestroy']);

// eventCategories routes
$app->router->get('/admin/eventCategories', [EventCategoryController::class, 'eventCategoryIndex']);
$app->router->get('/admin/eventCategories/create', [EventCategoryController::class, 'eventCategoryCreate']);
$app->router->post('/admin/eventCategories/store', [EventCategoryController::class, 'eventCategoryStore']);
$app->router->get('/admin/eventCategories/export', [EventCategoryController::class, 'eventCategoryExport']);
$app->router->post('/admin/eventCategories/import', [EventCategoryController::class, 'eventCategoryImport']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}/edit', [EventCategoryController::class, 'eventCategoryEdit']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/update', [EventCategoryController::class, 'eventCategoryUpdate']);
$app->router->get('/admin/eventCategories/{eventCategoryIdentify}', [EventCategoryController::class, 'eventCategoryShow']);
$app->router->post('/admin/eventCategories/{eventCategoryIdentify}/delete', [EventCategoryController::class, 'eventCategoryDestroy']);

// clients routes
$app->router->get('/admin/clients', [ClientController::class, 'clientIndex']);
$app->router->get('/admin/clients/create', [ClientController::class, 'clientCreate']);
$app->router->post('/admin/clients/store', [ClientController::class, 'clientStore']);
$app->router->get('/admin/clients/export', [ClientController::class, 'clientExport']);
$app->router->post('/admin/clients/import', [ClientController::class, 'clientImport']);
$app->router->get('/admin/clients/{clientIdentify}/edit', [ClientController::class, 'clientEdit']);
$app->router->post('/admin/clients/{clientIdentify}/update', [ClientController::class, 'clientUpdate']);
$app->router->get('/admin/clients/{clientIdentify}', [ClientController::class, 'clientShow']);
$app->router->post('/admin/clients/{clientIdentify}/delete', [ClientController::class, 'clientDestroy']);

// clients routes
$app->router->get('/admin/clients', [ClientController::class, 'clientIndex']);
$app->router->get('/admin/clients/create', [ClientController::class, 'clientCreate']);
$app->router->post('/admin/clients/store', [ClientController::class, 'clientStore']);
$app->router->get('/admin/clients/export', [ClientController::class, 'clientExport']);
$app->router->post('/admin/clients/import', [ClientController::class, 'clientImport']);
$app->router->get('/admin/clients/{clientIdentify}/edit', [ClientController::class, 'clientEdit']);
$app->router->post('/admin/clients/{clientIdentify}/update', [ClientController::class, 'clientUpdate']);
$app->router->get('/admin/clients/{clientIdentify}', [ClientController::class, 'clientShow']);
$app->router->post('/admin/clients/{clientIdentify}/delete', [ClientController::class, 'clientDestroy']);

// clients routes
$app->router->get('/admin/clients', [ClientController::class, 'clientIndex']);
$app->router->get('/admin/clients/create', [ClientController::class, 'clientCreate']);
$app->router->post('/admin/clients/store', [ClientController::class, 'clientStore']);
$app->router->get('/admin/clients/export', [ClientController::class, 'clientExport']);
$app->router->post('/admin/clients/import', [ClientController::class, 'clientImport']);
$app->router->get('/admin/clients/{clientIdentify}/edit', [ClientController::class, 'clientEdit']);
$app->router->post('/admin/clients/{clientIdentify}/update', [ClientController::class, 'clientUpdate']);
$app->router->get('/admin/clients/{clientIdentify}', [ClientController::class, 'clientShow']);
$app->router->post('/admin/clients/{clientIdentify}/delete', [ClientController::class, 'clientDestroy']);

// teams routes
$app->router->get('/admin/teams', [TeamController::class, 'teamIndex']);
$app->router->get('/admin/teams/create', [TeamController::class, 'teamCreate']);
$app->router->post('/admin/teams/store', [TeamController::class, 'teamStore']);
$app->router->get('/admin/teams/export', [TeamController::class, 'teamExport']);
$app->router->post('/admin/teams/import', [TeamController::class, 'teamImport']);
$app->router->get('/admin/teams/{teamIdentify}/edit', [TeamController::class, 'teamEdit']);
$app->router->post('/admin/teams/{teamIdentify}/update', [TeamController::class, 'teamUpdate']);
$app->router->get('/admin/teams/{teamIdentify}', [TeamController::class, 'teamShow']);
$app->router->post('/admin/teams/{teamIdentify}/delete', [TeamController::class, 'teamDestroy']);

// services routes
$app->router->get('/admin/services', [ServiceController::class, 'serviceIndex']);
$app->router->get('/admin/services/create', [ServiceController::class, 'serviceCreate']);
$app->router->post('/admin/services/store', [ServiceController::class, 'serviceStore']);
$app->router->get('/admin/services/export', [ServiceController::class, 'serviceExport']);
$app->router->post('/admin/services/import', [ServiceController::class, 'serviceImport']);
$app->router->get('/admin/services/{serviceIdentify}/edit', [ServiceController::class, 'serviceEdit']);
$app->router->post('/admin/services/{serviceIdentify}/update', [ServiceController::class, 'serviceUpdate']);
$app->router->get('/admin/services/{serviceIdentify}', [ServiceController::class, 'serviceShow']);
$app->router->post('/admin/services/{serviceIdentify}/delete', [ServiceController::class, 'serviceDestroy']);

// services routes
$app->router->get('/admin/services', [ServiceController::class, 'serviceIndex']);
$app->router->get('/admin/services/create', [ServiceController::class, 'serviceCreate']);
$app->router->post('/admin/services/store', [ServiceController::class, 'serviceStore']);
$app->router->get('/admin/services/export', [ServiceController::class, 'serviceExport']);
$app->router->post('/admin/services/import', [ServiceController::class, 'serviceImport']);
$app->router->get('/admin/services/{serviceIdentify}/edit', [ServiceController::class, 'serviceEdit']);
$app->router->post('/admin/services/{serviceIdentify}/update', [ServiceController::class, 'serviceUpdate']);
$app->router->get('/admin/services/{serviceIdentify}', [ServiceController::class, 'serviceShow']);
$app->router->post('/admin/services/{serviceIdentify}/delete', [ServiceController::class, 'serviceDestroy']);

// service_categories routes
$app->router->get('/admin/service_categories', [Service_categoryController::class, 'service_categoryIndex']);
$app->router->get('/admin/service_categories/create', [Service_categoryController::class, 'service_categoryCreate']);
$app->router->post('/admin/service_categories/store', [Service_categoryController::class, 'service_categoryStore']);
$app->router->get('/admin/service_categories/export', [Service_categoryController::class, 'service_categoryExport']);
$app->router->post('/admin/service_categories/import', [Service_categoryController::class, 'service_categoryImport']);
$app->router->get('/admin/service_categories/{service_categoryIdentify}/edit', [Service_categoryController::class, 'service_categoryEdit']);
$app->router->post('/admin/service_categories/{service_categoryIdentify}/update', [Service_categoryController::class, 'service_categoryUpdate']);
$app->router->get('/admin/service_categories/{service_categoryIdentify}', [Service_categoryController::class, 'service_categoryShow']);
$app->router->post('/admin/service_categories/{service_categoryIdentify}/delete', [Service_categoryController::class, 'service_categoryDestroy']);

// services routes
$app->router->get('/admin/services', [ServiceController::class, 'serviceIndex']);
$app->router->get('/admin/services/create', [ServiceController::class, 'serviceCreate']);
$app->router->post('/admin/services/store', [ServiceController::class, 'serviceStore']);
$app->router->get('/admin/services/export', [ServiceController::class, 'serviceExport']);
$app->router->post('/admin/services/import', [ServiceController::class, 'serviceImport']);
$app->router->get('/admin/services/{serviceIdentify}/edit', [ServiceController::class, 'serviceEdit']);
$app->router->post('/admin/services/{serviceIdentify}/update', [ServiceController::class, 'serviceUpdate']);
$app->router->get('/admin/services/{serviceIdentify}', [ServiceController::class, 'serviceShow']);
$app->router->post('/admin/services/{serviceIdentify}/delete', [ServiceController::class, 'serviceDestroy']);

// testimonials routes
$app->router->get('/admin/testimonials', [TestimonialController::class, 'testimonialIndex']);
$app->router->get('/admin/testimonials/create', [TestimonialController::class, 'testimonialCreate']);
$app->router->post('/admin/testimonials/store', [TestimonialController::class, 'testimonialStore']);
$app->router->get('/admin/testimonials/export', [TestimonialController::class, 'testimonialExport']);
$app->router->post('/admin/testimonials/import', [TestimonialController::class, 'testimonialImport']);
$app->router->get('/admin/testimonials/{testimonialIdentify}/edit', [TestimonialController::class, 'testimonialEdit']);
$app->router->post('/admin/testimonials/{testimonialIdentify}/update', [TestimonialController::class, 'testimonialUpdate']);
$app->router->get('/admin/testimonials/{testimonialIdentify}', [TestimonialController::class, 'testimonialShow']);
$app->router->post('/admin/testimonials/{testimonialIdentify}/delete', [TestimonialController::class, 'testimonialDestroy']);

// leads routes
$app->router->get('/admin/leads', [LeadController::class, 'leadIndex']);
$app->router->get('/admin/leads/create', [LeadController::class, 'leadCreate']);
$app->router->post('/admin/leads/store', [LeadController::class, 'leadStore']);
$app->router->get('/admin/leads/export', [LeadController::class, 'leadExport']);
$app->router->post('/admin/leads/import', [LeadController::class, 'leadImport']);
$app->router->get('/admin/leads/{leadIdentify}/edit', [LeadController::class, 'leadEdit']);
$app->router->post('/admin/leads/{leadIdentify}/update', [LeadController::class, 'leadUpdate']);
$app->router->get('/admin/leads/{leadIdentify}', [LeadController::class, 'leadShow']);
$app->router->post('/admin/leads/{leadIdentify}/delete', [LeadController::class, 'leadDestroy']);

// clients routes
$app->router->get('/admin/clients', [ClientController::class, 'clientIndex']);
$app->router->get('/admin/clients/create', [ClientController::class, 'clientCreate']);
$app->router->post('/admin/clients/store', [ClientController::class, 'clientStore']);
$app->router->get('/admin/clients/export', [ClientController::class, 'clientExport']);
$app->router->post('/admin/clients/import', [ClientController::class, 'clientImport']);
$app->router->get('/admin/clients/{clientIdentify}/edit', [ClientController::class, 'clientEdit']);
$app->router->post('/admin/clients/{clientIdentify}/update', [ClientController::class, 'clientUpdate']);
$app->router->get('/admin/clients/{clientIdentify}', [ClientController::class, 'clientShow']);
$app->router->post('/admin/clients/{clientIdentify}/delete', [ClientController::class, 'clientDestroy']);

// event_gallery routes
$app->router->get('/admin/event_gallery', [Event_galleryController::class, 'event_galleryIndex']);
$app->router->get('/admin/event_gallery/create', [Event_galleryController::class, 'event_galleryCreate']);
$app->router->post('/admin/event_gallery/store', [Event_galleryController::class, 'event_galleryStore']);
$app->router->get('/admin/event_gallery/export', [Event_galleryController::class, 'event_galleryExport']);
$app->router->post('/admin/event_gallery/import', [Event_galleryController::class, 'event_galleryImport']);
$app->router->get('/admin/event_gallery/{event_galleryIdentify}/edit', [Event_galleryController::class, 'event_galleryEdit']);
$app->router->post('/admin/event_gallery/{event_galleryIdentify}/update', [Event_galleryController::class, 'event_galleryUpdate']);
$app->router->get('/admin/event_gallery/{event_galleryIdentify}', [Event_galleryController::class, 'event_galleryShow']);
$app->router->post('/admin/event_gallery/{event_galleryIdentify}/delete', [Event_galleryController::class, 'event_galleryDestroy']);

// settings routes
$app->router->get('/admin/settings', [SettingController::class, 'settingIndex']);
$app->router->get('/admin/settings/create', [SettingController::class, 'settingCreate']);
$app->router->post('/admin/settings/store', [SettingController::class, 'settingStore']);
$app->router->get('/admin/settings/export', [SettingController::class, 'settingExport']);
$app->router->post('/admin/settings/import', [SettingController::class, 'settingImport']);
$app->router->get('/admin/settings/{settingIdentify}/edit', [SettingController::class, 'settingEdit']);
$app->router->post('/admin/settings/{settingIdentify}/update', [SettingController::class, 'settingUpdate']);
$app->router->get('/admin/settings/{settingIdentify}', [SettingController::class, 'settingShow']);
$app->router->post('/admin/settings/{settingIdentify}/delete', [SettingController::class, 'settingDestroy']);

// meta_seo routes
$app->router->get('/admin/meta_seo', [Meta_seoController::class, 'meta_seoIndex']);
$app->router->get('/admin/meta_seo/create', [Meta_seoController::class, 'meta_seoCreate']);
$app->router->post('/admin/meta_seo/store', [Meta_seoController::class, 'meta_seoStore']);
$app->router->get('/admin/meta_seo/export', [Meta_seoController::class, 'meta_seoExport']);
$app->router->post('/admin/meta_seo/import', [Meta_seoController::class, 'meta_seoImport']);
$app->router->get('/admin/meta_seo/{meta_seoIdentify}/edit', [Meta_seoController::class, 'meta_seoEdit']);
$app->router->post('/admin/meta_seo/{meta_seoIdentify}/update', [Meta_seoController::class, 'meta_seoUpdate']);
$app->router->get('/admin/meta_seo/{meta_seoIdentify}', [Meta_seoController::class, 'meta_seoShow']);
$app->router->post('/admin/meta_seo/{meta_seoIdentify}/delete', [Meta_seoController::class, 'meta_seoDestroy']);

// galleries routes
$app->router->get('/admin/galleries', [GalleryController::class, 'galleryIndex']);
$app->router->get('/admin/galleries/create', [GalleryController::class, 'galleryCreate']);
$app->router->post('/admin/galleries/store', [GalleryController::class, 'galleryStore']);
$app->router->get('/admin/galleries/export', [GalleryController::class, 'galleryExport']);
$app->router->post('/admin/galleries/import', [GalleryController::class, 'galleryImport']);
$app->router->get('/admin/galleries/{galleryIdentify}/edit', [GalleryController::class, 'galleryEdit']);
$app->router->post('/admin/galleries/{galleryIdentify}/update', [GalleryController::class, 'galleryUpdate']);
$app->router->get('/admin/galleries/{galleryIdentify}', [GalleryController::class, 'galleryShow']);
$app->router->post('/admin/galleries/{galleryIdentify}/delete', [GalleryController::class, 'galleryDestroy']);

// campaign routes
$app->router->get('/admin/campaign', [CampaignController::class, 'campaignIndex']);
$app->router->get('/admin/campaign/create', [CampaignController::class, 'campaignCreate']);
$app->router->post('/admin/campaign/store', [CampaignController::class, 'campaignStore']);
$app->router->get('/admin/campaign/export', [CampaignController::class, 'campaignExport']);
$app->router->post('/admin/campaign/import', [CampaignController::class, 'campaignImport']);
$app->router->get('/admin/campaign/{campaignIdentify}/edit', [CampaignController::class, 'campaignEdit']);
$app->router->post('/admin/campaign/{campaignIdentify}/update', [CampaignController::class, 'campaignUpdate']);
$app->router->get('/admin/campaign/{campaignIdentify}', [CampaignController::class, 'campaignShow']);
$app->router->post('/admin/campaign/{campaignIdentify}/delete', [CampaignController::class, 'campaignDestroy']);

// campaign routes
$app->router->get('/admin/campaign', [CampaignController::class, 'campaignIndex']);
$app->router->get('/admin/campaign/create', [CampaignController::class, 'campaignCreate']);
$app->router->post('/admin/campaign/store', [CampaignController::class, 'campaignStore']);
$app->router->get('/admin/campaign/export', [CampaignController::class, 'campaignExport']);
$app->router->post('/admin/campaign/import', [CampaignController::class, 'campaignImport']);
$app->router->get('/admin/campaign/{campaignIdentify}/edit', [CampaignController::class, 'campaignEdit']);
$app->router->post('/admin/campaign/{campaignIdentify}/update', [CampaignController::class, 'campaignUpdate']);
$app->router->get('/admin/campaign/{campaignIdentify}', [CampaignController::class, 'campaignShow']);
$app->router->post('/admin/campaign/{campaignIdentify}/delete', [CampaignController::class, 'campaignDestroy']);

// campaign routes
$app->router->get('/admin/campaign', [CampaignController::class, 'campaignIndex']);
$app->router->get('/admin/campaign/create', [CampaignController::class, 'campaignCreate']);
$app->router->post('/admin/campaign/store', [CampaignController::class, 'campaignStore']);
$app->router->get('/admin/campaign/export', [CampaignController::class, 'campaignExport']);
$app->router->post('/admin/campaign/import', [CampaignController::class, 'campaignImport']);
$app->router->get('/admin/campaign/{campaignIdentify}/edit', [CampaignController::class, 'campaignEdit']);
$app->router->post('/admin/campaign/{campaignIdentify}/update', [CampaignController::class, 'campaignUpdate']);
$app->router->get('/admin/campaign/{campaignIdentify}', [CampaignController::class, 'campaignShow']);
$app->router->post('/admin/campaign/{campaignIdentify}/delete', [CampaignController::class, 'campaignDestroy']);

// campaign routes
$app->router->get('/admin/campaign', [CampaignController::class, 'campaignIndex']);
$app->router->get('/admin/campaign/create', [CampaignController::class, 'campaignCreate']);
$app->router->post('/admin/campaign/store', [CampaignController::class, 'campaignStore']);
$app->router->get('/admin/campaign/export', [CampaignController::class, 'campaignExport']);
$app->router->post('/admin/campaign/import', [CampaignController::class, 'campaignImport']);
$app->router->get('/admin/campaign/{campaignIdentify}/edit', [CampaignController::class, 'campaignEdit']);
$app->router->post('/admin/campaign/{campaignIdentify}/update', [CampaignController::class, 'campaignUpdate']);
$app->router->get('/admin/campaign/{campaignIdentify}', [CampaignController::class, 'campaignShow']);
$app->router->post('/admin/campaign/{campaignIdentify}/delete', [CampaignController::class, 'campaignDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// events routes
$app->router->get('/admin/events', [EventController::class, 'eventIndex']);
$app->router->get('/admin/events/create', [EventController::class, 'eventCreate']);
$app->router->post('/admin/events/store', [EventController::class, 'eventStore']);
$app->router->get('/admin/events/export', [EventController::class, 'eventExport']);
$app->router->post('/admin/events/import', [EventController::class, 'eventImport']);
$app->router->get('/admin/events/{eventIdentify}/edit', [EventController::class, 'eventEdit']);
$app->router->post('/admin/events/{eventIdentify}/update', [EventController::class, 'eventUpdate']);
$app->router->get('/admin/events/{eventIdentify}', [EventController::class, 'eventShow']);
$app->router->post('/admin/events/{eventIdentify}/delete', [EventController::class, 'eventDestroy']);

// categories routes
$app->router->get('/admin/categories', [CategoryController::class, 'categoryIndex']);
$app->router->get('/admin/categories/create', [CategoryController::class, 'categoryCreate']);
$app->router->post('/admin/categories/store', [CategoryController::class, 'categoryStore']);
$app->router->get('/admin/categories/export', [CategoryController::class, 'categoryExport']);
$app->router->post('/admin/categories/import', [CategoryController::class, 'categoryImport']);
$app->router->get('/admin/categories/{categoryIdentify}/edit', [CategoryController::class, 'categoryEdit']);
$app->router->post('/admin/categories/{categoryIdentify}/update', [CategoryController::class, 'categoryUpdate']);
$app->router->get('/admin/categories/{categoryIdentify}', [CategoryController::class, 'categoryShow']);
$app->router->post('/admin/categories/{categoryIdentify}/delete', [CategoryController::class, 'categoryDestroy']);

// galleries routes
$app->router->get('/admin/galleries', [GalleryController::class, 'galleryIndex']);
$app->router->get('/admin/galleries/create', [GalleryController::class, 'galleryCreate']);
$app->router->post('/admin/galleries/store', [GalleryController::class, 'galleryStore']);
$app->router->get('/admin/galleries/export', [GalleryController::class, 'galleryExport']);
$app->router->post('/admin/galleries/import', [GalleryController::class, 'galleryImport']);
$app->router->get('/admin/galleries/{galleryIdentify}/edit', [GalleryController::class, 'galleryEdit']);
$app->router->post('/admin/galleries/{galleryIdentify}/update', [GalleryController::class, 'galleryUpdate']);
$app->router->get('/admin/galleries/{galleryIdentify}', [GalleryController::class, 'galleryShow']);
$app->router->post('/admin/galleries/{galleryIdentify}/delete', [GalleryController::class, 'galleryDestroy']);

// galleries routes
$app->router->get('/admin/galleries', [GalleryController::class, 'galleryIndex']);
$app->router->get('/admin/galleries/create', [GalleryController::class, 'galleryCreate']);
$app->router->post('/admin/galleries/store', [GalleryController::class, 'galleryStore']);
$app->router->get('/admin/galleries/export', [GalleryController::class, 'galleryExport']);
$app->router->post('/admin/galleries/import', [GalleryController::class, 'galleryImport']);
$app->router->get('/admin/galleries/{galleryIdentify}/edit', [GalleryController::class, 'galleryEdit']);
$app->router->post('/admin/galleries/{galleryIdentify}/update', [GalleryController::class, 'galleryUpdate']);
$app->router->get('/admin/galleries/{galleryIdentify}', [GalleryController::class, 'galleryShow']);
$app->router->post('/admin/galleries/{galleryIdentify}/delete', [GalleryController::class, 'galleryDestroy']);
