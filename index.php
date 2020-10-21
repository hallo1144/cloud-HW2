<!DOCTYPE html>
<html>
    <head>
        <title>
            BMI calculator
        </title>
    </head>
    <body>
        <h1>
            BMI calculator
        </h1>
        <form method="POST">
            <table>
                <tr>
                    <td>height:</td>
                    <td><input type="text" name="h" /></td>
                </tr>
                <tr>
                    <td>weight:</td>
                    <td><input type="text" name="w" /></td>
                </tr>
            </table>
            <input type="submit" value="calculate" />
        </form>
        <br>
        <div>
            <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    if(array_key_exists('w', $_POST) && array_key_exists('h', $_POST))
                    {
                        $res = file_get_contents("https://asia-northeast1-profound-keel-290512.cloudfunctions.net/bmi_calculate?h=" . $_POST['h'] . "&w=" . $_POST['w']);
                        $res = json_decode($res, true);
                        // print_r($res);
                        if(array_key_exists('status', $res) && $res["status"] == "success")
                        {
                            echo "your BMI is " . $res["bmi"];
                        }
                        else
                        {
                            echo "weight or height error!";
                        }
                    }
                    else
                    {
                        echo "please enter weight and height!";
                    }
                }
            ?>
        </div>
    </body>
</html>