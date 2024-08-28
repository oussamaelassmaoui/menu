@extends('layouts.dashboardnav')

@section('content')

    <div class="container-xxl"> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Categories</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <form class="row g-2">
                                    
                                    
                                    <div class="col-auto">
                                        <a href="{{ route('Categories.create') }}">
                                      <button type="button" class="btn btn-primary"  ><i class="fa-solid fa-plus me-1"></i> Add Categorie</button>
                                    </a>
                                    </div><!--end col-->
                                </form>    
                            </div><!--end col-->
                        </div><!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        
                        <div class="table-responsive">
                            <table class="table mb-0 checkbox-all" id="datatable_1">
                                <thead class="table-light">
                                  <tr>

                                    <th class="">Name</th>
                                    <th>Listed Date</th>
                                    <th class="text-end">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $Categories as $Categorie )
                                    <tr>
                                       
                                        <td class="ps-0">
                                            
                                            <p class="d-inline-block align-middle mb-0">
                                                {{$Categorie->name}}
                                            </p>
                                        </td>
                                        
                                        <td><p>{{$Categorie->updated_at}}</p> </td>
                                      
                                       
                                        <td class="text-end">
                                            <a href="{{ route('Categories.edit', $Categorie->id) }}">
                                                <i class="las la-pen text-secondary fs-18"></i>
                                            </a>
                                            <form action="{{ route('Categories.destroy', $Categorie) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }">
                                                    <i class="las la-trash-alt text-secondary fs-18"></i>
                                                </a>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                    @empty
                                            <h4>No Data Found!</h4>
                                        @endforelse
                                                                                                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->                                     
    </div><!-- container -->
    
   
   
    
</div>


















  
    
        
        
            
      
   


    
@endsection
