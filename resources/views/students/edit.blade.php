@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $student->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sex:</strong>
                    {{ $student->sex }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Birthdate:</strong>
                    {{ $student->birthdate }}
                </div>
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" value="{{ $student->address }}" class="form-control" placeholder="address">
            </div>
            <div class="form-group">
                <strong>Height:</strong>
                <input type="text" name="height" value="{{ $student->height }}" class="form-control" placeholder="height">
            </div>
            <div class="form-group">
                <strong>Weight:</strong>
                <input type="text" name="weight" value="{{ $student->weight }}" class="form-control" placeholder="height">
            </div>
            <div class="form-group">
                <strong>Religion:</strong>
                <input type="text" name="religion" value="{{ $student->religion }}" class="form-control" placeholder="religion">
            </div>
            <div class="form-group">
                <strong>Civil Status:</strong>
                {{ $student->cvstatus }}
                <br><select name="cvstatus">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Separated">Separated</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection