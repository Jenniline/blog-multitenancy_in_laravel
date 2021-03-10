@extends('main') 

@section('title', '| All Tenants')
    
{{-- @endsection --}}

@section('content') 

    <div class="row mt-5">
        <div class="col-md-10">
          <h1>  All Digital Renter Tenants </h1>  
        </div>

        <div class="col-md-2">
            <a  href='tenants/create' class="btn btn-primary btn-block btn-h1-spacing p-3"> Create New Tenant </a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <hr>
    </div>

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
              <td> 
                <a href="tenants/{{$tenant->id}}">  {{$tenant->site_name}}/digitalrenter.com  </a>  <br>  
                {{-- <a href="http://{{$tenant->url}}.mysite.tenants">  {{$tenant->url}}.mysite.tenants  </a>   --}}
              </td>
            </tr>
            @endforeach
            
        </tbody>
      </table>
      

@endsection