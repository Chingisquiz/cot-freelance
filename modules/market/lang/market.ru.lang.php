<?php

/**
 * market module
 *
 * @package market
 * @version 2.5.2
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_pagelimit'] = array('Число записей в списках');
$L['cfg_shorttextlen'] = array('Количество символов в списках');
$L['cfg_prevalidate'] = array('Включить предварительную модерацию');
$L['cfg_preview'] = array('Включить предварительный просмотр');
$L['cfg_marketsitemap'] = 'Включить в Sitemap';
$L['cfg_marketsitemap_freq'] = 'Частота изменения в Sitemap';
$L['cfg_marketsitemap_freq_params'] = $sitemap_freqs;
$L['cfg_marketsitemap_prio'] = array('Приоритет в Sitemap');
$L['cfg_description'] = array('Description');
$L['cfg_marketsearch'] = array('Включить в общий поиск');
$L['cfg_warranty'] = array('Гарантийный срок (дней)');
$L['cfg_tax'] = array('Комиссия за продажи (%)');
$L['cfg_ordersperpage'] = array('Число заказов на странице');

$L['market_select_cat'] = "Выберите раздел";
$L['market_empty_title'] = "Название не может быть пустым";
$L['market_empty_text'] = "Описание не может быть пустым";
$L['market_large_img'] = "Изображение слишком большое";

$L['market_forreview'] = 'Ваш товар находится на проверке. Модератор утвердит его публикацию в ближайшее время.';

$L['market'] = 'Магазин';
$L['market_myproducts'] = 'Мои товары';

$L['market_catalog'] = 'Каталог';
$L['market_add_product'] = 'Добавить товар';
$L['market_edit_product'] = 'Редактировать товар';
$L['market_add_product_title'] = 'Добавление товара в магазин';
$L['market_edit_product_title'] = 'Редактирование товара из магазина';

$L['market_hidden'] = 'Товар не опубликова';
$L['market_location'] = 'Местоположение';
$L['market_price'] = 'Цена';
$L['market_image_limit'] = 'Разрешенные форматы JPEG, GIF, JPG, PNG. Максимальный размер 1Мб.';

$L['market_costasc'] = 'Цена по возрастанию';
$L['market_costdesc'] = 'Цена по убыванию';
$L['market_mostrelevant'] = 'Наиболее актуальные';

$L['market_notfound'] = 'Товары не найдены';
$L['market_empty'] = 'Товаров нет';

$L['market_added_mail_subj'] = 'Ваш товар опубликован';
$L['market_senttovalidation_mail_subj'] = 'Ваш товар отправлен на проверку';
$L['market_admin_home_valqueue'] = 'На проверке';
$L['market_admin_home_public'] = 'Опубликовано';
$L['market_admin_home_hidden'] = 'Скрытые';

$L['market_added_mail_body'] = 'Здравствуйте, {$user_name}. '."\n\n".'Ваш товар "{$prd_name}" был опубликован на сайте {$sitename} - {$link}';
$L['market_senttovalidation_mail_body'] = 'Здравствуйте, {$user_name}.'."\n\n".'Ваш товар "{$prd_name}" был отправлен на проверку. Модератор утвердит его публикацию в ближайшее время.';

$L['market_status_published'] = 'Опубликовано';
$L['market_status_moderated'] = 'На проверке';
$L['market_status_hidden'] = 'Скрыто';