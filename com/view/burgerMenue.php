<div class="menu-icon" id="menuIcon">&#9776;</div>

<!-- Das Dropdown-Menü -->
<div class="dropdown" id="menuDropdown">
    <div class="burgermenu-login">
        <form id="burgerMenuInput">
            <label for="email">E-Mail</label>
            <input type="text" id="email">
            <label for="password">Passwort</label>
            <input type="password" id="password">
            <div class="button-container">
                <input type="submit">
                <input type="button" value="Registrieren">
            </div>
        </form>
        <a href="#" class="forgot-password">Passwort vergessen?</a>
    </div>
    <div class="burgermenu-header">
        <hr>
        <p class="warning">Anmelden um Funktionen zu nutzen</p>
        <p class="header-text">Bürgermenü</p>
        <hr>
    </div>
    <div class="dropdown-item" onclick="window.location.href='';">Persönliche Daten</div>
    <div class="dropdown-item" onclick="window.location.href='';">Termin buchen</div>
    <div class="dropdown-item" onclick="window.location.href='';">Feedback</div>
</div>

<script>
    // JavaScript, um das Dropdown-Menü anzuzeigen/verbergen
    const menuIcon = document.getElementById("menuIcon");
    const menuDropdown = document.getElementById("menuDropdown");
    const burgerMenuInput = document.getElementById("burgerMenuInput");

    menuIcon.addEventListener("click", function() {
        if (menuDropdown.style.display === "block") {
            menuDropdown.style.display = "none";
        } else {
            menuDropdown.style.display = "block";
        }
    });

    // Schließen des Dropdown-Menüs, wenn außerhalb geklickt wird
    window.addEventListener("click", function(event) {
        if (event.target !== menuIcon && !burgerMenuInput.contains(event.target)) {
            menuDropdown.style.display = "none";
        }
    });
</script>