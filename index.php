<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de Notes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <img src="blocnote.png" alt="CuteBlocnote" height="50" width="50">
        <h1>Mon mini<br>bloc-notes</h1>

        <div id="notesContainer" class="notes-container"></div>

        <button class="add-note-btn" onclick="showAddNoteForm()">Ajouter une note</button>

        <div id="addNoteForm" class="add-note-form" style="display: none;">
            <input type="text" id="noteTitle" class="note-input" placeholder="Titre de la note">
            <textarea id="noteContent" class="note-input" placeholder="Contenu de la note"></textarea>
            <button class="save-note-btn" onclick="addNote()">Enregistrer</button>
        </div>

        <div class="sort-buttons">
            <img src="az.png" alt="Trier par Nom" height="30" onclick="sortNotes('title')" style="cursor: pointer;">
            <img src="recent.png" alt="Trier par Date d'Ajout" height="30" onclick="sortNotes('date_added')" style="cursor: pointer;">
        </div>

        <button id="b" onclick="onc()">click</button>

        <div class="order">
            Bonjour
            <div class="sort-buttons">
            <img src="az.png" alt="Trier par Nom" height="30" onclick="sortNotes('title')" style="cursor: pointer;">
            <img src="recent.png" alt="Trier par Date d'Ajout" height="30" onclick="sortNotes('date_added')" style="cursor: pointer;">
        </div>
        </div>
    </div>
    
    <form action="" method="get">

    </form>

    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
</body>
</html>


