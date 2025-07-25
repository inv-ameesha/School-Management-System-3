<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $name = $_POST['name'];
        $reg_no = $_POST['reg_no'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];

        $file='students.json';
        if(!file_exists($file)){
            file_put_contents($file,json_encode([]));
        }

        $students = json_decode(file_get_contents($file),true);
        foreach($students as $student){
            if($student['email']===$email){
                die("Already found email <a href='index.php'>Back</a>" );
            }
        }

        $students[]=[
            'name'=>$name,
            'reg_no'=>$reg_no,
            'email'=>$email,
            'phone'=>$phone,
            'course'=>$course,
        ];

        file_put_contents($file,json_encode($students,JSON_PRETTY_PRINT));
        print "Registration done <a href='home.php'>Home</a>";
    }else{
        print "Invalid";
    }
?>