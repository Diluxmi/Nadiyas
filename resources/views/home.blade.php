@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
              <div class="col-xl-12 stretch-card grid-margin">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E2C055;;">
        <div class="card-body">
            <div class="row no-gutters align-items-center" >
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h3>
                    Nadiyas Textile Pvt.Ltd </h3></div>
                  
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>

  <div class="row">
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E6A8F5;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Number of Department</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Models\Department::count() }}</div>
                </div>
                <div class="col-auto">
                  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #88ADF6;" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Number of Customer</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Models\Customer::count() }}</div>
                </div>
                <div class="col-auto">
                
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #90D662;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Sales</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Models\Customer::count() }}</div>  
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #DE3163;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Number of Subject</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Models\User::count() }}</div>
                </div>
                <div class="col-auto">
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
