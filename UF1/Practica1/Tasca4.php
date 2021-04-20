<?php

$max = 9;

$d=mt_rand(1,$max);
var_dump($d);
switch ($d) {
    case 1 || 2 || 3:
        echo "
    <tr>
        <td>Celda 1</td>
    </tr>
    <tr>
        <td>Taronja</td>
    </tr>
    <tr>
        <td>Celda 3</td>
    </tr>
</table>";
        break;
    case 4 || 5 || 6:
        echo "
    <tr>
        <td>Celda 1</td>
    </tr>
    <tr>
        <td>Taronja</td>
    </tr>
    <tr>
        <td>Celda 3</td>
    </tr>
</table>";
        break;
    case 7 || 8 || 9:
        echo "
    <tr>
        <td>Vermell</td>
    </tr>
    <tr>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
    </tr>
</table>";
        break;
}
