<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>domdefluir</title>
</head>
<body>

    <div class = "container-fluid">
        <section id = "menu-principal">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">MARCA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class = col-lg-12>
                        <ul class="navbar-nav" id = "menu-direita">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>   
                    </div>
                </div>
            </nav>
        </section>

        <section id = "1" style = "height: 480px;">
            <div class = "row">
                <div class = "col-lg-12"  style = "text-align: center;">
                    <h1> SEÇÃO 1 </h1>
                </div>
            </div>

            <div class = "row">
                <div class = "col-lg-4" style = "padding: 0">
                    <img src="images/s1.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 1
                </div>
                <div class = "col-lg-4" style = "padding: 0">
                    <img src="images/s2.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 2
                </div>
                <div class = "col-lg-4" style = "padding: 0">
                    <img src="images/s3.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 3
                </div>
            </div>
        </section>


        <section id = "2" style = "background-color: pink;">
            <h1 style = " color:white; text-align: center;"> SEÇÃO 2 </h1>
            <div class = "row">
                <div class = "col-lg-4">
                    <img src="images/s1.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 1
                </div>
                <div class = "col-lg-4">
                    <img src="images/s2.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 2
                </div>
                <div class = "col-lg-4">
                    <img src="images/s3.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 3
                </div>
            </div>
            <div class = "row" style = "margin-top: 5%">
                <div class = "col-lg-4">
                    <img src="images/s1.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 4
                </div>
                <div class = "col-lg-4">
                    <img src="images/s2.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 5
                </div>
                <div class = "col-lg-4">
                    <img src="images/s3.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 6
                </div>
            </div>
            <div class = "row" style = "margin-top: 5%">
                <div class = "col-lg-4">
                    <img src="images/s1.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 7
                </div>
                <div class = "col-lg-4">
                    <img src="images/s2.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 8
                </div>
                <div class = "col-lg-4">
                    <img src="images/s3.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    TAROLOGIA 9
                </div>
            </div>
        </section>


        <section id = "3" style = "background-image: url(images/maxresdefault.jpg); height: 500px; margin-top: 5%">
            <h1 style = " color:white; text-align: center;"> SEÇÃO 3 </h1>
        </section>


        <section id = "4">
            <h1 style = " color:white; text-align: center;"> SEÇÃO 4 </h1>

            <form>
                <div class="form-group">
                    <div class = "row">
                        <div class = "col-lg-6">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class = "col-lg-6">
                            <label for="exampleInputPassword1">Telefone</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">  
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class = "row">
                        <div class = "col-lg-6">
                            <label for="exampleInputEmail1">Endereço</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class = "col-lg-6">
                            <label for="exampleInputPassword1">Bairro</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">  
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </section>

    </div>
</body>
</html>