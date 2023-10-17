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




    <?php 
        define("IVA",0.21);

        $cursMatriu= array(
            array("PHP","Introducció a PHP",15.5),
            array("Laravel","Laravel per experts", 30),
            array("Django","Dominant Django",10)
        );

        $array_num=count($cursMatriu);
    ?>
    <div>
        <h1>Llista de cursos</h1>
        <h2>Número de cursos apuntats: 3 </h2>
    </div>
    <div style="border:2px solid black; width:20% ">
        <?php 
            for($n=0;$n<=0;$n++){     
        ?>
                
        <li style="list-style: none;">
                <h3><?php echo $cursMatriu[$n][0];?></h3> 
                <p><?php echo $cursMatriu[$n][1];?></p>
                <p><?php echo $cursMatriu[$n][2];}?></p>
        </li></div>

        <div style="border:2px solid black; width:20%">
        <?php 
            for($n=1;$n<=1;$n++){ 
        ?>    

        <li style="list-style: none;">
            <h3><?php echo $cursMatriu[$n][0];?></h3> 
            <p><?php echo $cursMatriu[$n][1];?></p>
            <p><?php echo $cursMatriu[$n][2]; }?></p>
        </li></div>


        <div style="border:2px solid black; width:20%">
        <?php 
            for($n=2;$n<=2;$n++){
        ?>
                
        <li style="list-style: none;">
            <h3><?php echo $cursMatriu[$n][0];?></h3> 
            <p><?php echo $cursMatriu[$n][1];?></p>
            <p><?php echo $cursMatriu[$n][2]; }?></p> 
                
        </li></div>

    
    
    </div style="border:2px solid black; width:20% ">
        <?php 
        //PRÀCTICA 3

        //Creació de l'array buida
            $taules= array();
            
        //Primer bucle per afegir valors aleatoris a l'array
            for($i=0;$i<=9;$i++){
                array_push($taules, rand(0,5));
           
            }
        //Segon bucle per iterar tota la llista per mostrar
            for($n=0;$n<=count($taules);$n++){
                if($taules[$n]==0){
        ?>          <li> <?php echo "La taula ". $n . " està buida"?> </li>
                <?php
                } 
                else if($taules[$n]==5){
                ?>  <li>  <?php echo " La taula ". $n ." està plena"?> </li>
                <?php
                }
                else if ($taules[$n]!=5 ||$taules[$n]!=0  ){
                ?>  <li> <?php echo "La taula " . $n . " té ". $taules[$n] . " comensals"?>      </li>   
            <?php } }?>
 
    <div>
      <?php  $habitacions = array (array());
      
      //for($i=0;$i<{}
      
      ?>

    </div>

    </body>




    
</html>