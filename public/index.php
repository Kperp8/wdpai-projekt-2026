<?php

declare(strict_types=1);

$message = "Hi There! Let's start!";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My first Docker app</title>
</head>
<body>
    <h1><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></h1>

    <p>Witaj w mojej pierwszej aplikacji uruchomionej w Dockerze: PHP, nginx i Docker Compose.</p>

    <section>
        <article>
            <h2>Szybki start</h2>
            <p>Aplikacja działa w kontenerach. Edytuj pliki w katalogu <code>public/</code>, a zmiany będą widoczne po odświeżeniu strony.</p>
        </article>
        <article>
            <h2>PHP</h2>
            <p>Strona jest renderowana po stronie serwera przez PHP-FPM.</p>
        </article>
        <article>
            <h2>nginx</h2>
            <p>nginx przyjmuje żądania HTTP i przekazuje pliki PHP do kontenera PHP.</p>
        </article>
    </section>
</body>
</html>