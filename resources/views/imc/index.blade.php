<x-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  

    <h1 style="color:yellowgreen">CALCULAR IMC </h3><br>
        <form method="post" action="{{route('imc.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">NOME</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">PESO</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="peso" name="peso">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">ALTURA</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="altura" name="altura">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
            <br>
            <div class="mb-3">
                <label for="formFile" class="form-label">Mande sua foto</label>
                <input class="form-control" type="file" name="image" id="formFile">
            </div>
            <br>

            <br><br><br>
        </form>
        <label id="result">RESULTADO:</label><br>
        <label id="result">IMC: {{$resultado["imc"]}}</label><br>
        <label id="result">Faixa: {{$resultado["faixa"]}}</label><br>
</x-layout>