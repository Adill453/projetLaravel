<!DOCTYPE html>
<html>
<head>
    <title>Envoyer un e-mail</title>
</head>
<body>
    <h1>Formulaire d'envoi d'e-mail</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="/sendmail" method="POST">
        @csrf

        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom" required><br><br>

        <label>Email du destinataire :</label><br>
        <input type="email" name="email" required><br><br>

        <label>Sujet :</label><br>
        <input type="text" name="sujet" required><br><br>

        <button type="submit">Envoyer l’e-mail</button>
    </form>
</body>
</html>
