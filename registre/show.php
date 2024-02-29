{{ include('layouts/header.php', {title: 'Registre'})}}
    <div class="container">
        <h2>Registre Show</h2>
        <hr>
        <p><strong>Date du registre:</strong> {{ registre.date }}</p>
        <p><strong>total:</strong> {{ registre.total }}.$</p>
        <p><strong>numero de voiture:</strong>{{ registre.voiture_idvoiture }}</p>
        <p><strong>Numero client:</strong> {{ registre.client_idclient }}</p>
        <a href="{{base}}/registre/edit?id={{registre.idregistre}}" class="btn block">Edit</a>
        <form action="{{base}}/registre/delete" method="post">
            <input type="" name="idregistre" value="{{ registre.idregistre }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php') }}