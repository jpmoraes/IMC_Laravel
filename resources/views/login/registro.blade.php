<x-layout title="Registro">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="post">
        @csrf
        <div class="from-group">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="name" id="nome" class="form-control">
        </div>

        <div class="from-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="from-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="from-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password_confirmation" id="password" class="form-control">
        </div>

        <button class="btn btn-primary mt-3">Cadastrar</button>
    </form>

</x-layout>