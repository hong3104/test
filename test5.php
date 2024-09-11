//bài 1
<?php
$dbh = mysqli_connect('localhost', 'root','', 'melody'); 
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh, 'melody'))     
    die("Unable to select database: " . mysql_connect_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
   $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Tran Thi Hong','Female','123',' hong1234@gmail.com','Ha Noi','Viet Nam')"; 
        
    $result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Adding record failed: " . mysqli_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }

    mysqli_close($dbh); // Đóng kết nối CSDL 
?>

//bài 2: 
<?php
$dbh = mysqli_connect('localhost', 'root','','melody'); 
    // Kết nối tới MySQL Server
    
    if (!$dbh)    
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh,'melody'))     
    die("Unable to select database: " . mysql_connect_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
   $sql_stmt = "UPDATE `my_contacts` SET `full_names` = 'Hong Toi',`email` = 'hello1234@gmail.com'";
    $sql_stmt .= "WHERE `id` = 7";
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL

    if (!$result) {
        die("Deleting record failed: " . mysqli_error());
        // Thông báo lỗi nếu thực thi thất bại
    } else {
        echo "ID number 5 has been successfully updated";
    }
    
    mysqli_close($dbh); //close the database connection
?>

//bài 3: 
//bài 4: 
<?php
$dbh = mysqli_connect('localhost', 'root','', 'melody'); 
    // Kết nối tới MySQL server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_connect_error());
    // Nếu kết nối thất bại thì đưa ra thông báo lỗi
    
    if (!mysqli_select_db($dbh,'melody'))     
    die("Unable to select database: " . mysqli_connect_error());
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $sql_stmt = "SELECT * FROM my_contacts"; 
    // Câu lệnh select
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL
     
    if (!$result)     
        die("Database access failed: " . mysqli_error()); 
        // Thông báo lỗi nếu thực thi thất bại
        
        $rows = mysqli_num_rows($result); 
        // Lấy số hàng trả về
    
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Full Names: ' . $row['full_names'] . '<br>';        
            echo 'Gender: ' . $row['gender'] . '<br>';         
            echo 'Contact No: ' . $row['contact_no'] . '<br>';         
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'City: ' . $row['city'] . '<br>';         
            echo 'Country: ' . $row['country'] . '<br><br>';     
        } 
    } 
mysqli_close($dbh); // Đóng kết nối CSDL
?>

