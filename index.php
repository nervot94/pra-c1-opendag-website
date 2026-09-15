<?php include 'includes/data.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opendag Software Developer</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="onepage">
    <header class="site-header">
        <nav class="nav container" aria-label="Hoofdnavigatie">
            <a href="#home" class="nav-brand">Opendag <span>SD</span></a>
            <ul class="nav-links">
                <li><a href="#opbouw">Opbouw</a></li>
                <li><a href="#vakken">Vakken</a></li>
                <li><a href="#rooster">Rooster</a></li>
                <li><a href="#levels">Levels</a></li>
                <li><a href="#versnellen">Versnellen</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <section class="hero" id="home">
            <h1>Opendag <span class="highlight">Software Developer</span></h1>
            <p class="hero-sub">
                Benieuwd hoe het is om software developer te worden? Kom langs, ontdek de
                opleiding, spreeks studenten en docenten en stel al je vragen.
            </p>
            <p class="hero-meta">Datum: wordt binnenkort bekend – Locatie: Curio, Breda</p>
        </section>

        <section id="opbouw">
            <h2>Opbouw van de opleiding</h2>
            <p>
                De opleiding is opgebouwd rond de student: leer op je eigen tempo, werk aan echte
                challenges en word beter voorbereid op technologische ontwikkelingen.
            </p>
            <h3>Opbouw van een unit (4 weken)</h3>
            <div class="table-wrap">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>Onderdeel</th>
                            <th>Duur</th>
                            <th>Toelichting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($unitOnderdelen as $onderdeel): ?>
                            <tr>
                                <th><?php echo htmlspecialchars($onderdeel['onderdeel']); ?></th>
                                <td><?php echo htmlspecialchars($onderdeel['duur']); ?></td>
                                <td><?php echo htmlspecialchars($onderdeel['toelichting']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <h3>De leerlijnen</h3>
            <p>Door alle levels heen lopen vijf leerlijnen: <?php echo htmlspecialchars(implode(', ', $leerlijnen)); ?>.</p>
            <h3>Challenges &amp; masterclasses</h3>
            <p>
                Challenges zijn projecten van 3 weken (gevolgd door een reflectieweek) waarin je
                individueel of in groepsverband leeruitkomsten aantoont met bewijslast. In level 1
                worden deze aangeleverd, in level 2 kies je ze zelf. Daarnaast volg je losse
                masterclasses van circa 45-60 minuten, zoals: <?php echo htmlspecialchars(implode(', ', $masterclasses)); ?>.
            </p>
        </section>

        <section id="vakken">
            <h2>Vakken van leerjaar 1</h2>
            <section class="cards">
                <?php foreach ($vakken as $vak): ?>
                    <article class="card <?php echo $vak['kleur']; ?>">
                        <h3><?php echo htmlspecialchars($vak['naam']); ?></h3>
                        <p><?php echo htmlspecialchars($vak['tekst']); ?></p>
                    </article>
                <?php endforeach; ?>
            </section>
        </section>

        <section id="rooster">
            <h2>Rooster leerjaar 1</h2>
            <p class="disclaimer">
                Let op: dit is een voorbeeldrooster. Het echte rooster ziet er "ongeveer" zo uit en kan per week verschillen.
            </p>
            <img src="assets/img/rooster.png" alt="Voorbeeldrooster leerjaar 1" class="rooster-img">
        </section>

        <section id="levels">
            <h2>De levels van de opleiding</h2>
            <section class="cards">
                <?php foreach ($levels as $level): ?>
                    <article class="card <?php echo $level['kleur']; ?>">
                        <span class="badge"><?php echo htmlspecialchars($level['naam']); ?></span>
                        <h3><?php echo htmlspecialchars($level['titel']); ?></h3>
                        <p><?php echo htmlspecialchars($level['tekst']); ?></p>
                        <ul>
                            <?php foreach ($level['lijst'] as $punt): ?>
                                <li><?php echo htmlspecialchars($punt); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (!empty($level['voet'])): ?>
                            <p><?php echo htmlspecialchars($level['voet']); ?></p>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </section>
        </section>

        <section id="versnellen">
            <h2>Trajecten &amp; versnellen</h2>
            <section class="cards">
                <?php foreach ($trajecten as $traject): ?>
                    <article class="card <?php echo $traject['kleur']; ?>">
                        <h3><?php echo htmlspecialchars($traject['naam']); ?></h3>
                        <p><?php echo htmlspecialchars($traject['tekst']); ?></p>
                    </article>
                <?php endforeach; ?>
            </section>
            <div class="card pastel-lime">
                <h3>Hoe werkt versnellen?</h3>
                <ul class="checklist">
                    <?php foreach ($versnellenPunten as $punt): ?>
                        <li><?php echo htmlspecialchars($punt); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

    </main>
</body>
</html>
