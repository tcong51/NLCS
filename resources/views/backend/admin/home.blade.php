@extends('layouts.app')
@section('content')
<script> alert("You are logged in!");</script>
<div class="container overflow-hidden">
  <div class="row gx-5">
    <div class="col">
     <div class="d-grid gap-2""><button type="button"  class="btn btn-primary" onclick="window.location.href='addtree'">THÊM CÂY</button>
</div>
    </div>
    <div class="col">
      <div  class="d-grid gap-2"><button type="button"  class="btn btn-primary" onclick="window.location.href='ds_trees.php'">DANH SÁCH CÂY</button>
</div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.footer')
