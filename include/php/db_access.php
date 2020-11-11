<?php
{*   *}

require_once('db.php');
$db = new DB();
$personal = $db->get_personal();
$organization = $db->get_organization();
$instrumental = $db->get_instrumental();
$address = $db->get_address();
$SNS = $db->get_SNS();

echo 'personal' .PHP_EOL;
echo "<pre>";
var_dump($personal) .PHP_EOL;
echo "</pre>";

echo 'organization' .PHP_EOL;
echo "<pre>";
var_dump($organization) .PHP_EOL;
echo "</pre>";

echo 'instrumental' .PHP_EOL;
echo "<pre>";
var_dump($instrumental) .PHP_EOL;
echo "</pre>";

echo 'address' .PHP_EOL;
echo "<pre>";
var_dump($address) .PHP_EOL;
echo "</pre>";

echo 'SNS' .PHP_EOL;
echo "<pre>";
var_dump($SNS) .PHP_EOL;
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>musico-opデータベーステスト</title>
        <link rel="stylesheet" type="text/css" href="/css/styles.css" >


    </head>

    <body>
        <table>
        <tr>
            <td>ID　</td>
            <td><?php echo($personal['musicoop_ID']);?></td>
            <td></td>
        </tr>
        <tr>
            <td>名前　</td>
            <td><?php echo($personal['name']);?></td>
            <td></td>
        </tr>
        <tr>
            <td>生年月日　</td>
            <td><?php echo($personal['birthday']);?></td>
            <td></td>
        </tr>
        </table>
    </body>
</html>
