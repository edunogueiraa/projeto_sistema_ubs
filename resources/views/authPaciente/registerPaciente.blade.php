<form action="{{url('/pacientes')}}" method="POST">

    @csrf
    <h1>Cadastro de Paciente</h1>
    <p>Preencha o formulário abaixo para realizar o cadastro</p>
    
    <div class="input-single">
        <label for="name">Nome</label>
        <input type="text" name="name" class="input" required>
    </div>

    <div class="input-single">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" class="input" required>
    </div>

    <div class="input-single">
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" class="input" required>
    </div>

    <div class="input-single">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" class="input" required>
    </div>

    <div class="input-single">
        <label for="sexo">Sexo</label>
        <select name="sexo" class="input" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
    </div>

    <div class="input-single">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" class="input" required>
    </div>

    <div class="btn">
       <button type="submit">Enviar</button> 
    </div>
</form>
