<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Card</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            
        }
        .heade1{
            font-size: small;
    margin-top: -120px;
    text-align: center;
    margin-bottom: 20px;
    color: aliceblue;
        }
        .header {
            margin-top: 54px;
    text-align: center;
    margin-bottom: 20px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
        }
        .student-info {
            margin-bottom: 20px;
        }
        .student-info h2 {
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background:url(back-2.jpg);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .details{
            font-size: 10px;
        }
        .footer {
            text-align: center;
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>

<?php
  // name, Math marks, Science, English, Hindi, Social Study
  function report_card($name, $class, $maths, $science, $english, $hindi, $sstudy){
    $studentname = $name;
    $standard =$class;
    $mathmarks = $maths;
    $sciencemarks = $science;
    $englishmarks = $english;
    $hindimarks = $hindi;
    $sstudymarks = $sstudy;
    $total =  $mathmarks+$sciencemarks+$englishmarks+$hindimarks+$sstudymarks;
    $percentage =($total/500)*100;
    $average_marks = $total / 5;
    $percentage =($total/500)*100;
    ?>
    <div class="container">
    <div class="logo">
            <img src="logo-2.jpg" alt="School Logo">
        </div>
        <div style="text-align: center;margin-top: -27px;"> <img src="banner.png" alt=""></div>
        <div class="heade1">
        <h1>ST. XAVIER UNIVERSITY</h1>
        </div>
        <div class="header">
            <h1> -:Report Card:-</h1>
        </div>
        <div class="student-info">
            <h2>Student Information :-</h2>
            <p><strong>Name:</strong>  <?php echo $studentname; ?></p>
            <p><strong>Class:</strong><?php echo $standard; ?></p>
            <p><strong>Roll Number:</strong> 12345</p>
        </div>
   
        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mathematics</td>
                    <td><?php if($mathmarks>=33){
                        echo "<h3> $mathmarks</h3>";
                    }else{
                        echo "<h3 style='color:red;'>$mathmarks F</h3>";

                    }
                    
                    ?></td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td><?php 
                    if($sciencemarks>=33){
                        echo "<h3> $sciencemarks</h3>";
                    }else{
                        echo "<h3 style='color:red;'>$sciencemarks F</h3>";

                    }
                    
                     ?></td>
                </tr>
                <tr>
                    <td>English</td>
                    <td><?php if($englishmarks>=33){
                          echo "<h3> $englishmarks</h3>";
                    }else{
                        echo "<h3 style='color:red;'>$englishmarks F</h3>";

                    } ?></td>
                </tr>
                <tr>
                    <td>Hindi</td>
                    <td><?php if($hindimarks>=33){
                          echo "<h3> $hindimarks</h3>";
                    }else{
                        echo "<h3 style='color:red;'>$hindimarks F</h3>";

                    }
                    ?></td>
                </tr>
                <tr>
                    <td>Social Studies</td>
                    <td><?php if($sstudymarks>=33){
                        echo "<h3>$sstudymarks</h3>";
                    }else{
                        echo "<h3 style='color:red;'>$sstudymarks F</h3>";
 
                    }
                     ?></td>
                </tr>
            </tbody>
        </table>

        <div class="details">
        <h3><?php echo "TOTAL MARKS =$total"; ?></h3>
        <h3><?php echo "AVERAGE MARKS =$average_marks"; ?></h3>
        <h3><?php echo "PERCENTAGE =$percentage %";      ?></h3>
        <h3><?php IF($total<=150){
echo"<h1 style='color:red;'>FAIL</h1>";
}else {echo "<h1 style='color:darkblue;'>PASS</h1>";}
?> </h3>

        </div>
        <div class="footer">
            <p>" CHASE EXCELLENCE, SUCCESS WILL FOLLOW. "</p>
        </div>
    </div>

    <?php
  }

  report_card("prince parmar","10 SCIENCE", 56, 78, 90, 40, 89);
  ?>

</body>
</html>
