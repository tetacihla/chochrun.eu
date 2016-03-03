<h1>Dokumentace k VPS</h1>
<h2>Agar.io server</h2>
<h3>Co dìlat v pøípadì vypnutého serveru?</h3>
<ol>
<li>Pøihlásít se jako root (pokud ji nejste pøihlášeni)</li>
<li>Proveïte pøíkaz: <b>cd /home/agario</b></li>
<li>Dát pøíkaz: <b>screen -mdS agario nodejs Ogar</b></li>
<li>Pro vypnutí terminálu a neshození serveru zároveò, pouij klávesovou zkratku: <b>ctrl + a +d</b></li>
<li>Odkaz na server: <a href="http://agar.io/?ip=46.28.109.68:12345" target="_blank">http://agar.io/?ip=46.28.109.68:12345</a></li>
</ol>
<h3>Jak nainstalovat Agar.io server?</h3>
<ol>
<li>Smazat všechny sloky a uivatale v adresáøi /home/ pokud existují s názvy jako agario, ogar, agar, apod.</li>
<li>Vytvoøit uivatale agario pøíkazem: <b>adduser agario</b> a vyplnit údaje k úètu (heslo pokud mono vyplnit: mcncc.com nebo aha)</li>
<li>Proveïte pøíkaz: <b>cd /home/agario</b></li>
<li>Dát pøíkaz: <b>git clone git://github.com/OgarProject/Ogar.git Ogar</b></li>
<li>Dále pak: <b>npm install ws</b></li>
<li>Spuse pøíkaz: nano gameserver.ini a zkontrolujte, zda serverPort = 12345 pokud ne, pøepište</li>
<li>Takté zkontrolujte, zda serverBots = 50</li>
<li>Dále provést pøíkaz: <b>node Ogar</b></li>
<li>Server by mìl fungovat, vypnìte ho pomocí ctrl + c a postupujte jako v <b>Co dìlat v pøípadì vypnutého serveru?</b></li> 
</ol>
