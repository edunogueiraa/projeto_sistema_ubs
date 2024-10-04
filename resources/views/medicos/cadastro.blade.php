<h1>Cadastro de médicos</h1>

<form action="{{ route('medicos.store') }}" method="POST">
    @csrf
    <label for="cm">CM (Código do Médico):</label>
    <input type="number" name="cm" id="cm" required><br>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br>

    <label for="nascimento">Data de Nascimento:</label>
    <input type="date" name="nascimento" id="nascimento" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" id="endereco" required><br>

    <label for="status">Status:</label>
    <input type="text" name="status" id="status" required><br>

    <label for="formacao">Formação:</label>
    <input type="text" name="formacao" id="formacao" required><br>

    <label for="contratacao">Data de Contratação:</label>
    <input type="date" name="contratacao" id="contratacao" required><br>

    <button type="submit">Cadastrar</button>
</form>