{{ include('layouts/header.php', {title: 'Voiture'})}}
    <h1>Voiture</h1>
    <table>
        <thead>
            <tr>
                <th>Marque de la voiture</th>
                <th>Prix</th>
                <th>Quantité en stock</th>
                <th>Année</th>
                <th>Fournisseur Id</th>
            </tr>
        </thead>
        <tbody>
        {% for voiture in voitures %}
            <tr>
                <td>{{ voiture.marque }}</td>
                <td>{{ voiture.prix }} $</td>
                <td>{{ voiture.quantite }}</td>
                <td>{{ voiture.annee }}</td>
                <td>{{ voiture.fournisseur_idfournisseur }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{{ include('layouts/footer.php') }}