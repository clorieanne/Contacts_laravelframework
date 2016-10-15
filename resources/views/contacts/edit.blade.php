@extends('layouts.app')
 
@section('content')
 
    <div class="panel panel-default">
        <div class="panel-heading">Edit Contacts</div>
        <div class="panel-body">
 
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            {!! Form::model($contact, ['method' => 'PATCH','route' => ['contacts.update', $contact->id]]) !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{  $contact->name }}">
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" name="number" class="form-control" value="{{  $contact->number }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3">{{  $contact->description }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save Changes" class="btn btn-info">
                <a href="{{ route('contacts.index')  }}" class="btn btn-default">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
 
@endsection