<?php
header('Content-type: application/x-javascript');
$tsepop   = ( isset( $_GET['tsepop'] ) ) ? "&tsepop={$_GET['tsepop']}" : '';
$extras = ( isset( $_GET['smileysize'] ) ) ? "?smileysize={$_GET['smileysize']}" . $tsepop : '';
/* Start tse-mce-plugin.js */
?>
(function() {
	tinymce.create('tinymce.plugins.TSEPlugin', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mceTSE', function() {
				ed.windowManager.open({
					file : url + '/tse-mcepop.php<?php echo $extras; ?>',
					width : 450 + parseInt(ed.getLang('tse.delta_width', 0)),
					height : 300 + parseInt(ed.getLang('tse.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			// Register buttons
			ed.addButton('tse', {title : 'Tango Smileys Extended: Insert Smiley', cmd : 'mceTSE', image : url + '/tsemce.png'});
		},

		getInfo : function() {
			return {
				longname : 'Tango Smileys Extended',
				author : 'Whesley McCabe',
				authorurl : 'http://munashiku.slightofmind.net/',
				infourl : 'http://munashiku.slightofmind.net/wordpress-plugins/tango-smileys-extended',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('tse', tinymce.plugins.TSEPlugin);
})();
<?php /* End tse-mce-plugin.js */ ?>