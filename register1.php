

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
                <form action="" method="post" class="border rounded py-5 px-3 mt-5 shadow" id="registerForm">
                    <center> <h2>Register Form</h2></center>
                    <div class="mt-3">
                        <label for="" class="form-label">Firstname</label>
                        <input type="text" class="form-control" name="username" id="">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Lastname</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mt-3">
                        <input type="submit" class="btn btn-primary" value="Submit" name="register">
                        <a href="./login1.php" class="btn btn-dark">Login </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script>
        // Handle form submission
$(document).ready(function(){
    $("#registerForm").submit(function(e) {
            e.preventDefault(); 
            var username = $("#username").val(); 
            var password = $("#password").val(); 
            alert(password + username);
            
            $.ajax({
                url: "register.php", 
                type: "POST", 
                data: {
                    username: username,
                    password: password,
                    register: true 
                },
                success: function(response) {
                    
                    alert(response);
                },
                error: function() {
                    
            alert("Error in registration request. Please try again.");
                }
            });
        });
})
    </script>
</body>

</html>