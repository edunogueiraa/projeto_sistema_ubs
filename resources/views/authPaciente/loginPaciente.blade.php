<form action="{{url('/login')}}" method="POST">
    @csrf
    
    <h1>Login</h1>
    
    <div class="input-single">
        <label for="email">Email</label>
        <input type="email" name="email" class="input" required>
    </div>

    <div class="input-single">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="input" required>
    </div>

    <button type="submit">Enviar</button>
</form>
