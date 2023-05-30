<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technicien SAV</title>
</head>
<body>
    <h1>Technicien SAV</h1>

    <!-- Formulaire de création de ticket SAV -->
    <form id="ticketForm" action="create_ticket.php" method="post">
        <div class="form-group">
            <label for="commandNumber">Numéro de commande :</label>
            <input type="text" id="commandNumber" name="commandNumber" required>
        </div>

        <div class="form-group">
            <label for="returnReason">Motif du retour :</label>
            <select id="returnReason" name="returnReason" required>
                <option value="">Choisir...</option>
                <option value="npai">NPAI</option>
                <option value="abs">Absence</option>
                <option value="erreur_cde">Erreur de commande</option>
                <option value="panne">Panne</option>
                <option value="abime">Abîmé</option>
                <option value="non_conforme">Non conforme</option>
            </select>
        </div>

        <div class="form-group">
            <label for="issueDetails">Détails du problème :</label>
            <textarea id="issueDetails" name="issueDetails" rows="4" required></textarea>
        </div>

        <input type="submit" value="Créer le ticket">
    </form>

    <!-- Liste des tickets SAV existants -->
    <h2>Tickets SAV existants :</h2>
    <table>
        <tr>
            <th>Numéro de ticket</th>
            <th>Date de création</th>
            <th>Statut</th>
            <th>Client</th>
            <th>Détails</th>
        </tr>
        <?php
        // Récupérer et afficher les tickets SAV depuis la base de données
        $servername = "localhost";
        $username = "root";
        $password = "new_password";
        $dbname = "greengarden";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->query("SELECT * FROM t_d_ticketsav");
            $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($tickets as $ticket) {
                echo "<tr>";
                echo "<td>" . $ticket['Num_Ticket_SAV'] . "</td>";
                echo "<td>" . $ticket['Date_Ticket_SAV'] . "</td>";
                echo "<td>" . $ticket['Statut_Ticket_SAV'] . "</td>";
                echo "<td><a href=\"ticket_details.php?ticketId=" . $ticket['Id_Ticket_SAV'] . "\">Détails</a></td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </table>

    <!-- Script AJAX pour soumettre le formulaire de création de ticket SAV sans recharger la page -->
    <script>
        document.getElementById("ticketForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Empêcher le rechargement de la page

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Traitement réussi, afficher un message de succès ou actualiser la liste des tickets
                        console.log("Ticket créé avec succès !");
                    } else {
                        // Erreur lors de la requête AJAX, afficher un message d'erreur
                        console.error("Erreur lors de la création du ticket");
                    }
                }
            };
            xhr.open("POST", "create_ticket.php", true); // URL du script de création de ticket
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var formData = new FormData(document.getElementById("ticketForm"));
            xhr.send(formData);
        });
    </script>
</body>
</html>
