<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Médico</title>
</head>
<body>
    <h1>Login Médico</h1>

    @if ($errors->any())
        <div>
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif

    <form action="{{ route('medicos.authenticate') }}" method="POST">
        @csrf

        <label for="cm">CM (Código do Médico):</label>
        <input type="number" name="cm" id="cm" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>