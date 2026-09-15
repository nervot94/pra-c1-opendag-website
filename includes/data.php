<?php
$vakken = [
    [
        'naam'   => 'Een basis website maken met HTML en CSS',
        'kleur'  => 'pastel-roze',
        'tekst'  => 'Je leert semantische HTML schrijven en met CSS responsive layouts bouwen. Dit is de basis van alle webdevelopment in de opleiding.',
    ],
    [
        'naam'   => 'Interactieve elementen maken met JavaScript',
        'kleur'  => 'pastel-paars',
        'tekst'  => 'Je maakt websites interactief met JavaScript: events, DOM-manipulatie en logica in de browser.',
    ],
    [
        'naam'   => 'Een werkende database ontwerpen',
        'kleur'  => 'pastel-blauw',
        'tekst'  => 'Je leert data opslaan en ophalen met SQL: tabellen ontwerpen, query\'s schrijven en databasen koppelen aan je code.',
    ],
    [
        'naam'   => 'Werken met een API',
        'kleur'  => 'pastel-lime',
        'tekst'  => 'Je leert gegevens ophalen en versturen via API\'s, zodat je applicaties met externe data en diensten kunnen praten.',
    ],
    [
        'naam'   => 'Mobile app basics',
        'kleur'  => 'pastel-roze',
        'tekst'  => 'Je maakt kennis met het bouwen van apps voor mobiele apparaten en wat er komt kijken bij een goede mobiele gebruikerservaring.',
    ],
    [
        'naam'   => 'Het live zetten van een webomgeving',
        'kleur'  => 'pastel-paars',
        'tekst'  => 'Je leert je project echt online te krijgen: hosting, domeinen en het deployen van een werkende webomgeving.',
    ],
    [
        'naam'   => 'Overige vakken',
        'kleur'  => 'pastel-blauw',
        'tekst'  => 'Naast de modules volg je Nederlands, Engels, Rekenen, Keuzedelen, Burgerschap en Loopbaan. Ook heb je wekelijks mentoruur en mentorgesprekken.',
    ],
];

$levels = [
    [
        'naam'   => 'Level 1',
        'kleur'  => 'pastel-roze',
        'titel'  => 'Fundamentals',
        'tekst'  => 'Level 1 duurt in totaal 24 weken en bestaat uit 6 units van elk 4 weken (basis webdevelopment: front-end met HTML en CSS). Leeruitkomsten worden aangeleverd; wij geven aan hoe deze aangetoond moeten worden. Hiernaast lopen gedurende de volledige 24 weken ook overige onderwijsactiviteiten:',
        'sub'    => 'de fundamentals',
        'lijst'  => [
            'Mentoruur en mentorgesprekken',
            'Nederlands en Engels',
            'Burgerschap',
            'Keuzedeel',
            'Loopbaan',
        ],
        'voet'   => 'Aan het einde van level 1 volgt het bindend studieadvies (BSA).',
    ],
    [
        'naam'   => 'Level 2',
        'kleur'  => 'pastel-paars',
        'titel'  => 'Professionaliseren',
        'tekst'  => 'In level 2 leer je zelf leeruitkomsten te kiezen en zelf te bepalen hoe je deze bewijst: je maakt zelf keuzes in de modules die je volgt, werkt aan complexere challenges en bepaalt zelf je tempo.',
        'sub'    => 'Professionaliseren',
        'lijst'  => [
            'Zelf keuzes maken in modules',
            'Complexere challenges',
            'Tempo zelf bepalen',
        ],
    ],
    [
        'naam'   => 'Level 3',
        'kleur'  => 'pastel-blauw',
        'titel'  => 'Beroepsgericht (examen & stage)',
        'tekst'  => 'In level 3 is alles beroepsgericht: je loopt BPV (stage), werkt aan échte challenges uit het werkveld en communiceert met externen. De opleiding wordt afgerond met examinering, met daarbij alvast je blik op de toekomst.',
        'sub'    => 'Beroepsgericht',
        'lijst'  => [
            'BPV (stage)',
            'Échte challenges uit het werkveld',
            'Communicatie met externen',
            'Blik op de toekomst',
        ],
    ],
];

$versnellenPunten = [
    'Je kunt al vroeg in level 1 zelfstandig aantonen dat je leeruitkomsten beheerst en bewijslast kunt aanleveren.',
    'Je bespreekt je plannen met je coach of vakdocent.',
    'Je maakt een plan voor de stof die je wilt verslaan.',
    'Je laat zien dat je de stof beheerst via een toets of opdracht.',
    'Je houdt je versnelling bij en evalueert deze regelmatig.',
];

$unitOnderdelen = [
    ['onderdeel' => 'Module', 'duur' => '4 weken', 'toelichting' => 'Combinatie van theorie en praktijk, gericht op een specifiek onderwerp. Afsluiting middels een SD-certificaat.'],
    ['onderdeel' => 'Challenge', 'duur' => '3 weken', 'toelichting' => 'Projectmatig via sprints werken aan een challenge (praktijkopdracht).'],
    ['onderdeel' => 'Masterclasses', 'duur' => '3 weken', 'toelichting' => 'Losstaande lessen van circa 45-60 minuten over een specifiek onderwerp, gegeven naast de challenge.'],
    ['onderdeel' => 'Reflectieweek', 'duur' => '1 week', 'toelichting' => 'Portfolio voorbereiden, presenteren, leeruitkomsten verzamelen, reflecteren op eigen handelen (POP) en nieuwe leerdoelen stellen. Aan het eind van elke unit.'],
];

$leerlijnen = [
    'Persoonlijke & professionele ontwikkeling',
    'Projectmatig werken',
    'Veilig & verantwoord ontwikkelen',
    'Programmeren & tools',
    'Generiek',
];

$masterclasses = [
    'CSS Grid: bouw een Pinterest-achtige layout',
    'Cookies en localStorage',
    'Prompt engineering voor developers',
    'Het maken van een flowchart',
    'Presenteren kun je leren (tips & tricks)',
    'Merge conflicten oplossen',
];

$trajecten = [
    [
        'naam'  => 'Regulier',
        'kleur' => 'pastel-blauw',
        'tekst' => 'Standaard opbouw over 4 leerjaren: level 1 in leerjaar 1, level 2 in leerjaar 2-3 en level 3 in leerjaar 4.',
    ],
    [
        'naam'  => 'Verlengd',
        'kleur' => 'pastel-paars',
        'tekst' => 'Een student krijgt langer de tijd, bijvoorbeeld level 1 uitgesmeerd over een langere periode.',
    ],
    [
        'naam'  => 'Versneld',
        'kleur' => 'pastel-lime',
        'tekst' => 'De opleiding kan binnen 3 jaar worden afgerond als de student in level 1 al vroeg zelfstandig kan aantonen dat hij/zij leeruitkomsten kan bewijzen en bewijslast kan aanleveren.',
    ],
];
