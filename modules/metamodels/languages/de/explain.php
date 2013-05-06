<?php
/**
 * Translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 *
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/metamodels/language/de/
 *
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 *
 * last-updated: 2013-05-06T10:11:20+02:00
 */

$GLOBALS['TL_LANG']['XPL']['customsql']['0']['0'] = 'Zusammenfassung';
$GLOBALS['TL_LANG']['XPL']['customsql']['0']['1'] = 'Geben Sie eine SQL-Abfrage ein die ausgeführt werden soll.<br />⏎
»»Diese Abfrage muss zwingend mindestens eine Spalte mit dem Namen "id" zurückliefern.⏎
»»
';
$GLOBALS['TL_LANG']['XPL']['customsql']['1']['0'] = 'Beispiel 1<br />Einfache Abfrage';
$GLOBALS['TL_LANG']['XPL']['customsql']['1']['1'] = '<pre>SELECT id FROM mm_mymetamodel WHERE page_id=1</pre>
		Dieses selektiert alle IDs von der Tabelle <em>mm_mymetamodel</em> wo der Wert <em>page_id=1</em> ist.
		';
$GLOBALS['TL_LANG']['XPL']['customsql']['2']['0'] = 'Beispiel 2<br />Tabellennamen einsetzen';
$GLOBALS['TL_LANG']['XPL']['customsql']['2']['1'] = '<pre>SELECT id FROM {{table}} WHERE page_id=1</pre>
		Nahezu gleich wie in Beispiel 1, außer dass der Tabellenname des aktuellen MetaModels  (also: das <em>mm_mymetamodel</em> von oben) in die Abfrage eingefügt wird.		';
$GLOBALS['TL_LANG']['XPL']['customsql']['3']['0'] = 'Inserttags';
$GLOBALS['TL_LANG']['XPL']['customsql']['3']['1'] = 'Insert-Tags werden unterstützt. Bitte beachten, dass nicht alle Tags für alle Ausgaben verfügbar sein können. Falls eine Filtereinstellung wie zum Beispiel  <em>{{page::id}}</em> benutzt wird, dann ist der Insert-Tag nur für einen Seitenaufruf im Frontend und nicht für einen RRS-Feed verfügbar.';
$GLOBALS['TL_LANG']['XPL']['customsql']['4']['0'] = 'Sichere Inserttags';
$GLOBALS['TL_LANG']['XPL']['customsql']['6']['0'] = 'Beispiel 3<br />
Komplexe Filer, Parameter und Quellen nutzen';
