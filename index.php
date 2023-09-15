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
        <form action="" method="get">
            <div class="form-row align-items-center">
                <div class="col-md-6 mb-3">
                    

                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <div class="input-group-text">www.</div>
                        </div>
                        <input type="text" class="form-control" id="domainCheck" name='domain' required placeholder="Desired domain" value="<?php if(isset($_GET['domain'])){ echo $_GET['domain']; } ?>">
                    </div>

                </div>
                <?php if(!isset($_GET['domainExtension'])) {$tld = '.com';} ?>
                <div class="col-md-1 mb-3">
                    <select class="custom-select" id="domainExtension" required name='domainExtension'>
                        <!-- <option selected disabled value="">...</option> -->
                        <option value='.com' <?php if ($tld == '.com') { ?>selected="true" <?php }; ?>>.com</option>
                        <option value='.edu' <?php if ($tld == '.edu') { ?>selected="true" <?php }; ?>>.edu</option>
                        <option value='.org' <?php if ($tld == '.org') { ?>selected="true" <?php }; ?>>.org</option>
                        <option value='.gov' <?php if ($tld == '.gov') { ?>selected="true" <?php }; ?>>.gov</option>
                    </select>
                </div>
                <div class="col-auto mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <?php
            error_reporting(0);
            if(isset($_GET['domain'])){
                $domain = $_GET['domain'].$_GET['domainExtension'];
                $tld=$_GET['domainExtension'];
                if ( gethostbyname($domain) != $domain ) {
                    echo "<h3 class='fail'>Domain ".$domain." Already Registered!</h3>";
                }
                else {
                    echo "<h3 class='success'>Hurry, your domain <em>".$domain."</em> is available!, you can register it.</h3>";
                }
            }
        ?>
    </div>   
    <style type="text/css">
            body, h2, h3 {
                font-weight: normal;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                color: #333;
            }
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 90vh;
            }

            h3.success {
                color: #008000;
                text-align: center;
            }
            h3.fail {
                color: #ff0000;
                text-align: center;
            }
            
            .searchbar {
                padding: 6px 10px;
                width: 400px;
                max-width: 100%;
                border: none;
                margin-top: 1px;
                margin-right: 8px;
                font-size: 1em;
                border-bottom: #333 solid 2px;
                transition: 0.3s;
            }
            .searchbar::placeholder {
                font-size: 1em;
            }
            .searchbar:focus {
                outline: none;
            }
            .btn-search {
                cursor: pointer;
                text-decoration: none !important;
                font-size: 1.5em;
                padding-top: 5px;
                padding-bottom: 5px;
                background-color: transparent;
                border: none;
                outline: none;
            }
        </style>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
