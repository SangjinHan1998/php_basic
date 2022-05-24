<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array1</title>
</head>
    <body>
        <h1>Array1</h1>
        <?php
        $color = array("red", "green", "cyan");
        /*
        for($i = 0; $i < count($color); $i++)
        {
            echo $color[$i]. '<br/>';
        }
        */

        /* three arrays in PHP 
        1. Indexed arrays
        2. Associative arrays
        3. Multidimensional arrays
        */

        /*
        1. Indexed array --> array(value1, value2, value3, ...);
        2. Associative array --> array(key1 => value1, key2 => value2, key3 => value3, ...);
        3. Multidimensional arrays --> key => array("key item1", "key item2", "key item3");
        */ 

        $color1 = array(
            '1' => "blue",
            '2' => "brown",
            '3' => "gray",
            'This array' => "Associative array"
        );


        foreach($color1 as $keys => $values)
        {
            echo $keys . '=> ' . $values . '<br />';
        }
        

        $color2 = array (
            'red' => array("red fruit", "red pen", "red effect"),
            'brown' => array("brown fruit", "brown pen", "brown effect"),
            'orange' => array("orange fruit", "orange pen", "orange effect")
        );

        foreach($color2 as $keys => $values)
        {
            echo 'Color Name - ' . $keys . '<br />';
            foreach($values as $sub_row) 
            {
                echo 'Color Item - ' . $sub_row . '<br />';
            }
        }

        // array_change_key_case
        
        /*
            Syntax - array_change_key_case(array, case(optional));
        */
        $employee_data = array (
            'John' => 24,
            'Alex' => 22,
            'Smith' => 33
        );
        echo '<pre>';
        print_r(array_change_key_case($employee_data, CASE_UPPER));
        echo '</pre>';

        // array_chunk() Function
        /*
            Syntax - array_chunk(array,size, preserve_key);
         */
        $study = array("math", "English", "German", "Japanese", "French", "Russian", "Chinese", "Spanish");

        $chunk_array = array_chunk($study, 3, true);

        foreach($chunk_array as $row) 
        {
            foreach($row as $sub_row)
            {
                echo $sub_row . '<br />';
            }
        }

        $lang = array (
            "C-programming" => "C",
            "PHP" => "Must do it 1",
            "JavaScript" => "Must do it 2",
            "Python" => "Must do it 3"
        );

        $chunk_array = array_chunk($lang, 2, true);

        foreach($chunk_array as $row) 
        {
            foreach($row as $sub_keys => $sub_rows)
            {
                echo $sub_keys . ' => ' . $sub_rows . '<br />';
            }
        }

        echo '<pre>';
        print_r($chunk_array);
        echo '</pre>';
        /*
        echo '<pre>';
        print_r($chunk_array);
        echo '</pre>';
        */

        // array_column() Function 

        // Syntax - array_column(array, column_key, index_key);
        $passenger_data = array (
            array (
                'id' => 1001,
                'name' => 'ManSoo',
                'city' => 'Berlin',
                'airline' => 'KoreaAir'
            ),
            array (
                'id' => 1002,
                'name' => 'Jack',
                'city' => 'Seoul',
                'airline' => 'LuftHansa'
            ),
            array (
                'id' => 1003,
                'name' => 'Malkova',
                'city' => 'LA',
                'airline' => 'PurpleAir'
            ),
            array (
                'id' => 1004,
                'name' => 'Nancy',
                'city' => 'NewYork',
                'airline' => 'SteakAir'
            )

        );

        $city = array_column($passenger_data, "city" , "id");
        echo '<pre>';
        print_r($city);
        echo '</pre>';


        // array_combine() Function 

        /* 
        Syntax - array_combine(keys, values);
        two arrays --> associative array 
        */
        $color3 = array("black", "gray", "yellow");
        $hash_code = array("#000000", "#808080", "FFD400");

        $array2 = array_combine($color3, $hash_code);

        echo '<pre>';
        print_r($array2);
        echo '</pre>';

        /*
            array_count_values() Function 

            syntax - array_count_values(array)
        */
        $color4 = array("black", "orange", "black", "black", "wine", "wine", "gray", "yellow");

        $count_array = array_count_values($color4);

        $color5 = array (
            'c1' => "red",
            'c2' => "blue",
            'c3' => "white",
            'c4' => "purple",
            'c5' => "white",
            'c6' => "white",
            'c7' => "black",
            'c8' => "blue"
        );

        $count_array1 = array_count_values($color5);

        
        echo '<pre>';
        print_r($count_array);
        print_r($count_array1);

        echo '</pre>';

        /*
            array_diff() Function 

            This Function compares the values of two or more array and return 
            the difference between two or more arrays.

            syntax - array_diff(array1. array2, array3...);
        */
        $color6 = array("black", "blue", "green",  "brown", "wine", "gray", "yellow",);
        $color7 = array("black", "blue", "green");
        $color8 = array("skyblue", "green", "sliver");


        $difference_array = array_diff($color6, $color7, $color8);
        echo '<pre>';
        print_r($difference_array);
        echo '</pre>';

        ?>
    </body>
</html>