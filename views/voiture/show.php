{{ include('layouts/header.php', {title: 'Voiture'})}}
    <div class="container">
        <h2>Voiture Show</h2>
        <hr>
        <p><strong>Marque de la voiture:</strong> {{ voiture.marque }}</p>
        <p><strong>Prix:</strong> {{ voiture.prix}}.$</p>
        <p><strong>Quantité:</strong>{{ voiture.quantite }}</p>
        <p><strong>Année:</strong> {{ voiture.annee }}</p>
        <p><strong>Fournisseur Id:</strong> {{ voiture.fournisseur_idfournisseur }}</p>
        <a href="{{base}}/voiture/edit?id={{voiture.idvoiture}}" class="btn block">Edit</a>
        <form action="{{base}}/voiture/delete" method="post">
            <input type="" name="idvoiture" value="{{ voiture.idvoiture }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php') }}