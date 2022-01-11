@extends('layouts.app')
@section('content')
<div class="container overflow-hidden">
    <div class="row gx-5">
        <div class="col">
            <div class="d-grid gap-2 d-md-block">
            <?php $location = $_GET['location'];
            echo"
                <button class='btn btn-primary' type='button' onclick=window.location.href='listT?id=$location'>Quay lại</button>
                ";
            ?>
            <p></p>
            </div>
            <div class="d-grid gap-2">
                <?php
                   $code = $_GET['id'];
                   $sql = DB::select("SELECT * FROM db_trees WHERE Code=$code");
                    echo "<table class='table table-bordered border-primary'>";
                    foreach ($sql as $value) {
                        echo "  <thead  align='center'>
                                    <tr>
                                    <th scope='col' colspan=3> $value->TreeName </th>
                                    </tr>

                                </thead>";
                        echo "  <tbody>
                                    <tr align='center'>
                                    <th scope='row' >Đặc điểm</th>
                                    <td>$value->Characteristics</td>
                                    <td><center><a href='edit?id=$value->Code&position=Characteristics&location=$location'><img src='../resources/img/templates/edit.jpg' width='60px'></center></a></td>
                                    </tr>
                                    <tr align='center'>
                                    <th scope='row' >Cách chăm sóc</th>
                                    <td>$value->HowToCare</td>
                                    <td><center><a href='edit?id=$value->Code&position=HowToCare&location=$location'><img src='../resources/img/templates/edit.jpg' width='60px'></center></a></td>
                                    </tr>
                                    <tr align='center'>
                                    <th scope='row' >Mô tả</th>
                                    <td>$value->Describe</td>
                                    <td><center><a href='edit?id=$value->Code&position=Describe&location=$location'><img src='../resources/img/templates/edit.jpg' width='60px'></center></a></td>

                                    </tr>
                                </tbody>";
                    }
                    echo "</table>";
                ?>
            </div>
        </div>
    </div>
    </div>

@endsection
