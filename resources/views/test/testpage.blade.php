<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.parentlayout')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5" style="background: red;margin: 30px;height: 100px;"></div>
            <div class="col-md-5" style="background: red;margin: 30px;height: 100px;"></div>
            <div class="col-md-5" style="background: red;margin: 30px;height: 100px;"></div>

        </div>
        <div class="row">
            <div class="col-md-2" style="background: red;margin: 3px;height: 100px;"></div>
            <div class="col-md-2" style="background: red;margin: 3px;height: 100px;"></div>
            <div class="col-md-2" style="background: red;margin: 3px;height: 100px;"></div>
            <div class="col-md-2" style="background: red;margin: 3px;height: 100px;"></div>
            <div class="col-md-2" style="background: red;margin: 3px;height: 100px;"></div>

        </div>
        <div>
            <button id="testbtn" type="button" class="btn btn-primary">Primary</button>

        </div>
        <script>
            function testfct(){
                alert('test')
            }
            document.getElementById("testbtn").addEventListener("click", testfct)
        </script>
        <p>This is my body content.</p>

    </div>

@endsection