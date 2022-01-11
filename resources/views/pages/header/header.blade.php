
<div id="wrapper">
    <div id="header"></div>
        <div class="topnav">
            <a class="active" href="index.php">Trang chủ</a>
            <ul id = "drnav">
            <div class="dropdown"></div>
            <div class="dropdown">
                <button class="dropbtn">Loại cây</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Species;
                        $sql = Species::all();
                        echo "<form action= method=GET>";
                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Species>$value->Species </a>";
                            }
                        echo "</form>";
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Đất Trồng</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Landtype;
                        $sql = LandType::all();
                        echo "<form action= method=GET>";
                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Landtype>$value->Landtype </a>";
                            }
                        echo "</form>";
                    ?>

                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Khu vực</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Area;
                        $sql = Area::all();
                        echo "<form action= method=GET>";
                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Area>$value->Area </a>";
                            }
                        echo "</form>";
                    ?>
                </div>
            </div>
            <!-- DropList of Area -->
            <!-- DropList of Light -->
            <div class="dropdown">
                <button class="dropbtn">Độ sáng</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Light;
                        $sql = Light::all();
                        echo "<form action= method=GET>";

                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Light>$value->Light </a>";
                            }
                        echo "</form>";
                    ?>

                </div>
            </div>
            <!-- DropList of Light -->
            <!-- DropList of Humidity -->
            <div class="dropdown">
                <button class="dropbtn">Độ ẩm</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Humidity;

                        echo "<form action= method=GET>";
                        $sql = Humidity::all();
                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Humidity>$value->Humidity </a>";
                            }
                        echo "</form>";
                    ?>

                </div>
            </div>
            <!-- DropList of Humidity -->
            <!-- DropList of Benefit -->
            <div class="dropdown">
                <button class="dropbtn">Công dụng</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Benefit;
                        echo "<form action= method=GET>";
                        $sql = Benefit::all();
                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Benefit>$value->Benefit </a>";
                            }
                        echo "</form>";
                    ?>

                </div>
            </div>
            <!-- DropList of Benefit -->
            <!-- DropList of Climate -->
            <div class="dropdown">
                <button class="dropbtn">Khí hậu</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Climate;
                        $sql = Climate::all();
                        echo "<form action= method=GET>";
                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Climate>$value->Climate </a>";
                            }
                        echo "</form>";
                    ?>

                </div>
            </div>
            <!-- DropList of Climate -->
            <!-- DropList of Growthtime -->
            <div class="dropdown">
                <button class="dropbtn">Thời gian sinh trưởng</button>
                <div class="dropdown-content">
                    <?php
                        use App\Models\Growthtime;
                        echo "<form action= method=GET>";
                        $sql = Growthtime::all();
                            foreach ($sql as $value) {
                                echo "<a href =list_tree?id=$value->Code&key=Growthtime>$value->Growthtime </a>";
                            }
                        echo "</form>";
                    ?>
                </div>
            </div>
            <!-- DropList of Growthtime -->

            <div class="search-container">
                <form action="search" method ="GET" onsubmit="return signup()">
                    <input type="text" placeholder="Tìm kiếm.." id="search" name="search" onkeyup="showResult(this.value)">
                    <button type="submit"><i class="bi bi-search"></i></i></button>
                </form>
                <div id="show"></div>
            </div>
        </div>
    </div>
</div>

