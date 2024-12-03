<?php require_once'./assets/layout/header.php'; ?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page</title>
     

 </head>

    <div class="container">
        <h1>Willkommen auf meiner persönlichen Website!</h1>
        <p>Kurs: Web-Programmierung mit Ali Khorsandfard</p>
        <p>Informatiker Winter 2024</p>
        <p>Name: <b>Lange, Arne</b></p>
        <p>Standort: <b>Coesfeld</b></p>
        <form>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Bitte Mail angeben">
            </div>
            <div class="form-group">
                <label for="message">Nachricht:</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Ihre Nachricht:"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kontaktiere mich</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <?php require_once'./assets/layout/footer.php'; ?>


