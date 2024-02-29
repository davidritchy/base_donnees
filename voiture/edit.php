{{ include('layouts/header.php', {title: 'Voiture'})}}
    <div class="container">
        <h2>Edit</h2>
        <form method="post">
        <label>Marque de la voiture
                <input type="text" name="marque" value="{{ voiture.marque }}">
            </label>
            <label>Prix 
                <input type="double" name="prix" value="{{ voiture.prix }}">
            </label>
            <label>Quantite en stock  
                <input type="number" name="quantite" value="{{ voiture.quantite }}">
            </label>
            <label>Année  
                <input type="text" name="annee" value="{{ voiture.annee }}">
            </label>
            <label>Fournisseur Id   
                <input type="number" name="fournisseur_idfournisseur" value="{{ voiture.fournisseur_idfournisseur }}">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
{{ include('layouts/footer.php') }}