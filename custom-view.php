<?php defined('_JEXEC') or die;

// this can be what ever you want
// i use it for custom components and or banner manager data

$db=JFactory::getDBO();
$get_Bookings="SELECT * FROM #__your_custom_component WHERE published IN(0,1) AND paid=0 ORDER BY enquiry_date LIMIT 5";
$db->setQuery($get_Bookings);
$bookings = $db->loadObjectList();

?>

<br/>

<ul class="list-striped stats-module<?php echo $moduleclass_sfx ?>">

	<?php foreach ($bookings as $booking) : ?>
	
		<li><?php echo $booking->tour; ?> <?php echo $booking->last_name; ?> ...... blah blah </li>
		
	<?php endforeach; ?>
	
</ul>

<?php // extra notes

// I use the admin stats module by creating an admin override within the template manager first. 
// Then go to html/ overrides folder for admin and open the module. 
// I create a file like the one here. 
// Then i add my snippet in there. 
// Then go to joomla control panel modules/admin modules/create new/
// choose admin stats/
// go to last tab/ 
// choose the new file layout/ 
//
// jobs done!
// Your dashboard can now have panels of things you want

?>
