<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Calendario</h1>
    <?php
        echo "Hello World!";
        $month = date('m');
        $year = date('Y');
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        echo "<table>";
        echo "<tr>
                <th>Dom</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mié</th>
                <th>Jue</th>
                <th>Vie</th>
                <th>Sáb</th>
              </tr>";

        $dayOfWeek = date('w', strtotime("$year-$month-01"));
        echo "<tr>";

        for ($i = 0; $i < $dayOfWeek; $i++) {
            echo "<td></td>";
        }

        for ($day = 1; $day <= $daysInMonth; $day++) {
            if (($day + $dayOfWeek - 1) % 7 == 0 && $day != 1) {
                echo "</tr><tr>";
            }
            echo "<td>$day</td>";
        }

        while (($day + $dayOfWeek - 1) % 7 != 0) {
            echo "<td></td>";
            $day++;
        }

        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>