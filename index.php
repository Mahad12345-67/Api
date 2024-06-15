# Api
Api
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL API Projekt</title>
</head>
<body>
    <h1>Välkommen till PHP MySQL API Projekt</h1>
    <p>Detta projekt är ett enkelt API byggt med PHP och MySQL. API:et låter dig skapa och hämta kunddata.</p>
    
    <h2>Projektstruktur</h2>
    <ul>
        <li><strong>customers/</strong>
            <ul>
                <li>create.php - Hanterar POST-förfrågningar för att skapa en ny kund.</li>
                <li>read.php - Hanterar GET-förfrågningar för att hämta kunddata.</li>
                <li>function.php - Innehåller funktioner för att interagera med databasen.</li>
            </ul>
        </li>
        <li><strong>inc/</strong>
            <ul>
                <li>dbcon.php - Innehåller databasanslutningskoden.</li>
            </ul>
        </li>
    </ul>

    <h2>Databasinställningar</h2>
    <p>En databas med namnet <strong>phpmydatabase</strong> har skapats i phpMyAdmin. Tabellen <strong>customers</strong> har följande kolumner:</p>
    <ul>
        <li>id (INT, primärnyckel, auto-increment)</li>
        <li>name (VARCHAR)</li>
        <li>email (VARCHAR)</li>
        <li>phone (VARCHAR)</li>
    </ul>

    <h2>API-slutpunkter</h2>
    <h3>Skapa en kund (POST)</h3>
    <p>URL: <code>http://localhost/php-api/customers/create.php</code></p>
    <p>Body (JSON):</p>
    <pre>
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "phone": "1234567890"
}
    </pre>

    <h3>Hämta alla kunder (GET)</h3>
    <p>URL: <code>http://localhost/php-api/customers/read.php</code></p>

    <h2>Beskrivning av filer</h2>
    <h3>create.php</h3>
    <p>Denna fil hanterar POST-förfrågningar för att skapa en ny kund. Den inkluderar funktioner från <code>function.php</code> och använder funktionen <code>storeCustomer</code> för att lägga till nya kunder i databasen.</p>

    <h3>read.php</h3>
    <p>Denna fil hanterar GET-förfrågningar för att hämta kunddata. Den inkluderar funktioner från <code>function.php</code> och använder funktionen <code>getCustomerList</code> för att hämta alla kunder från databasen.</p>

    <h3>function.php</h3>
    <p>Denna fil innehåller de huvudsakliga funktionerna för att interagera med databasen, inklusive att lagra nya kunder och hämta kundlistor. Funktionen <code>error422</code> hanterar fel, <code>storeCustomer</code> lägger till nya kunder och <code>getCustomerList</code> hämtar alla kunder.</p>

    <h3>dbcon.php</h3>
    <p>Denna fil innehåller koden för att ansluta till databasen. Den använder <code>mysqli_connect</code> för att ansluta till MySQL-databasen med angivna värdar, användarnamn, lösenord och databasnamn.</p>

    <h2>Felsökning</h2>
    <p>Se till att MySQL och Apache körs via XAMPP Kontrollpanelen. Kontrollera också att databasen och tabellen existerar i phpMyAdmin.</p>
</body>
</html>
