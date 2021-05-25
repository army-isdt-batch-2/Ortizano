@php $active = 'Deductions' @endphp
@extends('Layout.main')
@section('title', 'Deductions')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5" >
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Deductions 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                    <a href="/Deduction/Create" class="btn btn-white pull-right">Create</button>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col">#</th>
                                    <th class="text-muted" scope="col">Base Range</th>
                                    <th class="text-muted" scope="col">Monthly</th>
                                    <th class="text-muted" scope="col">Employee</th>
                                    <th class="text-muted" scope="col">Employer</th>
                                    <th class="text-muted" scope="col">Created</th>
                                    <th class="text-muted" scope="col">Updated</th>
                                    <th class="text-muted" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection














