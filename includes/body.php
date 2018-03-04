<body onload="odliczanie();">
	<div id="container">
		<div id="top"></div>
        <div class="rectangle">
            <div id="logo"><img src="logo_pzd.png" alt="logo PZD" width="206" height="60"><b>&nbsp; ROD "Oaza" w Gdańsku</b></div>
            <div id="zegar">20:00:00</div>
            <div style="clear: both;"></div>
        </div>
		<div class="nav">
			<ol>
				<li><a href="index.php">Strona główna</a>
                    <ul>
						<li><a href="zarzad.php">Zarząd</a></li>
						<li><a href="dokumenty.php">Dokumenty</a></li>
					</ul>
                </li>
				<li><a>Aktualności</a>
					<ul>
						<li><a href="komunikaty.php">Komunikaty</a></li>
						<li><a href="walne.php">Walne zebranie</a></li>
                        <li><a href="oplaty.php">Opłaty</a></li>
					</ul>
				</li>
                <li><a href="http://pzd.pl" target="_blank">PZD</a></li>
				<li><a>Poradniki</a>
					<ul>
						<li><a href="https://www.rytmnatury.pl/index.php/kalendarz-biodynamiczny" target="_blank">Kalendarz biodynamiczny</a></li>
					</ul>
				</li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="ogloszenia.php">Ogłoszenia</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
			</ol>
		</div>
		<div id="content_left">
			<div id="tp-widget-default" data-widget="default/polska/pomorskie/gdansk">
				<div id="tp-widget-default-beam">
					<a id="tp-widget-default-flink" href="http://www.twojapogoda.pl/polska/pomorskie/gdansk" target="_blank" title="Gdańsk - prognoza pogody" data-ga="?utm_source=3days&utm_medium=forecast&utm_campaign=widget-free">Pogoda Gdańsk</a><span> z serwisu</span>
				</div>
				<script type="text/javascript">
					(function(d, t, i) {
						if (d.getElementById(i)) return;
						var f = d.getElementsByTagName(t)[0], js = d.createElement(t);
						js.id = i; js.src = 'http://www.twojapogoda.pl/widget/main.js';
						f.parentNode.appendChild(js);
					}(document, 'script', 'tp-widget'));
				</script>
			</div>
		</div>