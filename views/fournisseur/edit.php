{{ include('layouts/header.php', {title: 'Fournisseur'})}}
    <div class="container">
        <h2>Edit</h2>
        <form method="post">
        <label>Nom Fournisseur
                <input type="text" name="nom_fournisseur" value="{{ fournisseur.nom_fournisseur }}">
            </label>
            <label>Addresse 
                <input type="text" name="addresse_fournisseur" value="{{ fournisseur.addresse_fournisseur }}">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
{{ include('layouts/footer.php') }}