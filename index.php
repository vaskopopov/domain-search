<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <title>Domain search engine</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h3>Domain search engine</h3>
        <hr>
        <br/>
        <p class='text-capitalize'>please enter the desired domain</p>
        <form id="form" action="" method="post">
            <div class="form-row align-items-center">
                <div class="col-md-6 mb-3">
                    

                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <div class="input-group-text">www.</div>
                        </div>
                        <input type="text" class="form-control" id="domainCheck" name='domain' required placeholder="Your desired domain. E.g. mysite.com" value="<?php if(isset($_POST['domain'])){ echo $_POST['domain']; } ?>">
                    </div>

                </div>

                <div class="col-auto mb-3">
                    <button id="btn_checkdomain" class="btn btn-primary">Check</button>
                </div>
                <div class="col-auto mb-3">
                    <button id="btn_reset" class="btn btn-info">Reset check</button>
                </div>
            </div>
        </form>

        <div id="result"></div>
        
    </div>   
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</html>
