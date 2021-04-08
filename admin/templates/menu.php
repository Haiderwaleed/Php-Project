
<nav>
        <ul>
            <li><a href="index-pages.php">pages</a></li>
            <li><a href="index-users.php">users</a></li>
            <li><a href="index-portfolio.php">portfolio</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>


</nav>

    <style>
body {
    background: #fff;
}

nav {
    height: 20vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

nav ul li {
    display: inline-block;
    text-decoration: none;

}

nav ul li:not(:last-child) {
    margin-right: 10px;
}
nav ul li a {
    display: block;
    height: 50px;
    padding: 0 20px;
    background-color: teal;
    color: #fff;
    text-align: center;
    line-height: 50px;
    border-radius: 3px;
    text-transform: uppercase;
    transition: 300ms all;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: tomato;
    text-decoration: none;
}
    </style>