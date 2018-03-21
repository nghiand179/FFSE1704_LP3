<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    
    <form method="POST" style="background:#99CCCC;width:300px">
        <h3 style= "background:#008B8B; width:300px; color: white "> In câu chào:</h3>

        Nhập tên: <input type="text" name="ten"  value=""/> <br/><br/>
        <input type="submit" name="form_click" value="In câu chào : "/><br/><br/>

        <?php

        if (isset($_POST['form_click'])){

            echo 'Câu chào : ' . $_POST['ten'];

        }
        ?>
    </form>
</body>
</html>