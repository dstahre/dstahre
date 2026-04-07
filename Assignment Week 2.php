<!DOCTYPE html>
<html>
<body>

<?php
//Assignment Part 1
//3 scores 

$student1 = array(1=>68, 53, 85); //scores for student 1
echo "Grading System<hr>";
echo "Student 1<br>";
foreach ($student1 as $grade =>$score) //post grades, get point total
{
    echo "Grade $grade:  $score <br>";
	$total+=$score;
}
$average=round(($total/3), 2); //calculate average grade of 3 given scores
echo "Average grade:  $average <br>";

$percentage=(round(($total/300), 4))*100;  //calculate grade as percentage out of 300 marks
echo "Grade as percentage:  $percentage <hr>";

echo "Student 1<br>";
array_push($student1, 47, 20); //add 2 additional scores to student 1
$fail=0; 
$subject=1;
foreach ($student1 as $score)  //loop to check for academic probation
{
 echo "Subject $subject:  $score<br>";
 ++$subject; //30
 if ($score <50)
	{++$fail;}
}
if ($fail>=2)
{echo "Student is placed on academic probation";}
echo "<hr><hr>";//separation of Part 1 and 2 in display

array_splice($student1, 3, 2);//remove 2 extra scores from student1
$student2 = array(1=>98, 93, 89); //student2's grades
$student3 = array(1=>48, 87, 62); //student3's grades
$student4 = array(1=>33, 49, 0); //student4's grades
$student5 = array(1=>85, 78, 100); //student5's grades
$studentgrades=array(1=>$student1, $student2, $student3, $student4, $student5); //array of student grade arrays

//Outer foreach. traverses the outer array and sets the text for each student's section
foreach ($studentgrades as $student => $grades)  
{
	echo "Student $student<br>";
    $gradetotal=$a=0;
    foreach ($grades as $exam=>$grade) //inner foreach. display exam scores, total scores
    { echo "Exam $exam:  $grade<br>";
    	$gradetotal+=$grade;
        if ($grade > 95)
        	{$a++;}
        
    }
    $stdavg = (round(($gradetotal/3), 2)); //calculate average score
    echo "Average Exam Grade:  $stdavg<p>";
    
    if ($stdavg<50)  //check for failure
    	{echo "Fail. <hr>";}
        
        elseif ($stdavg > 90 && $a >= 1)  //check for Honour Roll eligibility
        	{echo "Pass. <br>Student qualifies for the Honour Roll. <hr>";}
            
            else  //default
            	{echo "Pass. <hr>";}
    	
}
?>

</body>
</html>

