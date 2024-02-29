{{ include('layouts/header.php', {title: 'Registre'})}}
<div class="container">
    <form method="post">
        <h2>Registre</h2>
        <label>Date du registre
            <input type="date" name="date" value="{{ registre.date }}">
        </label>
        <label>Total de la facture
            <input type="double" name="total" value="{{ registre.total }}">
        </label>
        <label>Id du client 
            <input type="number" name="client_idclient" value="{{registre.client_idclient}}">
        </label>
        <label>Numero de voiture
            <input type="number" name="voiture_idvoiture" value="{{ registre.voiture_idvoiture }}">
        </label>
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php')}}