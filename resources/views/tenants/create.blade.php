@extends('main')
{{-- @section('title', '| Create New Tenant') 

@endsection  --}}
 {{-- @section('stylesheets')
   <link rel="stylesheet" href="css/parsley.css">
@endsection  --}}

@section('content')
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Tenant</h1>
            <hr>
            <form action="/tenants" method="POST">
                @csrf
                <label for="site_name">site name</label><br>
                <input type="text" value=""  name="site_name"><br>

                <label for="subdomain">subdomain</label><br>
                <input type="text" value="" name="subdomain">.digitalrenter <br><br> 

                <input type="submit" value="Submit">
            </form> 
        </div>
    </div>


@endsection

@section('scripts')
<script src="js/parsley.min.js">    

</script>
@endsection







