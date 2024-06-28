<x-layout title="IMC">

<form method="post" action="/imc/store">
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
</form>
<br><br><br>


<label id="resultado">RESULTADO:</label><br> 
<label>IMC: {{$resultado["imc"]}}</label><br> 
<label>Faixa: {{$resultado["faixa"]}}</label><br> 
<br><br><br>

<!-- <x-alert></x-alert> -->



</x-layout>



