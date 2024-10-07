<form action="register_process.php" method="POST">
    <div class="personal-info">
        <input type="text" name="vorname" placeholder="Vorname" required>
        <input type="text" name="nachname" placeholder="Nachname" required>
        <input type="date" name="geburtsdatum" placeholder="Geburtsdatum" required>
        <input type="text" name="telefon" placeholder="Telefon" required>
        <input type="text" name="straße" placeholder="Straße" required>
        <input type="text" name="hausnummer" placeholder="Hausnummer" required>
        <input type="text" name="plz" placeholder="PLZ" required>
        <input type="text" name="ort" placeholder="Ort" required>
    </div>

    <div class="login-info">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="email" name="email_confirm" placeholder="E-mail wiederholen" required>
        <input type="password" name="passwort" placeholder="Passwort" required>
        <input type="password" name="passwort_confirm" placeholder="Passwort Bestätigen" required>
    </div>

    <div class="buttons">
        <button type="submit" name="register">Registrieren</button>
        <button type="button" onclick="window.location.href='login.php'">Ich bin bereits Registriert</button>
    </div>
</form>