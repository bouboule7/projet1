<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" >
    <link rel="stylesheet" href="style.css">

    <title>Formulaire de saisie d'un prêt</title>
</head>
<body >
    <div class="mx-auto" style="width: 60vw;">
        <form class="form-group" method='post' action='enregistrement.php'>

        </br>
            <div class="row">
                <div class="col">
                    <label for='nom'>Responsable:</label>
                <select id='responsable' class="form-select" name='responsable' required>
                    <option value="responsable_1">Responsable 1</option>
                    <option value="responsable_2">Responsable 2</option>
                </select>
                </div>
    
                <div class="col">
                    <label for="montant">Montant prêt:</label>
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Ar</span>
                    <input type="number" class="form-control" step="100" placeholder="Montant prêt" aria-describedby="basic-addon1">
                    </div>
                </div>
    
                <div class="col">
                    <label for="pourcentage">Pourcentage:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" step="0.01" placeholder="00.00" >
                    </div>
                </div>
            </div>
            
        </br>
            <div class="row">
                <div class="col">
                    <label for='date_prêt'>Date du prêt:</label>
                    <input id='date_prêt' type="date" class="form-control" name='date_prêt' required>
                </div>
    
                <div class="col">
                    <label for='date_prêt'>Date fin remboursement:</label>
                    <input id='date_fin_remboursement' type="date" class="form-control" name='date_fin_remboursement' required>
                </div>
            </div>
    
        </br>
            <div class="row">
                <div class="col">
                    <label for='mode_de_rembouresement'>Mode de remboursement:</label>
                    <select id='mode_de_remboursement' class="form-select" name='mode_de_rembouresement' required>
                        <option value="mensuel">Mensuel</option>
                        <option value="annuel">Annuel</option>
                    </select>
                </div>
    
            </br>
                <div class="col">
                    <label for='mode_de_payement'>Mode de payement:</label>
                    <select id='mode_de_payement' class="form-select" name='mode_de_payement' required>
                        <option value="mvola">Mvola</option>
                        <option value="airtel_money">Airtel Money</option>
                        <option value="orange_money">Orange Money</option>
                        <option value="carte_bancaire">Carte bancaire</option>
                    </select>
                </div>
            </div>
    
            </br>
            <div class="input-group">
                <span class="input-group-text">Commentaire</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
    
            <br/><br/>
                    <input class="btn btn-danger" type="reset"  >
                    <input class="btn btn-primary" type="submit"  > 

            </div>       
        </form>
    </div> 

</body>
</html>
