<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="ru">
CMain::ShowPanel();
<? $APPLICATION->ShowPanel();?>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Yanicode :: Главная</title>
    <? $APPLICATION->ShowHead();?>
</head>

<body>
    
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="header__logo">
                    <img width="300" height="92" src="<?=SITE_TEMPLATE_PATH?>/images/svg/logo-yanicode.svg" alt="yanicode">
                </a>
                <div class="header__burger header__burger_close">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
                <div class="header-nav">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "yanicode_menu", Array(
	                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		                "COMPONENT_TEMPLATE" => "blue_tabs",
		                "DELAY" => "N",	// Откладывать выполнение шаблона меню
		                "MAX_LEVEL" => "1",	// Уровень вложенности меню
		                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
		                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		                "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	                    ),
	                    false
)                       ;?>
                    <div class="header__phone">
                        <a href="tel:+79114510616">+79114510616</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


