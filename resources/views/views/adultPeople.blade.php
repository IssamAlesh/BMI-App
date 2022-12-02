@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1 style="text-align:center">Bitte füllen Sie die folgenden Felder aus</h1>
        <form method="post" action="/adultPeople/check">
        @csrf
                <div class="col-12 col-md-3">
                    <label for="gender" class="form-label">Geschlecht </label>
                    <select id="gender" name="gender" class="form-select @if($errors->has('gender')) is-invalid @endif">
                        <option value="" disabled selected>Bitte auswählen</option>
                        <option value="man">Mann</option>
                        <option value="women">Frau</option>
                    </select>
                    @if($errors->has('gender'))
                        @foreach($errors->get('gender') as $message)
                        <h6 class="invalid-feedback">{{$message}}</h6>
                        @endforeach
                    @endif
                </div>
                <br>
                <div class="col-12 col-md-3">
                    <label class="form-label">Körpergrösse</label>
                    <input name="height" value="" class="form-control @if($errors->has('height')) is-invalid @endif" type="text" placeholder="In cm">
                    @if($errors->has('height'))
                        @foreach($errors ->get('height') as $message)
                            <h6 class="invalid-feedback">{{$message}}</h6>
                        @endforeach
                    @endif
                </div>
                    <br>
                <div class="col-12 col-md-3">
                    <label class="form-label">Körpergewicht</label>
                    <input name="weight" value="" class="form-control @if($errors->has('weight')) is-invalid @endif" type="text" placeholder="KG">
                    @if($errors->has('weight'))
                        @foreach($errors ->get('weight') as $message)
                            <h6 class="invalid-feedback">{{$message}}</h6>
                        @endforeach
                    @endif
                </div>
                    <br>
                <div class="col-12 col-md-3">
                    <label class="form-label">Alter</label>
                    <input name="age" value="" class="form-control @if($errors->has('age')) is-invalid @endif" type="text" placeholder="In Jahre">
                    @if($errors->has('age'))
                        @foreach($errors ->get('age') as $message)
                            <h6 class="invalid-feedback">{{$message}}</h6>
                        @endforeach
                    @endif
                </div>
            {{--@isset($result)
                {{$result}}
            @endisset--}}
            @if(session('success'))
                <div class="alert alert-secondary" style="margin-right: 30%;margin-left: 30%">
                    <h3><i style="font-size: 20px"></i> {{session('success')}}</h3>
                </div>
            @endif
                    <br>
                <div>
                    <button class="btn btn-outline-success" type="submit" value="BMI Rechnen" name="BMI Rechnen">BMI rechnen</button>
                </div>
        </form>
    </div>
@endsection
