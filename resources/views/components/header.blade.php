<header>
    <h1>Videogames:</h1>

    @auth
    
        <h3>Hello {{ Auth::user() -> name }}</h3>
        <a href="{{ route('logout') }}" class="btn btn-danger"> LOGOUT</a href="">
        
    @else 

        <form class="register" action="{{ route('register') }}" method="POST">
            @method('POST')
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="email">email:</label>
            <input type="text" name="email">

            
            <label for="password">password:</label>
            <input type="password" name="password">

            <label for="password_confirmation">password Confirmation:</label>
            <input type="password" name="password_confirmation">
            <br>
            <br>
            <input type="submit" value="REGISTER">
        
        </form>

        <form action="{{ route('login') }}" method="POST">
        
            @method('POST')
            @csrf
    
            <label for="email">email</label>
            <input type="text" name="email">
    
            
            <label for="password">password</label>
            <input type="password" name="password">
            <br>
            <br>
            <input type="submit" value="LOGIN ">
    
        </form>
    

    @endauth
</header>