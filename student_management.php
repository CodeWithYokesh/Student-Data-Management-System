<?php
// Student Data Management System

// Associative array to store details of 5 students
$students = [
    [
        "name" => "Arun",
        "marks" => 85,
        "dob" => "2005-03-15"
    ],
    [
        "name" => "Divya",
        "marks" => 72,
        "dob" => "2004-11-20"
    ],
    [
        "name" => "Kavin",
        "marks" => 91,
        "dob" => "2005-07-08"
    ],
    [
        "name" => "Meena",
        "marks" => 66,
        "dob" => "2003-09-25"
    ],
    [
        "name" => "Riya",
        "marks" => 78,
        "dob" => "2004-01-10"
    ]
];

// Function to calculate average marks
function calculateAverageMarks($students) {
    $total = 0;
    $count = count($students);

    foreach ($students as $student) {
        $total += $student["marks"];
    }

    return $total / $count;
}

// Function to determine grade based on marks
function determineGrade($marks) {
    if ($marks >= 90) {
        return "A+";
    } elseif ($marks >= 80) {
        return "A";
    } elseif ($marks >= 70) {
        return "B";
    } elseif ($marks >= 60) {
        return "C";
    } elseif ($marks >= 50) {
        return "D";
    } else {
        return "F";
    }
}

// Function to calculate age using DOB
function calculateAge($dob) {
    $birthDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate);

    return $age->y;
}

$averageMarks = calculateAverageMarks($students);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Data Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h2 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .average {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Student Data Management System</h2>

    <table>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Marks</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>

        <?php
        $serial = 1;
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $serial++ . "</td>";
            echo "<td>" . $student["name"] . "</td>";
            echo "<td>" . $student["marks"] . "</td>";
            echo "<td>" . $student["dob"] . "</td>";
            echo "<td>" . calculateAge($student["dob"]) . "</td>";
            echo "<td>" . determineGrade($student["marks"]) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="average">
        Average Marks: <?php echo number_format($averageMarks, 2); ?>
    </div>

</body>
</html>
