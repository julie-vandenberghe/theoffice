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
<form action="" method="post">
    @csrf
    <div>
        <label>Email</label>
        <input name="email" type="text" size="30" placeholder="toto@gmail.com" required>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <label>Mot de passe</label>
        <input name="password" type="text" minlength="8" required>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    
    <div>
        <label>Confirmation du mot de passe</label>
        <input name="password_confirmation" type="text" minlength="8" required>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>



    <div>
        <button>S'inscrire</button>
    </div>

</form>


    
</body>
</html>