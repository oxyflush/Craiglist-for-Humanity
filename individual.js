/*$myFile = "testFile.txt";
if(isset($_POST['fileWrite']) && !empty($_POST['fileWrite'])) {
      $fileWrite = $_POST['fileWrite'];
}
if($fileWrite) {
    $fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
    fwrite($fh, $fileWrite);
    fclose($fh);
    exec('/your/command /dev/null 2>/dev/null &');
}*/

function writeToFile(d1, d2, d3, d4, d5, d6){
    var fso = new ActiveXObject("Scripting.FileSystemObject");
    var fh = fso.OpenTextFile("test.txt", 2, true, 0);
    fh.WriteLine(d1 + ',' + d2 + "," +d3 + "," + d4 + "," + d5 + "," + d6);
    fh.Close();
}
var sub = document.getElementById("submit");
sub.onclick = function () {

    var text     = document.getElementById("t").value;
    var desc = document.getElementById("d").value;
    var contact      = document.getElementById("c").value;
    var job = document.getElementById("j").value;
    var number      = document.getElementById("n").value;
    var location = document.getElementById("l").value;
    writeToFile(text,desc,contact,job,number,location);
}