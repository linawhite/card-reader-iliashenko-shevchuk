
<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
          
        function get_data() {
            $datae = array(); 
            $datae[] = array( 
                'id' => $_POST['id'], 
                'name' => $_POST['name'], 
                'surname' => $_POST['surname'], 
                'age' => $_POST['age'], 
                'faculty' => $_POST['faculty'], 
            ); 
            return json_encode($datae); 
        } 
       
        if(file_put_contents( 
            "users.json", get_data())) { 
                echo $file_name .' file created'; 
            } 
        else { 
            echo 'There is some error'; 
        } 
    } 
?> 