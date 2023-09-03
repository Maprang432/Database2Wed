<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datadase show data on wed PHP</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container p-5 my-5 text-bg-dark text-white">
        <h1>Datadase show data on wed PHP</h1>
        <p>6402202057004 Miss Pranftip Thananchai</p>
    </div>


    <?php
    require"connect.php";
    $sql = "SELECT * FROM tb_section";
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container mt-2">
        <h2>Section data</h2>
        <p>Section data detile
        </p>
        <div class="btn-group">
            <button type="button" class="btn btn-outline-dark" onclick="window.location.href ='lesson1.php'">Lesson 1 : แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย
            </button>
            <button type="button" class="btn btn-outline-dark" onclick="window.location.href ='lesson2.php'">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME
                โดยเรียงจาก SECT_NAME จาก A-Z
            </button>
            <button type="button" class="btn btn-outline-dark" onclick="window.location.href ='lesson3.php'">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE
                มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A</button>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SECT_ID</th>
                    <th>SECT_NAME</th>
                    <th>SECT_BUILDING_NAME</th>
                    <th>SECT_TELEPHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row) { ?>
                <tr>
                    <td><?php echo $row['SECT_ID']; ?></td>
                    <td><?php echo $row['SECT_NAME']; ?></td>
                    <td><?php echo $row['SECT_BUILDING_NAME']; ?></td>
                    <td><?php echo $row['SECT_TELEPHONE']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>