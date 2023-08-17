<?php
if (($open = fopen("baloo.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
        $array[] = $data;
    }

    fclose($open);
}
?>


// <?php echo '<table border="1">';
    // $start_row = 1;
    // if (($csv_file = fopen("baloo.csv", "r")) !== FALSE) {
    //   while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
    //     $column_count = count($read_data);
    // 	echo '<tr>';
    //     $start_row++;
    //     for ($c=0; $c < $column_count; $c++) {
    //         echo "<td>".$read_data[$c] . "</td>";
    //     }
    // 	echo '</tr>';
    //   }
    //   fclose($csv_file);
    // }
    // echo '</table>';
    // 
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="crawl.css">
    <title>Document</title>
    <style>
        .col-12 {
    flex: 0 0 auto;
    width: 100%;
}
.row > * {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .3);
    padding-left: calc(var(--bs-gutter-x) * .3);
    margin-top: var(--bs-gutter-y);
}
* {
    padding: 0;
    margin: 0;
    outline: none !important;
}
*, *::after, *::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
* {
    padding: 0;
    margin: 0;
    outline: none !important;
}
*, *::after, *::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) * -.3);
    margin-left: calc(var(--bs-gutter-x) * -.3);
}
#page-wrapper {
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
#page-wrapper {
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
body {
    /* font-family: "Roboto", "Segoe UI", Arial, Segoe, "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif; */
    font-family: 'MuliDisplayVN', sans-serif;
    font-size: 14px;
    line-height: 1.4;
    color: rgba(0, 0, 0, 0.85);
    background-color: #fff;
    position: relative;
}
body {
    /* font-family: "Roboto", "Segoe UI", Arial, Segoe, "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif; */
    font-family: 'MuliDisplayVN', sans-serif;
    font-size: 14px;
    line-height: 1.4;
    color: rgba(0, 0, 0, 0.85);
    background-color: #fff;
    position: relative;
}
body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
:root {
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #d63384;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;
    --bs-font-sans-serif: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
}
*, *::after, *::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

    </style>
</head>

