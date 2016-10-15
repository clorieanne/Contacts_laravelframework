@extends('layouts.app')
 
@section('content')
 
    <div class="panel panel-default">
        <div class="panel-heading">
            View Contacts
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('contacts.index')  }}">Go Back</a>
            </div>
            <div class="form-group">
                <strong>Name: </strong> {{ $contact->name  }}
            </div>
            <div class="form-group">
                <strong>Description: </strong> {{ $contact->description  }}
            </div>
        </div>
    </div>
 
@endsection