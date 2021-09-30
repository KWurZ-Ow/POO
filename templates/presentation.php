<?php
    if (false === strpos(get_class($object), 'Ennemi')){
        $quality = "intelligence";
        $qualityValue = $object->getIntelligence();
    }else{
        $quality = "méchanceté";
        $qualityValue = $object->getWickedness();
    }
?>
<div class="💪">
    <h1><?php echo $object->getName(); ?></h1>
    <a href="/?display=all"><img src="<?php echo $object->getImage() ?>"/></a>
    <div>
        <p><b><?php echo $object->getName(); ?></b> est un <b><?php echo $object->getCaste();?></b>, il est connu sous le nom de "<b><?php echo $object->getSurname();?></b>".</p>
        <p>Il a une <?php echo $quality; ?> de <b><?php echo $qualityValue; ?> </b> et <b><?php echo $object->getLife(); ?></b> points de vie.</p>
        <p>Il est fort dans les <b><?php echo $object->getKnowledge(); ?></b>.</p>
        <p>Il fait partie du jeu <b><?php echo  $object->getGameName(); ?></b>.</p>
        <p>Son image se trouve sous <b><?php echo  $object->getImage(); ?></b>.</p>
    </div>
</div>