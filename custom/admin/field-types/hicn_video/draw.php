<?php
	/*
		When drawing a field type you are provided with the $field array with the following keys:
			"title" — The title given by the developer to draw as the label (drawn automatically)
			"subtitle" — The subtitle given by the developer to draw as the smaller part of the label (drawn automatically)
			"key" — The value you should use for the "name" attribute of your form field
			"value" — The existing value for this form field
			"id" — A unique ID you can assign to your form field for use in JavaScript
			"tabindex" — The current tab index you can use for the "tabindex" attribute of your form field
			"settings" — An array of settings provided by the developer
			"required" — A boolean value of whether this form field is required or not
	*/

	// include BigTree::path("admin/field-types/text/draw.php");

	if (!is_array($field["value"])) {
	    $field["value"] = array(
	      "id" => $field["value"]
	    );
	}
?>
<select name="<?php echo $field["key"].'[type]'; ?>">
  <option></option>
  <option value="youtube"<?php if ($field["value"]["type"] == "youtube") {?> selected<?php } ?>>YouTube</option>
  <option value="vimeo"<?php if ($field["value"]["type"] == "vimeo") {?> selected<?php } ?>>Vimeo</option>
</select>
<input type="text" tabindex="<?php echo $field["tabindex"]; ?>" name="<?php echo $field["key"].'[id]';?>" value="<?php echo $field["value"]["id"]; ?>" id="<?php echo $field["id"]; ?>" placeholder="YouTube or Vimeo ID" /><input type="hidden" name="<?php echo $field["key"].'[existing_id]';?>" value="<?php echo $field["value"]["existing_id"]; ?>" />