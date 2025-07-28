<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $name = $_POST['name'];
        $reg_no = $_POST['reg_no'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];

        $file='students.json';
        if(!file_exists($file)){//in case if file does not exists
            file_put_contents($file,json_encode([]));//create the file with empty file contents 
        }

        $students = json_decode(file_get_contents($file),true);//file contents be fetched using get into associative arrays[true] and json format decoded
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

        file_put_contents($file,json_encode($students,JSON_PRETTY_PRINT));//JSON_PRETTY_PRINT-prettifies the json string
        print "Registration done <a href='home.php'>Home</a>";
    }else{
        print "Invalid";
    }
?>