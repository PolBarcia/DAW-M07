<?php
$num = 8;
?>
<table >
<?php
for ($i = 0; $i < $num; $i++) {
    print "<tr>";
    for ($j = 0; $j < $num; $j++) {
        ?><td class="<?=($i+$j)%2==0?"":"dark"?>"></td><?php }
    print "</tr>";
    print ("\n");
}
