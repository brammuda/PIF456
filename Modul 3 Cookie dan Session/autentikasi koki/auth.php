<?php
defined('_VALID') or die('not allowed');

function init_login()
{
        $nama = 'bram';
        $pass = 'muda';
        
        if(isset($_POST['nama']) && isset($_POST['pass']))
        {
                $n = trim($_POST['nama']);
                $p = trim($_POST['pass']);
                
                if(($n === $nama) && ($p ==$pass)) 
                {
                        setcookie('nlogin', $n);
                        setcookie('time', time());
?>
<script type = "text/javascript">
document.location.href="./";
</script>

<?php
                }
                else
                { 
                echo 'Username dan password salah';
                return false;
                }
        }
}

function validate()
{
        if(!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time']))
        {
                ?>
                <div class ="inner">
                <form action ="" method = "post">
                <table border=1 cell padding=5>
        <tr>
                <td>Username</td>
            <td><input type="text" name="nama"/> </td>
         </tr>
         <tr>
                 <td>Password</td>
             <td><input type="password" name="pass"/> </td>
          </tr>
          <tr>
                  <td></td>
            <td> <input type="submit" value="LOGIN"/> </td>
            </tr>
            
        </table>
        </form>
        </div>
        <?php
                exit;
        }
        
        if (isset($_GET['m']) && $_GET['m'] == 'logout')
        {
                if (isset($_COOKIE['nlogin']))
                {
                        setcookie('nlogin', '', time() - 3 * 3600);
                }
        ?>
        <script type ="text/javascript">
        document.location.href="./";
        </script>
    <?php
        }
}

?>