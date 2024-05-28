// Tableau des notes (simulé côté client)
let notes = [
    { title: 'Note 1', content: 'Contenu de la note 1' },
    { title: 'Note 2', content: 'Contenu de la note 2' }
];

// Fonction pour afficher les notes dans le conteneur HTML
function displayNotes() {
    const notesContainer = document.getElementById('notesContainer');
    notesContainer.innerHTML = ''; // Nettoie le conteneur

    notes.forEach((note, index) => {
        const noteElement = document.createElement('div');
        noteElement.classList.add('note');
        noteElement.innerHTML = `
            <h3>${note.title}</h3>
            <p>${note.content}</p>
            <button onclick="deleteNote(${index})" class="delete-note-btn">Supprimer</button>
        `;
        notesContainer.appendChild(noteElement);
    });
}


// Fonction pour afficher le formulaire d'ajout de note
function showAddNoteForm() {
    document.getElementById('addNoteForm').style.display = 'block';
}

// Fonction pour ajouter une nouvelle note
function addNote() {
    const title = document.getElementById('noteTitle').value;
    const content = document.getElementById('noteContent').value;

    if (title && content) {
        notes.push({ title, content });
        displayNotes();
        document.getElementById('addNoteForm').style.display = 'none';
        // Réinitialise les champs du formulaire
        document.getElementById('noteTitle').value = '';
        document.getElementById('noteContent').value = '';
    } else {
        alert('Veuillez saisir un titre et un contenu pour la note.');
    }
}

// Fonction pour supprimer une note
function deleteNote(index) {
    if (confirm('Êtes-vous sûr de vouloir supprimer cette note ?')) {
        notes.splice(index, 1); // Supprime l'élément du tableau
        displayNotes(); // Met à jour l'affichage des notes
    }
}

// Fonction pour trier les notes en fonction du critère spécifié
function sortNotes(critere) {
    fetch('http://localhost/projet/sort.php?sort=' + critere)
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur lors de la requête HTTP');
        }
        return response.json();
    })
    .then(sortedNotes => {
        notes = sortedNotes;
        displayNotes();
    })
    .catch(error => console.error('Erreur lors du tri des notes :', error));
}


// Appel initial pour afficher les notes au chargement de la page
displayNotes();


