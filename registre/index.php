{{ include('layouts/header.php', {title: 'Registre'})}}
    <h1>Registre</h1>
    <table>
        <thead>
            <tr>
                <th>Date du registre</th>
                <th>Total de la facture</th>
                <th>Identifiant du client</th>
                <th>Numero de voiture</th>
            </tr>
        </thead>
        <tbody>
        {% for registre in registres %}
            <tr>
                <td>{{ registre.date }}</td>
                <td>{{ registre.total }} $</td>
                <td>{{ registre.client_idclient }}</td>
                <td>{{ registre.voiture_idvoiture }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{{ include('layouts/footer.php') }}