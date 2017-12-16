<?php $sortedLines = "";
if (isset($_GET['lines'])){
    $lines = explode("\n", $_GET['lines']);
    $lines = array_map('trim', $lines);
    $lines = array_filter($lines, function($x) {return $x != "";});
    sort($lines, SORT_STRING);
    $sortedLines = implode("\n", $lines);

    //Same:
    //$lines = array_filter(array_map('trim', $lines), function($x) {return $x != "";});
    //$lines = array_filter(array_map('trim', $lines));
}?>

<form>
    <textarea rows="10" name="lines"><?=$sortedLines?></textarea> <br>
    <input type="submit" value="Sort"/>
</form>
