@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>Patients</h2>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>Name</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($patients as $patient)
      <tr>
        <td>{{$patient['id']}}</td>
        <td>{{$patient['name']}}</td>
        <td><a href="{{action('PatientController@edit', $patient['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PatientController@destroy', $patient['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection