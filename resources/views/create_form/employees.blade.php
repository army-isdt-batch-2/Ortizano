@php $active = 'Employees' @endphp
@extends('Layout.main')
@section('title', 'Create Employees')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Employee
                    </h4>
                </div>

                <div class="col-12">

                    <hr>
                </div>


                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">First Name</label>
                            <input type="Text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-4">
                            <label for="inputAddress" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-4">
                            <label for="inputAddress2" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="inputAddress2">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Contact</label>
                            <input type="tel" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Gender</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>

                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Department</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>
                                <option>Depart 2</option>
                                <option>Depart 3</option>

                            </select>
                        </div>



                        <div class="col-md-4">
                            <label for="inputAddress2" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="inputAddress2">
                        </div>

                        <div class="col-md-4">
                            <label for="inputAddress2" class="form-label">Basic Rate</label>
                            <input type="number" class="form-control" id="inputAddress2">
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">PhilHealth Contribution table</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">SSS Contribution table</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>

                            </select>


                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">PAG IBIG Contribution Table</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>

                            </select>


                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Income Tax table</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>

                            </select>


                        </div>



                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection