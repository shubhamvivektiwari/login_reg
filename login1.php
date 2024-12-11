

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <form action="" method="post" id="frm" class="border rounded py-5 px-3 mt-5 shadow bg-info">
                    <center>
                        <h2>Login Form</h2>
                    </center>
                    <div class="mt-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mt-3">
                        <input type="submit" class="btn btn-primary" value="Submit" name="register">
                        <a href="./register.php" class="btn btn-warning">Sing in</a>
                    </div>
                </form>
            </div>
        </div>
    <div id="message"></div> 

    </div>



    <script>
        $(document).ready(function() {
            $("#frm").submit(function(e) {
                
                e.preventDefault(); 
                
                var username = $("#username").val();
                var password = $("#password").val();
                
                //   alert(username+password);
            
            
            $.ajax({
                url: "login.php", 
                method: "POST",
                data: {
                    username: username,
                    password: password,
                    register: true 
                },
                success: function(response) {

                    // alert(response);
                    if (response === 'success') {
                        window.location.href = "./index.php";
                        // alert("Welcome to index page")
                    } else {
                        // $("#message").html("User not login");
                alert("User not login")
                    }
                }
            });
        });
        });
    </script>
</body>

</html>