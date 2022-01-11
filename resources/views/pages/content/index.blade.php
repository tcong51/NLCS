
@extends('layouts.master')
@section('index_css')
    <link rel="stylesheet" href="../resources/css/index.css">
@endsection
@section('index')
<div class='main_content'>
    <div class="content">
                <div id ="left">
                    <br><a>CHÀO MỪNG BẠN ĐẾN VỚI TREES DICTIONARY </a><br>
                    <h3>Trang web hỗ trợ tìm kiếm, tra cứu cây trồng.</h3>
                    <h3>Trees Dictionary là nơi mà kiến thức của chuyên gia đồng hành cùng những bài nghiên cứu về cây trồng đáng tin cậy.</h3>
                    <p>Từ năm 2020, Trees Dictionary được sinh ra để giải quyết vấn đề về tìm kiếm phương pháp trông cây hiệu quả. Chúng tôi hợp tác với
                        những chuyên gia uy tín, một đội ngũ những nhà nghiên cứu đã qua đào tạo và một cộng đồng tận tâm nhằm tạo ra những
                        nội dung hướng dẫn đáng tin cậy, dễ hiểu và thân thiện trên mạng.</p>
                </div>
                <div id="right">
                    <img src="../resources/img/templates/treebook.jpg" alt="treebook" width="50%" height = "50%">
                </div>
                <div class ="clear"></div>
        </div>
    <div id="hienthi" >
            <div class="col-12">
                <div class="row" >
                    <?php
                        use App\Models\db_trees;
                        $NumberAccess=[];
                        $Luottruycap_dxx=[];
                        foreach ($sql = db_trees::all() as $value){
                            array_push($NumberAccess,$value['NumberAccess']);
                            }
                        rsort($NumberAccess);
                        $i=0;
                        while($i<8){

                                array_push($Luottruycap_dxx,$NumberAccess[$i]);

                            $i++;
                        }
                        foreach($Luottruycap_dxx as $value){
                            $tree1;
                            $sql = DB::select("SELECT * FROM db_trees WHERE NumberAccess=$value");
                            foreach ($sql as $value) {
                                $tree1 = $value->Code;
                            }

                            $sqlx = DB::select("SELECT * FROM db_trees WHERE Code=$tree1");

                            foreach ($sqlx as $content) {

                                echo " <div class='col-3 mt-3' >
                                            <img id='contentShow' src='$content->Avatar'>
                                            <br><center><a href =detail?id=$content->Code>  $content->TreeName </a></center>
                                    </div>";
                            }

                        }
                    ?>

    </div>
</div>
@endsection
