<?php
/*
Plugin Name: Kral FM Radyo
Plugin URI: http://www.cihanoztunc.com/
Description: Kral FM Canlı Yayın - İlaç Gibi Radyo
Version: 1.0
Author: Cihan Oztunc
Author URI: http://www.cihanoztunc.com
*/

function widget_KralFM($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
<div align="center" style="background-color:black; width:200px;">
	<img src="http://www.cihanoztunc.com/plugin/kral.jpg">
				<div align="right" style="background-color:black; width:200px;">
				<a href="http://www.cihanoztunc.com/" target="_blank" STYLE="color: #000000; background-color: #000000; text-decoration: none; font-size:10px ">Cihan</a>
				</div>
<div>
	
		<object id="mediaPlayer" width="200" height="64" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95" 
			codebase="http://activex.microsoft.com/activex/controls/mplayer/tr/nsmp2inf.cab#Version=5,1,52,701" standby="Microsoft Windows Media Player bilesenleri 
			yukleniyor.." type="application/x-oleobject">
            <param name="FileName" value="http://rad-yo.com/mp_asx/kral_fm.asx">
            <param name="ShowControls" value="1" />
            <param name="AutoStart" value="1" />
            <param name="ShowDisplay" value="0" />
            <param name="ShowPositionControls" value="0" />
            <param name="AutoRewind" value="0" />
            <param name="PlayCount" value="0" />
            <param name="ShowStatusBar" value="1" />
            <param name="volume" value="70" />
            <param name="ShowGotoBar" value="0" />
            <param name="AutoSize" value="0" />
            <param name="EnableContextMenu" value="false" />
            <param name="BorderStyle" value="0" />
            <param name="DisplayForeColor" value="0" />
            <param name="DisplayBackColor" value="0" />

            <embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/" filename="" src="http://rad-yo.com/mp_asx/kral_fm.asx" 
			autostart="0" showcontrols="1" showdisplay="0" showpositioncontrols="0" showgotobar="0" enablecontextmenu="false" showstatusbar="1" autosize="0"
			width="200" height="64"></embed>
    	</object>
	
	</div>
	</div>

        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('Kral FM Radyo', 'widget_KralFM');
?>