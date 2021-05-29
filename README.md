# Blank-Theme

Eine Front-End Version des Blank-Theme findest du auf:

**https://blank.5pectre.com**

Zur Verbesserung unseres Workflow haben wir hier ein neues Blank-Theme. Dieses soll uns die zusammenarbeit über Git stark vereinfachen. Zu beginn sollte jeder Projektteilnehmer die nötigen dependencies installiert haben, um erfolgreich in einem Projekt aufbauend auf dem Blank-Theme teilnehmen zu können. Benötigt werden:

- Git
- Local
- Ruby/Sass

Der Projektleiter erstellt eine neue Repo mit dem Projekt und kopiert die Inhalte des Blank-Theme in dieses. Im selben Zug sollten die basics.sass und die variables.sass an die Projektvorgaben angepasst werden. Dies geschieht auch durch den Projektleiter.

Nach Freigabe kann jeder Teilnehmer sich eine lokale Version des Projekts in sein “themes”-Verzeichnis für das Projekt klonen und mit der Umsetzung starten.

Das Projekt besitzt zusätzlich noch eine globale Repo auf unserem Server. Diese ist über die folgende Domain erreichbar und immer auf dem Stand des Main-Branch der Projekt-Repository

“https://Projektname.5pectre.com”


##Das Theme

Auf der lokalen Wordpress-Instanz wird das 5pectre-Blank installiert. Auf dessen Grundlage finden alle Arbeiten statt.

Die Ordnerstruktur ist nach Dateityp und Dateizweck gegliedert. Die Dateien im Hauptverzeichnis sind die Front-End-Ausgabemedien und werden durch die im “sections”-Ordner befindlichen Bereich generiert. Jeder dort befindliche Bereich besitzt eine eigene .sass-Datei im “sass”-Ordner. Diese bildet jeweils den Style des Bereichs.

Die style.css wird dynamisch durch einen Preprozessor durch die style.sass generiert, sodass diese nicht programmiert werden muss.

Die “basics.sass”, “style.sass”, “variables.sass” und "breakpoints.sass” enthalten vordefinierte Strukturen, die nur unter Absprache zu ändern sind.

Es werden keine seiten spezifischen Styles in die style.sass eingefügt. Diese dient ausschließlich für den Import der Bereichsspezifischen Styles und externen Libarys wie etwas Fonts.

Bereichspezifische CSS regeln werden immer durch separate .sass-Dateien im “sass”-Ordner definiert und werden als “Bereichs-ID”.sass bezeichnet. Diese werden über die style.sass importiert.

Das Favicon und die Screenshot.png werden von uns zur verfügung gestellt und sind vom Entwickler einzubinden.



##Wordpress

###2.1. Navigation
Die Navigation ist von Wordpress zu übernehmen. Es werden im Grunde 3 Navigationsmenüs verwendet (Extra-Nav, Main-Nav, und Legal-Nav). Weitere Navigationen sind nicht händisch zu programmieren, sondern werden immer über die functions.php erstellt. Ausnahme hierfür sind menüs, die als Onpage-Filter dienen. Diese können mit folgenden Snippets auf der Seite abgerufen werden:

Main-Nav
**<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>**

Legal-Nav (AGB, Datenschutz, Impressum und solche Sachen)
**<?php wp_nav_menu(array( 'theme_location' => 'legal' )); ?>**

Extra-Nav
**<?php wp_nav_menu(array( 'theme_location' => 'extra' )); ?>**

Weitere Menüs werden unter Rücksprache in der functions.php erstellt.

###2.2 Custom Post Types
Grundlegend werden CPT’s für Blogbeiträge und die Testimonials vor geliefert. Die indexierung weitere Custom Post Types sollte vorher mit uns abgesprochen werden.


###2.3. Advanced Custom Fields
Alle Inhalte, sind derart einzubinden, dass diese im Wordpress Backend auf der entsprechende Seite austauschbar sind. Dazu gehören:

- Textinhalte
- Bilder
- Icons und SVG-Grafiken

Der Webseitenbetreiber soll am Ende in der Lage sein, ohne Programmieraufwand Inhalte leicht austauschen zu können.

