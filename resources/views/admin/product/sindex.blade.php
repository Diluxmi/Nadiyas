@extends('layouts.admin.master')
@section('title','gindex')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
        <div class="float-left ml-2">Product</h2></div>
    </div>

    <div class ="float-end">  
        <a class="btn btn-primary btn-icon-spilt" href ="{{route('product.create')}}"> Create product</a>
    </div>
    
</div>
           
      
        <br>
        <div class="float-right">
        <table class="table">
              
                  
               <tbody>
               <tr>
               {!! Form::open()->route('product.index')->method('get') !!}
                <td>
                  {!!Form::text('department','Department Name')->options('$departments')!!}
                </td>
                <td>
                  {!!Form::text('category','Category')->options('$categories')!!}
                </td>
               <td>
               <button class="btn btn-primary btn-icon-spilt"><span class="text">Select</span></button>
              
              </td>
              {!! Form::close() !!}

              </tr>
            </tbody>
            </table>
        </div>
       

      </div>      
      </div>
      </div>


      @section('js')
  
      @endsection

            
