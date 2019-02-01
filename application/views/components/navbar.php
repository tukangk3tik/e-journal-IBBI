<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="beranda" class="navbar-brand">e-Jurnal IBBI</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button">MASTER <span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="penulis">Penulis</a></li>
                            <li class="divider"></li>
                            <li><a href="user">User</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="jurnal" role="button">JURNAL</a>
                    </li>

                    <li class="dropdown">
                  
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    LAPORAN <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="laporan/jurnaltahun" target="_blank">Lap. Jurnal Per-Tahun</a></li>
                        <li><a href="laporan/jurnaljurusan" target="_blank">Lap. Jurnal Per-Jurusan</a></li>
                        <li><a href="laporan/jurnallengkap" target="_blank">Lap. Lengkap Per-Jurnal</a></li>
                        <li><a href="laporan/penulis" target="_blank">Lap. Penulis</a></li>
                        <li><a href="laporan/user" target="_blank">Lap. User</a></li>
                    </ul>
                </li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user"></span> <?= $this->session->userdata("nama");?><span class="caret"></span></a>

                        <ul class=dropdown-menu>
                            <li><a href="profil">Profil</a></li>
                            <li><a href="user/gantipass">Rubah Password</a></li>
                            <li class="divider"></li>
                            <li><a href="logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
</nav>