Hierzu unter dem Dashboard auf Eigene Felder Navigieren und dort für jeden Bereich mit eigenem Template im “sections”-Ordner eine Feldgruppe erstellen und diese nach der Bereichs-ID benennen. Grundsätzlich sollte jeder Bereich eine eigene Feldgruppe besitzen. Anschließend fügen wir unten Konditionen für die Ausgabe der Felder hinzu.

Für die Startseite geben wir folgende Regeln an:
  **Für ‘Seitentyp’ ‘ist gleich’ ‘Startseite’**

Für Seiten mit spezifischen Templates:
  **Für ‘Seitentemplate’ ‘ist gleich’ ‘Template-name’**

Die “und” und “oder” Operatoren ermöglichen uns die wiederbenutzung von Bereich und Feldgruppen. Wenn ein Bereich auf verschiedenen Seiten vorkommt, muss dies auch in den ACF berücksichtigt werden.

Nun Können wir individuelle Felder mit den entsprechenden Regeln festlegen. Werden im entsprechenden Template mit folgendem PHP-Snippet eingefügt :

  **<?php the_field(‘ “Feldname” ’); ?>**

###2.4 Sections
Wie schon gesagt, wird jeder Bereich in einer individuellesn Datei programmiert. Dies bietet uns bessere Möglichkeiten der Zusammenarbeit und kurze Reaktionszeiten für die Behebung von Bugs.

Jede Section wird mit “Bereichs-ID”.php betietelt und ist Inhalt einer ACF-Gruppe. Somit hat jeder Bereich eine ähnliche Struktur, die Wie folgt aussieht:

  **<?php if( have_rows('section-ID') ): ?>**
    **<?php while( have_rows('section-ID') ): the_row(); ?>**

	   // Dein Code

    **<?php endwhile; ?>**
  **<?php endif; ?>**

Innerhalb der Gruppe ändert sich der Hook von “field” zu “sub_field”. Folglich müssen ACFs über

  **<?php the_sub_field(‘ “Feldname” ’); ?>**

abgerufen werden. Um die Bereich abzurufen, müssen die Zieldateien des Hooks im Code in der darzustellenden Reihenfolge angegeben werden. Die Geschieht über den folgenden Zielcode:

  **<?php**
  **include ‘sections/section-ID.php’;**
  .
  .
  .
  **?>**

Dieser Hook kann beliebig häufig wiederholt werden.


###2.5 Page Templates
Alle Seiten, die ein besonderes Layout erfordern, erhalten ein eigenes Page-Template. Hierzu im Theme Verzeichnis eine neue Datei “Template-Name”.php anlegen. Zusätlich im CSS-Ordner eine datei “Template-Name”.css erstellen. Zusätzlich muss das Template benannt werden. Der Name ist im Header-Tag hinterlegt nach folgendem Muster:

  **<?php /* Template-Name: “Template-Name” */ get_header(); ?>**

Abschließend muss das Template mit der entsprechende Seite zugewiesen Werden. Hierfür im Dashboard zu Seiten > “deine Seite” navigieren und in der rechten Sidebar unter “Seitenattribute” das eben erstellte Template wählen.

###2.6 Startseite
Die Startseite wird als front-page.php ausgegeben. Um die Startseite auch als Startseite zu indexieren, muss im Dashboard unter Einstellungen > Lesen “eine statische Startseite” ausgewählt werden. Dort können dann, sofern vorhanden, die Beitragsseite und die Startseite festgelegt werden.

###2.7 Header
Die header.php im blank-Theme besitzt bereits alle relevanten Tags und Attribute. Sollten Skripte von Drittanbietern eingebunden werden ist dies natürlich unter Rücksprache zu tun. Neben den standardmäßig verbauten Headerskripten wird zusätzlich das Navigationsmenü in der header.php hinterlegt und der Body-Tag eingeleitet.
Aktuell befindet sich eine rudimentäre Navigation im Blank-Theme. Diese muss durch das im Design unter “Navigation” angegebene Menü ersetzt werden.

###2.8 Footer
Der footer.php wird nach Designvorgaben erstellt. Zwingend einzubinden sind das Legal-Menu mit Anschrift und Kontaktdaten des Unternehmens. Der Copyright-Disclaymer und die Credentials sind bereits in der footer.php verbaut und können nach Vorgabe im Design umgestaltet werden

