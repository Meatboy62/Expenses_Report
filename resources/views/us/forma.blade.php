@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Forma</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre</label>
                      <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Numero</label>
                      <input type="text" class="form-control" id="number" placeholder="Numero">
                    </div>
                  </form>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
@endsection