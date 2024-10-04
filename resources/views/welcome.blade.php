
        <title>Tela de cadastro e login</title>

        <div>
            <!-- Cadastro e login de usuario -->
             <h1>Usuario</h1>
            <a href="{{ route('login') }}" >Login</a>
            <a href="{{ route('register') }}" >Register</a>
            <a  href="{{ url('/dashboard') }}" >painel do usuario</a>
            <br>
            <!-- Cadastro e login de medicos -->
             <h1>Medicos</h1>
            <a href="{{route('medicos.create')}}">Registrar medico</a>
            <a href="{{route('medicos.login')}}">Logar medico</a>
            <br>

            <!-- Login de Recepcionista -->
             <h1>Recepcionista</h1>
             <a href="{{route('recepcionistas.login')}}">Logar Recepcionista</a>

        </div>
