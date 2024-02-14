<?php

function getInformations(PDO $db): array
{
    $sql = "SELECT * FROM themessage ORDER BY date_heure ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

function addComments(PDO $db, string $themail, string $themessage): bool|string
{
    $themessage = htmlspecialchars(strip_tags(trim($themessage)), ENT_QUOTES);
    // false si le courriel n'est pas valide, sinon on le garde
    $themail = filter_var($themail, FILTER_VALIDATE_EMAIL);


    // si les données ne sont pas valides, on envoie false
    if (empty($themessage) || $themail === false ) {
        return false;
    }
    // on prépare la requête
    $sql = "INSERT INTO comments (courriel, texte) VALUES ('$themail', '$themail')";
    try {
        // on exécute la requête
        $db->exec($sql);
        // si tout s'est bien passé, on renvoie true
        return true;
    } catch (Exception $e) {
        // sinon, on renvoie le message d'erreur
        return $e->getMessage();
    }

}