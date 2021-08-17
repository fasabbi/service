@extends('layouts.starlight')
@section('title')
    dashboard
@endsection
@section('category')
active
@endsection
{{-- @section('breadcrumb')
   <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{url('home')}}">Dashboard</a>
        <span class="breadcrumb-item active">Category</span>
      </nav>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('starlight/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('starlight/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('starlight/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet"  href="{{asset('starlight/css/starlight.css')}}">

    <link href="{{asset('starlight/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('starlight/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('starlight/lib/select2/css/select2.min.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
  </head>

  <body>


    <!-- ########## START: RIGHT PANEL ########## -->
    
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{('home')}}">Dashboard</a>
        <span class="breadcrumb-item active">Category</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Data Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
         
               
  <div class="card-header text-white bg-info">Add category</div>
  

    <form action="{{ url('category/post') }}" method="POST">
        @csrf
<div class="form-group">
<input type="text" class="form-control" name="category_name"  placeholder="Enter category name">
@error('category_name')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
<label>sub-category name</label>
<input type="text" class="form-control" name="subcategory_name"  placeholder="Enter sub-category name" value="{{ old('subcategory_name') }}">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
<br>
<br>
  @if (session('status'))
 <p class="alert alert-success">
  {{session('status')}}
      </p>
  @endif
</form>


          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th>id</th>
                  <th >category_name</th>
                  <th >created_at</th>
                  <!-- <th class="wd-10p">Salary</th> -->
                  <th >action</th>
                  <th>updated_at</th>
                </tr>
              </thead>
              <tbody>
                  @forelse ($categories as $cc)
      
    <tr>
      
      <td>{{$loop->index+1}}</td>
      <td>{{$cc->category_name}}</td>
      <td>{{$cc->created_at}}</td>
      
     
        <td>
          
          <a  href="{{url('category/edit')}}/{{$cc->id}}" type="button" class="btn btn-dark">Edit</a>
  <a  href="{{url('category/delete')}}/{{$cc->id}}" type="button" class="btn btn-danger">Delete</a>
</td>

<td>
        @if ($cc->updated_at)

        {{$cc->updated_at->diffForHumans()}}

        @else
          -----
        @endif
        
      
      </td>


</tr>
@empty
<tr class="text-center"><td class="text-danger" colspan="50">
  No data to show
</td></tr>
@endforelse

</div>
                <!-- <tr>
                  <td>Donna</td>
                  <td>Snider</td>
                  <td>Customer Support</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                </tr> -->
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Deleted Category &amp; </h6>
          <p class="mg-b-20 mg-sm-b-30">you can restore category .......................force delete will delete them forever .</p>

          <div class="table-wrapper">
            <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">id</th>
                  <th class="wd-15p">category_name</th>
                  <th class="wd-20p">deleted_at</th>
                  <th class="wd-10p">action</th>
                </tr>
              </thead>
              <tbody>
                
                     @forelse ($deletedcategories as $dd)
      
    <tr>
      
      <td>{{$loop->index+1}}</td>
      <td>{{$dd->category_name}}</td>
      <td>{{$dd->updated_at}}</td>
      
      <td>
        
            <a  href="{{url('category/restore')}}/{{$dd->id}}" type="button" class="btn btn-success">Restore</a>
            
        <a  href="{{url('category/force/delete')}}/{{$dd->id}}" type="button" class="btn btn-danger">Force Delete</a>
    
      </div>
    </td>
    
    
  </tr>
  @empty
  <tr class="text-center"><td class="text-danger" colspan="50">
    No data to show
  </td></tr>
  @endforelse 

  {{-- <td>{{$cc->created_at->diffForHumans}}</td> --}}
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->


      

      </div><!-- sl-pagebody -->
      
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('starlight/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('starlight/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('starlight/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('starlight/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>

    <script src="{{asset('starlight/js/starlight.js')}}"></script>


    <script src="{{asset('starlight/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('starlight/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('starlight/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('starlight/lib/select2/js/select2.min.js')}}"></script>

    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

  </body>
</html>
