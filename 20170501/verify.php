    <?php
    
        function findUser($id){
            require("./user.php");
            foreach ($user as $key => $value) {
                if ($id == $value) {
                    return $id;
                }
            }
            return "fail";
        }
        function findPW($id , $pw){
            require("./user.php");
            if ($userData[$id]['passwd']==$pw){
                echo $userData[$id]['email']." success";
            }else{
                echo $userData[$id]['email']." pw error";
            }
            
        }
    ?>
