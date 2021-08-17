@extends('layouts.starlight')
@section('title')
    dashboard
@endsection
@section('orders')
active
@endsection
@section('breadcrumb')
   <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{url('home')}}">Dashboard</a>
        <span class="breadcrumb-item active">orders</span>
      </nav>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
              
                <div class="card ">
  <div class="card-header text-white bg-info">
    
<div class="row">
  <div class="col-6">
    orders
  </div>
  
</div>

  </div>
  <div class="card-body">
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
  
    {{-- <th scope="col">    </th> --}}
      <th scope="col">order id</th>
      {{-- <th scope="col">service name</th> --}}
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
 
 
      @forelse ($orders as $ccc)
      
    <tr>
      
      {{-- <td>{{$ccc->id}}</td> --}}
      {{-- <td>{{App\Models\Product::find($ccc->product_id)->product_name}}</td> --}}
      <td>{{$loop->index+1}}</td>
      <td>{{$ccc->customer_name}}</td>
      <td>{{$ccc->customer_phone}}</td>
      <td>{{$ccc->customer_address}}</td>
      <td>{{$ccc->created_at->diffForHumans()}} </td>
    
    </tr>
    @empty 
    <tr class="text-center"><td class="text-danger" colspan="50">
          No data to show
        </td></tr>
    @endforelse
   
    
</tbody>
</table>

</div>













<div class="card-header text-white bg-info">
    
<div class="row">
  <div class="col-6">
    order details
  </div>
  
</div>

  </div>

<div class="card-body">
 
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
    <th scope="col">order id</th>
    <th scope="col">service name</th>
    <th scope="col">service time</th>
    <th scope="col">quantity</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      @forelse ($name as $ccc)
      {{-- <td>{{$ccc->id}}</td> --}}
      <td>{{$loop->index+1}}</td>
      <td>{{App\Models\Product::find($ccc->product_id)->product_name}}</td>
      <td>{{App\Models\Product::find($ccc->product_id)->product_time}}</td>
      <td>{{$ccc->quantity}}</td>

    </tr>

    @empty 
    <tr class="text-center"><td class="text-danger" colspan="50">
      No data to show
        </td></tr>
        @endforelse
  </tbody>
</table>


</div>


</div>
</div>

</div> 
         


@endsection
