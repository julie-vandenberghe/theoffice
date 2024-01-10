<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <h1> Inscription</h1>

    <div>
        <label for="email">Email</label>
        <input type="text" pattern=".+@example\.com" size="30" placeholder="toto@gmail.com" required>
    </div>

    <div>
        <label for="passeword">Mot de passe</label>
        <input type="text" minlength="8" required>
    </div>
    <div>
        <label for="passeword_confirm">Confirmation du mot de passe</label>
        <input type="text" minlength="8" required>
    </div>

    <div>
        <input type="submit" value="S'inscrire">
    </div>


    
</body>
</html>