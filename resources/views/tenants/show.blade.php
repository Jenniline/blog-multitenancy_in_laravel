@extends('main') 

@section('title', '| View Post')
<title>show Digital Renter Tenants</title> 


@section('content') 


<h1>  Hello , {{ $tenant->site_name}} welcome  </h1>


<table  class="table table-striped">
    <thead class="thead-dark">
      <tr>
                <th scope="col">id</th>
                <th>site name</th>
                <th>subdomain</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tenants as $tenant)
          <tr>
            <th> {{$tenant->id}} </th>
            <td> {{$tenant->site_name}} </td> 
            {{-- <td> <a href="tenants/{{$tenant->id}}">  {{$tenant->url}} </a>     </td> --}}
            <td> <a href="#">  {{$tenant->subdomain}} </a>     </td>

          </tr>
        @endforeach
        
    </tbody>
  </table>


@endsection