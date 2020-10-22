@extends('main')
{{-- @section('title', '| Create New Tenant') 

@endsection  --}}
 {{-- @section('stylesheets')
   <link rel="stylesheet" href="css/parsley.css">
@endsection  --}}

@section('content')
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form action="/tenants" method="POST">
                @csrf
                <label for="fname">name</label><br>
                <input type="text" value=""  name="name" ><br>
                <label for="lname">url</label><br>
                <input type="text"value="" name="url">.blog <br><br> 
                <input type="submit" value="Submit">
              </form> 
        </div>
    </div>


@endsection

@section('scripts')
<script src="js/parsley.min.js">    

</script>
@endsection







