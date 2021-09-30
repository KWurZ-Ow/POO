<?php
    if (false === strpos(get_class($object), 'Ennemi')){
        $quality = "intelligence";
        $qualityValue = $object->getIntelligence();
    }else{
        $quality = "méchanceté";
        $qualityValue = $object->getWickedness();
    }
?>
<div class="🤌">
    <a href="/?display=<?php echo strtolower($object->getName());?>"><img src="<?php echo $object->getImage() ?>"/></a>
    <h2><?php echo $object->getName(); ?></h2>
</div>