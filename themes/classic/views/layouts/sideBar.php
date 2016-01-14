<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Quản trị viên</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!--        <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Điều hướng chính</li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('search/index') ?>">
                    <span>Tìm kiếm</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('documentary/index') ?>">
                    <span>Yêu cầu tương trợ tư pháp <br>hình sự đi</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('documentaryRecieve/index') ?>">
                    <span>Yêu cầu tương trợ tư pháp <br>hình sự đến</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('opinion/index') ?>">
                    <span>Tham gia ý kiến</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('documentaryAbroad/index') ?>">
                    <span>Văn bản có yếu tố nước ngoài</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('case/index') ?>">
                    <span>Vụ án</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('letter/index') ?>">
                    <span>Đơn thư</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('guide/index') ?>">
                    <span>Thẩm định, hướng dẫn</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('wantedAbroad/index') ?>">
                    <span>Truy nã nước ngoài</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('casesAbroadOther/index') ?>">
                    <span>Vụ việc có yếu tố nước ngoài khác</span>
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('document/index') ?>">
                    <span>Thư viện</span>
                </a>
            </li>
            <!--            <li>
                            <a href=" #">
                                <span>Tìm kiếm</span>
                            </a>
                        </li>-->
            <!--            <li>
                            <a href=" #">
                                <span>Thống kê</span>
                            </a>
                        </li>-->
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('backup/run') ?>">
                    <span>Backup</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<script>
    $(document).ready(function () {
        var url = window.location.href;
        $('a[href="' + url + '"]').parent().addClass('active');
    });
</script>