@extends('EPYogi.app')

@section('register')
   
   <!-- Outer container -->
   <div class="container">
       <!-- Heading -->
            <div class="row">
               hey
            </div>
       <!-- Heading-end -->

       <!-- Heading-2 -->
         <div class="row">

            <!-- Buttons -->
                <div class="row">
                hey
                </div>
            <!-- Buttons-end -->

            <!-- Fields -->
                <div class="Fields">
                    <form action="#">
                        <div class="form-group fname">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="form-group lname">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname">
                        </div>   
                    </form>
                </div>
            <!--Fields-end-->

         </div>  
      <!-- Heading2-end -->

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
   <!-- Outer container end -->


@endsection