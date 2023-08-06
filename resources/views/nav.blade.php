{{--  <style>
    <!-- Add the necessary Bootstrap CSS link here
    -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</style>
<nav>
    <ul class="nav">    
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="route('posts.index')">posts</a>
                <a class="dropdown-item" href="route('home')">Home</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
</nav>

<!-- Add the necessary Bootstrap JS and jQuery dependencies here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    --}}

<nav>
    <ul class="nav">    
        <li class="nav-item dropdown">
            {{--  dropdown list shown data-bs-toggle="dropdown"  --}}
            <a class="nav-link dropdown-toggle" href="#" id="Droplist" role="button" data-toggle="dropdown"
                aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
                {{--  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">  --}}

                Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="Droplist">
                <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
                <a class="dropdown-item" href="{{ route('posts.create') }}">create</a>
                
            </div>
        </li>
    </ul>
</nav>

