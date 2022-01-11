@extends('layouts.app')
<script type="text/javascript" src="../resources/js/notices.js"></script>
@section('content')
<div class="container overflow-hidden">
    <div class="row gx-5">
        <div class="col">
            <div class="d-grid gap-2 d-md-block">
            <?php
            $code = $_GET['id'];
            $location = $_GET['location'];
            echo"
                <button class='btn btn-primary' type='button' onclick=window.location.href='menuedit?id=$code&location=$location'>Quay lại</button>
                ";
            ?>
            <p></p>
            </div>
            <div class="d-grid gap-2">
                <form  action="{{ url('editTree') }}" method="GET" onsubmit="return notices()" id="form_dd">
                    <table class='table table-bordered border-primary'>
                    <?php
                    $code = $_GET['id'];
                    $position = $_GET['position'];
                    $sql = DB::select("SELECT * FROM db_trees WHERE Code=$code");
                        foreach ($sql as $value) {
                            echo "  <thead  align='center'>
                                        <tr>
                                        <th scope='col'><input type='hidden' name='id' value='$value->Code'>$value->Code</th>
                                        <th scope='col' colspan=2> $value->TreeName </th>
                                        </tr>
                                    </thead>";
                            echo "  <tbody>";
                                    if($position == 'Characteristics'){
                                        echo "    <tr align='center'>
                                                        <th scope='row' rowspan=2 >Đặc điểm</th>
                                                        <th>Nội dung hiện tại</th>
                                                        <td><input type='hidden' name='position' value='$position'>$value->Characteristics</td>";
                                    }elseif ($position == 'HowToCare') {
                                        echo "    <tr align='center'>
                                                        <th scope='row' rowspan=2 >Cách chăm sóc</th>
                                                        <th>Nội dung hiện tại</th>
                                                        <td><input type='hidden' name='position' value='$position'>$value->HowToCare</td>";
                                    }else{
                                        echo "    <tr align='center'>
                                                        <th scope='row' rowspan=2 >Mô tả</th>
                                                        <th>Nội dung hiện tại</th>
                                                        <td><input type='hidden' name='position' value='$position'>$value->Describe</td>";
                                    }
                            echo "            </tr>
                                        <tr align='center'>
                                        <th>Nội dung điều chỉnh</th>
                                        <td><textarea cols='0' id='contentEdit' placeholder='Đây là vùng nhập text' name='contentEdit' style='width: 1070px;height: 200px;'></textarea></td>
                                        </tr>
                                        <tr align='center'>
                                        <th colspan =3><center><input type='submit' class ='btn btn-primary' value=' Xác nhận '></center></th>

                                        </tr>
                                    </tbody>";
                        }

                    ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
