@php $active = 'Deductions' @endphp
@extends('Layout.main')
@section('title', 'Create Deductions')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Deduction
                    </h4>
                </div>

                <div class="col-12">

                    <hr>
                </div>


                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Contribution Type</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>SSS</option>
                                <option>PAGIBIG</option>
                                <option>PHILHEALTH</option>
                            </select>

                        </div>


                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Base Range</label>
                            <input type="number" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Monthly Contribution</label>
                            <input type="number" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-4">
                            <label for="inputEmail4" class="form-label">Employee Share</label>
                            <input type="number" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-4">
                            <label for="inputEmail4" class="form-label">Employer Share</label>
                            <input type="number" class="form-control" id="inputEmail4">
                        </div>







                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection