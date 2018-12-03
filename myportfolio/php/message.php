<html lang ="en">
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
<?php 
    if(isset($_POST['submit'])){
        $msg = 'Name: '.$_POST['name'] ."\n"
        .'Email: ' .$_POST['email'] ."\n"
        .'Message: ' .$_POST['message'];
        mail('colasa2017@fau.edu', 'Portfolio message', $msg);
        header('location: thankyou.php?thanks');
        exit();

    }else{
        header('location: index.html');
        exit();}
?>

</body>
</html>