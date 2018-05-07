# IPv6-ready

Können Sie IPv6? Diese Frage lässt sich mit Hilfe von [IPv6 ready?](https://www.ipv6ready.de/) beantworten.
Die Seite bietet auch Logos an, die in die eigene Webseite eingebettet werden können.
Im Zuge der Datenschutz-Grundverordnung (DSGVO) fragt sich nun mancher Website Betreiber, ob er die Logos überhaupt noch einbinden darf.
Um dieser Frage aus dem Weg zu gehen gibt es nun zum Anzeigen der Logos einfache PHP-Dateien, die in die eigene Webseite integriert werden können. __Bitte beachten Sie, dass dieser Weg nur funktioniert, wenn der Webspace PHP unterstützt und IPv6 fähig ist.__

## Installation

Laden Sie ![ipv6readyornot.php](https://github.com/frootmig/IPv6-ready/raw/master/ipv6readyornot.php) oder ![readyornot.php](https://github.com/frootmig/IPv6-ready/raw/master/readyornot.php) auf Ihren Webspace herunter.

## ipv6readyornot.php

Diese Datei liefert die neue Logo Version aus.

![IPv6 ready](ipv6_ready.gif "IPv6 ready")
![Not IPv6 ready](ipv6_notready.gif "Not IPv6 ready")

Ein Einbindung in Ihre Webseite erfolgt einfach als Bild mit oder ohne Link zur erklärenden Webseite:

    <!-- Einbindung mit Link zur IPv6 ready Webseite. -->
    <a href="https://www.ipv6ready.de/"><img src="ipv6readyornot.php" width="88" height="31" alt="IPv6 ready or not?"></a>
    <!-- Einbindung ohne Link zur IPv6 ready Webseite. -->
    <img src="ipv6readyornot.php" width="88" height="31" alt="IPv6 ready or not?">

## readyornot.php 

Diese Datei liefert die alte Logo Version aus.

![IPv6 ready](ready.png "IPv6 ready")
![Not IPv6 ready](not-ready.png "Not IPv6 ready")

Ein Einbindung in Ihre Webseite erfolgt einfach als Bild mit oder ohne Link zur erklärenden Webseite:

    <!-- Einbindung mit Link zur IPv6 ready Webseite. -->
    <a href="https://www.ipv6ready.de/"><img src="readyornot.php" width="150" height="50" alt="IPv6 ready or not?"></a>
    <!-- Einbindung ohne Link zur IPv6 ready Webseite. -->
    <img src="readyornot.php" width="150" height="50" alt="IPv6 ready or not?">

## Die PHP Dateien aus den Bildern neu generieren

Es ist möglich die PHP-Dateien per Script neu zu erzeugen. Dieser Schritt ist nur nötig, falls jemand die Logos verändern möchte.

    ./create.sh > readyornot.php
 
    ./create2.sh > ipv6readyornot.php
