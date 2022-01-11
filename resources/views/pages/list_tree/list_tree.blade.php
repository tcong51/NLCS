@extends('layouts.master')
@section('list_tree_css')
    <link rel="stylesheet" href="../resources/css/list_tree.css">
@endsection
@section('list_tree')
<div class='content_list'>
    <div id="ten-content">
        <br>
        <h3><center>DANH SÁCH CÂY <?php
            $id =$_GET['id'];
            $key = $_GET['key'];
            $arrayNameTrees = array('area', 'benefit', 'climate', 'humidity', 'growthtime', 'species', 'landtype', 'light');
            $arrayReturnName = array('Khu vực', 'Công dụng', 'Khí hậu', 'Độ ẩm', 'Thời gian sinh trưởng', 'Loại cây', 'Độ sáng');
            $len = count($arrayNameTrees);
            $sql = DB::select("SELECT DISTINCT * FROM $key WHERE Code =$id");
			foreach ($sql as $value) {
                $value = mb_strtoupper($value->$key,'UTF-8');
                echo $value;
            }
			?>
            </center></h3>
            <br>

    <div id='content'>
        <br>
        <?php
            $id =$_GET['id'];
            $key = $_GET['key'];
            echo "<table>" ;
            $sql = DB::select("SELECT DISTINCT * FROM db_trees WHERE $key=$id") ;
            foreach ($sql as $value){
                echo "<tr id='tr'>
                <td id='link' ><img src='$value->Avatar'></td>
                <td style='width:700px'><h3>$value->TreeName</h3></br> $value->Characteristics...<a href =detail?id=$value->Code> [Xem chi tiết]</a></td>
                </tr>";

                }
            echo "</table>";
        ?>

</div>
@endsection
