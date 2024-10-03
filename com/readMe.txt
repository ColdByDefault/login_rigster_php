ToDo's
1. - Regist / Login
		mit Login
			- pers. Daten ändern
			- Meldebescheinigung beatragen
		
2. - Termine beantragen
	mit Login
        Abteilung
        Wunsch Tag u. Zeit
            Liste Aller Mitarbeiter der Abteilung ins Verhältnis setzten zu meinem Wunschtermin und den schon geblockten Zeiträumen
            (Urlaub, Feiertag, Termine, Wochenende)
        Name
        Kontakt => Email | Telefon => required min. 1 davon
        Betreff
        Ausführung
        Bestätigung => zum Beispiel ALert Box
	nicht Login
		warnhinweis

    Planung
        View
		    Sketch | Wireframe | Mockup | Prototyp
			    TODO => Mockup
        Logik
		    PAP | USE CASE | Activity => Sequenzdiagramm
        Model
            DB => View  Liste Aller Mitarbeiter der Abteilung ins Verhältnis setzten zu meinem Wunschtermin und den schon geblockten Zeiträumen
            (Urlaub, Feiertag, Termine, Wochenende)
3. - Städtische Informationen einholen
    nicht Login
        Servicestellen Dropdown => Gruppen aus dem Amt
            Ansprechpartner
            Email
            Oeffnungszeite
            Standort im Gebäude oder andere Standort
            Durchwahl
        Bürgermeister Profil
            Begrüßung
            Amtszeit
            Bild
            Name
            Alter
            Partei
        Tourismus
            Ausflugsziele der Region
            Verlinkung auf Hotels
    Planung
        View
		    Sketch | Wireframe | Mockup | Prototyp
			    TODO => Mockup
        Logik
		    PAP | USE CASE | Activity => Sequenzdiagramm
        Model
            Zeitungsartikel zu Tourismus
            Ansprechpartner, Email ,Oeffnungszeite ,Standort im Gebäude oder andere Standort ,Durchwahl => Gruppen
            Erweiterung der Personen sowie die Mitarbeiter
		
4. - Feedback u. Bewertung
	mit Login
		begrüßung
		Auswahl zur Abteilung
		gesamteindruck => Sternebewertung
		spezifisch => Freitextfeld	=> required
		übermitteln => intern	=> required
		speichern => in der Datenbank
			Tabelle
				Abteilung => Gruppen => Gruppen_ID
				Bewertung (Freitextfeld)
				Bewertung (numerische)
				Schlüssel (id der Bewertung)
				Fremdschlüssel (id des Login)
					mehrfachbewertung => update => pro User_ID 1 Bewertung => ansonsten update der Bewertung
		Abschluss => positives Feedback | negative Feedback
			positive => Hinweis => weiterleitung Startseite (Landing page)
			negative => Warnhinweis => erneuter Aufruf des Feedback
	nicht Login
		warnhinweis
		
Planung
	View
		Sketch | Wireframe | Mockup | Prototyp
			TODO => Mockup
	Logik
		PAP | USE CASE | Activity => Sequenzdiagramm
	Model
		DB => View = User_ID
		View => Eingaben des Users = Freitextfeld begrenzen (Limit = ?) | numerisch
		
		
5. - lokale Events => Landinge Page | - Fundbüro
6. - Datenbank
7. - Mockup Daten
8. - navigation Download

Session => 
	- Feedback u. Bewertung
	- Termine beantragen
	- pers. Daten ändern
	- Meldebescheinigung beatragen

Tickets
All Groups
	7. - Mockup Daten

Raum1 => Branch = Raum1 => Denny	! => 1.
Raum2 => Branch = Raum2 => Daniele	! => 3.
Raum3 => Branch = Raum3 => Wilhelm	! => 2.
Raum4 => Branch = Raum4 => David	! => 4.
ProductOwner => Branch = Main => Florian
	6. - Datenbank