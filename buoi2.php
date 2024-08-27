// Bài 1 : Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
<?php
echo strlen("Trần Thị Hồng");
?>

//Bài 2: Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
<?php
$str = "Trần Thị Hồng";
echo str_word_count($str);
?>

//Bài 3: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
<?php
echo strrev("Trần Thị Hồng");
?>

//Bài 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
<?php
echo strpos("Trần Thị Hồng", "Thị");
?>

//Bài 5: Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
<?php
echo str_replace("Hồng","Tỏi","Trần Thị Hồng");
?>

//Bài 6: Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
<?php
$str1 = "tranhong.edu.vn";
$str2 = "tranhong";
if((strncmp($str1, $str2, "4"))===0){
   echo"Chuỗi bắt đầu bằng một chuỗi con khác!";
}
else{
   echo"Chuỗi không bắt đầu bằng một chuỗi con khác!";
}
echo"<br>";
?>

// Bài 7: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
<?php
$str1 = "xin chào TMU";
$str2 = strtoupper($str1);
echo $str2;
?>

//Bài 8: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
<?php
$str = "HONG XINH GAI";
echo strtolower($str);
?>

//Bài 9: Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
<?php
$str1 = "helloworld";
echo ucwords($str1);
?>

//Bài 10: Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
<?php
$str = "  I LOVE YOU  ";
echo "[".$str."]";    //[  I LOVE YOU  ];
echo "[".trim($str)."]";
?>

//Bài 11: Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
<?php
$str= "Xin chào bạn!";
echo ltrim($str);
?>

//Bài 12: Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
<?php
$str= "Học code PHP !";
echo rtrim($str, "!");
?>

//Bài 13: Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
<?php
$str = ("one, two, three, four, five");
print_r(explore(",", $str));
?>

//Bài 14: Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
<?php
    $str1 = array("1","2","3");
    $str2 = array("a");
    $str3 = array();
   
    echo " str1 is: '".implode("','",$a1)."'<br>";  
    echo " str2 is: '".implode("','",$a2)."'<br>";
    echo " str3 is: '".implode("','",$a3)."'<br>";
?>

//Bài 15: Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
<?php
$str= "Xin chào TMU";
echo str_pad("$str", 20, "*", str_pad_both);
?>

//Bài 16: Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
<?php
$str1="Chao mung ban den voi";
    $char="Hong";
    if(strrchr($str1,$char)===$char){
        echo"Chuỗi kết thúc bằng chuỗi con khác!";
    }
    else{
        echo"Chuỗi không kết thúc bằng chuỗi con khác!";
    }
    echo"<br>";
    ?>
//Bài 17: Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
<?php
$str1="Xin chào bạn!!!";
$str2="b";
if(strstr($str1,$str2)){
    echo"Chuỗi có chứa một chuỗi con khác!";
}
else{
    echo"Chuỗi không chứa một chuỗi con khác!";
}
echo"<br>";
?>
//Bài 18: Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
<?php
$str1="!@#$%^&Hong1234@#%%";
echo preg_replace("/\W+/","_",$str1);
echo"<br>";
?>

//Bài 19: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
<?php
$x=32;
if(is_int($x)){
 echo"Biến x thuộc kiểu số nguyên";
}
else{
 echo"Biến x không thuộc kiểu số nguyên";
}
echo"<br>";
?>

//Bài 20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
<?php
$str1="hong180704@gmail.com";
$str2="hong";
if(filter_var($str2, FILTER_VALIDATE_EMAIL)){
 echo"Email hợp lệ!";
}
else{
 echo"Email không hợp lệ!";
}
?>