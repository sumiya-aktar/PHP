<?php 
interface User{ 
    public function getName();
    public function info();
    public function desplay();

}

class wdpf implements User{ 
    public function getName(){ 
        echo "the most common function";
  
    }
 
    public function info(){ 
        echo "second";

    }
   
    public function desplay(){ 
        echo "third";
    }
}
 
$object = new wdpf;
$object->getName();
echo " ";
$object->info();
echo " ";
$object->desplay();
?>



