
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<div class="box-body">
    <?php if (Yii::app()->user->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Cảnh báo !</h4>
            <?php echo Yii::app()->user->getFlash('error'); ?>
        </div>
    <?php endif; ?>
    <?php if (Yii::app()->user->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Thành công !</h4>
            <?php echo Yii::app()->user->getFlash('success'); ?>
        </div>
    <?php endif; ?>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tìm kiếm</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="GET" action="<?php echo Yii::app()->createUrl('search/resultDocumentary') ?>">
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="keyword">Từ khóa</label>
                                <input type="text" class="form-control" id="keyword" name="keyword" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" id="advance_search">Bật tìm kiếm nâng cao</button>
                            </div>
                        </div>
                        <div id="hide_form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_start">Từ ngày</label>
                                    <input type="text" class="form-control" id="date_start" name="date_start" >
                                </div>
                                <div class="form-group">
                                    <label for="date_end">Đến ngày</label>
                                    <input type="text" class="form-control" id="date_end" name="date_end"  >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nation">Quốc gia</label>
                                    <input type="text" class="form-control" id="nation" name="nation" id="nation">
                                </div>
                                <div class="form-group">
                                    <label for="assignee">Cán bộ thụ lý</label>
                                    <input type="text" class="form-control" id="assignee" name="assignee"  >
                                </div>
                                <div class="form-group">
                                    <label for="obj_name">Đối tượng</label>
                                    <input type="text" class="form-control" id="obj_name" name="obj_name"  >
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>
<script>

    $(function () {
        $('#date_end').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('#date_start').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('#hide_form').hide();
        $('#advance_search').click(function () {
            $('#hide_form').toggle();
        });


    });
</script>
<script>
    $(function () {
        var availableTags = ["CHND Trung Hoa",
            "Ấn Độ",
            "Hoa Kỳ",
            "Indonesia",
            "Brazil",
            "Pakistan",
            "Nigeria",
            "Bangladesh",
            "Liên Bang Nga",
            "Nhật Bản",
            "Mexico",
            "Philippines",
            "Ethiopia",
            "Việt Nam",
            "Ai Cập",
            "Đức",
            "Thổ Nhĩ Kỳ",
            "Iran",
            "CHDC Congo",
            "Thái Lan",
            "Pháp",
            "Anh Quốc",
            "Ý",
            "Myanmar",
            "Hàn Quốc",
            "Nam Phi",
            "Tanzania",
            "Tây Ban Nha",
            "Colombia",
            "Ukraina",
            "Kenya",
            "Argentina",
            "Ba Lan",
            "Algeria",
            "Sudan",
            "Uganda",
            "Canada",
            "Maroc",
            "Iraq",
            "Afghanistan",
            "Nepal",
            "Peru",
            "Malaysia",
            "Uzbekistan",
            "Venezuela",
            "Ả Rập Saudi",
            "Yemen",
            "Ghana",
            "CHDCND Triều Tiên",
            "Mozambique",
            "Trung Hoa Dân Quốc (Đài Loan)",
            "Madagascar",
            "Syria",
            "Bờ Biển Ngà",
            "Úc",
            "Romania",
            "Sri Lanka",
            "Cameroon",
            "Angola",
            "Burkina Faso",
            "Kazakhstan",
            "Chile",
            "Niger",
            "Hà Lan",
            "Malawi",
            "Mali",
            "Ecuador",
            "Campuchia",
            "Guatemala",
            "Zambia",
            "Senegal",
            "Zimbabwe",
            "Tchad",
            "Hy Lạp",
            "Cuba",
            "Bỉ",
            "Bồ Đào Nha",
            "Tunisia",
            "Cộng hòa Séc",
            "Bolivia",
            "Rwanda",
            "Guinea",
            "Haiti",
            "Hungary",
            "Belarus",
            "Thụy Điển",
            "Cộng hòa Dominica",
            "Somalia",
            "Azerbaijan",
            "Benin",
            "Burundi",
            "Áo",
            "Các tiểu vương quốc Ả rập thống nhất (UEA)",
            "Nam Sudan",
            "Honduras",
            "Thụy Sĩ",
            "Israel",
            "Bulgaria",
            "Serbia",
            "Tajikistan",
            "Hồng Kông",
            "Papua New Guinea",
            "Togo",
            "Libya",
            "Jordan",
            "Paraguay",
            "Lào",
            "El Salvador",
            "Sierra Leone",
            "Nicaragua",
            "Đan Mạch",
            "Slovakia",
            "Kyrgyzstan",
            "Phần Lan",
            "Eritrea",
            "Turkmenistan",
            "Singapore",
            "Na Uy",
            "Costa Rica",
            "Cộng hòa Trung Phi",
            "Ireland",
            "Gruzia",
            "Croatia",
            "New Zealand",
            "Liban",
            "Liberia",
            "Vùng lãnh thổ Palestine",
            "Bosna và Hercegovina",
            "Cộng hòa Congo",
            "Puerto Rico",
            "Moldovan",
            "Panama",
            "Mauritania",
            "Uruguay",
            "Armenia",
            "Litva",
            "Albania",
            "Kuwait",
            "Mông Cổ",
            "Jamaica",
            "Oman",
            "Latvia",
            "Namibia",
            "Lesotho",
            "Cộng hòa Macedonia",
            "Slovenia",
            "Botswana",
            "Gambia",
            "Qatar",
            "Guinea-Bissau",
            "Gabon",
            "Estonia",
            "Trinidad và Tobago",
            "Mauritius",
            "Bahrain",
            "Swaziland",
            "Đông Timor",
            "Djibouti",
            "Fiji",
            "Síp",
            "Guyana",
            "Comoros",
            "Guinea Xích Đạo",
            "Bhutan",
            "Montenegro",
            "Macau",
            "Tây Sahara",
            "Quần đảo Solomon",
            "Suriname",
            "Luxembourg",
            "Cape Verde",
            "Malta",
            "Brunei",
            "Bahamas",
            "Belize",
            "Iceland",
            "Maldives",
            "Barbados",
            "Vanuatu",
            "Samoa",
            "Guam",
            "Saint Lucia",
            "São Tomé và Príncipe",
            "Curaçao",
            "Saint Vincent và Grenadines",
            "Quần đảo Virgin thuộc Mỹ",
            "Aruba",
            "Grenada",
            "Tonga",
            "Liên bang Micronesia",
            "Kiribati",
            "Jersey",
            "Antigua và Barbuda",
            "Seychelles",
            "Andorra",
            "Đảo Man",
            "Samoa thuộc Mỹ",
            "Dominica",
            "Bermuda",
            "Guernsey",
            "Quần đảo Bắc Mariana",
            "Greenland",
            "Quần đảo Cayman",
            "Quần đảo Marshall",
            "Saint Kitts và Nevis",
            "Quần đảo Faroe",
            "Quần đảo Turks và Caicos",
            "Sint Maarten",
            "Liechtenstein",
            "Monaco",
            "San Marino",
            "Gibraltar",
            "Quần đảo Virgin thuộc Anh",
            "Quần đảo Cook",
            "Palau",
            "Anguilla",
            "Nauru",
            "Tuvalu",
            "Montserrat",
            "Saint Helena",
            "Quần đảo Falkland",
            "Niue",
            "Tokelau",
            "Vatican",
            "Quần đảo Pitcairn"
        ];
        $("#nation").autocomplete({
            source: availableTags
        });
    });
</script>
