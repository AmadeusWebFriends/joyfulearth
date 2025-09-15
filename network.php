<?php
//DEFINE('SITENETWORK', 'joyism');

function network_before_render() {
	runFeature('engage'); //needed for floating button
	variables([
		'mediakit' => '?content=ffe&paler=fffafa&node=B9D3E4&heading=F3E9D7&footer=aaa&dont-round-logo=1'
			. '&cursive=Yeseva+One&menu=Eagle+Lake&menu-size=1.1rem',
		'footer-variation' => 'no-widget', //TODO: change when sections / social / SITENETWORK is added
		'rawReplaces' => [
			'JoyfulEarth' => '<span class="cursive fa-2xl">[JE](%urlOf-main%)</span>',
			'Yaseva' => '<span class="cursive fa-2xl">[Yaseva](%urlOf-yaseva%)</span>',
			'Joyism' => '<span class="cursive fa-2xl">[The Joyism Movement](%urlOf-joyism%)</span>',
			'GoGreen' => '<span class="cursive fa-2xl">[GO Green](%urlOf-%)</span>',
			'AYUSH+' => '<span class="cursive fa-2xl">[AYUSH+](%urlOf-%)</span>',
			'Team Joyism' => '<span class="cursive">Team Joyism,<br />[Joyist Nation Org](%urlOf-joyism%jno/),<br />Chennai</span>',
			//'' => '<span class="cursive fa-2xl">[](%urlOf-%)</span>',
		],
		'below-countdown' => 'The **life\'s work** of %Yaseva%, &mdash; %Joyism% is set to launch on [Oct 2nd 2025](%url%press/BTNSITE).',
		'countdown-params' => 'data-year="2025" data-month="10" data-day="2"  data-hour="12" data-minute="00" data-format="dHMS"',
	]);
}

function after_footer_assets() {
	echo getThemeSnippet('floating-button');
}
