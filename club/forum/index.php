<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Блог-лента");
?>
<p>Пример настройки форумов с профилем пользователя в социальной сети.</p>
<?$APPLICATION->IncludeComponent(
	"bitrix:forum",
	".default",
	Array(
		"HELP_CONTENT" => "", 
		"RULES_CONTENT" => "", 
		"FID" => array(), 
		"USER_PROPERTY" => array(), 
		"USE_DESC_PAGE_TOPIC" => "Y", 
		"SEF_MODE" => "Y", 
		"SEF_FOLDER" => "/club/forum/", 
		"AJAX_TYPE" => "Y", 
		"AJAX_MODE" => "N", 
		"AJAX_OPTION_SHADOW" => "Y", 
		"AJAX_OPTION_JUMP" => "N", 
		"AJAX_OPTION_STYLE" => "Y", 
		"AJAX_OPTION_HISTORY" => "N", 
		"CACHE_TYPE" => "A", 
		"CACHE_TIME" => "3600", 
		"FORUMS_PER_PAGE" => "10", 
		"TOPICS_PER_PAGE" => "10", 
		"MESSAGES_PER_PAGE" => "10", 
		"PATH_TO_AUTH_FORM" => "", 
		"TIME_INTERVAL_FOR_USER_STAT" => "10", 
		"DATE_FORMAT" => "d.m.Y", 
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s", 
		"SEND_MAIL" => "E", 
		"SHOW_USER_STATUS" => "N", 
		"SET_NAVIGATION" => "Y", 
		"SET_TITLE" => "Y", 
		"DISPLAY_PANEL" => "N", 
		"SHOW_FORUM_ANOTHER_SITE" => "Y", 
		"USE_RSS" => "N", 
		"TMPLT_SHOW_TOP" => "", 
		"TMPLT_SHOW_BOTTOM" => "SET_BE_READ", 
		"TMPLT_SHOW_MENU" => "TOP", 
		"TMPLT_SHOW_AUTH_FORM" => "INPUT", 
		"TMPLT_SHOW_ADDITIONAL_MARKER" => "(new)", 
		"WORD_WRAP_CUT" => "23", 
		"WORD_LENGTH" => "50", 
		"SMILE_TABLE_COLS" => "3", 
		"SHOW_TAGS" => "Y", 
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/", 
		"PATH_TO_ICON" => "/bitrix/images/forum/icon/", 
		"PAGE_NAVIGATION_TEMPLATE" => "", 
		"HIDE_USER_ACTION" => "N", 
		"bxpiwidth" => "691", 
		"SHOW_RATING" => "Y",
		"RATING_TYPE" => "like",
		"RATING_ID" => array("3","4"),
		"SEF_URL_TEMPLATES" => Array(
			"index" => "index.php",
			"list" => "forum#FID#/",
			"read" => "forum#FID#/topic#TID#/",
			"message" => "messages/forum#FID#/topic#TID#/message#MID#/",
			"help" => "help/",
			"rules" => "rules/",
			"message_appr" => "messages/approve/forum#FID#/topic#TID#/",
			"message_move" => "messages/move/forum#FID#/topic#TID#/message#MID#/",
			"pm_list" => "pm/folder#FID#/",
			"pm_edit" => "pm/folder#FID#/message#MID#/user#UID#/#mode#/",
			"pm_read" => "pm/folder#FID#/message#MID#/",
			"pm_search" => "pm/search/",
			"pm_folder" => "pm/folders/",
			"rss" => "rss/#TYPE#/#MODE#/#IID#/",
			"search" => "search/",
			"subscr_list" => "subscribe/",
			"active" => "topic/new/",
			"topic_move" => "topic/move/forum#FID#/topic#TID#/",
			"topic_new" => "topic/add/forum#FID#/",
			"topic_search" => "topic/search/",
			"user_list" => "users/",
			"profile" => "user/#UID#/edit/",
			"profile_view" => "/club/user/#UID#/",
			"user_post" => "user/#UID#/post/#mode#/",
			"message_send" => "user/#UID#/send/#TYPE#/"
		),
		"VARIABLE_ALIASES" => Array(
			"index" => Array(),
			"list" => Array(),
			"read" => Array(),
			"message" => Array(),
			"help" => Array(),
			"rules" => Array(),
			"message_appr" => Array(),
			"message_move" => Array(),
			"pm_list" => Array(),
			"pm_edit" => Array(),
			"pm_read" => Array(),
			"pm_search" => Array(),
			"pm_folder" => Array(),
			"rss" => Array(),
			"search" => Array(),
			"subscr_list" => Array(),
			"active" => Array(),
			"topic_move" => Array(),
			"topic_new" => Array(),
			"topic_search" => Array(),
			"user_list" => Array(),
			"profile" => Array(),
			"profile_view" => Array(),
			"user_post" => Array(),
			"message_send" => Array(),
		)
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>