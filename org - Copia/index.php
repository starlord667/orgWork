<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css local -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <!-- css online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- css responsive -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/css_500.css">    
    <link rel="stylesheet" type="text/css" href="./css/css_1150.css">     -->
    <title>OrgWork</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current page)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Get App</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <script>
                imagesBanner();
            </script>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <div class="container text-destak">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores harum pariatur, provident quibusdam vero
            eius odio officia voluptates ab maiores? Suscipit dicta rem voluptas possimus voluptatum accusantium
            nobis, maiores animi!</p>
        
        <div class="row">            
            <div class="col-4 text-block">
                <img src="./images/icons/ic_mision.png" alt="">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, porro at, recusandae nisi
                    labore ea, pariatur dolorum soluta vero unde adipisci excepturi repellat expedita qui ducimus
                    explicabo quidem ad beatae!</p>
            </div>
            <div class="col-4 text-block" id="center-card">
                <img src="./images/icons/ic_vision.png" alt="">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eius blanditiis deleniti impedit.
                    Tenetur nesciunt veritatis expedita laudantium saepe. Rerum tempore ipsa sint facilis natus tempora
                    ullam! Quo, id odio.</p>
            </div>
            <div class="col-4 text-block">
                <img src="./images/icons/ic_values.png" alt="">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ullam officia! Veniam
                    delectus, non inventore quaerat in, fugiat et architecto autem vero commodi excepturi accusamus
                    eveniet at quis ipsum iure?
                </p>
            </div>
        </div>
    </div>

    <div class="separate">
        <img src="images/icons/ic8_up.png" alt="">
    </div>

    <div class="row things">
        <div class="col-6 social_download">
            <div class="download">
                <h3>download</h3>
                <div class="btn_download">
                    <button type="button" class="btn btn-outline-primary">get app</button>
                    <span> for android</span>
                    <br>
                    <br>
                    <button type="button" class="btn btn-outline-primary disabled">get app</button>
                    <span> for IOS (in work)</span>
                </div>
            </div>

            <div class="social">
                <h3 id="so">follow us</h3>
                <div class="btn_social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <h3>Contact Us</h3>
            <?php 
            if($_SERVER['REQUEST_METHOD'] !== 'POST') { 
            
            ?>
            <form action="testmail.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" placeholder="Your email">
                    <small id="emailHelp" class="form-text text-muted">We never share your email address</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">name</label>
                    <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">your comment</label>
                    <textarea class="form-control" id="Comment" name="Comment" rows="3"></textarea>
                </div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" value="Answer" autocomplete="off"> Answer
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" value="Sugest" autocomplete="off"> Sugest
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" value="Bug Report" autocomplete="off"> Bug Report
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" value="Others" autocomplete="off"> Others
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <?php 
                } else {
                
                }
            ?>
        </div>
    </div>


    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Desenvolvido pela <a href="">OrgWork</a> &copy; 2020
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- online -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- locais -->
    
    <script src="https://www.gstatic.com/firebasejs/7.16.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.16.0/firebase-analytics.js"></script>
    <script type="text/javascript" src="./Java/main.js">
</script>

</body>

</html>
