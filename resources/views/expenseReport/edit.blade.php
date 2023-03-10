@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit report {{$report->id}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
            <table class="table">
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{$report->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Type a title">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        </div>
    </div>


@endsection
