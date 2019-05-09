<?php

/**
 * ManageWiki settings are added using the variable below.
 *
 * Type can be either: check, integer, list, list-multi, matrix, text, url or wikipage.
 *
 * check: adds a checkbox.
 * integer: adds a textbox with integer validation (requires: minint and maxint which are minimum and maximum integer values)
 * list: adds a list of options (requires: options which is an array in form of display => internal value).
 * list-multi: see above, just that multiple can be selected.
 * matrix: adds an array of "columns" and "rows". Columns are the top array and rows will be the values.
 * text: adds a single line text entry.
 * url: adds a single line text entry which requires a full URL.
 * wikipage: add a textbox which will return an autocomplete drop-down list of wikipages. Returns standardised MediaWiki pages.
 *
 * Other variables that are required are name and from.
 *
 * name: the displayed name of the setting on Special:ManageWiki.
 * from: a text entry of which extension is required for this setting to work. If added by MediaWiki or a 'global' extension, use 'mediawiki'.
 * overridedefault: a string/array override default when no existing value exist.
 * restricted: boolean - requires managewiki-restricted to change.
 * help: string providing help information for the setting.
 * section: string name of groupings for settings.
 */
$wgManageWikiSettings = [
	// Anti-Spam
	'wgAbuseFilterActions' => [
		'name' => 'AbuseFilter Actions',
		'from' => 'mediawiki',
		'requires' => false,
		'restricted' => false,
		'type' => 'list-multi-bool',
		'allopts' => [
			'block',
			'blockautopromote',
			'degroup',
			'disallow',
			'tag',
			'throttle',
			'warn',
		],
		'options' => [
			'Block' => 'block',
			'BlockAutopromote' => 'blockautopromote',
			'Degroup' => 'degroup',
			'Disallow' => 'disallow',
			'Tag' => 'tag',
			'Throttle' => 'throttle',
			'Warn' => 'warn',
		],
		'overridedefault' => [
			'block' => true,
			'blockautopromote' => true,
			'degroup' => true,
			'disallow' => true,
			'rangeblock' => false,
			'tag' => true,
			'throttle' => true,
			'warn' => true,
		],
		'section' => 'anti-spam',
		'help' => 'The possible actions that can be taken by abuse filters. When adding a new action, check if it is restricted in $wgAbuseFilterRestrictions and, if it is, don\'t forget to add the abusefilter-modify-restricted right to the appropriate user groups.',
	],
	'wgAutoblockExpiry' => [
		'name' => 'Autoblock Expiry',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'integer',
		'minint' => 0,
		'maxint' => 315360000,
		'overridedefault' => 86400,
		'section' => 'anti-spam',
		'help' => 'Number of seconds before autoblock entries expire. Minmum value allowed is 0 where as maxmium is 10 years (315360000).',
	],
	'wgBlockAllowsUTEdit' => [
		'name' => 'Allows blocking users to restrict talk page accesst',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'anti-spam',
		'help' => 'Allows the blocking user to grant talk page edit access for the blocked user',
	],
	'wgCookieSetOnAutoblock' => [
		'name' => 'Cookie set on autoblock',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'anti-spam',
		'help' => 'Determines whether to set a cookie when a user is autoblocked. Doing so means that a blocked user, even after logging out and moving to a new IP address, will still be blocked.',
	],
	'wgCookieSetOnIpBlock' => [
		'name' => 'Cookie set on IP block',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'anti-spam',
		'help' => 'Determines whether to set a cookie when an IP user is blocked. Doing so means that a blocked user, even after moving to a new IP address, will still be blocked.',
	],
	'wgEmailConfirmToEdit' => [
		'name' => 'Email Confirm To Edit',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'anti-spam',
		'help' => 'Require users to confirm email address before they can edit. This effectively disables ip editing.',
	],

	// Beta Feature related stuff
	'wgEchoUseCrossWikiBetaFeature' => [
		'name' => 'Enable Echo Cross Wiki Beta Feature',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'beta',
		'help' => 'Feature flag for the cross-wiki notifications beta feature.',
	],
	'wgMediaViewerIsInBeta' => [
		'name' => 'Enable Media Viewer Beta Mode',
		'from' => 'multimediaviewer',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'beta',
		'help' => 'This makes Media Viewer a beta feature thus this will not be enabled for all users.',
	],
	'wgPopupsBetaFeature' => [
		'name' => 'Enable Popups Beta Mode',
		'from' => 'popups',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => null,
		'section' => 'beta',
		'help' => 'This enables Popups as a beta feature, rather than showing it to all users.',
	],
	'wgVisualEditorEnableDiffPageBetaFeature' => [
		'name' => 'Enable VisualEditor Diff Page Beta Feature',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'beta',
		'help' => 'Enable the new visual mode as a beta feature on revision difference pages.',
	],
	'wgVisualEditorEnableWikitextBetaFeature' => [
		'name' => 'Enable VisualEditor Wikitext Beta Feature',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'beta',
		'help' => 'Enable the new wikitext mode inside the visual editor as a beta feature. It has many of the tools present in the visual editor, uses a similar design, and allows better switching between the two.',
	],
	'wgVisualEditorShowBetaWelcome' => [
		'name' => 'Enable VisualEditor Show Beta Welcome',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'beta',
		'help' => 'Shows a beta welcome for users of VisualEditor.',
	],

	// Chat
	'wgChatLinkUsernames' => [
		'name' => 'Chat Link to Usernames',
		'from' => 'mediawikichat',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'chat',
		'help' => 'Link to user pages in the main chat window.',
	],
	'wgChatMeCommand' => [
		'name' => 'Chat Me Command',
		'from' => 'mediawikichat',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'chat',
		'help' => 'Enable "/me <text>" command that prints a status-type message.',
	],
	'wmgWebChatServer' => [
		'name' => 'WebChat Server',
		'from' => 'webchat',
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => '',
		'section' => 'chat',
		'help' => 'IRC Server to connect to, not required when using the freenodeChat web client.',
	],
	'wmgWebChatChannel' => [
		'name' => 'WebChat Channel',
		'from' => 'webchat',
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => '',
		'section' => 'chat',
		'help' => 'Channel to connect to.',
	],
	'wmgWebChatClient' => [
		'name' => 'WebChat Client',
		'from' => 'webchat',
		'restricted' => false,
		'type' => 'list',
		'options' => [
			'Freenode' => 'freenodeChat',
			'Other Server' => 'Mibbit',
		],
		'overridedefault' => 'freenodeChat',
		'section' => 'chat',
		'help' => 'This sets the web client to use. If you are not using Freenode, select Other Server.',
	],

	// Editing
	'wmgWikiLicense' => [
		'name' => 'Content License',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'list',
		'options' => [
			'All Rights Reserved' => 'arr',
			'Creative Commons BY 4.0' => 'cc-by',
			'Creative Commons BY-NC 4.0' => 'cc-by-nc',
			'Creative Commons BY-ND 4.0' => 'cc-by-nd',
			'Creative Commons BY-SA 4.0' => 'cc-by-sa',
			'Creative Commons BY-SA 2.0 Korea' => 'cc-by-sa-2-0-kr',
			'Creative Commons BY-SA-NC 4.0' => 'cc-by-sa-nc',
			'Creative Commons BY-NC-ND 4.0' => 'cc-by-nc-nd',
			'Public Domain' => 'cc-pd',
			'No license provided' => 'empty',
		],
		'overridedefault' => 'cc-by-sa',
		'section' => 'edit',
		'help' => 'Each wiki on Miraheze is by default licensed under CC-BY-SA 4.0 although this can be changed to another supported license. If you would like to release the contributions on your wiki under another license, please let us know so that we can make it available to you. Be aware that changing the license on your wiki can have an impact on your community and should not be done lightly.',
	],
	'wgRCMaxAge' => [
		'name' => 'RecentChanges max age',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => 180 * 24 * 3600,
		'section' => 'edit',
		'help' => 'Items in the recentchanges table are periodically purged; entries older than this many seconds will go.',
	],
	'wgActiveUserDays' => [
		'name' => 'Active User Days',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'integer',
		'minint' => 0,
		'maxint' => 400,
		'overridedefault' => 30,
		'section' => 'edit',
		'help' => 'The number of days within which a person must make edits to be considered an "active" user.',
	],
	'wgRestrictionTypes' => [
		'name' => 'Restriction Types',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'list-multi',
		'options' => [
			'Create' => 'create',
			'Delete' => 'delete',
			'Edit' => 'edit',
			'Move' => 'move',
			'Protect' => 'protect',
			'Upload' => 'upload',
		],
		'overridedefault' => [
			'create',
			'delete',
			'edit',
			'move',
			'upload',
		],
		'section' => 'edit',
		'help' => 'Actions that can be restricted.',
	],
	'wgRCLinkDays' => [
		'name' => 'RecentChanges link days',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'list-multi',
		'options' => [
			'1' => 1,
			'3' => 3,
			'7' => 7,
			'14' => 14,
			'30' => 30,
			'180' => 180,
		],
		'overridedefault' => [
			1,
			3,
			7,
			14,
			30,
		],
		'section' => 'edit',
		'help' => 'List days options to list in the Special:Recentchanges and Special:Recentchangeslinked pages.',
	],
	'wgCommentsInRecentChanges' => [
		'name' => 'Enable Comments In RecentChanges',
		'from' => 'comments',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'edit',
		'help' => 'Shows comments in the RecentChanges special page.',
	],
	'wgCommentsSortDescending' => [
		'name' => 'Sort Comments by Descending',
		'from' => 'comments',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'edit',
		'help' => 'This sorts comments by descending date, with the new comment box and most recent comments at the top when enabled.',
	],
	'wgEnableScaryTranscluding' => [
		'name' => 'Enable Scary Transcluding',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'edit',
		'help' => 'Allow templates to be imported/transcluded from another wiki.',
	],
	'wmgVisualEditorEnableDefault' => [
		'name' => 'Make VisualEditor the default editor for all',
		'from' => 'visualeditor',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'This will make VisualEditor the default edit for all.',
	],
	'wgVisualEditorEnableWikitext' => [
		'name' => 'Enable VisualEditor Wikitext mode',
		'from' => 'visualeditor',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => null,
		'section' => 'edit',
		'help' => 'This option allow you to read Wikitext syntax on VisualEditor.',
	],
	'wgAllowSlowParserFunctions' => [
		'name' => 'Allow slow parser functions',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => null,
		'section' => 'edit',
		'help' => 'Parser functions are "magic words" that return a value or function, such as time, site details or page names.',
	],
	'wgPFEnableStringFunctions' => [
		'name' => 'Enable string function functionality',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => null,
		'section' => 'edit',
		'help' => 'This option adds support a couple of functions for basic string handling. Example: #pos function returns the position of a given search term within the string. You can learn more in Mediawiki\'s documentation page https://www.mediawiki.org/wiki/Module:String.',
	],
	'wmgAllowEntityImport' => [
		'name' => 'Allow Entity Import (Wikibase)',
		'restricted' => false,
		'from' => 'wikibaserepository',
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'edit',
		'help' => 'Allow importing entities via Special:Import and importDump.php.',
	],
	'wmgEnableEntitySearchUI' => [
		'name' => 'Enable Entity Search UI (Wikibase)',
		'restricted' => false,
		'from' => 'wikibaserepository',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'To determine if entity search UI should be enabled or not.',
	],
	'wgAllowDisplayTitle' => [
		'name' => 'Allow Display Title',
		'restricted' => false,
		'from' => 'mediawiki',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'Allows use of {{DISPLAYTITLE}} magic word.',
	],
	'wgRestrictDisplayTitle' => [
		'name' => 'Restrict Display Title',
		'restricted' => false,
		'from' => 'mediawiki',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'Restrict {{DISPLAYTITLE}} to titles that normalize to the same canonical database key. Wikis with NoTitle extension installed have this config unset.',
	],
	'wgCapitalLinks' => [
		'name' => 'Capital Links',
		'restricted' => false,
		'from' => 'mediawiki',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'Unset this to avoid forcing the first letter of links to capitals.',
	],
	'wgEnableCanonicalServerLink' => [
		'name' => 'Enable Canonical Server Link',
		'restricted' => false,
		'from' => 'mediawiki',
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'edit',
		'help' => 'Output a <link rel="canonical"> tag on every page indicating the canonical server which should be used, i.e. $wgServer or $wgCanonicalServer.',
	],
	'wgPageCreationLog' => [
		'name' => 'Page Creation Log',
		'restricted' => false,
		'from' => 'mediawiki',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'Whether to maintain a log of new page creations, which can be viewed at Special:Log/create.',
	],
	'wgMSCS_WarnNoCategories' => [
		'name' => 'MsCatSelect warn no categories',
		'restricted' => false,
		'from' => 'mscatselect',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'By default, if you try to save a page that has no categories assigned, MsCatSelect will ask for confirmation. If you wish to avoid this, unset this option.',
	],
	'wgCodeEditorEnableCore' => [
		'name' => 'CodeEditor Enable Core',
		'restricted' => false,
		'from' => 'codeeditor',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'To disable the editor on JavaScript and CSS pages in the MediaWiki, User and other core namespaces, unset this option.',
	],
	'wgScribuntoUseCodeEditor' => [
		'name' => 'Scribunto Use CodeEditor',
		'restricted' => false,
		'from' => 'codeeditor',
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'edit',
		'help' => 'Set this to use it when editing Module pages.',
	],

	// Links
	'wgExternalLinkTarget' => [
		'name' => 'External Link Target',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'list',
		'options' => [
			'Blank' => '_blank',
			'Default' => false,
		],
		'overridedefault' => false,
		'section' => 'links',
		'help' => 'Set a default target for external links.',
	],
	'wgRottenLinksCurlTimeout' => [
		'name' => 'RottenLinks Timeout Threshold',
		'restricted' => false,
		'from' => 'mediawiki',
		'type' => 'integer',
		'minint' => 10,
		'maxint' => 120,
		'overridedefault' => 30,
		'section' => 'links',
		'help' => 'Number of seconds before a RottenLinks request returns no response. Min: 10. Max: 120.'
	],

	// Localisation (E.G i18n/timezone etc)
	'wgLocaltimezone' => [
		'name' => 'Timezone',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'timezone',
		'overridedefault' => 'UTC',
		'section' => 'localisation',
		'help' => 'This will adapt your wikis time over clock to whatever timezone you choose for all users, however it can be changed through user\'s preferences.',
	],
	'wgULSAnonCanChangeLanguage' => [
		'name' => 'Allow anonymous users to change language',
		'from' => 'universallanguageselector',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'localisation',
		'help' => 'Enabling allowing anonymous users to control the language they view the wiki in.',
	],
	'wgPageLanguageUseDB' => [
		'name' => 'Enable per page language',
		'restricted' => false,
		'from' => 'mediawiki',
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'localisation',
		'help' => 'Allows to change the page language for MediaWiki pages.',
	],

	// Maps (E.G navigation)
	'wgKartographerWikivoyageMode' => [
		'name' => 'Kartographer Wikivoyage Mode',
		'restricted' => false,
		'from' => 'kartographer',
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'maps',
		'help' => 'Enables Wikivoyage mode.',
	],
	'wgKartographerUseMarkerStyle' => [
		'name' => 'Kartographer Use Marker Style',
		'restricted' => false,
		'from' => 'kartographer',
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'maps',
		'help' => 'Allows Kartographer to extract CSS style to be used by the link from the GeoJSON.',
	],

	// Media/File
	'wgEnableUploads' => [
		'name' => 'Enable File Uploads',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'media',
		'help' => 'Check or uncheck this option if you want to enable or disable the upload of files on your wiki.',
	],
	'wgMaxImageArea' => [
		'name' => 'Max Image Area',
		'from' => 'mediawiki',
		'restricted' => true,
		'type' => 'text',
		'overridedefault' => '1.25e7',
		'section' => 'media',
		'help' => 'Specify\'s the max pixels you can have in a image.',
	],
	'wgAllowCopyUploads' => [
		'name' => 'Enable File Uploads Through URL',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'By default Miraheze enables file upload only from a local media but with this option you can upload files remotely from other sites.',
	],
	'wgCopyUploadsFromSpecialUpload' => [
		'name' => 'Enable File Uploads Through URL on Special:Upload',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'This option adds a textbox on Special:Upload enabling you to upload files from any URL.',
	],
	'wgUseInstantCommons' => [
		'name' => 'Enable Wikimedia Commons Files',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'media',
		'help' => 'This option allows you to use the Wikimedia Commons file database on your wiki.',
	],
	'wgMirahezeCommons' => [
		'name' => 'Enable Miraheze Commons (linking to commonswiki.miraheze.org)',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'media',
		'help' => 'This option allows you to use the Miraheze Commons file database on your wiki.',
	],
	'wgShowArchiveThumbnails' => [
		'name' => 'Show Old Thumbnails On Description Page',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'media',
		'help' => 'Whether to show thumbnails for old images on the image\'s description page.',
	],
	'wgAllowExternalImages' => [
		'name' => 'Allow External Images',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'Determines whether or not MediaWiki will allow external images to be rendered inline with text',
	],
	'wgAllowImageTag' => [
		'name' => 'Allow Image Tag',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'Allow img tag to be used in wikitext.',
	],
	'wgShowArchiveThumbnails' => [
		'name' => 'Show Archive Thumbnails',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'media',
		'help' => 'Whether to show thumbnails for old images on the image description page.',
	],
	'wgSVGConverter' => [
		'name' => 'SVG Converter',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'list',
		'options' => [
			'Inkscape' => 'inkscape',
			'ImageMagick' => 'ImageMagick',
		],
		'overridedefault' => 'ImageMagick',
		'section' => 'media',
		'help' => 'This picks the converter to convert Scalable Vector Graphics (SVG) to PNG. You may want to choose inkscape if your SVG->PNG conversion results in a black image.',
	],
	'wgMediaViewerEnableByDefault' => [
		'name' => 'MediaViewer Enable By Default',
		'from' => 'multimediaviewer',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'This enables MediaViewer for everyone.',
	],
	'wgMSU_checkAutoCat' => [
		'name' => 'MsUpload check auto cat',
		'from' => 'msupload',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'If set, sets the checkbox for adding a category to a page by default.',
	],
	'wgMSU_confirmReplace' => [
		'name' => 'MsUpload confirm replace',
		'from' => 'msupload',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'If set, shows the "Replace file" checkbox.',
	],
	'wgMSU_showAutoCat' => [
		'name' => 'MsUpload show auto cat',
		'from' => 'msupload',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'media',
		'help' => 'If set, files uploaded while editing a category page will be added to that category.',
	],
	'wgMSU_useDragDrop' => [
		'name' => 'MsUpload use drag and drop',
		'from' => 'msupload',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'media',
		'help' => 'If set, the drag & drop area will be shown.',
	],

	// Notification
	'wgCookieWarningMoreUrl' => [
		'name' => 'CookieWarning More Url',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => 'https://meta.miraheze.org/wiki/Privacy_Policy#4._Cookies',
		'section' => 'notifications',
		'help' => 'Set the URL to your \'More Information\' page.',
	],
	'wgEchoCrossWikiNotifications' => [
		'name' => 'Echo Cross Wiki Notifications',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'notifications',
		'help' => 'Whether to enable the cross-wiki notifications feature.',
	],
	'wgEchoMentionStatusNotifications' => [
		'name' => 'Echo Mention Status Notifications',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'notifications',
		'help' => 'Enable mention success/failure notifications.',
	],
	'wmgSiteNoticeOptOut' => [
		'name' => 'Opt out of global Miraheze notices',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'notifications',
		'help' => 'Opts your wiki out of global Miraheze notices, only showing important notices.',
	],
	'wgModerationNotificationEnable' => [
		'name' => 'Moderation Notification Enable',
		'from' => 'moderation',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'notifications',
		'help' => 'If set, notification email will be sent to "Moderation Email" each time an edit is queued for moderation.',
	],
	'wgModerationNotificationNewOnly' => [
		'name' => 'Moderation Notification New Only',
		'from' => 'moderation',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'notifications',
		'help' => 'If set, only notify about new pages (but not about edits in existing pages).',
	],
	'wgDismissableSiteNoticeForAnons' => [
		'name' => 'Dismissable Site Notice For Anons',
		'from' => 'dismissablesitenotice',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'notifications',
		'help' => 'This allows to set whether or not it should be possible for anonymous visitors of the wiki to dismiss the sitenotice shown. ',
	],

	// Restricted (where settings that are restricted go)
	'wgServer' => [
		'name' => 'Custom Domain',
		'from' => 'mediawiki',
		'restricted' => true,
		'type' => 'text',
		'overridedefault' => null,
		'section' => 'restricted',
		'help' => 'By default your wiki is available at https://yourwiki.miraheze.org - a subdomain of Miraheze but you can request us to redirect your wiki to a domain you own. Right now is not yet possible to do it without assistance from our sysadmins, but you can learn more here https://meta.miraheze.org/wiki/Custom_domains',
	],
	'wgMobileUrlTemplate' => [
		'name' => 'Mobile URL',
		'from' => 'mediawiki',
		'restricted' => true,
		'type' => 'text',
		'overridedefault' => '',
		'section' => 'restricted',
		'help' => 'This sets your mobile URL. Defaults to [domain].',
	],
	'wgDefaultRobotPolicy' => [
		'name' => 'Default Robot Policy',
		'from' => 'mediawiki',
		'restricted' => true,
		'type' => 'text',
		'overridedefault' => 'index,follow',
		'section' => 'restricted',
		'help' => 'Allows specifying the default robot policy for all pages on the wiki.',
	],
	'wgModerationEmail' => [
		'name' => 'Moderation Email',
		'from' => 'moderation',
		'restricted' => true,
		'type' => 'text',
		// Must match wgPasswordSender from LocalSettings.php
		'overridedefault' => 'noreply@miraheze.org',
		'section' => 'restricted',
		'help' => 'Sets the email for notifications to go to.',
	],
	'wgAccountCreationThrottle' => [
		'name' => 'Account Creation Throttle',
		'from' => 'mediawiki',
		'restricted' => true,
		'type' => 'integer',
		'minint' => 0,
		'maxint' => 900000000,
		'overridedefault' => 5,
		'section' => 'restricted',
		'help' => 'Number of accounts each IP address may create, 0 to disable.',
	],
	'wgSVGMetadataCutoff' => [
		'name' => 'SVG Metadata Cutoff',
		'from' => 'mediawiki',
		'restricted' => true,
		'type' => 'integer',
		'minint' => 0,
		'maxint' => 90000000,
		'overridedefault' => 262144,
		'section' => 'restricted',
		'help' => 'Don\'t read SVG metadata beyond this point.',
	],
	// If necessary we can increase maxint.
	'wgMaxArticleSize' => [
		'name' => 'Max Article Size',
		'from' => 'mediawiki',
		'restricted' => true,
		'type' => 'integer',
		'minint' => 0,
		'maxint' => 10000,
		'overridedefault' => 2048,
		'section' => 'restricted',
		'help' => 'Maximum page size in kilobytes.',
	],
	// Default list must be kept insync with wgFileExtensions in LocalSettings.php
	'wgFileExtensions' => [
		'name' => 'File Extensions',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'list-multi',
		'options' => [
			'add' => 'add',
			'alist' => 'alist',
			'apk' => 'apk',
			'apng' => 'apng',
			'asv' => 'asv',
			'avi' => 'avi',
			'bat' => 'bat',
			'bib' => 'bib',
			'bmp' => 'bmp',
			'bst' => 'bst',
			'bz' => 'bz',
			'bz2' => 'bz2',
			'c' => 'c',
			'cap' => 'cap',
			'cls' => 'cls',
			'cpp' => 'cpp',
			'crt' => 'crt',
			'css' => 'css',
			'dae' => 'dae',
			'dat' => 'dat',
			'data' => 'data',
			'desktop' => 'desktop',
			'dia' => 'dia',
			'djvu' => 'djvu',
			'doc' => 'doc',
			'docx' => 'docx',
			'eot' => 'eot',
			'exe' => 'exe',
			'fig' => 'fig',
			'flac' => 'flac',
			'fpd' => 'fpd',
			'gif' => 'gif',
			'gp' => 'gp',
			'gz' => 'gz',
			'gz2' => 'gz2',
			'h' => 'h',
			'hpp' => 'hpp',
			'htm' => 'htm',
			'html' => 'html',
			'hxx' => 'hxx',
			'ico' => 'ico',
			'ipe' => 'ipe',
			'jpeg' => 'jpeg',
			'jpg' => 'jpg',
			'js' => 'js',
			'mat' => 'mat',
			'md' => 'md',
			'mid' => 'mid',
			'mov' => 'mov',
			'mp3' => 'mp3',
			'mp4' => 'mp4',
			'mus' => 'mus',
			'odg' => 'odg',
			'odp' => 'odp',
			'ods' => 'ods',
			'odt' => 'odt',
			'oga' => 'oga',
			'ogg' => 'ogg',
			'ogv' => 'ogv',
			'ogx' => 'ogx',
			'opus' => 'opus',
			'otf' => 'otf',
			'otg' => 'otg',
			'pcap' => 'pcap',
			'pdf' => 'pdf',
			'perf' => 'perf',
			'php' => 'php',
			'plot' => 'plot',
			'png' => 'png',
			'pps' => 'pps',
			'ppt' => 'ppt',
			'pptx' => 'pptx',
			'pub' => 'pub',
			'py' => 'py',
			'rar' => 'rar',
			'rtf' => 'rtf',
			'sh' => 'sh',
			'spl' => 'spl',
			'sty' => 'sty',
			'svg' => 'svg',
			'swf' => 'swf',
			'tar' => 'tar',
			'tar.gz' => 'tar.gz',
			'tex' => 'tex',
			'tif' => 'tif',
			'tiff' => 'tiff',
			'ttf' => 'ttf',
			'txt' => 'txt',
			'val' => 'val',
			'vit' => 'vit',
			'vsd' => 'vsd',
			'vst' => 'vst',
			'wav' => 'wav',
			'webm' => 'webm',
			'webp' => 'webp',
			'wma' => 'wma',
			'wmv' => 'wmv',
			'woff' => 'woff',
			'woff2' => 'woff2',
			'xcf' => 'xcf',
			'xls' => 'xls',
			'xlsx' => 'xlsx',
			'xlxs' => 'xlxs',
			'xml' => 'xml',
			'xps' => 'xps',
			'zip' => 'zip',
		],
		'overridedefault' => [
			'djvu',
			'gif',
			'ico',
			'jpg',
			'jpeg',
			'ogg',
			'pdf',
			'png',
			'svg',
		],
		'section' => 'restricted',
		'help' => 'This is the list of preferred extensions for uploading files. Uploading files with extensions not selected in this list will trigger a warning.',
	],

	// Styling (E.G skins/logos etc)
	'wgDefaultSkin' => [
		'name' => 'Default Skin',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'list',
		'options' => [
			'CologneBlue' => 'cologneblue',
			'Modern' => 'modern',
			'MonoBook' => 'monobook',
			'Timeless' => 'timeless',
			'Vector' => 'vector',
		],
		'overridedefault' => 'vector',
		'section' => 'styling',
		'help' => 'This change the visual interface to the selected skin for all users, however it can be changed through user\'s preferences.',
	],
	'wgLogo' => [
		'name' => 'Logo',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => null,
		'section' => 'styling',
		'help' => 'This will replace Miraheze\'s default logo. See https://meta.miraheze.org/wiki/ManageWiki#How_do_I_change_my_logo.2Ffavicon.3F for how you can change it.',
	],
	'wgFavicon' => [
		'name' => 'Favicon',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => null,
		'section' => 'styling',
		'help' => 'A favicon is a shortcut image that is displayed on your visitor\'s browser address bar and in the bookmarks page. Most often it is a smaller version of the logo. See https://meta.miraheze.org/wiki/ManageWiki#How_do_I_change_my_logo.2Ffavicon.3F for how you can add one.',
	],
	'wgAppleTouchIcon' => [
		'name' => 'Apple Touch Icon',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => null,
		'section' => 'styling',
		'help' => 'Favicon for Apple mobile devices. See https://meta.miraheze.org/wiki/ManageWiki#How_do_I_change_my_logo.2Ffavicon.3F on how you can add one.',
	],
	'wmgMFAutodetectMobileView' => [
		'name' => 'MobileFrontend Autodetect Mobile View',
		'from' => 'mediawiki',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'styling',
		'help' => 'f this is not set, then no device detection will be occur.',
	],
	'wgMetrolookDownArrow' => [
		'name' => 'Metrolook Down Arrow',
		'from' => 'metrolook',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'styling',
		'help' => 'This configuration variable has to be true for the tiles to be generated.',
	],
	'wgMetrolookUploadButton' => [
		'name' => 'Metrolook Upload Button',
		'from' => 'metrolook',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'styling',
		'help' => 'When enabled, an "Upload file" link is generated in the top menu bar, before the content-specific action links ("History", "Discussion", etc.)',
	],
	'wgMetrolookBartile' => [
		'name' => 'Metrolook Bartile',
		'from' => 'metrolook',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'styling',
		'help' => 'When "Metrolook Down Arrow" is enabled and "Metrolook Bartile" is enabled, the tile menu will be generated from [[MediaWiki:Metrolook-tiles]]. If "Metrolook Down Arrow" is not set and "Metrolook Bartile" is not set, then the tile menu will be generated from [[MediaWiki:Metrolook-tiles-second]].',
	],
	'wgMetrolookMobile' => [
		'name' => 'Metrolook Mobile',
		'from' => 'metrolook',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'styling',
		'help' => 'When enabled, makes the UI responsive on mobiles.',
	],
	'wgMetrolookUseIconWatch' => [
		'name' => 'Metrolook Use Icon Watch',
		'from' => 'metrolook',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'styling',
		'help' => 'When enabled, it uses an icon for the watch/unwatch button.',
	],
	'wgMetrolookLine' => [
		'name' => 'Metrolook Line',
		'from' => 'metrolook',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => true,
		'section' => 'styling',
		'help' => 'If not set, then the img.line element (white divider line in the top menu, between the site name and the down arrow/"Upload file" link) won\'t be generated.',
	],
	'wgRelatedArticlesFooterWhitelistedSkins' => [
		'name' => 'RelatedArticles Footer Whitelisted Skins',
		'from' => 'relatedarticles',
		'restricted' => false,
		'type' => 'list-multi',
		'options' => [
			'Metrolook' => 'metrolook',
			'Minerva' => 'minerva',
			'Timeless' => 'timeless',
			'Vector' => 'vector'
		],
		'overridedefault' => [
			'minerva',
			'timeless',
			'vector'
		],
		'section' => 'styling',
		'help' => 'List of skin names (e.g. "minerva", "vector") where related articles will be shown in the footer.',
	],
	'wgMultiBoilerplateDiplaySpecialPage' => [
		'name' => 'MultiBoilerplate Diplay SpecialPage',
		'from' => 'multiboilerplate',
		'restricted' => false,
		'type' => 'check',
		'overridedefault' => false,
		'section' => 'styling',
		'help' => 'if set, will add to the wiki a page named Special:Boilerplates that shows the currently configured boilerplates.',
	],
];
