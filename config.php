<?php
/**
 * ============================================
 * ANNUAIRE-PORTES.FR - CONFIGURATION
 * ============================================
 * Niche : Portes, serrurerie, portails & contrôle d'accès
 */

// ============================================
// SITE - Configuration générale
// ============================================
define('SITE_NAME', 'trouver-devis-porte.fr');
define('SITE_DOMAIN', 'trouver-devis-porte.fr');
define('SITE_URL', 'https://trouver-devis-porte.fr');
define('SITE_EMAIL', 'contact@trouver-devis-porte.fr');
define('SITE_TAGLINE', 'Portes, Serrurerie & Portails Partout en France');
define('SITE_DESCRIPTION', 'Trouvez un installateur de portes près de chez vous. Portes d\'entrée, portes de garage, portes blindées, serrurerie, portails, visiophones et interphones. Devis gratuit et sans engagement.');

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-PORTE');
define('SITE_LOGO_TLD', '.FR');

// ============================================
// METIER - Configuration du métier affiché
// ============================================
define('METIER', 'installateur de portes');
define('METIER_PLURAL', 'installateurs de portes');
define('METIER_TITLE', 'Installateur de Portes');
define('METIER_ICON', 'door');

// ============================================
// VITEUNDEVIS - Partenaire monétisation
// ============================================
// Catégories ViteUnDevis :
// #128 = Porte d'entrée | #108 = Porte de garage | #96 = Porte blindée | #137 = Portes intérieures
// #165 = Serrurerie | #71 = Portail | #74 = Visiophone | #73 = Interphone
define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '128'); // Catégorie par défaut (porte d'entrée)
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

// ============================================
// SCRAPING - Configuration pour récupérer les artisans
// ============================================
define('SCRAPE_QUERY', 'installateur portes pose porte');
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

// ============================================
// AFFICHAGE - Paramètres de pagination et liens
// ============================================
define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

// ============================================
// CHEMINS - Dossiers de données
// ============================================
define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

