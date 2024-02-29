{{ include('layouts/header.php', {title: 'fournisseur'})}}
    <h1>Fournisseur</h1>
    <table>
        <thead>
            <tr>
                <th>Nom Fournisseur</th>
                <th>Addresse </th>
            </tr>
        </thead>
        <tbody>
        {% for fournisseur in fournisseurs %}
            <tr>
                <td>{{ fournisseur.nom_fournisseur }}</td>
                <td>{{ fournisseur.addresse_fournisseur }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{{ include('layouts/footer.php') }}