<h1>Dokumentace k VPS</h1>
<h2>Agar.io server</h2>
<h3>Co d�lat v p��pad� vypnut�ho serveru?</h3>
<ol>
<li>P�ihl�s�t se jako root (pokud ji� nejste p�ihl�eni)</li>
<li>Prove�te p��kaz: <b>cd /home/agario</b></li>
<li>D�t p��kaz: <b>screen -mdS agario nodejs Ogar</b></li>
<li>Pro vypnut� termin�lu a neshozen� serveru z�rove�, pou�ij kl�vesovou zkratku: <b>ctrl + a +d</b></li>
<li>Odkaz na server: <a href="http://agar.io/?ip=46.28.109.68:12345" target="_blank">http://agar.io/?ip=46.28.109.68:12345</a></li>
</ol>
<h3>Jak nainstalovat Agar.io server?</h3>
<ol>
<li>Smazat v�echny slo�ky a u�ivatale v adres��i /home/ pokud existuj� s n�zvy jako agario, ogar, agar, apod.</li>
<li>Vytvo�it u�ivatale agario p��kazem: <b>adduser agario</b> a vyplnit �daje k ��tu (heslo pokud mo�no vyplnit: mcncc.com nebo aha)</li>
<li>Prove�te p��kaz: <b>cd /home/agario</b></li>
<li>D�t p��kaz: <b>git clone git://github.com/OgarProject/Ogar.git Ogar</b></li>
<li>D�le pak: <b>npm install ws</b></li>
<li>Spus�e p��kaz: nano gameserver.ini a zkontrolujte, zda serverPort = 12345 pokud ne, p�epi�te</li>
<li>Takt� zkontrolujte, zda serverBots = 50</li>
<li>D�le prov�st p��kaz: <b>node Ogar</b></li>
<li>Server by m�l fungovat, vypn�te ho pomoc� ctrl + c a postupujte jako v <b>Co d�lat v p��pad� vypnut�ho serveru?</b></li> 
</ol>
