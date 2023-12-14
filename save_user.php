
<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
          
        function get_data() { 
            // "id": "1234567890",
            // "name": "Lina",
            // "surname": "Iliashenko",
            // "age": "19",
            // "age": "FEI"
            $datae = array(); 
            $datae[] = array( 
                'id' => $_POST['id'], 
                'name' => $_POST['name'], 
                'surname' => $_POST['surname'], 
                'age' => $_POST['age'], 
                'age' => $_POST['age'], 
            ); 
            return json_encode($datae); 
        } 
          
        $name = "users"; 
        $file_name = $name . '.json'; 
       
        if(file_put_contents( 
            "$file_name", get_data())) { 
                echo $file_name .' file created'; 
            } 
        else { 
            echo 'There is some error'; 
        } 
    } 
?> 