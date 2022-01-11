

<?php
    // echo"p";
    // use Illuminate\Support\Facades\DB;
    // use Illuminate\Support\Facades\DB;
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
            $sql = \DB::select("SELECT * FROM db_trees");
            foreach ($sql as $value){
                array_push($array_first,$value->Code);
                array_push($array_second,strtolower(convert_vi_to_en($value->TreeName)));
                }
            $array_value=array_combine($array_first,$array_second);
// Tìm từ khóa::
    $q = $_GET['key'];
    $key=convert_vi_to_en($q);
    $hint = "";
    // lookup all hints from array if $q is different from ""
    if ($key !== "") {
  //$q = strtolower($q);
    $len=strlen($key);
        foreach($array_value as $key1=>$name) {
            if (stristr($name,$key )) {
                if ($hint === "") {
                    $sql = DB::select("SELECT * FROM db_trees WHERE Code =$key1");
                    foreach ($sql as $content) {
                    $hint = "<a href=detail?id=$content->Code> $content->TreeName</a></br></br>";
                    }
                }
                else {
                    $sql = DB::select("SELECT * FROM db_trees WHERE Code =$key1");
                    foreach ($sql as $content) {
                    $hint .="</br><a href=detail?id=$content->Code id='lid'> $content->TreeName</a></br></br>";
                    }
                }
            }
        }
    }
    echo $hint === "" ? "<p id='noresult'>Không tìm thấy</p>" : $hint;
?>


