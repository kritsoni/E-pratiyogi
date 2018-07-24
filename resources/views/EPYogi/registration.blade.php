@extends('EPYogi.app')

@section('register')
   
   <!-- Outer container -->
   <div class="container outercontainer">
      <!-- First-Row -->
       <div class="row">E-Pratiyogi</div>
       <!-- Second-Row -->
       <div class="row">
            <div class="container innercontent">
                <div class="row">
                    <button type="button" class="btn button btn-arrow-right">Button1</button>
                    <button type="button" class="btn button btn-arrow-right">Button2</button>
                    <button type="button" class="btn button btn-arrow-right">Button3</button>
                    <button type="button" class="btn button btn-arrow-right">Button4</button>
                </div>
                <div class="row">
                    <div class="container content">
                        <label>Name:</label><br>
                        <input type="text"><br>
                        <label>Password:</label><br>
                        <input type="passward"><br>
                        <label>Confirm Password:</label><br>
                        <input type="passward">
                    </div>
                </div>
            </div>
       </div>  
       <button type="button" class="btn nextButton">Next Step</button>
   </div>


@endsection