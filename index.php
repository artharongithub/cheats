 <?php 
	//$current_time = date("H:m");
	//echo '<i><strong>'.$current_time.'</i></strong><br><hr></br>';
	//$filename = 'timestamp.json'; 
    
    //echo $file = file_get_contents($filename);  
	
	$id = '10';
	$title = '2';
	$content = '30';
	
	
	
	$AdditionalArray = array(
                'id' => $id,
                'title' => $title,
                'content' => $content
                );

                //open or read json data
                echo $data_results = file_get_contents('timestamp.json');

                $tempArray = json_decode($data_results);
                //append additional json to json file
                $tempArray=$AdditionalArray;
                $jsonData = json_encode($tempArray);

            file_put_contents('timestamp.json', $jsonData); 
	//file_put_contents($filename, $current_time);
	?> 
	
