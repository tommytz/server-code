<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <title>Assignment</title>
  </head>
  <body>
    <div id="input-container">
      <div id="title-input" class="user-input" placeholder="Title" contenteditable="true"></div>
      <div id="body-input" class="user-input" placeholder="Take a note..." contenteditable="true"></div>
      <button id="add">Add</button>
    </div>
    <br/>
    <div id="notes-container">

    <!-- Create notes on page load -->
    <?php
    $url = "note_data.json";
    $data = file_get_contents($url);
    $notes = json_decode($data);
    foreach ($notes as $note) {
      echo 
      "<div class='note'>
        <img class='delete' src='https://img.icons8.com/material-outlined/24/000000/delete-sign.png'/>
        <div class='note-title'>" . $note->title . "</div>
        <div class='note-body'>" . $note->body . "</div>
      </div>";
    }
    ?>

    </div>
    <script src="script.js"></script>
  </body>
</html>
