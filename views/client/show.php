{{ include('layouts/header.php', {title: 'Client Create'})}}
    <div class="container">
        <h2>Client Show</h2>
        <hr>
        <p><strong>Nom Client:</strong> {{ client.nom_client }}</p>
        <p><strong>Addresse:</strong> {{ client.addresse_client }}</p>
        <p><strong>Date de Naissance:</strong> {{ client.naissance }}</p>
        <a href="{{base}}/client/edit?id={{client.idclient}}" class="btn block">Edit</a>
        <form action="{{base}}/client/delete" method="post">
            <input type="hidden" name="idclient" value="{{ client.idclient }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php') }}