// ============================================
// MODELES / SERVICES
// ============================================
// Chaque modèle a son propre VUD_CATEGORIE_ID pour maximiser la monétisation
define('MODELES', [
    // --- Portes d'entrée (#128) ---
    ['slug' => 'porte-d-entree', 'nom' => "Porte d'Entrée", 'emoji' => "\xF0\x9F\x9A\xAA", 'vud_cat' => '128'],
    ['slug' => 'porte-d-entree-aluminium', 'nom' => "Porte d'Entrée Aluminium", 'emoji' => "\xF0\x9F\x9A\xAA", 'vud_cat' => '128'],
    ['slug' => 'porte-d-entree-pvc', 'nom' => "Porte d'Entrée PVC", 'emoji' => "\xF0\x9F\x9A\xAA", 'vud_cat' => '128'],
    ['slug' => 'porte-d-entree-bois', 'nom' => "Porte d'Entrée Bois", 'emoji' => "\xF0\x9F\x9A\xAA", 'vud_cat' => '128'],
    ['slug' => 'porte-d-entree-vitree', 'nom' => "Porte d'Entrée Vitrée", 'emoji' => "\xF0\x9F\x9A\xAA", 'vud_cat' => '128'],
    ['slug' => 'porte-d-entree-composite', 'nom' => "Porte d'Entrée Composite", 'emoji' => "\xF0\x9F\x9A\xAA", 'vud_cat' => '128'],

    // --- Portes de garage (#108) ---
    ['slug' => 'porte-de-garage', 'nom' => 'Porte de Garage', 'emoji' => "\xF0\x9F\x8F\xA0", 'vud_cat' => '108'],
    ['slug' => 'porte-de-garage-sectionnelle', 'nom' => 'Porte de Garage Sectionnelle', 'emoji' => "\xF0\x9F\x8F\xA0", 'vud_cat' => '108'],
    ['slug' => 'porte-de-garage-enroulable', 'nom' => 'Porte de Garage Enroulable', 'emoji' => "\xF0\x9F\x8F\xA0", 'vud_cat' => '108'],
    ['slug' => 'porte-de-garage-battante', 'nom' => 'Porte de Garage Battante', 'emoji' => "\xF0\x9F\x8F\xA0", 'vud_cat' => '108'],
    ['slug' => 'porte-de-garage-basculante', 'nom' => 'Porte de Garage Basculante', 'emoji' => "\xF0\x9F\x8F\xA0", 'vud_cat' => '108'],
    ['slug' => 'porte-de-garage-motorisee', 'nom' => 'Porte de Garage Motorisée', 'emoji' => "\xF0\x9F\x8F\xA0", 'vud_cat' => '108'],

    // --- Portes blindées (#96) ---
    ['slug' => 'porte-blindee', 'nom' => 'Porte Blindée', 'emoji' => "\xF0\x9F\x94\x92", 'vud_cat' => '96'],
    ['slug' => 'porte-blindee-appartement', 'nom' => 'Porte Blindée Appartement', 'emoji' => "\xF0\x9F\x94\x92", 'vud_cat' => '96'],
    ['slug' => 'porte-blindee-maison', 'nom' => 'Porte Blindée Maison', 'emoji' => "\xF0\x9F\x94\x92", 'vud_cat' => '96'],
    ['slug' => 'blindage-de-porte', 'nom' => 'Blindage de Porte', 'emoji' => "\xF0\x9F\x94\x92", 'vud_cat' => '96'],
    ['slug' => 'porte-blindee-a2p', 'nom' => 'Porte Blindée Certifiée A2P', 'emoji' => "\xF0\x9F\x94\x92", 'vud_cat' => '96'],

    // --- Portes intérieures (#137) ---
    ['slug' => 'portes-interieures', 'nom' => 'Portes Intérieures', 'emoji' => "\xF0\x9F\x8F\xA1", 'vud_cat' => '137'],
    ['slug' => 'porte-coulissante', 'nom' => 'Porte Coulissante', 'emoji' => "\xF0\x9F\x8F\xA1", 'vud_cat' => '137'],
    ['slug' => 'porte-battante', 'nom' => 'Porte Battante', 'emoji' => "\xF0\x9F\x8F\xA1", 'vud_cat' => '137'],
    ['slug' => 'porte-pliante', 'nom' => 'Porte Pliante', 'emoji' => "\xF0\x9F\x8F\xA1", 'vud_cat' => '137'],
    ['slug' => 'porte-galandage', 'nom' => 'Porte à Galandage', 'emoji' => "\xF0\x9F\x8F\xA1", 'vud_cat' => '137'],
    ['slug' => 'porte-verriere', 'nom' => 'Porte Verrière', 'emoji' => "\xF0\x9F\x8F\xA1", 'vud_cat' => '137'],

    // --- Serrurerie (#165) ---
    ['slug' => 'serrurerie', 'nom' => 'Serrurerie', 'emoji' => "\xF0\x9F\x94\x91", 'vud_cat' => '165'],
    ['slug' => 'changement-serrure', 'nom' => 'Changement de Serrure', 'emoji' => "\xF0\x9F\x94\x91", 'vud_cat' => '165'],
    ['slug' => 'serrure-multipoints', 'nom' => 'Serrure Multipoints', 'emoji' => "\xF0\x9F\x94\x91", 'vud_cat' => '165'],
    ['slug' => 'cylindre-haute-securite', 'nom' => 'Cylindre Haute Sécurité', 'emoji' => "\xF0\x9F\x94\x91", 'vud_cat' => '165'],
    ['slug' => 'ouverture-de-porte', 'nom' => 'Ouverture de Porte', 'emoji' => "\xF0\x9F\x94\x91", 'vud_cat' => '165'],
    ['slug' => 'serrure-connectee', 'nom' => 'Serrure Connectée', 'emoji' => "\xF0\x9F\x94\x91", 'vud_cat' => '165'],

    // --- Portail (#71) ---
    ['slug' => 'portail', 'nom' => 'Portail', 'emoji' => "\xF0\x9F\x8F\x97\xEF\xB8\x8F", 'vud_cat' => '71'],
    ['slug' => 'portail-coulissant', 'nom' => 'Portail Coulissant', 'emoji' => "\xF0\x9F\x8F\x97\xEF\xB8\x8F", 'vud_cat' => '71'],
    ['slug' => 'portail-battant', 'nom' => 'Portail Battant', 'emoji' => "\xF0\x9F\x8F\x97\xEF\xB8\x8F", 'vud_cat' => '71'],
    ['slug' => 'portail-aluminium', 'nom' => 'Portail Aluminium', 'emoji' => "\xF0\x9F\x8F\x97\xEF\xB8\x8F", 'vud_cat' => '71'],
    ['slug' => 'motorisation-portail', 'nom' => 'Motorisation Portail', 'emoji' => "\xF0\x9F\x8F\x97\xEF\xB8\x8F", 'vud_cat' => '71'],
    ['slug' => 'portail-fer-forge', 'nom' => 'Portail Fer Forgé', 'emoji' => "\xF0\x9F\x8F\x97\xEF\xB8\x8F", 'vud_cat' => '71'],

    // --- Visiophone (#74) ---
    ['slug' => 'visiophone', 'nom' => 'Visiophone', 'emoji' => "\xF0\x9F\x93\xB9", 'vud_cat' => '74'],
    ['slug' => 'visiophone-connecte', 'nom' => 'Visiophone Connecté', 'emoji' => "\xF0\x9F\x93\xB9", 'vud_cat' => '74'],
    ['slug' => 'visiophone-sans-fil', 'nom' => 'Visiophone Sans Fil', 'emoji' => "\xF0\x9F\x93\xB9", 'vud_cat' => '74'],

    // --- Interphone (#73) ---
    ['slug' => 'interphone', 'nom' => 'Interphone', 'emoji' => "\xF0\x9F\x94\x94", 'vud_cat' => '73'],
    ['slug' => 'interphone-video', 'nom' => 'Interphone Vidéo', 'emoji' => "\xF0\x9F\x94\x94", 'vud_cat' => '73'],
    ['slug' => 'interphone-collectif', 'nom' => 'Interphone Collectif', 'emoji' => "\xF0\x9F\x94\x94", 'vud_cat' => '73'],
]);

