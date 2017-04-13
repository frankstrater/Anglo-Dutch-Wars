/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

config.toolbar = 'Basic';

	config.toolbar_Basic =
	[
		{ name: 'essentials', items : ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-', 'Image', 'Source']}
	];

	config.toolbar = 'BasicExtraPlus';

	config.toolbar_BasicExtraPlus =
	[
		{ name: 'essentials', items : ['Format', 'Bold', 'Italic', '-', 'Link', 'Unlink','Image','SpecialChar']},
		{ name: 'extras', items : [ 'NumberedList', 'BulletedList','Table','HorizontalRule', '-','Blockquote', '-','Paste','PasteText','PasteFromWord','-', 'Source'] }
	];

// added code for ckfinder ------>
config.filebrowserBrowseUrl = '/assets/grocery_crud/texteditor/ckfinder/ckfinder.html';
config.filebrowserImageBrowseUrl = '/assets/grocery_crud/texteditor/ckfinder/ckfinder.html?type=Images';
config.filebrowserFlashBrowseUrl = '/assets/grocery_crud/texteditor/ckfinder/ckfinder.html?type=Flash';
config.filebrowserUploadUrl = '/assets/grocery_crud/texteditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
config.filebrowserImageUploadUrl = '/assets/grocery_crud/texteditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
config.filebrowserFlashUploadUrl = '/assets/grocery_crud/texteditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
// end: code for ckfinder ------>

};
