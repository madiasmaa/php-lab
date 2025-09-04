<?php

/* Third assignment – web programming_2
   Asmaa Madi
   220213712
*/


// Students array
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        thead th {
            border-bottom: 2px solid #000;
            text-align: left;
            padding: 8px;
        }
        tbody td {
            padding: 8px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }
        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tfoot td {
            padding: 8px;
            font-weight: bold;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <h2>Students Information</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Student No</th>
                <th>Name</th>
                <th>Email</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($students as $student) {?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $student['stdNo']; ?></td>
                    <td><?= $student['stdName']; ?></td>
                    <td><?= $student['stdEmail']; ?></td>
                    <td><?= $student['stdGAP']; ?></td>
                </tr>
            <?php }; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Student number: <?= count($students); ?></td>
            </tr>
        </tfoot>
    </table>

</body>
</html>
