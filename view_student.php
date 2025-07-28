<?php require 'auth.php'?>
<?php
    $file='students.json';
    if(file_exists($file)){
        $student=json_decode(file_get_contents($file),true);
    }else{
        print "File does not exist";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
</head>
<body>
    <?php if(count($student)==0):   ?>
        <h5>No students found</h5>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Register No</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($student as $s): ?>
                    <tr>
                        <td><?= htmlspecialchars($s['name'])?></td>
                        <!--htmlspecialchars : convert special characters(lt,gt,'',"") to html entity,avoids cross-site scripting -->
                        <td><?= htmlspecialchars($s['reg_no'])?></td>
                        <td><?= htmlspecialchars($s['email'])?></td>
                        <td><?= htmlspecialchars($s['phone']) ?></td>
                        <td><?= htmlspecialchars($s['course']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>