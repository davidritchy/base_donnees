{{ include('layouts/header.php', {title: 'Client Create'})}}
    <div class="container">
        <h2>Client Edit</h2>
        <form method="post">
        <label>Name
                <input type="text" name="nom_client" value="{{ client.nom_client }}">
            </label>
            <label>Address
                <input type="text" name="addresse_client" value="{{ client.addresse_client }}">
            </label>
            <label>Date de Naissance
                <input type="text" name="naissance" value="{{ client.naissance }}">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
{{ include('layouts/footer.php') }}