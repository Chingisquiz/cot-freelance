<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=rss.create
 * [END_COT_EXT]
 */

/**
 * folio module
 *
 * @package folio
 * @version 2.5.2
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

if ($m == "folio")
{
	require_once cot_incfile('folio', 'module');
	
	$default_mode = false;
	 // запрос требует оптимизаци!!!
	if (!empty($c) && isset($structure['folio'][$c]))
	{
		$mtch = $structure['folio'][$c]['path'].".";
		$mtchlen = mb_strlen($mtch);
		$catsub = array();
		$catsub[] = $c;

		foreach ($structure['folio'] as $i => $x)
		{
			if (mb_substr($x['path'], 0, $mtchlen) == $mtch)
			{
				$catsub[] = $i;
			}
		}

		$sqllist = $db->query("SELECT p.*, u.* FROM $db_folio AS p
				LEFT JOIN $db_users AS u ON p.item_userid = u.user_id
			WHERE item_state=0 AND item_store=".$pr_store." AND item_cat IN ('".implode("','", $catsub)."') 
			ORDER BY item_date DESC LIMIT ".$cfg['rss']['rss_maxitems']);
	}
	else
	{
		$sqllist = $db->query("SELECT p.*, u.* FROM $db_folio AS p
				LEFT JOIN $db_users AS u ON p.item_userid = u.user_id
			WHERE item_state=0 AND item_store=".$pr_store."
			ORDER BY item_date DESC LIMIT ".$cfg['rss']['rss_maxitems']);
	}
	$i = 0;
	$sqllist_rowset = $sqllist->fetchAll();
	$sqllist_idset = array();
	
	foreach ($sqllist_rowset as $item)
	{
		$sqllist_idset[$item['item_id']] = $item['item_alias'];
	}
	
	foreach ($sqllist_rowset as $row)
	{
		$row['item_pageurl'] = (empty($row['item_alias'])) ? cot_url('folio', 'c='.$row['item_cat'].'&id='.$row['item_id'], '', true) : cot_url('folio', 'c='.$row['item_cat'].'&al='.$row['item_alias'], '', true);

		$items[$i]['title'] = $row['item_title'];
		$items[$i]['link'] = COT_ABSOLUTE_URL . $row['item_pageurl'];
		$items[$i]['pubDate'] = cot_date('r', $row['item_date']);
		$items[$i]['description'] = cot_parse($row['item_text']);
		$items[$i]['fields'] = cot_generate_projecttags($row);

		$i++;
	}
	$sql->closeCursor();
}