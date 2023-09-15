<?php
            error_reporting(0);
            
            if(isset($_POST['domain'])){
                $domain = $_POST['domain'];

                // if (filter_var($domain, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED ) === FALSE) {
                //     die($domain. ' is Not a valid URL');
                // }

                if ( gethostbyname($domain) != $domain ) {
                    return "<h3 class='fail'>Domain ".$domain." Already Registered!</h3>";
                }
                else {
                    return "<h3 class='success'>Hurry, your domain <em>".$domain."</em> is available!, you can register it.</h3>";
                }
            }


        ?>