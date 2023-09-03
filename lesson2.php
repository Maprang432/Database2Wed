<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container p-5 my-5 text-bg-success text-white">
        <h2>Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME</h2>
        <p>6402202057004 Miss Pranftip Thananchai</p>
    </div>


    <?php
    require"connect.php";
    $sql = "SELECT * FROM tb_section ORDER BY SECT_ID DESC";
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <div class="container mt-2">
        <h2>Section data</h2>
        <p>Section data detile
        </p>
        
        <div class="btn-group">
            <button type="button" class="btn text-bg-success"
                onclick="window.location.href ='index.php'">กลับไปยังหน้าหลัก
            </button>
            <button type="button" class="btn text-bg-success">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME
                โดยเรียงจาก SECT_NAME จาก A-Z
            </button>
            <button type="button" class="btn text-bg-success">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่
                SECT_TELEPHONE
                มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A</button>
        </div>
        

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SECT_TELEPHONE</th>

                    <th>SECT_NAME</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row) { ?>
                <tr>
                    <td><?php echo $row['SECT_TELEPHONE']; ?></td>

                    <td><?php echo $row['SECT_NAME']; ?></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>