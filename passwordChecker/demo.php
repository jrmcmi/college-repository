 <?php
        $password = "john123";

        if(validPasswordFunction($password) === true){
            echo "Passwords match";
        }else{
            echo "Wrong password";
        }

        function validPasswordFunction($password){
            $validPassword;

            if(preg_match("/^[a-z0-9]{6,}$/", $password)){
                $validPassword = true;
            }else{
                $validPassword = false;
            }
            return $validPassword;
        }
    ?>