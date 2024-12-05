<?php require_once'./assets/layout/header.php'; ?>

    <div class="container">
        <h1>Zur verbotenen Kammer</h1>
        <form>
            <div class="form-group">
                <label for="username">Benutzername (OHNE FUNKTION):</label>
                <input type="text" class="form-control" id="username" placeholder="Ihr Benutzername">
            </div>
            <div class="form-group">
                <label for="password">Passwort (OHNE FUNKTION):</label>
                 <input type="password" class="form-control" id="password" placeholder="Ihr Kennwort">
            </div>
            <button type="submit" class="btn btn-primary">Einloggen</button>
        </form>
    </div>

    <?php require_once'./assets/layout/footer.php'; ?>
</body>
</html>