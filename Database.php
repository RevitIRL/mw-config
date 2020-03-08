<?php

$wgLBFactoryConf = [
	'class' => 'LBFactoryMulti',
	'sectionsByDB' => [
		// large wikis
		'anterrawiki' => 'c3',
		'jayuvandalwiki' => 'c3',
		'ciptamediawiki' => 'c3',
		'bpwiki' => 'c3',
		'terribletvshowswiki' => 'c3',
		'osaindexwiki' => 'c3',
		'newusopediawiki' => 'c3',
		'mc2wiki' => 'c3',
		'jawp2chwiki' => 'c3',
		'sumroletaericwiki' => 'c3',
		'sidemwiki' => 'c3',
		'ranchstorywiki' => 'c3',
		'maiasongcontestwiki' => 'c3',
		'awesomegameswiki' => 'c3',
		'animebathswiki' => 'c3',
		'americangirldollswiki' => 'c3',
		'schattenvonskeloswiki' => 'c3',
		's23wiki' => 'c3',
		'libertygamewiki' => 'c3',
		'healthyfandomsandandhatedomwiki' => 'c3',
		'gyaanipediawiki' => 'c3',
		'bigforestwiki' => 'c3',
		'2b2twiki' => 'c3',
		'simswiki' => 'c3',
		'frikipediawiki' => 'c3',
		'uncyclomirrorwiki' => 'c3',
		'baobabarchiveswiki' => 'c3',
		'zhdelwiki' => 'c3',
		'allthetropeswiki' => 'c3',
		'nonciclopediawiki' => 'c3',
		'toxicfandomsandhatedomswiki' => 'c3',
		'nonsensopediawiki' => 'c3',

		// db7
		'altversewiki' => 'c4',
		'anotheredenwiki' => 'c4',
		'concordancewiki' => 'c4',
		'dreamversewiki' => 'c4',
		'hispanowiki' => 'c4',
		'nbdbwiki' => 'c4',
		'nonbinarywiki' => 'c4',
		'onepiecewiki' => 'c4',
		'onepiecebountyrushwiki' => 'c4',
		'openhatchwiki' => 'c4',
		'privadowiki' => 'c4',
		'proxybotwiki' => 'c4',
		'rotompediawiki' => 'c4',
		'staffwiki' => 'c4',
		'testwiki' => 'c4',
		'ucroniaswiki' => 'c4',
		'buswiki' => 'c4',
		'pathofexilewiki' => 'c4',
		'tmewiki' => 'c4',
		'vsrecommendedgameswiki' => 'c4',
		'animatedfeetwiki' => 'c4',
		'crappygameswiki' => 'c4',
		'anglishwiki' => 'c4',
		'trollpastawiki' => 'c4',
		'poserdazfreebieswiki' => 'c4',
		'nltramswiki' => 'c4',
		'beidipediawiki' => 'c4',
		'nilamwikiubzx217c40wiki' => 'c4',
		'bluepageswiki' => 'c4',
		'awfulmovieswiki' => 'c4',
		'uncyclopediawiki' => 'c4',
		'tolololpediawiki' => 'c4',
		'platprojectwiki' => 'c4',
		'trollpastawikiwiki' => 'c4',
		'ansaikuropediawiki' => 'c4',
		'pluspiwiki' => 'c4',
		'csydeswiki' => 'c4',
		'atrociousyoutuberswiki' => 'c4',
 	],
	'sectionLoads' => [
		'DEFAULT' => [
			'db4' => 1,
		],
		'c1' => [
			'db4' => 1,
		],
		'c3' => [
 			'db6' => 1,
 		],
		'c4' => [
 			'db7' => 1,
 		],
	],
	'serverTemplate' => [
		'dbname' => $wgDBname,
		'user' => $wgDBuser,
		'password' => $wgDBpassword,
		'type' => 'mysql',
		'flags' => DBO_SSL | DBO_COMPRESS,
		'sslCertPath' => '/etc/ssl/certs/wildcard.miraheze.org.crt',
		'sslKeyPath' => '/etc/ssl/private/wildcard.miraheze.org.key',
	],
	'hostsByName' => [
		'db4' => 'db4.miraheze.org',
		'db6' => 'db6.miraheze.org',
		'db7' => 'db7.miraheze.org',
	],
	'externalLoads' => [
		'echo' => [
			'db4' => 1, // should echo c1
		],
	],
	'readOnlyBySection' => [
		'DEFAULT' => 'Maintenance ongoing on the database server.',
		'c1' => 'Maintenance ongoing on the database server.',
		'c3' => 'Maintenance ongoing on the database server.',
		'c4' => 'Maintenance ongoing on the database server.',
	],
];
