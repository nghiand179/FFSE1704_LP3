<html>
    <body>
        <?php
          $name=" ";
        if (isset($_POST['post'])){
            $name = $_POST['name'];
        }
        ?>
        <form action=" " method="POST">
        <table align="left" cellspacing="0" cellpadding="5" bordercolor="#009999" bgcolor="#99FFFF">
            <tr align="left" bgcolor="##87CEFA">
                <td><h5 class="style"> In câu chào  </h5></td>
            </tr>
            <tr>
                <td>Nhập tên :<label>
                        <input name="name" type="text"  value="<?= $name;?>" >
				    </label>
                </td>
            </tr>
            <tr>
				<td>Xin Chào: <strong><?= $name ?></strong> </td>
				
			</tr>           
            <tr>
				<td colspan="2" align="left"><label>
				<input type="submit" name="post" value="In câu chào">
				</label></td>
			</tr>
        </table>
            </form>
        
    </body>
</html>
<br>
