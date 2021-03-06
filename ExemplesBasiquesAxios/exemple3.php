<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- formulaire à envoyer  -->
    <form id="leFormulaire">
        <!-- method="POST"  -->
        <!-- action="./exemple2Traitement.php"> -->
        <input type="text" name="prenom" />
        <input type="text" name="nom" />
        <input type="submit" id="envoyerNom" value="Envoyer" />
    </form>
    <div id="divContenu">Ici il aura le contenu envoyé par le serveur</div>
    <script>
        document.getElementById("envoyerNom").addEventListener("click", (evenement) => {
            // éviter le submit
            evenement.preventDefault();
            // console.log("click sur le bouton submit");
            axios({
                    // page qui traite l'appel Ajax
                    url: './exemple3Traitement.php',
                    method: 'POST',
                    headers: { 'Content-Type': 'multipart/form-data' },
                    // data: ce qu'on envoie au serveur. on envoie le formulaire au serveur
                    data: new FormData (document.getElementById ("leFormulaire"))

                })
                // cas de success - le contenu de la réponse du serveur est dans l'objet 'response'
                .then(function(response) {
                    // console.log("appel ok, page trouvée"); // juste pour voir si l'appel est ok
                    // console.log(response.data); // debug dans la console, voir la reponse
                    document.getElementById("divContenu").innerHTML = response.data;
                })
                // cas d'erreur (ex: page non trouvée, erreur dans le seveur etc...)
                .catch(function(error) {
                    console.log("erreur dans l'appel");
                });


        });

        // document.getElementById("envoyerNom").addEventListener ("click", function(evenement) { ..}
    </script>

</body>

</html>