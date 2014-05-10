  <table style="border-spacing: 4px"  width="100%">
    <tr class="nono_menubar_table">
      <td>&nbsp;&nbsp;<a href="/"><b>home</b></a>&nbsp;&nbsp;&nbsp; <a href=
      "/about.shtml">about</a></td>


      <td style="padding:0px" width="1%">
	  
<?php $image_array = array (
'img src="/images/noble_party.jpg" alt="Noble Party"',
'img src="/images/peasant_party.jpg" alt="Peasant Party"',
'img src="/images/town_party.jpg" alt="Town Party"',
'img src="/images/chased_by_bears.jpg" alt="Chased by Bears"',
'img src="/images/savage_trophies.jpg" alt="Savage Trophies"',
'img src="/images/town_on_the_river.jpg" alt="Town on the River"',
);
$index = rand(0,count($image_array)-1);
print("<$image_array[$index] />");
?></td>
      <td style="text-align:right;">Your IP: 
<?php
$ip = (getenv('HTTP_X_FORWARDED_FOR'))
    ?  getenv('HTTP_X_FORWARDED_FOR')
	    :  getenv('REMOTE_ADDR');
print("$ip");
?>
      &nbsp;&nbsp;</td>
    </tr>
  </table>
