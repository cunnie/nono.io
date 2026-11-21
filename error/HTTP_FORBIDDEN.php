<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta name="generator" content="HTML Tidy, see www.w3.org">

    <title>403 Forbidden</title>
    <meta http-equiv="Content-Type" content=
    "text/html; charset=utf-8">
	<link href="/error/error.css" rel="stylesheet" type="text/css">
  </head>

  <body> <?php  $text_array=array(
  
"The page that you seek is forbidden.  Be grateful, for it is only when we are
denied that we can appreciate what we are allowed: as darkness defines light,
so denial defines privilege. Far better to celebrate the vast number of pages
that we are privileged to browse than lament the few we are denied.",

"&ldquo;Of every tree of the garden thou mayest freely eat: But of the tree of the knowledge of good and evil, thou shalt not eat of it: for in the day that thou eatest thereof thou shalt surely die.&rdquo;",

"The page that you seek is forbidden.  Like the forbidden fruit in the
garden of Eden, the page you seek will bring only sorrow and banishment.",

"The page that you seek is forbidden.<br /><br />
The river does not battle the rock in its journey
towards the ocean; it simply glides past the rock.
So, too, should you let your mind glide past this page.",

/*

"You have been denied access to the page.  When faced with denial, we may
choose to  struggle mightily against the forces which conspire against us, or
we may choose to look inside ourselves and and appreciate that denial is merely
a divine suggestion to seek another path.",

"The page that you seek is forbidden.  It is denied to you because you have
been bad.  Very bad.  You need a spanking.  Yes, that's right:  you've been
bad, and you need a spanking.<br /><br />Didn't expect that from a web page,
did you?",

"The page that you seek is forbidden.  Life can be measured by privileges and
denials.  It is better to enjoy the privileges we are granted than to crave
those we are denied, for true happiness lies in appreciating what we have, not
in attaining what we desire.",

"The page that you seek is forbidden.  It is closed to you, as the gates of
Lady Parvati were closed to Lord Krishna after he had mistakenly beheaded
Ganesh, their son.  When denied, it is a comfort to know that even the
mightiest of gods are, at times, denied.",

"What you seek is forbidden.  And thus we come to one of the Universe's
dualities: as it sanctions, so, too, it forbids.  This page is among the
latter.  Let us ponder that truth.",
*/

);

$image_array = array (

'img src="/error/images/devil.jpg" alt="Lucifer denied" width="372" height="400"',

'img src="/error/images/adam_and_eve.jpg" alt="Adam and Eve banned" width="400" height="512"',

'img src="/error/images/adam_and_eve.jpg" alt="Adam and Eve banned" width="400" height="512"',

'img src="/error/images/river.jpg" alt="River" width="396" height="614"',

);

  ?>
    <div class="floatborder">
	<?php $index = rand(0,count($text_array)-1);
	print("<$image_array[$index]>"); ?>
    </div>

    <div class="right">
      <h1>403 Forbidden</h1>
<?php 

print("$text_array[$index]") ?>
      <br>
      <br>
    </div>
  </body>
</html>

