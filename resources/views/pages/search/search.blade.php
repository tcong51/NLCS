@extends('layouts.master')
@section('search_css')
    <link rel="stylesheet" href="../resources/css/search.css">
@endsection
@section('search')
<div class="search">
    <div id="content">
        <?php
            use App\Models\db_trees;
            $array_first[]="";
            $array_second[]="";
            function convert_vi_to_en($str) {
                $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
                $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
                $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
                $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
                $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
                $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
                $str = preg_replace("/(đ)/", "d", $str);
                $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
                $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
                $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
                $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
                $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
                $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
                $str = preg_replace("/(Đ)/", "D", $str);
                return $str;
            }
            $sql = db_trees::all();
            foreach ($sql as $value){
                array_push($array_first,$value->Code);
                array_push($array_second,strtolower(convert_vi_to_en($value->TreeName)));
                }
            $array_value=array_combine($array_first,$array_second);
            $search=$_GET['search'];
            $key=convert_vi_to_en($search);
            echo "</br>";
            $hint = "";
            if ($key !== "") {
                $len=strlen($key);
                $number_result=0;
                foreach($array_value as $key1=>$name) {
                    if (stristr($name,$key)) {
                        if ($hint === "") {
                            $sql = DB::select("SELECT * FROM db_trees WHERE Code =$key1");
                            foreach ($sql as $content) {
                                 $hint =
                                    "<h4>$content->TreeName</h4> $content->Characteristics...<a href =detail?id=$content->Code> [Xem chi tiết]</a></td>
                                    </br>
                                    </br>";
                            }

                        }
                        else {
                            $sql = DB::select("SELECT * FROM db_trees WHERE Code =$key1");
                            foreach ($sql as $content) {
                            $hint .="<h4>$content->TreeName</h4> $content->Characteristics...<a href=detail?id=$content->Code> [Xem chi tiết]</a></td>
                            </br>
                            </br>";
                            }
                        }

                        $number_result++;
                    }

                }


            }
    echo " Khoảng $number_result kết quả tìm kiếm cho với từ khóa '$search' :";
        echo "</br>";
        echo "</br>";
        echo "</br>";
    echo $hint === "" ? "Không tìm thấy" : $hint;
    ?>

    </div>
</div>
@endsection
