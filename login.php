<?php
session_start();
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
    header("Location:./");
    exit;
}
require_once('DBConnection.php');
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | Cuevas Bakeshop</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <style>
	@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');	
	
        html, body{
            height:100%;
			scroll-behavior: smooth;
			font-family: 'Cabin', sans-serif;
        }
        body{
            background-image:url('./images/background.jpg') !important;
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center center;
        }
        h1#sys_title {
            font-size: 5em;
			font-family: 'Cabin', sans-serif;
            text-shadow: 3px 3px 10px #000000;
        }
        @media (max-with:700px){
            h1#sys_title {
                font-size: inherit !important;
            }
        }
    </style>
</head>
<body class="">
   <div class="h-100 d-flex jsutify-content-center align-items-center">
       <div class='w-100'>
	   <a href="home.html" class="logo"><center><img src="Logo cuevas.png" width="203" height="117" alt="Cuevas Logo"></center></a>
        <h1 class="py-5 text-center text-light px-4" id="sys_title">Cuevas Bakeshop</h1>
        <div class="card my-3 col-md-4 offset-md-4">
            <div class="card-body">
                <form action="" id="login-form">
                    <center><small>Please enter your credentials.</small></center>
                    <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" id="username" autofocus name="username" class="form-control form-control-sm rounded-0" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-sm rounded-0" required>
                    </div>
                    <div class="form-group d-flex w-100 justify-content-end">
                        <button class="btn btn-sm btn-primary rounded-0 my-1">Login</button>
                    </div>
                </form>
            </div>
        </div>
       </div>
   </div>
</body>
<script>
    $(function(){
        $('#login-form').submit(function(e){
            e.preventDefault();
            $('.pop_msg').remove()
            var _this = $(this)
            var _el = $('<div>')
                _el.addClass('pop_msg')
            _this.find('button').attr('disabled',true)
            _this.find('button[type="submit"]').text('Loging in...')
            $.ajax({
                url:'./Actions.php?a=login',
                method:'POST',
                data:$(this).serialize(),
                dataType:'JSON',
                error:err=>{
                    console.log(err)
                    _el.addClass('alert alert-danger')
                    _el.text("An error occurred.")
                    _this.prepend(_el)
                    _el.show('slow')
                    _this.find('button').attr('disabled',false)
                    _this.find('button[type="submit"]').text('Save')
                },
                success:function(resp){
                    if(resp.status == 'success'){
                        _el.addClass('alert alert-success')
                        setTimeout(() => {
                            location.replace('./');
                        }, 2000);
                    }else{
                        _el.addClass('alert alert-danger')
                    }
                    _el.text(resp.msg)

                    _el.hide()
                    _this.prepend(_el)
                    _el.show('slow')
                    _this.find('button').attr('disabled',false)
                    _this.find('button[type="submit"]').text('Save')
                }
            })
        })
    })
</script>
</html>