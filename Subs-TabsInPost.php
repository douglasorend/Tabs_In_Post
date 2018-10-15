<?php
/**********************************************************************************
* Subs-TabsInPost.php - Subs of the Tabs In Post mod
***********************************************************************************
* This mod is licensed under the 2-clause BSD License, which can be found here:
*	http://opensource.org/licenses/BSD-2-Clause
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/
if (!defined('SMF'))
	die('Hacking attempt...');

function TIP_LoadTheme()
{
	global $context, $settings;
	$context['html_headers'] .= '
	<link rel="stylesheet" type="text/css" href="' . $settings['default_theme_url'] . '/css/tabsinposts.css" />
	<script type="text/javascript" src="' . $settings['default_theme_url'] . '/scripts/tabsinposts.js?fin20"></script>';
}

function TIP_BBcode(&$codes)
{
	// BBCode format: [wholepost]
	$codes[] = array(
		'tag' => 'wholepost',
		'type' => 'closed',
		'content' => '<tabPost />',
		'trim' => 'both',
	);

	// BBCode format: [tabarea]unparsed content[/tabarea]
	$codes[] = array(
		'tag' => 'tabarea',
		'type' => 'unparsed_content',
		'content' => '',
		'disabled_content' => '',
		'validate' => 'TIP_Header',
		'require_children' => array('tab', 'taburl'),
	);

	// BBCode format: [tab=title]unparsed content[/tab]
	$codes[] = array(
		'tag' => 'tab',
		'type' => 'unparsed_commas',
		'after' => '',
		'before' => '',
		'disabled_content' => '',
		'require_parent' => 'tabarea',
	);

	// BBCode format: [taburl=title]URL[/tab]
	$codes[] = array(
		'tag' => 'taburl',
		'type' => 'unparsed_content',
		'content' => '',
		'disabled_content' => '',
		'require_parent' => 'tabarea',
	);
}

function TIP_Header(&$tag, &$link, &$disabled)
{
	global $context, $forum_version;
	static $tag_group = 0;
	
	// Determine a few variables:
	$smf21 = substr($forum_version, 0, 7) == 'SMF 2.1';
	$tab = (int) (!empty($_REQUEST['tab_' . $tag_group]) ? $_REQUEST['tab_' . $tag_group] : (!empty($_REQUEST['tab']) ? $_REQUEST['tab'] : 0));

	// Make sure we have at least one tab inside the tab area.  If not, don't parse anything!
	$pattern = '#\[(taburl|tab)=([^\]]+)\](.+?)\[/(taburl|tab)\]#i' . ($context['utf8'] ? 'u' : '');
	if (!preg_match_all($pattern, $link, $codes, PREG_PATTERN_ORDER))
		return;

	// Build the tab area with the tabs, using only the content of the tab tags!
	$tag['content'] = '<div class="tabContainer"><div class="tabs"><ul class="list' . (!$smf21 ? ' tabContainer_margin_left' : '') . '" data-current="0">';
	$content = array();
	foreach ($codes[1] as $tab_id => $usage)
	{
		if ($usage == 'taburl')
		{
			$link = &$codes[2][$tab_id];
			$link = strtr($link, array('<br />' => ''));
			if (strpos($link, 'http://') !== 0 && strpos($link, 'https://') !== 0)
				$link = 'http://' . $link;
			$codes[2][$tab_id] = '<a href="'. $link . '">' . $codes[3][$tab_id] . '</a>';
			unset($codes[3][$tab_id]);
		}
	}
	foreach ($codes[2] as $tab_id => $title)
		$tag['content'] .= '<li id="tabHeader' . $tag_group . '_' . $tab_id . '"' . ($tab_id == $tab ? ' class="tabActiveHeader"' : '') . (isset($codes[3][$tab_id]) ? ' onClick="displayPage(' . $tag_group . ', this);"' : '') . '>' . parse_bbc($title) . '</a></li>';
	$tag['content'] .= '</ul></div><hr class="clear" /><div id="content">';
	foreach ($codes[3] as $tab_id => $text)
		$tag['content'] .= '<div id="tabpage' . $tag_group . '_' . $tab_id . '"' . ($tab_id != $tab ? ' style="display: none"' : '') . '>' . parse_bbc($text) . '</div>';
	$tag['content'] .= '</div></div>';
	$tag_group++;
}

?>