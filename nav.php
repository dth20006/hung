<?php
$result2 = $conn->query("SELECT * FROM setting WHERE muc = 'logoweb'");
$row2 = $result2->fetch(PDO::FETCH_ASSOC);
?>
<body>

            <!-- Stuff -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
                <defs>
                    <filter id="goo">
                        <fegaussianblur in="SourceGraphic" stddeviation="6" result="blur"></fegaussianblur>
                        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></fecolormatrix>
                        <feblend in="SourceGraphic" in2="goo"></feblend>
                    </filter>
                </defs>
            </svg>
        </div>
    </div>

    <!-- mobile header -->
   <header class="mobile-header-1 shadow">
        <div class="container" style="
            display: flex;
            justify-content: space-between;
            align-items: center;
        ">
            <!-- menu icon -->
            
            <!-- logo image -->
            <div class="site-logo">
                <div class="" style="
                    
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    width: 100%;
                    align-items: center;
                
                ">
                    <a href="/">
                        <img src="<?=$row2['giatri']?>" alt="Bolby">                        
                    </a>
                    
                </div>
            </div>
            <div class="" style="
                display: contents;
            ">
                <a href="#home" class="btn btn-duong btn-duong-border" style="
                            
                        margin-bottom: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 36px;
                        
                        padding-left: 8px;
                        padding-right: 8px;
                        font-size: 14px;
                        width: 250px;
                    ">
                    CHỌN SẢN PHẨM
                    </a>
                <div class="menu-icon d-inline-flex ml-2">
                    <button>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container desktop-header-1 desktop-header-duong wow">
            <ul class="vertical-menu scrollspy mt-3">
                <li class="active">
                    <a href="index.php#home" class="nav-link">
                        <i class="fa-solid fa-house"></i>TRANG CHỦ</a>
                </li>
                <li>
                    <a href="logo.php" class="nav-link">
                        <i class="fa-regular fa-image"></i>SẢN PHẨM ĐÃ LÀM BÁN</a>
                </li>
                <li>
                    <a href="banner.php" class="nav-link">
                        <i class="fa-solid fa-pager"></i>DEMO &amp; DEMO</a>
                </li>
                <li>
                    <a href="index.php#about" class="nav-link">
                        <i class="fa-solid fa-compass-drafting"></i>H</a>
                </li>
                <li><a href="contact.php" class="nav-link"><i class="fa-solid fa-inbox"></i>LIÊN HỆ</a></li>
            </ul>
        </div>
    </header>
    <!-- desktop header -->


<header class="desktop-header-1 d-flex align-items-start flex-column">

    <!-- logo image -->
    <div class="site-logo">
        <a href="/">
            <img src="<?=$row2['giatri']?>" alt="LOGO">            
        </a>
    </div>

    <!-- main menu -->
    <nav>
        <ul class="vertical-menu scrollspy">
            <li class="active">
                <a href="index.php#home" class="nav-link">
                    <i class="fa-solid fa-house"></i>TRANG CHỦ</a>
            </li>
            <li>
                <a href="logo.php" class="nav-link">
                    <i class="fa-regular fa-image"></i>LOGO THƯƠNG HIỆU</a>
            </li>
            <li>
                <a href="banner.php" class="nav-link">
                    <i class="fa-solid fa-pager"></i>BANNER &amp; BÌA</a>
            </li>
            <li>
                <a href="index.php#about" class="nav-link">
                    <i class="fa-solid fa-compass-drafting"></i>THIẾT KẾ LOGO</a>
            </li>
            <li><a href="contact.php" class="nav-link"><i class="fa-solid fa-inbox"></i>LIÊN HỆ</a></li>
        </ul>
    </nav>

    <!-- site footer -->
    <div class="footer">
        <!-- copyright text -->
        <span class="copyright">© <?=date('Y')?> <?=$row['giatri']?></span>
    </div>



    </header>