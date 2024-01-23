@extends('layouts.master')

@section('page')
<h1 class="aaa"><a href="index.html">Edit Product</a></h1>
<div class="dv1">
    <div class="mb-3 row label">
                <label class=" col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                <input type="Text" class="input1" >
                </div>
            </div>
           <div class="mb-3 row label">
                <label class=" col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                <input type="Text" class="input1" >
                </div>
            </div>
            <div class="mb-3 row label">
                <label class="col-sm-2 col-form-label">QTY</label>
                <div class=" col-sm-10">
                <input type="number" class="input1">
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Price In</label>
                <div class="col-sm-10">
                <input type="Number" class="input1">
                </div>
            </div>
              <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Price Out</label>
                <div class="col-sm-10">
                <input type="Number" class="input1">
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                <input type="Text" class="input1" >
                </div>
            </div>
        <button class="btn3">Submit</button>
    </div>
@endsection