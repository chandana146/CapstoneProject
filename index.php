<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>dashboard</title>

    </head>
    <body>
        <?php
        $dbh=new PDO("mysql:host=localhost;dbname=mydata","root","");
        if(isset($_POST['btn'])){
            $name=$_Files['myfile']['name'];
            $type=$_FILES['myfile']['type'];
            $data=file_get_contents($_FILES['myfiles']['tmp_name']);
            $stmt=$dbh->prepare("insert into CC values('',?,?,?)");
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$type);
            $stmt->bindParam(3,$date);
            $stmt->execute();
        }
        ?>
        <form method="post" encrypt="multipart/form-data">
        <input type="file" name="myfile"/>
        <button name="btn">upload</button>
        <div class="d-flex flex-column m-5">
    <div class ="card shadow d-flex flex-row p-1" style="border-radius: 2px; border-color: blueviolet;">
    <div class="col-6"> title</div>
    <div class="col-6"> pdf</div>
    </div>
    <div class ="card shadow d-flex flex-row p-1" style="border-radius: 2px; border-color: blueviolet;">
        <div class="col-6"> title</div>
        <div class="col-6"> pdf</div>
        </div>
    <div class ="card shadow d-flex flex-row p-1" style="border-radius: 2px; border-color: blueviolet;">
            <div class="col-6"> title</div>
            <div class="col-6"> pdf</div>
            </div>
    <div class ="card shadow d-flex flex-row p-1" style="border-radius: 2px; border-color: blueviolet;">
                <div class="col-6"> title</div>
                <div class="col-6"> pdf</div>
                </div>
    <div class ="card shadow d-flex flex-row p-1" style="border-radius: 2px; border-color: blueviolet;">
    <div class="col-6"> title</div>
    <div class="col-6"> pdf</div>
    </div>
    <div class ="card shadow d-flex flex-row p-1" style="border-radius: 2px; border-color: blueviolet;">
    <div class="col-6"> title</div>
    <div class="col-6"> pdf</div>
    </div>

</div>
    </form>
    </body>
</html>