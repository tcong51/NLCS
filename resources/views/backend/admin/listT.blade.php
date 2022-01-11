@extends('layouts.app')
<script type="text/javascript" src="../resources/js/delete.js"></script>
@section('content')
    <div class="container overflow-hidden">
    <div class="row gx-5">
        <div class="col">
            <div class="d-grid gap-2">

                <?php
                   $code = $_GET['id'];
                   $sql = DB::select("SELECT * FROM db_trees WHERE Species=$code");
                   $name= DB::select("SELECT  * FROM species WHERE Code =$code");
                    foreach ($name as $dit) {
                        $nameList = mb_strtoupper($dit->Species,'UTF-8');
                    }
                    echo "<table class='table table-bordered border-primary'>";
                         echo "  <thead  align='center'>
                            <tr>
                            <th scope='col' colspan=5>DANH SÁCH CÂY $nameList </th>
                            </tr>
                            </thead>";
                    echo "  <thead align='center'>
                            <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Cây trồng</th>
                            <th scope='col' colspan=2>Thao tác</th>
                            </tr>
                            </thead>";
                    echo "  <tbody>";
                    foreach ($sql as $value) {
                        echo "
                                    <tr align='center'>
                                    <th scope='row' >$value->Code</th>
                                    <td>$value->TreeName</td>
                                    <td><button type='button'  class='btn btn-secondary btn-sm' onclick=window.location.href='menuedit?id=$value->Code&location=$code'>Sửa thông tin</button></td>
                                    <td>";
                        echo " <form  action=deleteTree method='GET' onsubmit='return deleteTree()'>";
                        echo "
                                            <input type='hidden' name='Code' value='$value->Code'>
                                            <input type='hidden' name='id' value='$code'>
                                           <input type='submit' class ='btn btn-secondary' value=' Xóa '>
                                        </form>
                                    </td>
                                    </tr>
                            ";
                    }
                    echo "</tbody>";
                    echo "</table>";
                ?>
            </div>
        </div>
    </div>
    </div>
@endsection
@extends('layouts.footer')
