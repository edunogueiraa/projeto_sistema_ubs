<h1>Entrar no painel do recepcionista</h1>

<form method="POST" action="{{ route('recepcionistas.authenticate') }}">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
    </div>
    <div>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Login</button>
</form>