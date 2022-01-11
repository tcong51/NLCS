@extends('layouts.app')
@section('content')
    <div class="container overflow-hidden">
    <div class="row gx-5">
        <div class="col">
            <div class="d-grid gap-2">
                <?php
                    $sql = DB::select("SELECT * FROM species");
                            foreach ($sql as $value) {
                                echo "<button type='button'  class='btn btn-primary' onclick=window.location.href='listT?id=$value->Code'>$value->Species</button>";
                            }
                ?>
            </div>
        </div>
    </div>
    </div>
@endsection
@extends('layouts.footer')
