<?php
require_once "../../php/config/db.php";
$examDateSql="SELECT * FROM exam_routine_date where `examRoutineStatus`='posted' order by id desc limit 1 ";
$examDateExe=mysqli_query($con,$examDateSql);
if(mysqli_num_rows($examDateExe)>0){
$examDateRow=mysqli_fetch_assoc($examDateExe);
$examSampleId=$examDateRow['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/examroutine.css">
</head>
<body>
    <div class="examroutine-container">
        <fieldset>
            <legend>Exam Routine</legend>
            <div class="examtitles"> 
            <?php if(isset($examDateRow['exam_title'])) echo $examDateRow['exam_title']?>
                    </div>
                    <table class="exam-table">
                        <tr>
                            <td>Date/Class</td>                           
                            <td><?php if(isset($examDateRow['date_1'])) echo $examDateRow['date_1'] ?></td>
                            <td><?php if(isset($examDateRow['date_2'])) echo $examDateRow['date_2'] ?></td>
                            <td><?php if(isset($examDateRow['date_3'])) echo $examDateRow['date_3'] ?></td>
                            <td><?php if(isset($examDateRow['date_4'])) echo $examDateRow['date_4'] ?></td>
                            <td><?php if(isset($examDateRow['date_5'])) echo $examDateRow['date_5'] ?></td>
                            <td><?php if(isset($examDateRow['date_6'])) echo $examDateRow['date_6'] ?></td>
                            <td><?php if(isset($examDateRow['date_7'])) echo $examDateRow['date_7'] ?></td>
                        </tr>
                        <?php
                        $examId=$examDateRow['id'];
$examSubjectSql="SELECT * FROM exam_routine_subject where exam_id='$examId'";
$examSubjectExe=mysqli_query($con,$examSubjectSql);
$i=0;
if(mysqli_num_rows($examSubjectExe)>0){
    while($examSubjectRow=mysqli_fetch_assoc($examSubjectExe)){
        ?>
                        <tr>
                            <td><?php if(isset($examSubjectRow['class'])) echo $examSubjectRow['class'];?></td>
                            <td><?php if(isset($examSubjectRow['e_subject_1'])) echo $examSubjectRow['e_subject_1'];?></td>
                            <td><?php if(isset($examSubjectRow['e_subject_2'])) echo $examSubjectRow['e_subject_2'];?></td>
                            <td><?php if(isset($examSubjectRow['e_subject_3'])) echo $examSubjectRow['e_subject_3'];?></td>
                            <td><?php if(isset($examSubjectRow['e_subject_4'])) echo $examSubjectRow['e_subject_4'];?></td>
                            <td><?php if(isset($examSubjectRow['e_subject_5'])) echo $examSubjectRow['e_subject_5'];?></td>
                            <td><?php if(isset($examSubjectRow['e_subject_6'])) echo $examSubjectRow['e_subject_6'];?></td>
                            <td><?php if(isset($examSubjectRow['e_subject_7'])) echo $examSubjectRow['e_subject_7'];?></td>
                        </tr>
                        <?php
    }
    }
}else{
    echo "no exam right now";
}
                            ?>
                    </table>
        </fieldset>
    </div>





<script src="../js/classroutine.js></script>
</body>
</html>