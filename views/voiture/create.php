{{ include('layouts/header.php', {title: 'voiture'})}}
<div class="container">
 
    <form method="post">
        <h2>voiture</h2>
     
        <label>Marque de la voiture
            <input type="text" name="marque" value="{{ voiture.marque }}">
        </label>
        <label>Prix voiture 
            <input type="double" name="prix" value="{{voiture.prix}}">
        </label>
        <label>Quantite en stock
            <input type="number" name="quantite" value="{{ voiture.quantite }}">
        </label>
        <label>Annee
            <input type="text" name="annee" value="{{ voiture.annee }}">
        </label>
        <label>Fournisseur Id
            <input type="number" name="fournisseur_idfournisseur" value="{{ voiture.fournisseur_idfournisseur }}">
        </label>
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php')}}