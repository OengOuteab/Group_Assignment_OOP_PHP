@extends('layouts.master')

@section('page')
<h1 class="aaa"><a href="index.html">Edit Employee</a></h1>
<div class="dv1">
    <div class="mb-3 row label">
                <label class=" col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                <input type="Text" class="input" >
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                <select class="input" >
                    <option value="1" selected>Male</option>
                    <option value="2">Female</option>
                </select>
                </div>
            </div>
            <div class="mb-3 row label">
                <label class="col-sm-2 col-form-label">Date Of Birth</label>
                <div class=" col-sm-10">
                <input type="date" class="input">
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Place Of Birth</label>
                <div class="col-sm-10">
                <input type="Number" class="input">
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="Number" class="input">
                </div>
            </div>
           <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Employee Title</label>
                <div class="col-sm-10">
                <select class="input" >
                    <option value="" selected>Sale</option>
                    <option value="">HR</option>
                    <option value="">Cashiers</option>
                    <option value="">Store Manager</option>
                </select>
                </div>
            </div>
        <button class="btn3">Submit</button>
    </div>
@endsection