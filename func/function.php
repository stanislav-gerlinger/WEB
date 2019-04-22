<?
echo "sfgfs";
if(isset($_POST['tion']))
{
    $qw=$POST['zac'];
   
    $pdo= new PDO('mysql:host=localhost;dbname=web;charset=utf8','root','');	
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM wp_posts where id='$qw'";
	$result=$pdo->query($sql);	
	foreach($result as $row){
    $name_u=$row['post_type'];
    $name_p=$row['post_title'];    
    $dlina_s=strlen($name_p);
        for($i=0;$i<=$dlina_s;$i++)
        {
            if($name_p[$i]=" ")
            {
                $name_p[$i]='-';
                
            }
            
            
        }
    }
    
    header('Location:'$name_u'/'$name_p'/');
    
    
    echo $_POST['zac'];
    
}
?>