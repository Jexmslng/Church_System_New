@include('partials.HomeHeader')

<div class="LoginContainer">
    <form>
        <h3>Log In</h3>
        <div class="FormLabel">
        <label>Username</label>
        <input type="text" name="">
        <br> <br>
        <label>Password </label>
        <input type="Password" name="">
        </div>
        <br> <br>
        <button>Log In</button>			
    </form>
    <p class="Form"><a href="#">Forgot Password?</a></p>
    <h3 class="Formh3"><a class="Form" href="/signup">Sign Up</a></h3>
</div>


@include('partials.HomeFooter')