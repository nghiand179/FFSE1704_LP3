<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <?php
        $S = "";
        $R = "";
        if (isset($_POST['form_click'])){
                $R = $_POST['bankinh'];
                define("pi", 3.14);
                $S = pi*pow($R, 2);
           

        }
        ?>
    <form method="POST" style="background:#99CCCC;width:300px">
        <h3 style= "background:#008B8B; width:300px; color: white ">Hình Tròn:</h3>

        Diện tích: <input type="text" name="dientich"  value="<?php echo $S; ?>"/> <br/><br/>

        Bán kính: <input type="text" name="bankinh"  value="<?php echo $_POST['bankinh']; ?>"/> <br/><br/>
        <input type="submit" name="form_click" value="Submit "/><br/><br/>

        
    </form>
</body>
</html>