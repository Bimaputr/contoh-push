<!-- <?php

$url ="https://api.kawalcorona.com/";
//persiapkan curl/url
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output contains the output string
$dataCovid = curl_exec($ch);
//tutup curl
curl_close($ch);
//menamppilkan hasil output
//echo output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<center>
    <h1><i>Data Covid-19</i></h1>
    <table border="1">
        <tr>
            <th>Negara</th>
            <th>Positif</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
        </tr>
        <?php
        $data =json_decode($dataCovid);
            foreach ($data as $covid) {
        ?>

        <tr>
            <th><?php echo $covid->attributes->Country_Region;?></th>
            <th><?php echo $covid->attributes->Confirmed;?></th>
            <th><?php echo $covid->attributes->Recovered;?></th>
            <th><?php echo $covid->attributes->Deaths;?></th>
        </tr>
        <?php
         }
        ?>
    </table>
</center>

</body>

</html> -->

<?php

$url = "https://api.kawalcorona.com/";

// persiapan curl / init curl
$ch = curl_init();

//set url
curl_setopt($ch, CURLOPT_URL, $url);

// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//output contains the output string
$dataCovid = curl_exec($ch);

//tutup curl
curl_close($ch);

// menampilkan hasil curl
//echo $output;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

        <h1><i> Data Covid-19</i></h1>

        <table border="1">
            <tr>
                <th>Negara</th>
                <th>Positif</th> 
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>





            <?php
            $data = json_decode($dataCovid);
            foreach($data as $covid) {
               ?> 
               <tr>
                   <td><?php echo $covid->attributes->Country_Region; ?></td>
                   <td><?php echo $covid->attributes->Confirmed; ?></td>
                   <td><?php echo $covid->attributes->Recovered; ?></td>
                   <td><?php echo $covid->attributes->Deaths; ?></td>
               </tr>
               <?php
            }
            ?>
        </table>
    </center>
</body>
</html>