{{ include('layouts/header.php', {title: 'Fournisseur'})}}
<div class="container">
    {% if errors is defined %}
    <div class="error">
        <ul>
        {% for error in errors %}
            <li>{{ error }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
    <form method="post">
        <h2>Fournisseur</h2>
     
        <label>Nom du fournisseur
            <input type="text" name="nom_fournisseur" value="{{ fournisseur.nom_fournisseur }}">
        </label>
        <label>Addresse Fournisseur
            <input type="text" name="addresse_fournisseur" value="{{fournisseur.addresse_fournisseur }}">
        </label>
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php')}}