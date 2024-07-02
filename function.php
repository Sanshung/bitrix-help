<?php

//Функция возврата окончания слова при склонении
use Bitrix\Main\Grid\Declension;

$yearDeclension = new Declension('год', 'года', 'лет');
$yearDeclension->get(2022);