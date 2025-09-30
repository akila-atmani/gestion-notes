<form method="POST" action="index.php">
  <input type="text" name="title" placeholder="Titre" required>
  <textarea id="content-editor" name="content" placeholder="Contenu" ></textarea>
  <button type="submit">Ajouter</button>
</form>

<script>
  var simplemde = new SimpleMDE({
    element: document.getElementById("content-editor"),
    placeholder: "Écris ta note ici en Markdown...",
    spellChecker: false,
    autosave: {
      enabled: true,
      delay: 1000,
      unique_id: "note_autosave"
    }
  });
</script>
