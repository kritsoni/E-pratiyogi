@extends('EPYogi.app')

@section('login')

<div class="login_container">
        <div class="image"><i class="fa fa-user" id="login_icon"></i></div>    
        <form action="#" class="form">  
            <!--username field-->
            <div class="form-group uname">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="email" class="form-control" placeholder="E-mail" id="email" autocomplete="off">
                </div>    
            </div>
            <!-- password field -->
            <div class="form-group password">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" id="password">
                </div>    
            </div> 
            <!-- submit field -->
            <div class="form-group password">
                <input type="submit" class="form-control login-button" value="LOGIN">
            </div>  
            <div class="form-group">
                <div class="check">
                    <input type="checkbox">
                    <label for="ef">Remeber Me</label>
                </div>
                <div class="forgot"><a href="#"><i>Forgot Password</i></a></div>
            </div>  
        </form>
</div>
<div class="line"></div>
<div class="reg_back">Don't have an account ? <a href="#"><i>REGISTER HERE</i></a></div>

@endsection