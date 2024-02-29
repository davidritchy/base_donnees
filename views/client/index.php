{{ include('layouts/header.php', {title: 'Client'})}}
    <h1>Client</h1>
    <table>
        <thead>
            <tr>
                <th>Nom Client</th>
                <th>Addresse</th>
                <th>Date de Naissance</th>
                <th>Identifiant client</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td><a href="{{ base }}/client/show?id={{ client.idclient }}">{{ client.nom_client }}</a></td>
                <td>{{ client.addresse_client }}</td>
                <td>{{ client.naissance }}</td>
                <td>{{ client.idclient }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{ base }}/client/create" class="btn" >Client Create</a>
{{ include('layouts/footer.php') }}