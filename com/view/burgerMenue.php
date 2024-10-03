<div class="menu-icon" id="menuIcon">&#9776;</div>

<!-- Das Dropdown-Menü -->
<div class="dropdown" id="menuDropdown">
    <div class="dropdown-form">
        <form id="burgerMenuInput">
            <input type="text">
            <input type="password">
            <input type="submit">
        </form>
        <a href="#">Registrieren</a>
    </div>
    <div class="dropdown-item" onclick="window.location.href='';">Persönliche Daten</div>
    <div class="dropdown-item" onclick="window.location.href='';">Termin buchen</div>
    <div class="dropdown-item" onclick="window.location.href='';">Feedback</div>
</div>

<script>
    // JavaScript, um das Dropdown-Menü anzuzeigen/verbergen
    const menuIcon = document.getElementById("menuIcon");
    const menuDropdown = document.getElementById("menuDropdown");
    const burgerMenuInput = document.getElement);

    menuIcon.addEventListener("click", function() {
        if (menuDropdown.style.display === "block") {
            menuDropdown.style.display = "none";
        } else {
            menuDropdown.style.display = "block";
        }
    });

    // Schließen des Dropdown-Menüs, wenn außerhalb geklickt wird
    window.addEventListener("click", function(event) {
        if (event.target !== menuIcon && event.target !== menuDropdown && event.target !== burgerMenuInput) {
            menuDropdown.style.display = "none";
        }
    });
</script>