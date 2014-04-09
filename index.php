<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>eNable Web-Creator Demonstration</title>

<link rel="stylesheet" href="css/main.css" type="text/css" />

<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

</head>

<body id="index" class="home">

<?php

// this starts the session
 session_start();
$userid = session_id();

echo "<p>This is a demonstration file generator. Reference documentation can be found <a href='https://docs.google.com/document/d/1LX3tBpio-6IsMMo3aaUdR-mLwWdv1jS4ooeEHb79JYo/edit?pli=1' target='_blank'>here</a>. Generator code can be found on <a href='https://github.com/laird/e-NABLE' target='_blank'>GitHub</a> and the code for this web interface can be found an <a href='https://github.com/creuzerm/e-NABLE-Web-Generator' target='_blank'>GitHub</a>.</p>";


echo <<<HTML
<h1>Measurements</h1>
<form>
<fieldset style='width:32%; float:left;'>
  <legend>Left arm</legend>
   1 <input type="number" step="any" min="0" name="Left1" value='{$_REQUEST['Left1']}'  placeholder="Length of Elbow Joint"><br>
   2 <input type="number" step="any" min="0" name="Left2" value='{$_REQUEST['Left2']}'  placeholder="Distance between lateral and medial side of the forearm proximal to the elbow joint"><br>
   3 <input type="number" step="any" min="0" name="Left3" value='{$_REQUEST['Left3']}'  placeholder="Distance between lateral and medial side of the middle forearm"><br>
   4 <input type="number" step="any" min="0" name="Left4" value='{$_REQUEST['Left4']}'  placeholder="Distance between lateral and medial side of the forearm proximal to the wrist"><br>
   5 <input type="number" step="any" min="0" name="Left5" value='{$_REQUEST['Left5']}'  placeholder="Wrist Joint distance from lateral to medial side"><br>
   6 <input type="number" step="any" min="0" name="Left6" value='{$_REQUEST['Left6']}'  placeholder="Distance from wrist to distal end on thumb side (Lateral)"><br>
   7 <input type="number" step="any" min="0" name="Left7" value='{$_REQUEST['Left7']}'  placeholder="Distance from wrist to distal middle end of effected hand"><br>
   8 <input type="number" step="any" min="0" name="Left8" value='{$_REQUEST['Left8']}'  placeholder="Distance from Lateral and Medial sides of the distal part of the hand"><br>
   9 <input type="number" step="any" min="0" name="Left9" value='{$_REQUEST['Left9']}'  placeholder="Distance from wrist to distal end on thumb side (Medial)"><br>
  10<input type="number" step="any" min="0" name="Left10" value='{$_REQUEST['Left10']}'  placeholder="Length of Elbow to wrist joint"><br>
  <input type="submit" name='submit' value="Preview">
</fieldset>
<ul>
<li>Length of Elbow Joint</li>
<li>Distance between lateral and medial side of the forearm proximal to the elbow joint</li>
<li>Distance between lateral and medial side of the middle forearm</li>
<li>Distance between lateral and medial side of the forearm proximal to the wrist</li>
<li>Wrist Joint distance from lateral to medial side</li>
<li>Distance from wrist to distal end on thumb side (Lateral)</li>
<li>Distance from wrist to distal middle end of effected hand</li>
<li>Distance from Lateral and Medial sides of the distal part of the hand</li>
<li>Distance from wrist to distal end on thumb side (Medial)</li>
<li>Length of Elbow to wrist joint</li>
</ul>
<fieldset style='width:32%; float:right;'>
  <legend>Right arm</legend>
   1 <input type="number" step="any" min="0" name="Right1" value='{$_REQUEST['Right1']}'  placeholder="Length of Elbow Joint"><br>
   2 <input type="number" step="any" min="0" name="Right2" value='{$_REQUEST['Right2']}'  placeholder="Distance between lateral and medial side of the forearm proximal to the elbow joint"><br>
   3 <input type="number" step="any" min="0" name="Right3" value='{$_REQUEST['Right3']}'  placeholder="Distance between lateral and medial side of the middle forearm"><br>
   4 <input type="number" step="any" min="0" name="Right4" value='{$_REQUEST['Right4']}'  placeholder="Distance between lateral and medial side of the forearm proximal to the wrist"><br>
   5 <input type="number" step="any" min="0" name="Right5" value='{$_REQUEST['Right5']}'  placeholder="Wrist Joint distance from lateral to medial side"><br>
   6 <input type="number" step="any" min="0" name="Right6" value='{$_REQUEST['Right6']}'  placeholder="Distance from wrist to distal end on thumb side (Lateral)"><br>
   7 <input type="number" step="any" min="0" name="Right7" value='{$_REQUEST['Right7']}'  placeholder="Distance from wrist to distal middle end of effected hand"><br>
   8 <input type="number" step="any" min="0" name="Right8" value='{$_REQUEST['Right8']}'  placeholder="Distance from Lateral and Medial sides of the distal part of the hand"><br>
   9 <input type="number" step="any" min="0" name="Right9" value='{$_REQUEST['Right9']}'  placeholder="Distance from wrist to distal end on thumb side (Medial)"><br>
  10<input type="number" step="any" min="0" name="Right10" value='{$_REQUEST['Right10']}'  placeholder="Length of Elbow to wrist joint"><br>
</fieldset>
  <input type="submit" name='submit' value="Preview">
</form>
HTML;


// need to do some sanity checking here

if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Preview')
{
	$assemblypath = "e-NABLE/Assembly/";
	$leftsidevars = "-D Left1={$_REQUEST['Left1']} -D Left2={$_REQUEST['Left2']} -D  Left3={$_REQUEST['Left3']} -D  Left4={$_REQUEST['Left4']} -D  Left5={$_REQUEST['Left5']} -D  Left6={$_REQUEST['Left6']} -D  Left7={$_REQUEST['Left7']} -D  Left8={$_REQUEST['Left8']} -D  Left9={$_REQUEST['Left9']} -D  Left10={$_REQUEST['Left10']}";
	$rightsidevars = "-D Right1={$_REQUEST['Right1']} -D Right2={$_REQUEST['Right2']} -D  Right3={$_REQUEST['Right3']} -D  Right4={$_REQUEST['Right4']} -D  Right5={$_REQUEST['Right5']} -D  Right6={$_REQUEST['Right6']} -D  Right7={$_REQUEST['Right7']} -D  Right8={$_REQUEST['Right8']} -D  Right9={$_REQUEST['Right9']} -D  Right10={$_REQUEST['Right10']}";
        $command = " openscad -o imagecache/{$userid}preview.png {$leftsidevars} {$rightsidevars} {$assemblypath}Assembly.scad ";
        echo "<p>{$command}</p>\n";

        $time_start = microtime(true);
        $results = exec( "export DISPLAY=:5; " . escapeshellcmd($command));
        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start);


        echo "<img src='imagecache/{$userid}preview.png' />";
        echo "<p>Created preview in {$execution_time} seconds.</p>\n";


        echo "<p>Computer Stats - for performance considerations</p>\n";
        echo "<pre>\n";
        echo `cat /proc/cpuinfo`;
        echo `cat /proc/meminfo`;
        echo "</pre>";
}
?>
</body>
</html>
