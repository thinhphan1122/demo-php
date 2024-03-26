<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>
<body>
    <h1>Làm quen với PHP</h1>
    <?php
        // $fullname = "Nguyễn Văn A";
        // echo "Xin chào, {$fullname}!<br>";
        // echo "Xin chào, ".$fullname."!"."<br>";

        // $a = 10;
        // $b = 30;
        // echo $a + $b."<br>";

        // $is_login = false;
        // if($is_login == true) {
        //     echo "Chúc mừng bạn đã đăng nhập thành công<br>";
        // } else {
        //     echo "Bạn vui lòng đăng nhập tài khoản<br>";
        // }

        // $n = 3;
        // $sum = 0;
        // for($i=1; $i<=$n; $i++) {
        //     if ($i%2!=0) {
        //         $sum = $sum + $i;
        //     }
        //     // echo $i."<br>";
        // }
        // echo $sum."<br>";

        // function odd_total($n){
        //     $sum = 0;
        //     for($i=1; $i<= $n; $i++){
        //         if ($i % 2 != 0){
        //             $sum = $sum + $i;
        //         }
        //     }
        //         return $sum;
        // }
        // echo odd_total(3)."<br>";
        // echo odd_total(100)."<br>";
        // echo odd_total(1000)."<br>";

        $student_1 = "Nguyen Van A";
        $student_2 = "Le Nhan B";
        // $students = array('Nguyen Van A', 'Le Nhan B');
        $students = array($student_1, $student_2) ;
        $students[] = "Dang Thuc C";
        print_r($students);
        // print_r($students[0]);
        foreach($students as $student) {
            echo $student;
        }
    ?>

     <!-- <form action="login.php" method="POST">
        Tên:<br> 
        <input type="text" name='username'><br>
        Mật khẩu:<br>
        <input type="password" name='password'><br>
        <br>
        <input type="submit" value="Đăng nhập">
     </form> -->
</body>
</html>