<?php require_once'./assets/layout/header.php'; ?>

    <div class="container">
        <h1>Willkommen auf meiner persönlichen Website!</h1>
        <p>Kurs: Web-Programmierung mit Ali Khorsandfard</p>
        <p>Informatiker Winter 2024</p>
        <p>Name: <b>Lange, Arne</b></p>
        <p>Standort: <b>Coesfeld</b></p>
        <form>
            <div class="form-group">
                <label for="email">Mail (OHNE FUNKTION):</label>
                <input type="email" class="form-control" id="email" placeholder="Bitte Mail angeben">
            </div>
            <div class="form-group">
                <label for="message">Nachricht (OHNE FUNKTION):</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Ihre Nachricht:"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kontaktiere mich</button>
        </form>
    </div>

    <?php require_once'./assets/layout/footer.php'; ?>


