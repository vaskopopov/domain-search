<?php
            error_reporting(0);
            $_POST = json_decode(file_get_contents('php://input'), true);

            

            if(isset($_POST['domain']) && $_POST['domain'] != ''){
                $domain = $_POST['domain'];
                    
                if(check_for_valid_URL($domain)){
                    
                        
                    $response = [];
                    $mail = "
                    
                    <form id='form_contact_us' action='mail_receive.php' method='POST'>
                    <input type='hidden' value='{$domain}' name='domain'>
                    <div class='form-group'>
                    <label for='enquiry_email'>Email address</label>
                    <input type='email' id='enquiry_email' class='form-control' placeholder='Send us your enquiry... ' name='email'>
                    </div>
                    <div class='form-group'>
                    <label for='enquiry_name'>Your name (optional)</label>
                    <input type='text' id='enquiry_name' class='form-control' placeholder='Your name... ' name='name'>
                    </div>
                    <div class='form-group'>
                    <label for='enquiry_phone'>Ypur phone (optional)</label>
                    <input type='text' id='enquiry_phone' class='form-control' placeholder='Your phone number... ' name='phone'>
                    </div>
                    <button type='submit' class='btn btn-info'>Submit mail</button>
                    </form>
                    ";
                    if (gethostbyname($domain) != $domain ) {
                        $response = ["message" => "Domain <strong><em>".$domain."</em></strong> is already taken, but We can try to get it for you. <h4>Send us your email so we can inform you when you can have it, or if not, with best alternative for you.</h4>",'status' => false, "mail" => $mail];
                    }
                    else {
                        $response = ["message" => "Domain <strong><em>".$domain."</em></strong> is free for registration. <h4>Send us your email so we can reserve it for you.</h4>", "bg_color" => 'green', 'status' => true, "mail" => $mail];
                    }
                    // $response['mail'] = $mail;
                }
            }

            function check_for_valid_URL($url){
                $pattern = '/^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/';
                if (!preg_match($pattern, $url)) {
                    return false;
                } else {
                    return true;
                }
            }
            
            
            // var_dump($response);
            echo json_encode($response);
?>