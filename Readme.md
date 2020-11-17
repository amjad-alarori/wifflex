#wfflix
###inlog gegevens:
#####Rule Admin

Admin:<br>
Username: Admin<br>
Password: adminpass<br>

Rudy:<br>
Username: Rudy<br>
Password: 123<br>

Stephan:<br>
Username: Stephan<br>
Password: 123<br>

Mathijs:<br>
Username: Mathijs<br>
Password: 123<br>

Fake:<br>
Username: Fake<br>
Password: 123<br><br>

#####Rule gast
Dave:<br>
Username: Dave14<br>
Password: davepass@123<br>

****
###Deploy stappen:

Na het overzetten van bestanden Moet als eerste stap in de hoofd directory de composer ingesteld worden. dat doe je door de command 'composer init'.<br />
Na deze stap verschijn een 'composer.json'. daar in moet autoload met daar in classmap als een array met waarde "./" toegevoegd worden, zodat composer weet dat alle mappen van project moet worden gezocht om class-en te requiren.<br />
Nu kan met de command 'composer install' het stap van composer afronden.<br /><br />

De volgende stap hierna is dat de in mysql gedeelte eerst naar de lege WFFlix database gaan en de teksten uit de bestand models\wfflixdomp.sql kopieren en plakken, zodat de mysql de tabellen in de database maakt.<br /><br />

De volgende stap is dat de databasenaam en inloggegevens van mysql in de PDO veranderen. dat staat in bestand core\BaseModel.php

 
