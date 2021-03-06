<?php
/*
 * Generate a drop down menu html
 */
function uihelperSelect($selectID, $arrayItems, $selectedItem = "") {
	

	$htmlString = "<select id='$selectID' name='$selectID'>";
        $htmlString .= "<option value=''></option>";
	
	foreach($arrayItems as $option) {
		
		$optionLabel = $option["label"];
		$optionID = $option["id"];
		
		$selected = $optionID == $selectedItem ? " selected " : "";
		
		
		$htmlString .= "<option value='$optionID' $selected>$optionLabel</option>";
	
	}
	
	$htmlString .= "</select>";
	
	return $htmlString;
}