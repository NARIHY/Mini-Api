// Fonction pour récupérer les données depuis l'API et gérer le tri
function fetchAndSortData(sortFunction) {
    fetch('http://localhost:8000/donner.php')
        .then(response => {
            // Vérifie si la réponse est OK (code HTTP 200)
            if (!response.ok) {
                throw new Error('Erreur lors de la récupération des éléments depuis la base de données');
            }
            // Convertit la réponse en JSON
            return response.json();
        })
        .then(data => {
            // Manipule les données JSON en utilisant la fonction de tri spécifiée
            const sortedData = sortFunction(data);
            // Affiche les données triées dans la console
            console.log(sortedData);

            // Exemple: Boucle à travers les données triées et affiche les notes
            sortedData.forEach(item => {
                console.log(item.note);
            });
        })
        .catch(error => {
            console.error('Erreur:', error);
        });
}

// Fonction pour trier les données par ordre décroissant d'ID
function sortByDescendingId(data) {
    return data.sort((a, b) => b.id - a.id);
}

// Fonction pour trier les données par ordre croissant d'ID
function sortByAscendingId(data) {
    return data.sort((a, b) => a.id - b.id);
}

// Fonction pour trier les données par ordre alphabétique croissant de la première lettre de la note
function sortByFirstLetterAscending(data) {
    return data.sort((a, b) => a.note.localeCompare(b.note));
}

// Fonction pour trier les données par ordre alphabétique décroissant de la première lettre de la note
function sortByFirstLetterDescending(data) {
    return data.sort((a, b) => b.note.localeCompare(a.note));
}

// Exemple d'utilisation: Récupérer et trier les données par ordre décroissant d'ID
fetchAndSortData(sortByDescendingId);

// Exemple d'utilisation: Récupérer et trier les données par ordre alphabétique croissant de la première lettre de la note
fetchAndSortData(sortByFirstLetterAscending);

// Exemple d'utilisation: Récupérer et trier les données par ordre alphabétique décroissant de la première lettre de la note
fetchAndSortData(sortByFirstLetterDescending);
