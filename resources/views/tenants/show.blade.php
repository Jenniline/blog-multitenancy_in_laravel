@extends('main') 

@section('title', '| View Post')
<title>ASJDHFHJG</title> 


@section('content') 


<h1>  Hello , {{ $tenant->name}} welcome  </h1>


<table  class="table table-striped">
    <thead class="thead-dark">
      <tr>
                <th scope="col">id</th>
                <th>name</th>
                <th>url</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($tenants as $tenant)
        <tr>
          <th> {{$tenant->id}} </th>
          <td> {{$tenant->name}} </td> 
          <td> <a href="tenants/{{$tenant->id}}">  {{$tenant->url}}  </a>    </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>


@endsection