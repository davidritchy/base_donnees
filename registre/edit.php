{{ include('layouts/header.php', {title: 'Registre'})}}
    <div class="container">
        <h2>Edit</h2>
        <form method="post">
        <label>Date du registre
                <input type="date" name="date" value="{{ registre.date }}">
            </label>
            <label>Total  
                <input type="number" name="total" value="{{ registre.total }}">
            </label>
            <label>Numero voiture  
                <input type="number" name="voiture_idvoiture" value="{{ registre.voiture_idvoiture }}">
            </label>
            <label>Numero client  
                <input type="number" name="client_idclient" value="{{ registre.client_idclient }}">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
{{ include('layouts/footer.php') }}