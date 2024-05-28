<?php
// Tableau de notes avec des titres, contenu et dates d'ajout simulées
$notes = array(
    array('title' => 'Note C', 'content' => 'Contenu de la note C', 'date_added' => '2024-04-25'),
    array('title' => 'Note A', 'content' => 'Contenu de la note A', 'date_added' => '2024-04-23'),
    array('title' => 'Note B', 'content' => 'Contenu de la note B', 'date_added' => '2024-04-24'),
);

// Fonction de comparaison pour trier par titre
function compareByTitle($note1, $note2) {
    return strcmp($note1['title'], $note2['title']);
}

// Fonction de comparaison pour trier par date d'ajout (convertie en timestamp)
function compareByDateAdded($note1, $note2) {
    return strtotime($note2['date_added']) - strtotime($note1['date_added']);
}

// Fonction pour trier les notes en fonction du critère spécifié
function sortNotes($notes, $critere) {
    switch ($critere) {
        case 'title':
            usort($notes, 'compareByTitle'); // Trie par titre
            break;
        case 'date_added':
            usort($notes, 'compareByDateAdded'); // Trie par date d'ajout
            break;
        default:
            usort($notes, 'compareByTitle'); // Par défaut, trie par titre
            break;
    }
    return $notes; // Retourne le tableau trié
}

// Récupère le critère de tri depuis les paramètres GET ou utilise 'title' par défaut
$critere = isset($_GET['sort']) ? $_GET['sort'] : 'title';

// Trie les notes selon le critère spécifié
$sortedNotes = sortNotes($notes, $critere);

// Affiche les notes triées en tant que liste HTML
echo '<ul>';
foreach ($sortedNotes as $note) {
    echo '<li>';
    echo '<h3>' . $note['title'] . '</h3>'; // Affiche le titre de la note
    echo '<p>' . $note['content'] . '</p>'; // Affiche le contenu de la note
    echo '<small>Date d\'ajout : ' . $note['date_added'] . '</small>'; // Affiche la date d'ajout
    echo '</li>';
}
echo '</ul>';

header('Content-Type: application/json');
echo json_encode($sortedNotes);

?>
