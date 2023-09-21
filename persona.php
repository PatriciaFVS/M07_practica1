<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
            $name='Kurt';
            $surname='Cagle';
            $age=40;
            $birth=new DateTime ();
            $birth->setDate(1983,05,12);
            $phone =array(654332211,933332211);
            $address ='Carrer de turin, 15';
            $mail = 'kurt.cagle@example.com';
            $work= true;
            $height= 1.67;
            
        ?>
    <div>
        <h1><?php
            echo 'Descrivint a ',$name,' ',$surname ;
        ?></h1>
        <h2>Les dades de Kurt son:</h2>
        <li><?php 
            echo 'Es diu: ', $name;
        ?></li>
        <li><?php 
            echo 'Té ', $age,' anys';
        ?></li>
        <li><?php 
            echo 'Va neixer lany: ', $birth->format('Y-m-d');
        ?></li>
        <li><?php 
            echo 'Els seus telèfons són: ',$phone[0],'-',$phone[1];
        ?></li>
        <li><?php 
            echo 'Viu a ', $address;
        ?></li>
        <li><?php 
            echo 'El seu  mail és: ', $mail;
        ?></li>
        <li><?php 
            echo 'Treballa: ',$work ? 'Si':'No';
        ?></li>
        <li><?php 
            echo 'Medeix: ',$height;
        ?></li>
    
    </div>
    </body>

    
</html>