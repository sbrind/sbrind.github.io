<?php
// Neue Domain
$newDomain = 'https://cloud.brindlinger.eu';

// Den aktuellen Pfad übernehmen
$path = $_SERVER['REQUEST_URI'] ?? '/';

// Sicherheits-/Kodierungsdetails werden durch die direkte Übernahme
// des REQUEST_URI berücksichtigt.
$newUrl = $newDomain . $path;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=<?= htmlspecialchars($newUrl, ENT_QUOTES, 'UTF-8') ?>">
    <title>Adresse geändert</title>
</head>
<body>
    <h1>Die Adresse wurde geändert</h1>

    <p>
        Diese Cloud ist ab sofort unter folgender Adresse erreichbar:
    </p>

    <p>
        <a href="<?= htmlspecialchars($newUrl, ENT_QUOTES, 'UTF-8') ?>">
            <?= htmlspecialchars($newUrl, ENT_QUOTES, 'UTF-8') ?>
        </a>
    </p>

    <p>
        Sie werden in 5 Sekunden automatisch weitergeleitet.
    </p>

    <p>
        Falls die Weiterleitung nicht funktioniert,
        klicken Sie bitte auf den Link oben.
    </p>
</body>
</html>
