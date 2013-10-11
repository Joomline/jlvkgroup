<?php
 /**
 * @package mod_jlvkgroup
 * @author Kunicin Vadim (vadim@joomline.ru), Anton Voynov (anton@joomline.net)
 * @version 2.4
 * @copyright (C) 2010-2012 by JoomLine (http://www.joomline.net)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
*/

$doc = JFactory::getDocument();
$doc->addCustomTag('<script src="//vk.com/js/api/openapi.js?87"></script>');

?>

<!-- VK Widget -->
<div  id="jlvkgroup<?php echo $group_id;?>"></div>
<script type="text/javascript">
VK.Widgets.Group("jlvkgroup<?php echo $group_id;?>", {mode: <?php echo $mode;?>, wide: <?php echo $wide;?>, width: "<?php echo $width;?>", height: "<?php echo $height;?>", color1: '<?php echo $color1;?>', color2: '<?php echo $color2;?>', color3: '<?php echo $color3;?>'}, <?php echo $group_id;?>);
</script>
<div style="text-align: right;">
    <a href="http://joomline.ru/rasshirenija/moduli.html" target="_blank" style="text-decoration:none; color: #c0c0c0; font-family: arial,helvetica,sans-serif; font-size: 5pt; "><?php echo JText::_( 'MOD_JLVKGROUP_COPIR' )?></a>
</div>