###2.9 Standardtemplates
Neben besonderer Templates muss noch ein Standard Template für neue Seiten erstellt werden. Dieses WIrd nach Designvorgaben umgesetzt und muss jeweils das Title-Snippet:

  **<?php the_title(); ?>**

und eine Schleife zur Darstellung der im Backend hinterlegten Inhalte vorhanden sein. Diese Schleife hat die Form:

  **<?php if (have_posts()): while (have_posts()) : the_post(); ?>**

    <!-- Start of Content -->
    **<span id="post-<?php the_ID(); ?>" <?php post_class(); ?>>**
      <!-- Wordpress Content-Hook -->
      **<?php the_content(); ?>**
      <!-- Comment Meta -->
      **<?php comments_template( '', true ); // Remove if you don't want comments ?>**
      <!-- Edit this Post Link -->
      **<?php edit_post_link(); ?>**

    **</span>**
    <!-- /End of Content -->
  **<?php endwhile; ?>**

  **<?php else: ?>**
    <!-- Start of Nothing to Display -->
    **<span>**
      **<h2><?php _e( 'Sorry, nothing to display.', 'Spectreblank' ); ?></h2>**
    **</span>**
    <!-- End of Nothing to Display -->
  **<?php endif; ?>**

und ist unter “sections/content.php” zu finden. Die Schleife kann beliebig abgewandelt werden, sodass das Anzeigeformat den Designvorgaben gleicht.

###2.10 404-Seite
Die 404-Seite wird nach Designvorgaben umgesetzt. Sollte im Design keine 404-Seite vorgegeben sein, so ist die nach belieben zu gestalten. Hierbei bleiben aber Grundlegende Design-Regeln in Kraft. Zwingend vorhanden müssen sein:

Ein Redirect-Link zurück zur Startseite
Die Navigation und somit die header.php
Der Footer mit den rechtlich bindenden Inhalten für den Verbraucher
Eine 404-Notice

###2.11 Custom-Post-Types

Die 5pectre-Blank hat einen vorgefertigten Custom-Post-Type der in der functions.php des Themes umbenannt oder kopiert und dupliziert werden kann.

Grundsätzlich werden Inhaltsblöcke oder Elemente, die für den Nutzer später reproduzierbar sein sollen als “CPT” angelegt werden. Alternativ bietet sich hier auch der Gebrauch der ACF an. Was genau du davon wählst bleibt dir überlassen. Dennoch gilt die Faustregel:

“So einfach für den User wie nur irgend möglich!”

## 3 Programmiervorgaben

Jeder Bereich besteht aus einer <section> und einem <div class=”wrapper”>.
Grundsätzlich sollte jede Section eine ID erhalten und die Wrapper in der .css Datei für die gesamte Seite vordefiniert werden. Es ergibt sich somit eine Struktur wie folgt…

  **<section id=”beispiel-bereich”>**
    **<div class=”wrapper”>**
    .
    .
    .
    **</div>**
  **</section>**

Sollte dir auffallen, dass weitere CSS-Elemte nützlich sein können, teile uns dies bitte kurz mit. Wir möchten dir und deinen Kollegen, die Erfahrung so angenehm wie möglich gestalten und arbeiten ständig daran, dieses Erlebnis zu verbessern.

###Javascript
Für die Umsetzung einzelner Funktionen in Javascript haben wir drei vorgefertigte dateien, die über die functions.php indexiert werden. Dabei wird die “scripts.js” im header eingebunden, während die “animations.js” und die “footerScripts.js” im footer eingebunden werden.

Funktionen sollten grundsätzlich in der “footerScripts.js” verfasst werden. Die einzige ausnahme sind Animationen, die in der “animations.js” definiert werden und DOM relevante Inhalte (Tracking), die in der “scripts.js” einzufügen sind.

Neben den eigenen Scripten indexieren wir auch externe JavaScript-Libaries um euch das Leben etwas leichter zu machen. Hier findest du eine Auflistung dieser:

jQuery (kennt ihr...)
Fontawesome (ermöglicht das Einfügen von Icons als Font)
Anime.js (Framework für Animationen)
