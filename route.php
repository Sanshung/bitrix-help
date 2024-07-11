<?php
///home/bitrix/www/bitrix/.settings.php
///'routing' =>
//		array (
//			'value' =>
//				array (
//					'config' =>
//						array (
//							0 => 'backend.php',
//						),
//				),
//			'readonly' => false,
//		),

//local/routes/backend.php

use Bitrix\Catalog\StoreTable;
use Bitrix\Main\Loader;
use Bitrix\Main\Result;
use Bitrix\Main\Routing\RoutingConfigurator;
return static function (RoutingConfigurator $routes) {
    $routes->get('/api/markers', function (\Bitrix\Main\HttpRequest $request) {
        
        $result = \Order::markers($request);
        $result = new Result;
        $arResult = [];
        $result->setData($arResult);
        
        return $result;
        
        return [
            'success' => $result->isSuccess(),
            'message' => implode(', ', $result->getErrorMessages())
        ];
        //or
        return $result->getData();
    });
    
}