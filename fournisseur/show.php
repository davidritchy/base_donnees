{{ include('layouts/header.php', {title: 'Fournisseur'})}}
    <div class="container">
        <h2>Fournisseur Show</h2>
        <hr>
        <p><strong>Nom Client:</strong> {{ fournisseur.nom_fournisseur }}</p>
        <p><strong>Addresse:</strong> {{ fournisseur.addresse_fournisseur }}</p>
        <a href="{{base}}/fournisseur/edit?id={{fournisseur.idfournisseur}}" class="btn block">Edit</a>
        <form action="{{base}}/fournisseur/delete" method="post">
            <input type="" name="idfournisseur" value="{{ fournisseur.idfournisseur }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php') }}