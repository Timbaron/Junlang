@extends('layouts.app')
@section('content')
<form action="{{'convert'}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter English text</label>
                <textarea class="form-control" id="input" rows="10" maxlength="300" name="word">{{$original_word ?? ''}}</textarea>
              </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Translation in Jungle Language</label>
                <textarea class="form-control" id="result" rows="10" disabled>{{$result ?? ''}}</textarea>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-outline-success">Convert</button>
            <button class="btn btn-outline-success" onclick="
                event.preventDefault();
                document.getElementById('input').value = '';
                document.getElementById('result').value = '';
            ">Reset All</button>
        </div>
    </div>
</form>
@endsection
