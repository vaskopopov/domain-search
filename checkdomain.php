<?php
            error_reporting(0);
            $_POST = json_decode(file_get_contents('php://input'), true);

            $mail = `
                <div id="mail_us">
                    <input type="email" placeholder="Send us your enquiry... " name='email'>
                    <button>Submit mail</button>
                </div>
            `;

            if(isset($_POST['domain']) && $_POST['domain'] != ''){
                $domain = $_POST['domain'];
                    
                if(check_for_valid_URL($domain)){
                        
                    $response = [];
                    if (gethostbyname($domain) != $domain ) {
                        $response = ["message" => "Domain <strong><em>".$domain."</em></strong> is already taken, but We can try to get it for you. <h4>Send us your email so we can inform you when you can have it, or if not, with best alternative for you.</h4>", "bg_color" => 'red', 'valid' => $validateURL];
                    }
                    else {
                        $response = ["message" => "Domain <strong><em>".$domain."</em></strong> is free for registration. <h4>Send us your email so we can reserve it for you.</h4>", "bg_color" => 'green', 'valid' => $validateURL];
                    }
                    $response['message'] = $response['message'] . $mail;
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
            
            

            echo json_encode($response);
?>