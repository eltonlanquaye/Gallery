<?
    $_SESSION['username'] = 'Admin';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    
    <nav class="blue lighten-5" >
        <div class="nav-wrapper container ">
            <a href="#" class="brand-logo black-text">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down black-text">
                <li><a href="sass.html" class="black-text" >Sass</a></li>
                <li><a href="badges.html" class="black-text" >Components</a></li>
                <li><a href="collapsible.html" class="black-text" >JavaScript</a></li>
            </ul>
        </div>
    </nav>

    <div class="container"> 
        
        <section class="gallery-link" >
            <div class="wrapper">
                <h2 class="center">Gallery</h2>
                <div class="gallery-container">
                    <a href="#">
                        <div></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>This is a title</h3>
                        <p>This is a paragraph</p>
                    </a>
                </div>
                
                <?
                if(isset($_SESSION['username'])) {
    
                    echo
                        '<div class="gallery-upload center container">
                            <form action="Include/gallery-upload-inc.php" method="post" enctype="multipart/form-data">
                                
                                <input type="text" name="filename" placeholder="File name...">
                                <input type="text" name="filetitle" placeholder="Image title...">
                                <input type="text" name="filedesc" placeholder="Image desc...">
                                <input type="file" name="file" >
                                <button class="btn" name="submit" type="submit">Submit</button>
                                
                            </form>
                        </div>';
                }
                ?>
    
            </div>
        </section>
    
    
        <section></section>
    </div>


    <footer></footer>
</body>

</html>