// ============================================
// STYLES - Affichés sur la page d'accueil (8 blocs)
// ============================================
define('STYLES', [
    ['slug' => 'porte-d-entree', 'nom' => "Porte d'Entrée", 'emoji' => "\xF0\x9F\x9A\xAA", 'desc' => 'Aluminium, PVC, bois, composite'],
    ['slug' => 'porte-de-garage', 'nom' => 'Porte de Garage', 'emoji' => "\xF0\x9F\x8F\xA0", 'desc' => 'Sectionnelle, enroulable, battante'],
    ['slug' => 'porte-blindee', 'nom' => 'Porte Blindée', 'emoji' => "\xF0\x9F\x94\x92", 'desc' => 'Sécurité renforcée, certifiée A2P'],
    ['slug' => 'portes-interieures', 'nom' => 'Portes Intérieures', 'emoji' => "\xF0\x9F\x8F\xA1", 'desc' => 'Battante, coulissante, pliante'],
    ['slug' => 'serrurerie', 'nom' => 'Serrurerie', 'emoji' => "\xF0\x9F\x94\x91", 'desc' => 'Serrures, cylindres, blindage'],
    ['slug' => 'portail', 'nom' => 'Portail', 'emoji' => "\xF0\x9F\x8F\x97\xEF\xB8\x8F", 'desc' => 'Coulissant, battant, motorisé'],
    ['slug' => 'visiophone', 'nom' => 'Visiophone', 'emoji' => "\xF0\x9F\x93\xB9", 'desc' => 'Vidéo, connecté, sans fil'],
    ['slug' => 'interphone', 'nom' => 'Interphone', 'emoji' => "\xF0\x9F\x94\x94", 'desc' => 'Audio, vidéo, collectif'],
]);

// ============================================
// SERVICES - Blocs services page accueil (3 blocs)
// ============================================
define('SERVICES', [
    [
        'titre' => 'Portes & Installation',
        'icon' => "\xF0\x9F\x9A\xAA",
        'desc' => 'Pose professionnelle de tous types de portes et portails par des artisans qualifiés.',
        'points' => ['Portes d\'entrée, de garage, blindées et intérieures', 'Portails coulissants, battants et motorisés', 'Dépose de l\'ancien équipement et adaptation du bâti']
    ],
    [
        'titre' => 'Serrurerie & Sécurité',
        'icon' => "\xF0\x9F\x94\x91",
        'desc' => 'Sécurisez votre habitat avec des serrures, blindages et systèmes de contrôle d\'accès.',
        'points' => ['Serrures multipoints et cylindres haute sécurité', 'Portes blindées certifiées A2P (BP1, BP2, BP3)', 'Visiophones et interphones audio/vidéo']
    ],
    [
        'titre' => 'Contrôle d\'accès & Domotique',
        'icon' => "\xF0\x9F\x93\xB9",
        'desc' => 'Modernisez l\'accès à votre domicile avec des solutions connectées et intelligentes.',
        'points' => ['Visiophone connecté et sans fil', 'Interphone audio et vidéo (individuel ou collectif)', 'Motorisation de portail et télécommande']
    ],
]);

