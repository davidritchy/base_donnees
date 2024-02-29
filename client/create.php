{{ include('layouts/header.php', {title: 'Client Create'})}}
    <div class="container">
        <h2>Client Create</h2>
        <form method="post">
            <label>Nom Client
                <input type="text" name="nom_client" value="{{ client.nom_client }}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>Addresse
                <input type="text" name="addresse_client" value="{{ client.addresse_client }}">
            </label>
            {% if errors.address is defined %}
                <span class="error">{{ errors.address}}</span>
            {% endif %}
            <label>Date Naissance
                <input type="text" name="naissance" value="{{ client.naissance }}">
            </label>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php') }}