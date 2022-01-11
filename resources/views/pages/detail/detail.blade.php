
@extends('layouts.master')
@section('detail_css')
    <link rel="stylesheet" href="../resources/css/detail.css">
@endsection
@section('detail')
<div class="showcontent">
<?php
    $Code=$_GET['id'];
    $sql = DB::select("SELECT * FROM db_trees WHERE Code=$Code");
    echo '<center>'.'<table frame="border" border=4 >'.'</center>';
    foreach ($sql as $value) {

        echo "<form action= method=GET>";
        echo '<table frame="border" border=4  >';
        echo "<br>";
        echo "<tr id='h1'> <td><h1>$value->TreeName</h1></td></tr>";
        echo "<tr id='tr'>
        <td> <h2>Đặc điểm</h2></td>
            </tr>";
        echo "<tr id='tr'>
            <td id='td'>$value->Characteristics</td>
            </tr>";
        echo "<tr id='tr'>
            <td id='td'><center><img src='$value->Avatar'><br>Hình ảnh cây $value->TreeName </center></td>
            </tr>";
        echo "<tr id='tr'>
            <td> <h2>Cách chăm sóc</h2></td>
            </tr>";
        echo "<tr id='tr'>
            <td id='td'>$value->HowToCare</td>
            </tr>";
        echo "<tr id='tr'>
            <td> <h2>Tổng kết</h2></td>
            </tr>";
        echo "<tr id='tr'>
            <td id='td'>$value->Describe</td>
            </tr>";



        echo "</table>";
        echo "</form>";

    }





?>
</div>
@endsection