<body>

    <div class="col-12 col-lg-9" style="     ">
        <div class="category-top-info" style="     ">
            <h2 class="category-title" style="  ">
                BALO - TÚI
            </h2>
            <div class="toolbar-mode" style="  ">
                <div class="filter-collection-left">
                    <a href="#">
                        <div class="togglelines-btn">
                            <span class="togglelines"></span>
                        </div>
                        <span class="shop-filter-text">
                            <span class="closetext">Bộ lọc</span>
                            <span class="opentext">Đóng</span>
                        </span>
                    </a>
                </div>
                <div class="toolbar-right">
                    <div class="browse-tags" style=" ">
                        <label style=" ">Sắp xếp theo:</label>
                        <select class="sort-by" id="sortSelect" style=" ">
                            <option value="">Tùy ch6,....ọn</option>
                            <option value="PRICEASC">
                                Sắp xếp theo giá: từ thấp
                                đến cao
                            </option>
                            <option value="PRICEDESC">
                                Sắp xếp theo giá: từ cao
                                đến thấp
                            </option>
                            <option value="NAMEAZ">
                                Sắp xếp theo alphabetically,
                                A-Z
                            </option>
                            <option value="NAMEZA">
                                Sắp xếp theo
                                alphabetically: Z-A
                            </option>
                            <option value="DATENEW">
                                Sắp xếp theo ngày: từ cũ
                                đến mới
                            </option>
                            <option value="DATEOLD">
                                Sắp xếp theo ngày: từ mới
                                đến cũ
                            </option>
                            <option value="BESTSALE">
                                Sắp xếp theo bán chạy nhất
                            </option>
                        </select>
                        <i class="mwc-icon-angle-down"></i>
                    </div>

                </div>
            </div>
        </div>
        <div class="category-product-list">
            <div class="row" style="     ">
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="              ">
                    <div class="product-grid-item" style="  ">
                        <div class="product-grid-thumb">
                            <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den" class="product-grid-image pl-id-3247" title="Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích" style="   ">
                                <img class="mcl-id-3247" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522178062-3e70188a1ab65f16338df90a1589314f.jpg" alt="Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3247" href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den" title="Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title" style="          ">
                                    Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích
                                </p>
                                <p class="product-grid-price" style="                 ">
                                    <span class="product-grid-price-new" style="        ">
                                        <span class="product-grid-price-new-text" style="        ">
                                            195.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor" style="   ">
                            <ul style="                         ">
                                <li class="plid-1 pl-3247-id1-0" onmouseover="hoverPcolor('pl-id-3247','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860521983244-4932c151350de24fbb14c57f9418c2bd.jpg','/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xanhd','mcl-id-3247','plid-1','pl-3247-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860521983244-4932c151350de24fbb14c57f9418c2bd.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-1 pl-3247-id1-1" onmouseover="hoverPcolor('pl-id-3247','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522289633-b6731fc46f8b996efbc7abe6d1382b9f.jpg','/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xam','mcl-id-3247','plid-1','pl-3247-id1-1')" data-color="?c=xam" style="      ">
                                    <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522289633-b6731fc46f8b996efbc7abe6d1382b9f.jpg" style="     ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>
                                <li class="plid-1 pl-3247-id1-2 active" onmouseover="hoverPcolor('pl-id-3247','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522178062-3e70188a1ab65f16338df90a1589314f.jpg','/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den','mcl-id-3247','plid-1','pl-3247-id1-2')" data-color="?c=den" style="        ">
                                    <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522178062-3e70188a1ab65f16338df90a1589314f.jpg" style="   ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="         ">
                    <div class="product-grid-item" style="   ">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1137?&amp;c=xam" class="product-grid-image pl-id-2781" title="BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang ">
                                <img class="mcl-id-2781" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776703712-c02dbb8b6f30cb349f7a5a81b325fe83.jpg" alt="BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang ">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2781" href="/products/balo-mwc-balo--1137?&amp;c=xam" title="BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang ">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title" style=" ">
                                    BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang
                                </p>
                                <p class="product-grid-price" style=" ">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            195.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul style="        ">
                                <li class="plid-2 pl-2781-id1-0" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776722194-8f5236a455fc4771d465a9a1096b1e95.jpg','/products/balo-mwc-balo--1137?&amp;c=xanhl','mcl-id-2781','plid-2','pl-2781-id1-0')" data-color="?c=xanhl" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776722194-8f5236a455fc4771d465a9a1096b1e95.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                    </a>
                                </li>
                                <li class="plid-2 pl-2781-id1-1" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776741430-b6d909d1526216f59e544fd35e8e1d87.jpg','/products/balo-mwc-balo--1137?&amp;c=tim','mcl-id-2781','plid-2','pl-2781-id1-1')" data-color="?c=tim" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=tim" title="Tím" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776741430-b6d909d1526216f59e544fd35e8e1d87.jpg" style=" ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_TIM.jpg" alt="Tím">
                                    </a>
                                </li>
                                <li class="plid-2 pl-2781-id1-2" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776719814-c62eeec6ca67da9189ba5c45d3963fcb.jpg','/products/balo-mwc-balo--1137?&amp;c=cam','mcl-id-2781','plid-2','pl-2781-id1-2')" data-color="?c=cam" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=cam" title="Cam" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776719814-c62eeec6ca67da9189ba5c45d3963fcb.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/11/03/Cam.jpg" alt="Cam">
                                    </a>
                                </li>
                                <li class="plid-2 pl-2781-id1-3 active" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776703712-c02dbb8b6f30cb349f7a5a81b325fe83.jpg','/products/balo-mwc-balo--1137?&amp;c=xam','mcl-id-2781','plid-2','pl-2781-id1-3')" data-color="?c=xam" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776703712-c02dbb8b6f30cb349f7a5a81b325fe83.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="    ">
                    <div class="product-grid-item" style=" ">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1145?&amp;c=hong" class="product-grid-image pl-id-2988" title="BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...">
                                <img class="mcl-id-2988" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648877647-0841a92e174e6221a8b227706c8d1a7d-a288721c-0a5f-4dff-b14a-8985a740c364.jpg" alt="BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2988" href="/products/balo-mwc-balo--1145?&amp;c=hong" title="BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            270.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor" style=" ">
                            <ul style="     ">
                                <li class="plid-3 pl-2988-id1-0 active" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648877647-0841a92e174e6221a8b227706c8d1a7d-a288721c-0a5f-4dff-b14a-8985a740c364.jpg','/products/balo-mwc-balo--1145?&amp;c=hong','mcl-id-2988','plid-3','pl-2988-id1-0')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648877647-0841a92e174e6221a8b227706c8d1a7d-a288721c-0a5f-4dff-b14a-8985a740c364.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-3 pl-2988-id1-1" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648857105-bf9abfd0037ffe4563bbe80e99e9dc03-30130934-5c19-4bb2-b147-808a03810d05.jpg','/products/balo-mwc-balo--1145?&amp;c=den','mcl-id-2988','plid-3','pl-2988-id1-1')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648857105-bf9abfd0037ffe4563bbe80e99e9dc03-30130934-5c19-4bb2-b147-808a03810d05.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-3 pl-2988-id1-2" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648891887-635fac0a02953752c3be0c4328821266-33959bf7-13e3-42e1-abd0-ee2fb53ab6a0.jpg','/products/balo-mwc-balo--1145?&amp;c=xanhr','mcl-id-2988','plid-3','pl-2988-id1-2')" data-color="?c=xanhr">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=xanhr" title="Xanh Rêu" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648891887-635fac0a02953752c3be0c4328821266-33959bf7-13e3-42e1-abd0-ee2fb53ab6a0.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/mau xanh.jpg" alt="Xanh Rêu">
                                    </a>
                                </li>
                                <li class="plid-3 pl-2988-id1-3" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648850262-e4e42ef7f47f2bca6b818f6150acb1a5-cf0990ac-88ab-4ade-81e5-4c12b02abfa2.jpg','/products/balo-mwc-balo--1145?&amp;c=xanhb','mcl-id-2988','plid-3','pl-2988-id1-3')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648850262-e4e42ef7f47f2bca6b818f6150acb1a5-cf0990ac-88ab-4ade-81e5-4c12b02abfa2.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1163?&amp;c=den" class="product-grid-image pl-id-3301" title="Balô MWC BALO- 1163">
                                <img class="mcl-id-3301" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953612006941_d5bdadd3096c4e79a8feff63f5a23218.jpg" alt="Balô MWC BALO- 1163">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3301" href="/products/balo-mwc-balo--1163?&amp;c=den" title="Balô MWC BALO- 1163">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô MWC BALO- 1163
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            195.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-4 pl-3301-id1-0" onmouseover="hoverPcolor('pl-id-3301','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167708285_53c2c9d8264592efc11f47147820b36b.jpg','/products/balo-mwc-balo--1163?&amp;c=den','mcl-id-3301','plid-4','pl-3301-id1-0')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1163?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167708285_53c2c9d8264592efc11f47147820b36b.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-4 pl-3301-id1-1" onmouseover="hoverPcolor('pl-id-3301','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953612006941_d5bdadd3096c4e79a8feff63f5a23218.jpg','/products/balo-mwc-balo--1163?&amp;c=xanhd','mcl-id-3301','plid-4','pl-3301-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1163?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953612006941_d5bdadd3096c4e79a8feff63f5a23218.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-4 pl-3301-id1-2" onmouseover="hoverPcolor('pl-id-3301','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167511246_8fa3d3ceb7e4f7e766226ef59114377e.jpg','/products/balo-mwc-balo--1163?&amp;c=kem','mcl-id-3301','plid-4','pl-3301-id1-2')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1163?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167511246_8fa3d3ceb7e4f7e766226ef59114377e.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="     ">
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style=" ">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--0829?&amp;c=hong" class="product-grid-image pl-id-2933" title="Balô Túi Đeo Chéo MWC TUID- 0829">
                                <img class="mcl-id-2933" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg" alt="Balô Túi Đeo Chéo MWC TUID- 0829">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2933" href="/products/balo-mwc-balo--0829?&amp;c=hong" title="Balô Túi Đeo Chéo MWC TUID- 0829">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô Túi Đeo Chéo MWC TUID- 0829
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            135.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-5 pl-2933-id1-0" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798329856636-3535b262a3a9a62d6f1ea4e22b3511a7.jpg','/products/balo-mwc-balo--0829?&amp;c=hong','mcl-id-2933','plid-5','pl-2933-id1-0')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798329856636-3535b262a3a9a62d6f1ea4e22b3511a7.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-5 pl-2933-id1-1" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg','/products/balo-mwc-balo--0829?&amp;c=xanhd','mcl-id-2933','plid-5','pl-2933-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-5 pl-2933-id1-2" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330019749-89d48b6919efbeb14ef7b1e4009af237.jpg','/products/balo-mwc-balo--0829?&amp;c=xamd','mcl-id-2933','plid-5','pl-2933-id1-2')" data-color="?c=xamd">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=xamd" title="Xám Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330019749-89d48b6919efbeb14ef7b1e4009af237.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/26/Xam.jpg" alt="Xám Đậm">
                                    </a>
                                </li>
                                <li class="plid-5 pl-2933-id1-3" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg','/products/balo-mwc-balo--0829?&amp;c=den','mcl-id-2933','plid-5','pl-2933-id1-3')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" class="product-grid-image pl-id-3293" title="BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3293" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949213155473_27195197962e1ec55981217297eb3954.jpg" alt="BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3293" href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-6 pl-3293-id1-0" onmouseover="hoverPcolor('pl-id-3293','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212973291_5bf2d5fd9f7b39d4a550b0ed5b2055a4.jpg','/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd','mcl-id-3293','plid-6','pl-3293-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212973291_5bf2d5fd9f7b39d4a550b0ed5b2055a4.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-6 pl-3293-id1-1" onmouseover="hoverPcolor('pl-id-3293','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949213155473_27195197962e1ec55981217297eb3954.jpg','/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong','mcl-id-3293','plid-6','pl-3293-id1-1')" data-color="?c=hong">
                                    <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949213155473_27195197962e1ec55981217297eb3954.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-6 pl-3293-id1-2" onmouseover="hoverPcolor('pl-id-3293','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212809196_1677611de71348199bfee21130be40ec.jpg','/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den','mcl-id-3293','plid-6','pl-3293-id1-2')" data-color="?c=den">
                                    <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212809196_1677611de71348199bfee21130be40ec.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1165?&amp;c=hong" class="product-grid-image pl-id-3300" title="BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3300" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953617690471_fbeb92077e51be32ca2d73a04282b8bc.jpg" alt="BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3300" href="/products/balo-mwc-balo--1165?&amp;c=hong" title="BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-7 pl-3300-id1-0" onmouseover="hoverPcolor('pl-id-3300','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665045155_e89d50ed70d2006012b4ac62203770ff.jpg','/products/balo-mwc-balo--1165?&amp;c=hong','mcl-id-3300','plid-7','pl-3300-id1-0')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1165?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665045155_e89d50ed70d2006012b4ac62203770ff.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-7 pl-3300-id1-1" onmouseover="hoverPcolor('pl-id-3300','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665072326_0180e2310e1435eb403f27c8a2e35b83.jpg','/products/balo-mwc-balo--1165?&amp;c=xanhd','mcl-id-3300','plid-7','pl-3300-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1165?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665072326_0180e2310e1435eb403f27c8a2e35b83.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-7 pl-3300-id1-2" onmouseover="hoverPcolor('pl-id-3300','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953617690471_fbeb92077e51be32ca2d73a04282b8bc.jpg','/products/balo-mwc-balo--1165?&amp;c=xanhb','mcl-id-3300','plid-7','pl-3300-id1-2')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1165?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953617690471_fbeb92077e51be32ca2d73a04282b8bc.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">

                            <a href="/products/balo-mwc-balo--1176?&amp;c=tim" class="product-grid-image pl-id-3647" title="Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3647" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293789999_cb14574d69a14fa467cc3966703c1f55.jpg" alt="Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3647" href="/products/balo-mwc-balo--1176?&amp;c=tim" title="Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            235.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor" style=" ">
                            <ul style=" ">
                                <li class="plid-8 pl-3647-id1-0" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293746655_0b3fe854bcee25de7a76593444f92054.jpg','/products/balo-mwc-balo--1176?&amp;c=tim','mcl-id-3647','plid-8','pl-3647-id1-0')" data-color="?c=tim">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=tim" title="Tím" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293746655_0b3fe854bcee25de7a76593444f92054.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_TIM.jpg" alt="Tím">
                                    </a>
                                </li>
                                <li class="plid-8 pl-3647-id1-1" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293699066_c48483b7bbb9a90cf3964b7923e5fb34.jpg','/products/balo-mwc-balo--1176?&amp;c=hong','mcl-id-3647','plid-8','pl-3647-id1-1')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293699066_c48483b7bbb9a90cf3964b7923e5fb34.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-8 pl-3647-id1-2" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293789999_cb14574d69a14fa467cc3966703c1f55.jpg','/products/balo-mwc-balo--1176?&amp;c=xanhb','mcl-id-3647','plid-8','pl-3647-id1-2')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293789999_cb14574d69a14fa467cc3966703c1f55.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>
                                <li class="plid-8 pl-3647-id1-3" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293540616_719a3ec2437a33d3342bd80d5fe66c40.jpg','/products/balo-mwc-balo--1176?&amp;c=xam','mcl-id-3647','plid-8','pl-3647-id1-3')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293540616_719a3ec2437a33d3342bd80d5fe66c40.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="     ">
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="  ">
                    <div class="product-grid-item" style="   ">
                        <div class="product-grid-thumb">

                            <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" class="product-grid-image pl-id-3292" title="BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3292" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949209066371_f4a3b815a9950351d626613903d056d4.jpg" alt="BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3292" href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price" style="  ">
                                    <span class="product-grid-price-new" style=" ">
                                        <span class="product-grid-price-new-text" style="  ">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul style="        ">
                                <li class="plid-9 pl-3292-id1-0" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426244027_4af3642ee5070004955ec4fff11aaa2a.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=kem','mcl-id-3292','plid-9','pl-3292-id1-0')" data-color="?c=kem" style=" ">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426244027_4af3642ee5070004955ec4fff11aaa2a.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>
                                <li class="plid-9 pl-3292-id1-1 active" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949209066371_f4a3b815a9950351d626613903d056d4.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd','mcl-id-3292','plid-9','pl-3292-id1-1')" data-color="?c=xanhd" style="  ">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949209066371_f4a3b815a9950351d626613903d056d4.jpg" style=" ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-9 pl-3292-id1-2" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208889373_51677e26784a2674a48d6cba076c764a.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong','mcl-id-3292','plid-9','pl-3292-id1-2')" data-color="?c=hong">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208889373_51677e26784a2674a48d6cba076c764a.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-9 pl-3292-id1-3" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208856957_19078ca64f53a7b3dd91f786e5e07bad.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den','mcl-id-3292','plid-9','pl-3292-id1-3')" data-color="?c=den">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208856957_19078ca64f53a7b3dd91f786e5e07bad.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1144?&amp;c=den" class="product-grid-image pl-id-3088" title="BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3088" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282134603-b36ee7184d774e6a7f1e2085f8ab442b.jpg" alt="BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3088" href="/products/balo-mwc-balo--1144?&amp;c=den" title="BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            250.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-10 pl-3088-id1-0" onmouseover="hoverPcolor('pl-id-3088','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282134603-b36ee7184d774e6a7f1e2085f8ab442b.jpg','/products/balo-mwc-balo--1144?&amp;c=den','mcl-id-3088','plid-10','pl-3088-id1-0')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1144?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282134603-b36ee7184d774e6a7f1e2085f8ab442b.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-10 pl-3088-id1-1" onmouseover="hoverPcolor('pl-id-3088','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282093236-4dddca28d08fa60efa98d126862c3b49.jpg','/products/balo-mwc-balo--1144?&amp;c=xam','mcl-id-3088','plid-10','pl-3088-id1-1')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1144?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282093236-4dddca28d08fa60efa98d126862c3b49.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1125?&amp;c=xanhd" class="product-grid-image pl-id-2682" title="BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi">
                                <img class="mcl-id-2682" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090735735_8f9f21eb100aa2d44ea5549c5d474927.jpg" alt="BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2682" href="/products/balo-mwc-balo--1125?&amp;c=xanhd" title="BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            180.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-11 pl-2682-id1-0" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090735735_8f9f21eb100aa2d44ea5549c5d474927.jpg','/products/balo-mwc-balo--1125?&amp;c=xanhd','mcl-id-2682','plid-11','pl-2682-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090735735_8f9f21eb100aa2d44ea5549c5d474927.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-11 pl-2682-id1-1" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090666490_a2f2fe32834533049a5f01a8071c5528.jpg','/products/balo-mwc-balo--1125?&amp;c=xam','mcl-id-2682','plid-11','pl-2682-id1-1')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090666490_a2f2fe32834533049a5f01a8071c5528.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>
                                <li class="plid-11 pl-2682-id1-2" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090631667_f76bf97452436614a0ac554796def997.jpg','/products/balo-mwc-balo--1125?&amp;c=do','mcl-id-2682','plid-11','pl-2682-id1-2')" data-color="?c=do">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=do" title="Đỏ" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090631667_f76bf97452436614a0ac554796def997.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DO.jpg" alt="Đỏ">
                                    </a>
                                </li>
                                <li class="plid-11 pl-2682-id1-3" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090658343_18a4724af7c4e7b84886a07f1acfd2af.jpg','/products/balo-mwc-balo--1125?&amp;c=den','mcl-id-2682','plid-11','pl-2682-id1-3')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090658343_18a4724af7c4e7b84886a07f1acfd2af.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1146?&amp;c=trang" class="product-grid-image pl-id-3022" title="BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang">
                                <img class="mcl-id-3022" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423749654-157a3979f47873b9cfab072edf808eff.jpg" alt="BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3022" href="/products/balo-mwc-balo--1146?&amp;c=trang" title="BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            270.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-12 pl-3022-id1-0" onmouseover="hoverPcolor('pl-id-3022','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423749654-157a3979f47873b9cfab072edf808eff.jpg','/products/balo-mwc-balo--1146?&amp;c=trang','mcl-id-3022','plid-12','pl-3022-id1-0')" data-color="?c=trang">
                                    <a href="/products/balo-mwc-balo--1146?&amp;c=trang" title="Trắng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423749654-157a3979f47873b9cfab072edf808eff.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/12/Trang1.png" alt="Trắng">
                                    </a>
                                </li>
                                <li class="plid-12 pl-3022-id1-1" onmouseover="hoverPcolor('pl-id-3022','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423730315-6e130855e47ed39b4b6f627a7e3a4856.jpg','/products/balo-mwc-balo--1146?&amp;c=xanhd','mcl-id-3022','plid-12','pl-3022-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1146?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423730315-6e130855e47ed39b4b6f627a7e3a4856.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="     ">
            <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                <div class="product-grid-item">
                    <div class="product-grid-thumb">



                        <a href="/products/balo-mwc-balo--1095?&amp;c=xanhl" class="product-grid-image pl-id-1531" title="BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            <img class="mcl-id-1531" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/9-9b50f3ac-e3f4-406a-a6b3-69a1f12ee0b5.png" alt="BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                        </a>

                    </div>

                    <a class="product-grid-info pl-id-1531" href="/products/balo-mwc-balo--1095?&amp;c=xanhl" title="BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                        <div class="product-grid-info-top">
                            <p class="product-grid-title">
                                BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang
                            </p>
                            <p class="product-grid-price">
                                <span class="product-grid-price-new">
                                    <span class="product-grid-price-new-text">
                                        215.000 đ
                                    </span>
                                </span>

                            </p>
                        </div>
                    </a>
                    <div class="variantColor">
                        <ul>
                            <li class="plid-13 pl-1531-id1-0" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/5-9f28c654-2ca2-4b6d-ab18-9335c6d9f5d5.png','/products/balo-mwc-balo--1095?&amp;c=xanhl','mcl-id-1531','plid-13','pl-1531-id1-0')" data-color="?c=xanhl">
                                <a href="/products/balo-mwc-balo--1095?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/5-9f28c654-2ca2-4b6d-ab18-9335c6d9f5d5.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                </a>
                            </li>
                            <li class="plid-13 pl-1531-id1-1" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/9-9b50f3ac-e3f4-406a-a6b3-69a1f12ee0b5.png','/products/balo-mwc-balo--1095?&amp;c=den','mcl-id-1531','plid-13','pl-1531-id1-1')" data-color="?c=den">
                                <a href="/products/balo-mwc-balo--1095?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/9-9b50f3ac-e3f4-406a-a6b3-69a1f12ee0b5.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                </a>
                            </li>
                            <li class="plid-13 pl-1531-id1-2" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-9b753423-28ed-485f-96fb-fa2a2c4c86e1.png','/products/balo-mwc-balo--1095?&amp;c=hong','mcl-id-1531','plid-13','pl-1531-id1-2')" data-color="?c=hong">
                                <a href="/products/balo-mwc-balo--1095?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-9b753423-28ed-485f-96fb-fa2a2c4c86e1.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                </a>
                            </li>
                            <li class="plid-13 pl-1531-id1-3" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/8-ce105756-d734-4db7-8cc8-7370d437b1ea.png','/products/balo-mwc-balo--1095?&amp;c=xanhd','mcl-id-1531','plid-13','pl-1531-id1-3')" data-color="?c=xanhd">
                                <a href="/products/balo-mwc-balo--1095?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/8-ce105756-d734-4db7-8cc8-7370d437b1ea.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                </a>
                            </li>
                            <li class="plid-13 pl-1531-id1-4" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-5e504294-937e-434d-a359-6f54bcfbfad1.png','/products/balo-mwc-balo--1095?&amp;c=kem','mcl-id-1531','plid-13','pl-1531-id1-4')" data-color="?c=kem">
                                <a href="/products/balo-mwc-balo--1095?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-5e504294-937e-434d-a359-6f54bcfbfad1.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                </a>
                            </li>
                            <li class="plid-13 pl-1531-id1-5" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2021/05/z2506548015740-d6a1cb2465117c91360841e320f8836c.jpg','/products/balo-mwc-balo--1095?&amp;c=xanhb','mcl-id-1531','plid-13','pl-1531-id1-5')" data-color="?c=xanhb">
                                <a href="/products/balo-mwc-balo--1095?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2021/05/z2506548015740-d6a1cb2465117c91360841e320f8836c.jpg">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="row" style="     ">
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1172?&amp;c=xanhd" class="product-grid-image pl-id-3398" title="Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3398" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131518436_133887e645dab6972bfa05bf30e021eb.jpg" alt="Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3398" href="/products/balo-mwc-balo--1172?&amp;c=xanhd" title="Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-14 pl-3398-id1-0" onmouseover="hoverPcolor('pl-id-3398','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131569100_14ce5426dff6e50a262d7c97e041fc95.jpg','/products/balo-mwc-balo--1172?&amp;c=xanhd','mcl-id-3398','plid-14','pl-3398-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1172?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131569100_14ce5426dff6e50a262d7c97e041fc95.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-14 pl-3398-id1-1" onmouseover="hoverPcolor('pl-id-3398','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131518436_133887e645dab6972bfa05bf30e021eb.jpg','/products/balo-mwc-balo--1172?&amp;c=den','mcl-id-3398','plid-14','pl-3398-id1-1')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1172?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131518436_133887e645dab6972bfa05bf30e021eb.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-14 pl-3398-id1-2" onmouseover="hoverPcolor('pl-id-3398','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131421068_41e673c114f5f337544729248feba927.jpg','/products/balo-mwc-balo--1172?&amp;c=kem','mcl-id-3398','plid-14','pl-3398-id1-2')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1172?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131421068_41e673c114f5f337544729248feba927.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1143?&amp;c=xam" class="product-grid-image pl-id-2846" title="BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi">
                                <img class="mcl-id-2846" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536315987-bb4d344b17fd975c92cf7b0ba67f6c6a.jpg" alt="BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2846" href="/products/balo-mwc-balo--1143?&amp;c=xam" title="BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            250.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-15 pl-2846-id1-0" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg','/products/balo-mwc-balo--1143?&amp;c=xam','mcl-id-2846','plid-15','pl-2846-id1-0')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-1" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426948695_3c282c23eab0de516c8288aa3bb8c8c9.jpg','/products/balo-mwc-balo--1143?&amp;c=xanhd','mcl-id-2846','plid-15','pl-2846-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426948695_3c282c23eab0de516c8288aa3bb8c8c9.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-2" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536315987-bb4d344b17fd975c92cf7b0ba67f6c6a.jpg','/products/balo-mwc-balo--1143?&amp;c=hong','mcl-id-2846','plid-15','pl-2846-id1-2')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536315987-bb4d344b17fd975c92cf7b0ba67f6c6a.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-3" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536691386-fb2881bf0bea749815fb674094b25f79.jpg','/products/balo-mwc-balo--1143?&amp;c=xanhb','mcl-id-2846','plid-15','pl-2846-id1-3')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536691386-fb2881bf0bea749815fb674094b25f79.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-4" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg','/products/balo-mwc-balo--1143?&amp;c=den','mcl-id-2846','plid-15','pl-2846-id1-4')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1117?&amp;c=xanhl" class="product-grid-image pl-id-2419" title="BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi">
                                <img class="mcl-id-2419" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3781022756704-bd044426b1e130fd29c958c62df58a90.jpg" alt="BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2419" href="/products/balo-mwc-balo--1117?&amp;c=xanhl" title="BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-16 pl-2419-id1-0" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-c346c6a2-df3b-47a0-b936-cdb622d15dd7.png','/products/balo-mwc-balo--1117?&amp;c=xanhl','mcl-id-2419','plid-16','pl-2419-id1-0')" data-color="?c=xanhl">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-c346c6a2-df3b-47a0-b936-cdb622d15dd7.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-1" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-e3912771-9aa6-4841-aaae-07392fe4a18d.png','/products/balo-mwc-balo--1117?&amp;c=hong','mcl-id-2419','plid-16','pl-2419-id1-1')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-e3912771-9aa6-4841-aaae-07392fe4a18d.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-2" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435428643611_af03a9db686e439e65fde3d3507cbe1f.jpg','/products/balo-mwc-balo--1117?&amp;c=xanhd','mcl-id-2419','plid-16','pl-2419-id1-2')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435428643611_af03a9db686e439e65fde3d3507cbe1f.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-3" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-fa9e3283-4bff-4c0f-935f-92848abb07ef.png','/products/balo-mwc-balo--1117?&amp;c=kem','mcl-id-2419','plid-16','pl-2419-id1-3')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-fa9e3283-4bff-4c0f-935f-92848abb07ef.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-4" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3781022756704-bd044426b1e130fd29c958c62df58a90.jpg','/products/balo-mwc-balo--1117?&amp;c=den','mcl-id-2419','plid-16','pl-2419-id1-4')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3781022756704-bd044426b1e130fd29c958c62df58a90.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="     ">
            <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                <div class="product-grid-item">
                    <div class="product-grid-thumb">



                        <a href="/products/balo-mwc-balo--1131?&amp;c=kem" class="product-grid-image pl-id-2723" title="BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi ">
                            <img class="mcl-id-2723" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949214914234_86405221b745ffdcf0b8fff1f32cbf2b.jpg" alt="BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi ">
                        </a>

                    </div>

                    <a class="product-grid-info pl-id-2723" href="/products/balo-mwc-balo--1131?&amp;c=kem" title="BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi ">
                        <div class="product-grid-info-top">
                            <p class="product-grid-title">
                                BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi
                            </p>
                            <p class="product-grid-price">
                                <span class="product-grid-price-new">
                                    <span class="product-grid-price-new-text">
                                        135.000 đ
                                    </span>
                                </span>

                            </p>
                        </div>
                    </a>
                    <div class="variantColor">
                        <ul>
                            <li class="plid-17 pl-2723-id1-0" onmouseover="hoverPcolor('pl-id-2723','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949215150606_41f6f1f00fa19894c5c8b633a6414b73.jpg','/products/balo-mwc-balo--1131?&amp;c=kem','mcl-id-2723','plid-17','pl-2723-id1-0')" data-color="?c=kem">
                                <a href="/products/balo-mwc-balo--1131?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949215150606_41f6f1f00fa19894c5c8b633a6414b73.jpg">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                </a>
                            </li>
                            <li class="plid-17 pl-2723-id1-1" onmouseover="hoverPcolor('pl-id-2723','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949214914234_86405221b745ffdcf0b8fff1f32cbf2b.jpg','/products/balo-mwc-balo--1131?&amp;c=den','mcl-id-2723','plid-17','pl-2723-id1-1')" data-color="?c=den">
                                <a href="/products/balo-mwc-balo--1131?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949214914234_86405221b745ffdcf0b8fff1f32cbf2b.jpg">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                <div class="product-grid-item">
                    <div class="product-grid-thumb">



                        <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" class="product-grid-image pl-id-3119" title="BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            <img class="mcl-id-3119" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-825dbd01-3b46-499b-b1b2-e258ee99a395.png" alt="BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                        </a>

                    </div>

                    <a class="product-grid-info pl-id-3119" href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                        <div class="product-grid-info-top">
                            <p class="product-grid-title">
                                BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang
                            </p>
                            <p class="product-grid-price">
                                <span class="product-grid-price-new">
                                    <span class="product-grid-price-new-text">
                                        235.000 đ
                                    </span>
                                </span>

                            </p>
                        </div>
                    </a>
                    <div class="variantColor">
                        <ul>
                            <li class="plid-18 pl-3119-id1-0" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/7-5297fe13-41a8-4bbd-a67b-1c7af225e735.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd','mcl-id-3119','plid-18','pl-3119-id1-0')" data-color="?c=xanhd">
                                <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/7-5297fe13-41a8-4bbd-a67b-1c7af225e735.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                </a>
                            </li>
                            <li class="plid-18 pl-3119-id1-1" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-e148277e-89db-4cfe-841e-13ca6ee924ad.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=hong','mcl-id-3119','plid-18','pl-3119-id1-1')" data-color="?c=hong">
                                <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-e148277e-89db-4cfe-841e-13ca6ee924ad.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                </a>
                            </li>
                            <li class="plid-18 pl-3119-id1-2" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-825dbd01-3b46-499b-b1b2-e258ee99a395.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhl','mcl-id-3119','plid-18','pl-3119-id1-2')" data-color="?c=xanhl">
                                <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-825dbd01-3b46-499b-b1b2-e258ee99a395.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                </a>
                            </li>
                            <li class="plid-18 pl-3119-id1-3" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-60bcd9bc-bb45-48b9-834b-111a02f87032.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=den','mcl-id-3119','plid-18','pl-3119-id1-3')" data-color="?c=den">
                                <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-60bcd9bc-bb45-48b9-834b-111a02f87032.png">
                                    <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="section-view-more">
        <ul class="pagination">
            <li class="pagination-item">
                <a href="#" class="pagination-link pagination-link-prev pagination-link-disabled">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.83962 2.06621V1.03094C8.83962 0.941211 8.7365 0.891658 8.66685 0.946568L2.62935 5.66219C2.57805 5.70209 2.53655 5.75317 2.50799 5.81154C2.47944 5.86992 2.4646 5.93404 2.4646 5.99902C2.4646 6.06401 2.47944 6.12813 2.50799 6.18651C2.53655 6.24488 2.57805 6.29596 2.62935 6.33585L8.66685 11.0515C8.73783 11.1064 8.83962 11.0568 8.83962 10.9671V9.93184C8.83962 9.86621 8.80882 9.80327 8.75792 9.76309L3.93649 5.99969L8.75792 2.23496C8.80882 2.19478 8.83962 2.13184 8.83962 2.06621Z" fill="rgba(0,0,0,.85"></path>
                    </svg>
                </a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link pagination-link-active" href="/collections/balo---tui?page=1">1</a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link" href="/collections/balo---tui?page=2">2</a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link" href="/collections/balo---tui?page=3">3</a>
            </li>
            <li class="pagination-item">

                <a class="pagination-link" href="/collections/balo---tui?page=6">...</a>
            </li>
            <li class="pagination-item">

                <a class="pagination-link" href="/collections/balo---tui?page=8">8</a>
            </li>

            <li class="pagination-item">
                <a class="pagination-link pagination-link-next" href="/collections/balo---tui?page=2">

                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.39777 5.66281L3.36027 0.947189C3.34449 0.934768 3.32553 0.92705 3.30557 0.924919C3.2856 0.922788 3.26544 0.926332 3.2474 0.935143C3.22936 0.943955 3.21417 0.957676 3.20357 0.974732C3.19298 0.991787 3.18741 1.01149 3.1875 1.03156V2.06683C3.1875 2.13246 3.2183 2.1954 3.2692 2.23558L8.09063 6.00031L3.2692 9.76505C3.21697 9.80522 3.1875 9.86817 3.1875 9.9338V10.9691C3.1875 11.0588 3.29063 11.1083 3.36027 11.0534L9.39777 6.33781C9.44908 6.29779 9.4906 6.24658 9.51915 6.1881C9.5477 6.12962 9.56254 6.06539 9.56254 6.00031C9.56254 5.93523 9.5477 5.87101 9.51915 5.81253C9.4906 5.75404 9.44908 5.70284 9.39777 5.66281Z" fill="rgba(0,0,0,.85)"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    </div>
    </syle>
    <div class="col-12 col-lg-9" style="     ">
        <div class="category-top-info" style="     ">
            <h2 class="category-title" style="  ">
                BALO - TÚI
            </h2>
            <div class="toolbar-mode" style="  ">
                <div class="filter-collection-left">
                    <a href="#">
                        <div class="togglelines-btn">
                            <span class="togglelines"></span>
                        </div>
                        <span class="shop-filter-text">
                            <span class="closetext">Bộ lọc</span>
                            <span class="opentext">Đóng</span>
                        </span>
                    </a>
                </div>
                <div class="toolbar-right">
                    <div class="browse-tags" style=" ">
                        <label style=" ">Sắp xếp theo:</label>
                        <select class="sort-by" id="sortSelect" style=" ">
                            <option value="">Tùy chọn</option>
                            <option value="PRICEASC">
                                Sắp xếp theo giá: từ thấp
                                đến cao
                            </option>
                            <option value="PRICEDESC">
                                Sắp xếp theo giá: từ cao
                                đến thấp
                            </option>
                            <option value="NAMEAZ">
                                Sắp xếp theo alphabetically,
                                A-Z
                            </option>
                            <option value="NAMEZA">
                                Sắp xếp theo
                                alphabetically: Z-A
                            </option>
                            <option value="DATENEW">
                                Sắp xếp theo ngày: từ cũ
                                đến mới
                            </option>
                            <option value="DATEOLD">
                                Sắp xếp theo ngày: từ mới
                                đến cũ
                            </option>
                            <option value="BESTSALE">
                                Sắp xếp theo bán chạy nhất
                            </option>
                        </select>
                        <i class="mwc-icon-angle-down"></i>
                    </div>

                </div>
            </div>
        </div>
        <div class="category-product-list">
            <div class="row" style="     ">
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="              ">
                    <div class="product-grid-item" style="                         ">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den" class="product-grid-image pl-id-3247" title="Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích" style="   ">
                                <img class="mcl-id-3247" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522178062-3e70188a1ab65f16338df90a1589314f.jpg" alt="Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3247" href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den" title="Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title" style="          ">
                                    Balô Túi Đeo Chéo MWC - 0834 Balô Túi Đeo Chéo Nam Nữ Unisex Nhiều Ngăn Tiện Ích
                                </p>
                                <p class="product-grid-price" style="                 ">
                                    <span class="product-grid-price-new" style="        ">
                                        <span class="product-grid-price-new-text" style="        ">
                                            195.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor" style="   ">
                            <ul style="                         ">
                                <li class="plid-1 pl-3247-id1-0" onmouseover="hoverPcolor('pl-id-3247','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860521983244-4932c151350de24fbb14c57f9418c2bd.jpg','/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xanhd','mcl-id-3247','plid-1','pl-3247-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860521983244-4932c151350de24fbb14c57f9418c2bd.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-1 pl-3247-id1-1" onmouseover="hoverPcolor('pl-id-3247','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522289633-b6731fc46f8b996efbc7abe6d1382b9f.jpg','/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xam','mcl-id-3247','plid-1','pl-3247-id1-1')" data-color="?c=xam" style="      ">
                                    <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522289633-b6731fc46f8b996efbc7abe6d1382b9f.jpg" style="     ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>
                                <li class="plid-1 pl-3247-id1-2 active" onmouseover="hoverPcolor('pl-id-3247','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522178062-3e70188a1ab65f16338df90a1589314f.jpg','/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den','mcl-id-3247','plid-1','pl-3247-id1-2')" data-color="?c=den" style="        ">
                                    <a href="/products/balo-tui-deo-cheo-mwc---0834-balo-tui-deo-cheo-nam-nu-unisex-nhieu-ngan-tien-ich?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860522178062-3e70188a1ab65f16338df90a1589314f.jpg" style="   ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="         ">
                    <div class="product-grid-item" style="   ">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1137?&amp;c=xam" class="product-grid-image pl-id-2781" title="BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang ">
                                <img class="mcl-id-2781" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776703712-c02dbb8b6f30cb349f7a5a81b325fe83.jpg" alt="BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang ">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2781" href="/products/balo-mwc-balo--1137?&amp;c=xam" title="BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang ">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title" style=" ">
                                    BALO MWC - 1137 Balo Nữ Phối Màu Siêu Cute Đựng Laptop Đi Chơi Đi Học Du Lịch Thời Trang
                                </p>
                                <p class="product-grid-price" style=" ">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            195.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul style="        ">
                                <li class="plid-2 pl-2781-id1-0" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776722194-8f5236a455fc4771d465a9a1096b1e95.jpg','/products/balo-mwc-balo--1137?&amp;c=xanhl','mcl-id-2781','plid-2','pl-2781-id1-0')" data-color="?c=xanhl" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776722194-8f5236a455fc4771d465a9a1096b1e95.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                    </a>
                                </li>
                                <li class="plid-2 pl-2781-id1-1" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776741430-b6d909d1526216f59e544fd35e8e1d87.jpg','/products/balo-mwc-balo--1137?&amp;c=tim','mcl-id-2781','plid-2','pl-2781-id1-1')" data-color="?c=tim" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=tim" title="Tím" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776741430-b6d909d1526216f59e544fd35e8e1d87.jpg" style=" ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_TIM.jpg" alt="Tím">
                                    </a>
                                </li>
                                <li class="plid-2 pl-2781-id1-2" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776719814-c62eeec6ca67da9189ba5c45d3963fcb.jpg','/products/balo-mwc-balo--1137?&amp;c=cam','mcl-id-2781','plid-2','pl-2781-id1-2')" data-color="?c=cam" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=cam" title="Cam" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776719814-c62eeec6ca67da9189ba5c45d3963fcb.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/11/03/Cam.jpg" alt="Cam">
                                    </a>
                                </li>
                                <li class="plid-2 pl-2781-id1-3 active" onmouseover="hoverPcolor('pl-id-2781','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776703712-c02dbb8b6f30cb349f7a5a81b325fe83.jpg','/products/balo-mwc-balo--1137?&amp;c=xam','mcl-id-2781','plid-2','pl-2781-id1-3')" data-color="?c=xam" style=" ">
                                    <a href="/products/balo-mwc-balo--1137?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/z3584776703712-c02dbb8b6f30cb349f7a5a81b325fe83.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="    ">
                    <div class="product-grid-item" style=" ">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1145?&amp;c=hong" class="product-grid-image pl-id-2988" title="BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...">
                                <img class="mcl-id-2988" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648877647-0841a92e174e6221a8b227706c8d1a7d-a288721c-0a5f-4dff-b14a-8985a740c364.jpg" alt="BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2988" href="/products/balo-mwc-balo--1145?&amp;c=hong" title="BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1145 BALO Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Phối Màu Sang Chảnh Mang Đi Học,Đi Làm,Đi Chơi...
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            270.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor" style=" ">
                            <ul style="     ">
                                <li class="plid-3 pl-2988-id1-0 active" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648877647-0841a92e174e6221a8b227706c8d1a7d-a288721c-0a5f-4dff-b14a-8985a740c364.jpg','/products/balo-mwc-balo--1145?&amp;c=hong','mcl-id-2988','plid-3','pl-2988-id1-0')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648877647-0841a92e174e6221a8b227706c8d1a7d-a288721c-0a5f-4dff-b14a-8985a740c364.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-3 pl-2988-id1-1" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648857105-bf9abfd0037ffe4563bbe80e99e9dc03-30130934-5c19-4bb2-b147-808a03810d05.jpg','/products/balo-mwc-balo--1145?&amp;c=den','mcl-id-2988','plid-3','pl-2988-id1-1')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648857105-bf9abfd0037ffe4563bbe80e99e9dc03-30130934-5c19-4bb2-b147-808a03810d05.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-3 pl-2988-id1-2" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648891887-635fac0a02953752c3be0c4328821266-33959bf7-13e3-42e1-abd0-ee2fb53ab6a0.jpg','/products/balo-mwc-balo--1145?&amp;c=xanhr','mcl-id-2988','plid-3','pl-2988-id1-2')" data-color="?c=xanhr">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=xanhr" title="Xanh Rêu" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648891887-635fac0a02953752c3be0c4328821266-33959bf7-13e3-42e1-abd0-ee2fb53ab6a0.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/mau xanh.jpg" alt="Xanh Rêu">
                                    </a>
                                </li>
                                <li class="plid-3 pl-2988-id1-3" onmouseover="hoverPcolor('pl-id-2988','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648850262-e4e42ef7f47f2bca6b818f6150acb1a5-cf0990ac-88ab-4ade-81e5-4c12b02abfa2.jpg','/products/balo-mwc-balo--1145?&amp;c=xanhb','mcl-id-2988','plid-3','pl-2988-id1-3')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1145?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3780648850262-e4e42ef7f47f2bca6b818f6150acb1a5-cf0990ac-88ab-4ade-81e5-4c12b02abfa2.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1163?&amp;c=den" class="product-grid-image pl-id-3301" title="Balô MWC BALO- 1163">
                                <img class="mcl-id-3301" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953612006941_d5bdadd3096c4e79a8feff63f5a23218.jpg" alt="Balô MWC BALO- 1163">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3301" href="/products/balo-mwc-balo--1163?&amp;c=den" title="Balô MWC BALO- 1163">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô MWC BALO- 1163
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            195.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-4 pl-3301-id1-0" onmouseover="hoverPcolor('pl-id-3301','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167708285_53c2c9d8264592efc11f47147820b36b.jpg','/products/balo-mwc-balo--1163?&amp;c=den','mcl-id-3301','plid-4','pl-3301-id1-0')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1163?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167708285_53c2c9d8264592efc11f47147820b36b.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-4 pl-3301-id1-1" onmouseover="hoverPcolor('pl-id-3301','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953612006941_d5bdadd3096c4e79a8feff63f5a23218.jpg','/products/balo-mwc-balo--1163?&amp;c=xanhd','mcl-id-3301','plid-4','pl-3301-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1163?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953612006941_d5bdadd3096c4e79a8feff63f5a23218.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-4 pl-3301-id1-2" onmouseover="hoverPcolor('pl-id-3301','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167511246_8fa3d3ceb7e4f7e766226ef59114377e.jpg','/products/balo-mwc-balo--1163?&amp;c=kem','mcl-id-3301','plid-4','pl-3301-id1-2')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1163?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949167511246_8fa3d3ceb7e4f7e766226ef59114377e.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                < class="row" style="     ">
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style=" ">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--0829?&amp;c=hong" class="product-grid-image pl-id-2933" title="Balô Túi Đeo Chéo MWC TUID- 0829">
                                <img class="mcl-id-2933" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg" alt="Balô Túi Đeo Chéo MWC TUID- 0829">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2933" href="/products/balo-mwc-balo--0829?&amp;c=hong" title="Balô Túi Đeo Chéo MWC TUID- 0829">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô Túi Đeo Chéo MWC TUID- 0829
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            135.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-5 pl-2933-id1-0" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798329856636-3535b262a3a9a62d6f1ea4e22b3511a7.jpg','/products/balo-mwc-balo--0829?&amp;c=hong','mcl-id-2933','plid-5','pl-2933-id1-0')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798329856636-3535b262a3a9a62d6f1ea4e22b3511a7.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-5 pl-2933-id1-1" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg','/products/balo-mwc-balo--0829?&amp;c=xanhd','mcl-id-2933','plid-5','pl-2933-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-5 pl-2933-id1-2" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330019749-89d48b6919efbeb14ef7b1e4009af237.jpg','/products/balo-mwc-balo--0829?&amp;c=xamd','mcl-id-2933','plid-5','pl-2933-id1-2')" data-color="?c=xamd">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=xamd" title="Xám Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330019749-89d48b6919efbeb14ef7b1e4009af237.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/26/Xam.jpg" alt="Xám Đậm">
                                    </a>
                                </li>
                                <li class="plid-5 pl-2933-id1-3" onmouseover="hoverPcolor('pl-id-2933','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg','/products/balo-mwc-balo--0829?&amp;c=den','mcl-id-2933','plid-5','pl-2933-id1-3')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--0829?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798330096260-33d00104e09ff165cde1f9e1f78d5404.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" class="product-grid-image pl-id-3293" title="BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3293" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949213155473_27195197962e1ec55981217297eb3954.jpg" alt="BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3293" href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1168 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-6 pl-3293-id1-0" onmouseover="hoverPcolor('pl-id-3293','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212973291_5bf2d5fd9f7b39d4a550b0ed5b2055a4.jpg','/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd','mcl-id-3293','plid-6','pl-3293-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212973291_5bf2d5fd9f7b39d4a550b0ed5b2055a4.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-6 pl-3293-id1-1" onmouseover="hoverPcolor('pl-id-3293','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949213155473_27195197962e1ec55981217297eb3954.jpg','/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong','mcl-id-3293','plid-6','pl-3293-id1-1')" data-color="?c=hong">
                                    <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949213155473_27195197962e1ec55981217297eb3954.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-6 pl-3293-id1-2" onmouseover="hoverPcolor('pl-id-3293','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212809196_1677611de71348199bfee21130be40ec.jpg','/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den','mcl-id-3293','plid-6','pl-3293-id1-2')" data-color="?c=den">
                                    <a href="/products/balo-mwc---1168-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949212809196_1677611de71348199bfee21130be40ec.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1165?&amp;c=hong" class="product-grid-image pl-id-3300" title="BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3300" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953617690471_fbeb92077e51be32ca2d73a04282b8bc.jpg" alt="BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3300" href="/products/balo-mwc-balo--1165?&amp;c=hong" title="BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1165 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-7 pl-3300-id1-0" onmouseover="hoverPcolor('pl-id-3300','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665045155_e89d50ed70d2006012b4ac62203770ff.jpg','/products/balo-mwc-balo--1165?&amp;c=hong','mcl-id-3300','plid-7','pl-3300-id1-0')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1165?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665045155_e89d50ed70d2006012b4ac62203770ff.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-7 pl-3300-id1-1" onmouseover="hoverPcolor('pl-id-3300','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665072326_0180e2310e1435eb403f27c8a2e35b83.jpg','/products/balo-mwc-balo--1165?&amp;c=xanhd','mcl-id-3300','plid-7','pl-3300-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1165?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953665072326_0180e2310e1435eb403f27c8a2e35b83.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-7 pl-3300-id1-2" onmouseover="hoverPcolor('pl-id-3300','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953617690471_fbeb92077e51be32ca2d73a04282b8bc.jpg','/products/balo-mwc-balo--1165?&amp;c=xanhb','mcl-id-3300','plid-7','pl-3300-id1-2')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1165?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/12/batch_z3953617690471_fbeb92077e51be32ca2d73a04282b8bc.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1176?&amp;c=tim" class="product-grid-image pl-id-3647" title="Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3647" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293789999_cb14574d69a14fa467cc3966703c1f55.jpg" alt="Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3647" href="/products/balo-mwc-balo--1176?&amp;c=tim" title="Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô MWC BALO- 1176 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            235.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor" style=" ">
                            <ul style=" ">
                                <li class="plid-8 pl-3647-id1-0" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293746655_0b3fe854bcee25de7a76593444f92054.jpg','/products/balo-mwc-balo--1176?&amp;c=tim','mcl-id-3647','plid-8','pl-3647-id1-0')" data-color="?c=tim">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=tim" title="Tím" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293746655_0b3fe854bcee25de7a76593444f92054.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_TIM.jpg" alt="Tím">
                                    </a>
                                </li>
                                <li class="plid-8 pl-3647-id1-1" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293699066_c48483b7bbb9a90cf3964b7923e5fb34.jpg','/products/balo-mwc-balo--1176?&amp;c=hong','mcl-id-3647','plid-8','pl-3647-id1-1')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293699066_c48483b7bbb9a90cf3964b7923e5fb34.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-8 pl-3647-id1-2" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293789999_cb14574d69a14fa467cc3966703c1f55.jpg','/products/balo-mwc-balo--1176?&amp;c=xanhb','mcl-id-3647','plid-8','pl-3647-id1-2')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293789999_cb14574d69a14fa467cc3966703c1f55.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>
                                <li class="plid-8 pl-3647-id1-3" onmouseover="hoverPcolor('pl-id-3647','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293540616_719a3ec2437a33d3342bd80d5fe66c40.jpg','/products/balo-mwc-balo--1176?&amp;c=xam','mcl-id-3647','plid-8','pl-3647-id1-3')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1176?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/11/batch_z4423293540616_719a3ec2437a33d3342bd80d5fe66c40.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
    <
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px" style="  ">
                    <div class="product-grid-item" style="   ">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" class="product-grid-image pl-id-3292" title="BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3292" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949209066371_f4a3b815a9950351d626613903d056d4.jpg" alt="BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3292" href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng  Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1164 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price" style="  ">
                                    <span class="product-grid-price-new" style=" ">
                                        <span class="product-grid-price-new-text" style="  ">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul style="        ">
                                <li class="plid-9 pl-3292-id1-0" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426244027_4af3642ee5070004955ec4fff11aaa2a.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=kem','mcl-id-3292','plid-9','pl-3292-id1-0')" data-color="?c=kem" style=" ">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426244027_4af3642ee5070004955ec4fff11aaa2a.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>
                                <li class="plid-9 pl-3292-id1-1 active" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949209066371_f4a3b815a9950351d626613903d056d4.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd','mcl-id-3292','plid-9','pl-3292-id1-1')" data-color="?c=xanhd" style="  ">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949209066371_f4a3b815a9950351d626613903d056d4.jpg" style=" ">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-9 pl-3292-id1-2" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208889373_51677e26784a2674a48d6cba076c764a.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong','mcl-id-3292','plid-9','pl-3292-id1-2')" data-color="?c=hong">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208889373_51677e26784a2674a48d6cba076c764a.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-9 pl-3292-id1-3" onmouseover="hoverPcolor('pl-id-3292','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208856957_19078ca64f53a7b3dd91f786e5e07bad.jpg','/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den','mcl-id-3292','plid-9','pl-3292-id1-3')" data-color="?c=den">
                                    <a href="/products/balo-mwc---1164-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nang-di-hoc-di-choi-chong-sockchong-nuoc-thoi-trang?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949208856957_19078ca64f53a7b3dd91f786e5e07bad.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1144?&amp;c=den" class="product-grid-image pl-id-3088" title="BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3088" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282134603-b36ee7184d774e6a7f1e2085f8ab442b.jpg" alt="BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3088" href="/products/balo-mwc-balo--1144?&amp;c=den" title="BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1144 Balo Nữ Cao Cấp Nhiều Ngăn Siêu Tiện Lợi,Đa Năng,Đi Học,Đi Làm,Đi Chơi,Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            250.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-10 pl-3088-id1-0" onmouseover="hoverPcolor('pl-id-3088','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282134603-b36ee7184d774e6a7f1e2085f8ab442b.jpg','/products/balo-mwc-balo--1144?&amp;c=den','mcl-id-3088','plid-10','pl-3088-id1-0')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1144?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282134603-b36ee7184d774e6a7f1e2085f8ab442b.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-10 pl-3088-id1-1" onmouseover="hoverPcolor('pl-id-3088','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282093236-4dddca28d08fa60efa98d126862c3b49.jpg','/products/balo-mwc-balo--1144?&amp;c=xam','mcl-id-3088','plid-10','pl-3088-id1-1')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1144?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3798282093236-4dddca28d08fa60efa98d126862c3b49.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1125?&amp;c=xanhd" class="product-grid-image pl-id-2682" title="BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi">
                                <img class="mcl-id-2682" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090735735_8f9f21eb100aa2d44ea5549c5d474927.jpg" alt="BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2682" href="/products/balo-mwc-balo--1125?&amp;c=xanhd" title="BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1125 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm, Đi Chơi
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            180.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-11 pl-2682-id1-0" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090735735_8f9f21eb100aa2d44ea5549c5d474927.jpg','/products/balo-mwc-balo--1125?&amp;c=xanhd','mcl-id-2682','plid-11','pl-2682-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090735735_8f9f21eb100aa2d44ea5549c5d474927.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-11 pl-2682-id1-1" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090666490_a2f2fe32834533049a5f01a8071c5528.jpg','/products/balo-mwc-balo--1125?&amp;c=xam','mcl-id-2682','plid-11','pl-2682-id1-1')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090666490_a2f2fe32834533049a5f01a8071c5528.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>
                                <li class="plid-11 pl-2682-id1-2" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090631667_f76bf97452436614a0ac554796def997.jpg','/products/balo-mwc-balo--1125?&amp;c=do','mcl-id-2682','plid-11','pl-2682-id1-2')" data-color="?c=do">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=do" title="Đỏ" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090631667_f76bf97452436614a0ac554796def997.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DO.jpg" alt="Đỏ">
                                    </a>
                                </li>
                                <li class="plid-11 pl-2682-id1-3" onmouseover="hoverPcolor('pl-id-2682','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090658343_18a4724af7c4e7b84886a07f1acfd2af.jpg','/products/balo-mwc-balo--1125?&amp;c=den','mcl-id-2682','plid-11','pl-2682-id1-3')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1125?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/14/batch_z3712090658343_18a4724af7c4e7b84886a07f1acfd2af.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1146?&amp;c=trang" class="product-grid-image pl-id-3022" title="BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang">
                                <img class="mcl-id-3022" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423749654-157a3979f47873b9cfab072edf808eff.jpg" alt="BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3022" href="/products/balo-mwc-balo--1146?&amp;c=trang" title="BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1146 Balo Unisex Chống Sốc Chống Nước Nhiều Ngăn, Đựng Laptop, Mang Đi Học, Đi Chơi Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            270.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-12 pl-3022-id1-0" onmouseover="hoverPcolor('pl-id-3022','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423749654-157a3979f47873b9cfab072edf808eff.jpg','/products/balo-mwc-balo--1146?&amp;c=trang','mcl-id-3022','plid-12','pl-3022-id1-0')" data-color="?c=trang">
                                    <a href="/products/balo-mwc-balo--1146?&amp;c=trang" title="Trắng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423749654-157a3979f47873b9cfab072edf808eff.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/12/Trang1.png" alt="Trắng">
                                    </a>
                                </li>
                                <li class="plid-12 pl-3022-id1-1" onmouseover="hoverPcolor('pl-id-3022','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423730315-6e130855e47ed39b4b6f627a7e3a4856.jpg','/products/balo-mwc-balo--1146?&amp;c=xanhd','mcl-id-3022','plid-12','pl-3022-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1146?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/07/batch-z3593423730315-6e130855e47ed39b4b6f627a7e3a4856.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1095?&amp;c=xanhl" class="product-grid-image pl-id-1531" title="BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-1531" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/9-9b50f3ac-e3f4-406a-a6b3-69a1f12ee0b5.png" alt="BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-1531" href="/products/balo-mwc-balo--1095?&amp;c=xanhl" title="BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1095 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-13 pl-1531-id1-0" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/5-9f28c654-2ca2-4b6d-ab18-9335c6d9f5d5.png','/products/balo-mwc-balo--1095?&amp;c=xanhl','mcl-id-1531','plid-13','pl-1531-id1-0')" data-color="?c=xanhl">
                                    <a href="/products/balo-mwc-balo--1095?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/5-9f28c654-2ca2-4b6d-ab18-9335c6d9f5d5.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                    </a>
                                </li>
                                <li class="plid-13 pl-1531-id1-1" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/9-9b50f3ac-e3f4-406a-a6b3-69a1f12ee0b5.png','/products/balo-mwc-balo--1095?&amp;c=den','mcl-id-1531','plid-13','pl-1531-id1-1')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1095?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/9-9b50f3ac-e3f4-406a-a6b3-69a1f12ee0b5.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-13 pl-1531-id1-2" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-9b753423-28ed-485f-96fb-fa2a2c4c86e1.png','/products/balo-mwc-balo--1095?&amp;c=hong','mcl-id-1531','plid-13','pl-1531-id1-2')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1095?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-9b753423-28ed-485f-96fb-fa2a2c4c86e1.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-13 pl-1531-id1-3" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/8-ce105756-d734-4db7-8cc8-7370d437b1ea.png','/products/balo-mwc-balo--1095?&amp;c=xanhd','mcl-id-1531','plid-13','pl-1531-id1-3')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1095?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/8-ce105756-d734-4db7-8cc8-7370d437b1ea.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-13 pl-1531-id1-4" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-5e504294-937e-434d-a359-6f54bcfbfad1.png','/products/balo-mwc-balo--1095?&amp;c=kem','mcl-id-1531','plid-13','pl-1531-id1-4')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1095?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-5e504294-937e-434d-a359-6f54bcfbfad1.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>
                                <li class="plid-13 pl-1531-id1-5" onmouseover="hoverPcolor('pl-id-1531','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2021/05/z2506548015740-d6a1cb2465117c91360841e320f8836c.jpg','/products/balo-mwc-balo--1095?&amp;c=xanhb','mcl-id-1531','plid-13','pl-1531-id1-5')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1095?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2021/05/z2506548015740-d6a1cb2465117c91360841e320f8836c.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1172?&amp;c=xanhd" class="product-grid-image pl-id-3398" title="Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3398" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131518436_133887e645dab6972bfa05bf30e021eb.jpg" alt="Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3398" href="/products/balo-mwc-balo--1172?&amp;c=xanhd" title="Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    Balô MWC - 1172 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng Đi Học ,Đi Chơi Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-14 pl-3398-id1-0" onmouseover="hoverPcolor('pl-id-3398','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131569100_14ce5426dff6e50a262d7c97e041fc95.jpg','/products/balo-mwc-balo--1172?&amp;c=xanhd','mcl-id-3398','plid-14','pl-3398-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1172?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131569100_14ce5426dff6e50a262d7c97e041fc95.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-14 pl-3398-id1-1" onmouseover="hoverPcolor('pl-id-3398','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131518436_133887e645dab6972bfa05bf30e021eb.jpg','/products/balo-mwc-balo--1172?&amp;c=den','mcl-id-3398','plid-14','pl-3398-id1-1')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1172?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131518436_133887e645dab6972bfa05bf30e021eb.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>
                                <li class="plid-14 pl-3398-id1-2" onmouseover="hoverPcolor('pl-id-3398','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131421068_41e673c114f5f337544729248feba927.jpg','/products/balo-mwc-balo--1172?&amp;c=kem','mcl-id-3398','plid-14','pl-3398-id1-2')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1172?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/07/14/batch_z4426131421068_41e673c114f5f337544729248feba927.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1143?&amp;c=xam" class="product-grid-image pl-id-2846" title="BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi">
                                <img class="mcl-id-2846" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536315987-bb4d344b17fd975c92cf7b0ba67f6c6a.jpg" alt="BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2846" href="/products/balo-mwc-balo--1143?&amp;c=xam" title="BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1143 Balo Unisex Phối Màu Sang Chảnh Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học, Đi Chơi
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            250.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-15 pl-2846-id1-0" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg','/products/balo-mwc-balo--1143?&amp;c=xam','mcl-id-2846','plid-15','pl-2846-id1-0')" data-color="?c=xam">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=xam" title="Xám" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XAM.jpg" alt="Xám">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-1" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426948695_3c282c23eab0de516c8288aa3bb8c8c9.jpg','/products/balo-mwc-balo--1143?&amp;c=xanhd','mcl-id-2846','plid-15','pl-2846-id1-1')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435426948695_3c282c23eab0de516c8288aa3bb8c8c9.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-2" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536315987-bb4d344b17fd975c92cf7b0ba67f6c6a.jpg','/products/balo-mwc-balo--1143?&amp;c=hong','mcl-id-2846','plid-15','pl-2846-id1-2')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536315987-bb4d344b17fd975c92cf7b0ba67f6c6a.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-3" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536691386-fb2881bf0bea749815fb674094b25f79.jpg','/products/balo-mwc-balo--1143?&amp;c=xanhb','mcl-id-2846','plid-15','pl-2846-id1-3')" data-color="?c=xanhb">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=xanhb" title="Xanh Biển" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536691386-fb2881bf0bea749815fb674094b25f79.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_xanh biển.png" alt="Xanh Biển">
                                    </a>
                                </li>
                                <li class="plid-15 pl-2846-id1-4" onmouseover="hoverPcolor('pl-id-2846','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg','/products/balo-mwc-balo--1143?&amp;c=den','mcl-id-2846','plid-15','pl-2846-id1-4')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1143?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/11/z3860536467246-20fec5a4e494c3ee800ca252c62cd9cc.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1117?&amp;c=xanhl" class="product-grid-image pl-id-2419" title="BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi">
                                <img class="mcl-id-2419" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3781022756704-bd044426b1e130fd29c958c62df58a90.jpg" alt="BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2419" href="/products/balo-mwc-balo--1117?&amp;c=xanhl" title="BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1117 Balo Unisex Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Đựng Laptop, Mang Đi Học,Đi Làm,Đi Chơi
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            215.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-16 pl-2419-id1-0" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-c346c6a2-df3b-47a0-b936-cdb622d15dd7.png','/products/balo-mwc-balo--1117?&amp;c=xanhl','mcl-id-2419','plid-16','pl-2419-id1-0')" data-color="?c=xanhl">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-c346c6a2-df3b-47a0-b936-cdb622d15dd7.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-1" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-e3912771-9aa6-4841-aaae-07392fe4a18d.png','/products/balo-mwc-balo--1117?&amp;c=hong','mcl-id-2419','plid-16','pl-2419-id1-1')" data-color="?c=hong">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-e3912771-9aa6-4841-aaae-07392fe4a18d.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-2" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435428643611_af03a9db686e439e65fde3d3507cbe1f.jpg','/products/balo-mwc-balo--1117?&amp;c=xanhd','mcl-id-2419','plid-16','pl-2419-id1-2')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2023/06/15/batch_z4435428643611_af03a9db686e439e65fde3d3507cbe1f.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-3" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-fa9e3283-4bff-4c0f-935f-92848abb07ef.png','/products/balo-mwc-balo--1117?&amp;c=kem','mcl-id-2419','plid-16','pl-2419-id1-3')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-fa9e3283-4bff-4c0f-935f-92848abb07ef.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>
                                <li class="plid-16 pl-2419-id1-4" onmouseover="hoverPcolor('pl-id-2419','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3781022756704-bd044426b1e130fd29c958c62df58a90.jpg','/products/balo-mwc-balo--1117?&amp;c=den','mcl-id-2419','plid-16','pl-2419-id1-4')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1117?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/batch-z3781022756704-bd044426b1e130fd29c958c62df58a90.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc-balo--1131?&amp;c=kem" class="product-grid-image pl-id-2723" title="BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi ">
                                <img class="mcl-id-2723" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949214914234_86405221b745ffdcf0b8fff1f32cbf2b.jpg" alt="BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi ">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-2723" href="/products/balo-mwc-balo--1131?&amp;c=kem" title="BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi ">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1131 Balo Unisex Mini In Chữ Thời Trang Chống Sốc Chống Nước Nhiều Ngăn Siêu Tiện Lợi, Mang Đi Học,Đi Làm,Đi Chơi
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            135.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-17 pl-2723-id1-0" onmouseover="hoverPcolor('pl-id-2723','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949215150606_41f6f1f00fa19894c5c8b633a6414b73.jpg','/products/balo-mwc-balo--1131?&amp;c=kem','mcl-id-2723','plid-17','pl-2723-id1-0')" data-color="?c=kem">
                                    <a href="/products/balo-mwc-balo--1131?&amp;c=kem" title="Kem" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949215150606_41f6f1f00fa19894c5c8b633a6414b73.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_KEM.jpg" alt="Kem">
                                    </a>
                                </li>
                                <li class="plid-17 pl-2723-id1-1" onmouseover="hoverPcolor('pl-id-2723','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949214914234_86405221b745ffdcf0b8fff1f32cbf2b.jpg','/products/balo-mwc-balo--1131?&amp;c=den','mcl-id-2723','plid-17','pl-2723-id1-1')" data-color="?c=den">
                                    <a href="/products/balo-mwc-balo--1131?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=/Resources/Product/2022/12/10/batch_z3949214914234_86405221b745ffdcf0b8fff1f32cbf2b.jpg">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-custom-6 col-sm-4 col-lg-4 mb-32px">
                    <div class="product-grid-item">
                        <div class="product-grid-thumb">



                            <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" class="product-grid-image pl-id-3119" title="BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                                <img class="mcl-id-3119" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-825dbd01-3b46-499b-b1b2-e258ee99a395.png" alt="BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            </a>

                        </div>

                        <a class="product-grid-info pl-id-3119" href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang">
                            <div class="product-grid-info-top">
                                <p class="product-grid-title">
                                    BALO MWC - 1157 Balo Phong Cách Basic Cao Cấp Chất Vải Mềm Mịn,Đa Năng,Đi Học,Đi Chơi,Chống Sock,Chống Nước Thời Trang
                                </p>
                                <p class="product-grid-price">
                                    <span class="product-grid-price-new">
                                        <span class="product-grid-price-new-text">
                                            235.000 đ
                                        </span>
                                    </span>

                                </p>
                            </div>
                        </a>
                        <div class="variantColor">
                            <ul>
                                <li class="plid-18 pl-3119-id1-0" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/7-5297fe13-41a8-4bbd-a67b-1c7af225e735.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd','mcl-id-3119','plid-18','pl-3119-id1-0')" data-color="?c=xanhd">
                                    <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhd" title="Xanh Đậm" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/7-5297fe13-41a8-4bbd-a67b-1c7af225e735.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_XANH ĐEN.png" alt="Xanh Đậm">
                                    </a>
                                </li>
                                <li class="plid-18 pl-3119-id1-1" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-e148277e-89db-4cfe-841e-13ca6ee924ad.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=hong','mcl-id-3119','plid-18','pl-3119-id1-1')" data-color="?c=hong">
                                    <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=hong" title="Hồng" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/6-e148277e-89db-4cfe-841e-13ca6ee924ad.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/16/batch_FULLH (2).jpg" alt="Hồng">
                                    </a>
                                </li>
                                <li class="plid-18 pl-3119-id1-2" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-825dbd01-3b46-499b-b1b2-e258ee99a395.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhl','mcl-id-3119','plid-18','pl-3119-id1-2')" data-color="?c=xanhl">
                                    <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=xanhl" title="Xanh Lá" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/3-825dbd01-3b46-499b-b1b2-e258ee99a395.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_Untitled.png" alt="Xanh Lá">
                                    </a>
                                </li>
                                <li class="plid-18 pl-3119-id1-3" onmouseover="hoverPcolor('pl-id-3119','https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-60bcd9bc-bb45-48b9-834b-111a02f87032.png','/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=den','mcl-id-3119','plid-18','pl-3119-id1-3')" data-color="?c=den">
                                    <a href="/products/balo-mwc---1157-balo-phong-cach-basic-cao-cap-chat-vai-mem-minda-nangdi-hocdi-choichong-sockchong-nuoc-thoi-trang?&amp;c=den" title="Đen" data-img="https://img.mwc.com.vn/giay-thoi-trang?w=640&amp;h=640&amp;FileInput=//Upload/2022/10/1-60bcd9bc-bb45-48b9-834b-111a02f87032.png">
                                        <img class="lazyload" src="https://img.mwc.com.vn/giay-thoi-trang?w=30&amp;h=30&amp;FileInput=/Resources/Color/2022/12/07/batch_DEN.jpg" alt="Đen">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="section-view-more">
            <ul class="pagination">
                <li class="pagination-item">
                    <a href="#" class="pagination-link pagination-link-prev pagination-link-disabled">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.83962 2.06621V1.03094C8.83962 0.941211 8.7365 0.891658 8.66685 0.946568L2.62935 5.66219C2.57805 5.70209 2.53655 5.75317 2.50799 5.81154C2.47944 5.86992 2.4646 5.93404 2.4646 5.99902C2.4646 6.06401 2.47944 6.12813 2.50799 6.18651C2.53655 6.24488 2.57805 6.29596 2.62935 6.33585L8.66685 11.0515C8.73783 11.1064 8.83962 11.0568 8.83962 10.9671V9.93184C8.83962 9.86621 8.80882 9.80327 8.75792 9.76309L3.93649 5.99969L8.75792 2.23496C8.80882 2.19478 8.83962 2.13184 8.83962 2.06621Z" fill="rgba(0,0,0,.85"></path>
                        </svg>
                    </a>
                </li>
                <li class="pagination-item">
                    <a class="pagination-link pagination-link-active" href="/collections/balo---tui?page=1">1</a>
                </li>
                <li class="pagination-item">
                    <a class="pagination-link" href="/collections/balo---tui?page=2">2</a>
                </li>
                <li class="pagination-item">
                    <a class="pagination-link" href="/collections/balo---tui?page=3">3</a>
                </li>
                <li class="pagination-item">

                    <a class="pagination-link" href="/collections/balo---tui?page=6">...</a>
                </li>
                <li class="pagination-item">

                    <a class="pagination-link" href="/collections/balo---tui?page=8">8</a>
                </li>

                <li class="pagination-item">
                    <a class="pagination-link pagination-link-next" href="/collections/balo---tui?page=2">

                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.39777 5.66281L3.36027 0.947189C3.34449 0.934768 3.32553 0.92705 3.30557 0.924919C3.2856 0.922788 3.26544 0.926332 3.2474 0.935143C3.22936 0.943955 3.21417 0.957676 3.20357 0.974732C3.19298 0.991787 3.18741 1.01149 3.1875 1.03156V2.06683C3.1875 2.13246 3.2183 2.1954 3.2692 2.23558L8.09063 6.00031L3.2692 9.76505C3.21697 9.80522 3.1875 9.86817 3.1875 9.9338V10.9691C3.1875 11.0588 3.29063 11.1083 3.36027 11.0534L9.39777 6.33781C9.44908 6.29779 9.4906 6.24658 9.51915 6.1881C9.5477 6.12962 9.56254 6.06539 9.56254 6.00031C9.56254 5.93523 9.5477 5.87101 9.51915 5.81253C9.4906 5.75404 9.44908 5.70284 9.39777 5.66281Z" fill="rgba(0,0,0,.85)"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>