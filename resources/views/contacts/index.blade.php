@extends('layouts.master')
 
@section('content')
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="panel panel-default">
        <div class="panel-heading">
            Contact List
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="/contacts/create" class="btn btn-default">Add New Contact</a>
                </div>
            </div>
 
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Description</th>
                    <th width="300">Action</th>
                </tr>
                @if (count($contacts) > 0)
                    @foreach ($contacts as $key => $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->number }}</td>
                            <td>{{ $contact->description }}</td>
                            <td>
							    <a class="btn btn-success" href="{{ route('contacts.show',$contact->id) }}">Show</a>
							    <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
							    {{ Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $contact->id],'style'=>'display:inline']) }}
							    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
							    {{ Form::close() }}
							</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No Contacts found!</td>
                    </tr>
                @endif
            </table> 
        </div>
    </div>
@endsection