// ============================================
// FAQ ACCUEIL (10 questions)
// ============================================
define('FAQ_ACCUEIL', [
    [
        'question' => 'Combien coûte l\'installation d\'une porte d\'entrée ?',
        'reponse' => 'Le prix d\'une porte d\'entrée posée varie de 1 500 à 5 000 euros selon le matériau (PVC, aluminium, bois, composite), les dimensions et le niveau de sécurité souhaité. Demandez plusieurs devis pour comparer.'
    ],
    [
        'question' => 'Combien coûte une porte de garage motorisée ?',
        'reponse' => 'Une porte de garage motorisée coûte entre 1 000 et 4 000 euros pose incluse. Le prix dépend du type (sectionnelle, enroulable, battante, basculante), du matériau et de la motorisation choisie.'
    ],
    [
        'question' => 'Qu\'est-ce qu\'une porte blindée certifiée A2P ?',
        'reponse' => 'La certification A2P (Assurance Prévention Protection) garantit la résistance de votre porte à l\'effraction. Il existe 3 niveaux : BP1 (5 min de résistance), BP2 (10 min) et BP3 (15 min). C\'est la référence en matière de sécurité.'
    ],
    [
        'question' => 'Combien coûte un changement de serrure ?',
        'reponse' => 'Le remplacement d\'une serrure coûte entre 80 et 500 euros selon le type (serrure simple, multipoints, certifiée A2P). Pour un cylindre haute sécurité, comptez 150 à 350 euros pose incluse. Un serrurier professionnel vous conseillera la solution adaptée.'
    ],
    [
        'question' => 'Quel type de portail choisir ?',
        'reponse' => 'Le portail battant convient aux grandes entrées, le coulissant est idéal pour les espaces réduits. Les matériaux courants sont l\'aluminium (léger, sans entretien), le fer forgé (robuste, esthétique) et le PVC (économique). La motorisation simplifie l\'usage au quotidien.'
    ],
    [
        'question' => 'Quelle est la différence entre un visiophone et un interphone ?',
        'reponse' => 'L\'interphone permet une communication audio uniquement, tandis que le visiophone ajoute la vidéo pour identifier visuellement votre visiteur. Les modèles connectés permettent de répondre depuis votre smartphone, même à distance. Les deux peuvent être filaires ou sans fil.'
    ],
    [
        'question' => 'Peut-on motoriser un portail existant ?',
        'reponse' => 'Oui, la plupart des portails existants peuvent être motorisés. Un professionnel évaluera le poids, les dimensions et le type de votre portail (battant ou coulissant) pour installer la motorisation adaptée. Comptez entre 500 et 2 000 euros pose comprise.'
    ],
    [
        'question' => 'Existe-t-il des aides financières pour changer sa porte d\'entrée ?',
        'reponse' => 'Oui, le remplacement d\'une porte d\'entrée peut bénéficier de MaPrimeRénov\', de l\'éco-PTZ ou du taux de TVA réduit à 5,5% si les travaux améliorent l\'isolation thermique. Votre installateur pourra vous renseigner sur les aides disponibles.'
    ],
    [
        'question' => 'Le devis est-il gratuit ?',
        'reponse' => 'Oui, la demande de devis via notre plateforme est 100% gratuite et sans engagement. Vous recevrez jusqu\'à 3 propositions d\'installateurs qualifiés près de chez vous pour comparer les offres.'
    ],
    [
        'question' => 'Les installateurs sont-ils assurés et certifiés ?',
        'reponse' => 'Oui, tous nos installateurs partenaires disposent des assurances obligatoires (garantie décennale, RC Pro) et des qualifications nécessaires (Qualibat, RGE selon les cas). Ils sont sélectionnés pour leur expertise et la qualité de leurs réalisations.'
    ],
]);

// ============================================
// TOP VILLES (affichées dans le menu header - 18 villes)
// ============================================
define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

// ============================================
// AVANTAGES (pour page accueil - 3 blocs)
// ============================================
define('AVANTAGES', [
    ['titre' => 'Réseau National', 'desc' => 'Plus de 10 000 installateurs de portes référencés dans toute la France', 'icon' => "\xF0\x9F\x97\xBA\xEF\xB8\x8F"],
    ['titre' => 'Artisans Certifiés', 'desc' => 'Professionnels qualifiés avec garantie décennale et assurance RC Pro', 'icon' => "\xE2\x9C\x85"],
    ['titre' => 'Devis Gratuits', 'desc' => 'Comparez jusqu\'à 3 devis gratuits et sans engagement', 'icon' => "\xF0\x9F\x92\xB0"],
]);

// ============================================
// IMAGES - URLs des images de fond
// ============================================
define('HERO_IMAGE', 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=1920&q=80&auto=format&fit=crop');


// ============================================
// FONCTIONS UTILITAIRES CONFIG
// ============================================
function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}
