<!doctype html>
<html lang="en">
  <head>
    <style>
        /* .dropdown:hover .dropdown-menu{
            display:block;
        } */
.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

/* smth */
.form-registration {
  max-width: 330px;
  padding: 15px;
}

.form-registration .form-floating:focus-within {
  z-index: 2;
}

.form-registration input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-registration input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.form-addmovie{
  max-width: 100%;
  padding: 15px;
  background: black
}

.form-addmovie h3{
  margin-left: 30px;
}

.form-addmovie label{
  margin-left: 30px;
}
.form-addmovie input[type="text"]{
  max-width: 95%;
  margin-left: 30px;
}
.form-addmovie textarea{
  max-width: 95%;
  margin-left: 30px;
}
.form-addmovie button{
  margin-bottom: 20px;
  margin-right: 40px;
}

.form-addmovie input[type="date"]{
  max-width: 95%;
  margin-left: 30px;
}
.form-addmovie input[type="file"]{
  max-width: 95%;
  margin-left: 30px;
}
.footer{
  background: lightblue;
  color: red;
  padding-top: 50px;
  padding-bottom: 50px;
}
.footer content{
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.footer h3{
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.footer p{
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}




    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book App</title>
  </head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <body>

    @include('layouts.navbar')

    @yield('content')

    <footer>
        @include('layouts.footer')
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
