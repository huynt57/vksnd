
<section class="content">
    <h2 class="page-header">Kết quả tìm kiếm</h2>

    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-sm btn-primary" style="margin-bottom: 10px" id="print_table">In tài liệu</button>
            <div class="box" id="printArea">
                <div class="box-body">
                    

                    <h4>Kết quả tìm kiếm yêu cầu tương trợ tư pháp hình sự đi:</h4>
                    <?php if (count($documentary) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($documentary) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Số công văn</th>
                                <th>Tóm tắt</th>
                                <th>Người ký</th>
                                <th>Từ khóa</th>
                                <th>Tình trạng</th>

                            </tr>
                            <?php foreach ($documentary as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->number; ?></td>
                                    <td>
                                        <?php echo $item->shortcut; ?>
                                    </td>
                                    <td> <?php echo $item->signed_user; ?></td>
                                    <td> <?php echo $item->keywords; ?></td>
                                    <td>
                                        <?php $status = StringHelper::getStatus($item->status); ?>
                                        <span class="label label-<?php echo $status['lable'] ?>"><?php echo $status['status'] ?></span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>

                        </table><?php endif; ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                           
                    <h4>Kết quả tìm kiếm vụ việc có yếu tố nước ngoài:</h4>
                    <?php if (count($cases_abroad) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($cases_abroad) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Số công văn</th>
                                <th>Tóm tắt</th>
                                <th>Người ký</th>
                                <th>Từ khóa</th>
                                <th>Tình trạng</th>

                            </tr>
                            <?php foreach ($cases_abroad as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->number; ?></td>
                                    <td>
                                        <?php echo $item->shortcut; ?>
                                    </td>
                                    <td> <?php echo $item->signed_user; ?></td>
                                    <td> <?php echo $item->keywords; ?></td>
                                    <td>
                                        <?php $status = StringHelper::getStatus($item->status); ?>
                                        <span class="label label-<?php echo $status['lable'] ?>"><?php echo $status['status'] ?></span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>

                        </table><?php endif; ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                    <h4>Kết quả tìm kiếm vụ việc:</h4>
                    <?php if (count($cases) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($cases) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Vụ án</th>
                                <th>Bị can</th>
                                <th>Ngày khởi tố</th>
                                <th>Thời hạn tạm giam</th>
                                <th>Thời gian điều tra</th>
                                <th>Điều tra viên thụ lý</th>

                            </tr>
                            <?php foreach ($cases as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->case_name; ?></td>
                                    <td>
                                        <?php echo $item->accused; ?>
                                    </td>
                                    <td> <?php echo Date('m/d/Y', $item->date_prosecution); ?></td>
                                    <td> <?php echo $item->detention_period; ?></td>
                                    <td> <?php echo $item->investigation_period; ?></td>
                                    <td> <?php echo $item->investigator; ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </table><?php endif ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                    <h4>Kết quả tìm kiếm văn bản có yếu tố nước ngoài:</h4>
                    <?php if (count($documentary_abroad) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($documentary_abroad) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Số công văn</th>
                                <th>Tóm tắt</th>
                                <th>Người ký</th>
                                <th>Từ khóa</th>
                                <th>Tình trạng</th>

                            </tr>
                            <?php foreach ($documentary_abroad as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->number; ?></td>
                                    <td>
                                        <?php echo $item->shortcut; ?>
                                    </td>
                                    <td> <?php echo $item->signed_user; ?></td>
                                    <td> <?php echo $item->keywords; ?></td>
                                    <td>
                                        <?php $status = StringHelper::getStatus($item->status); ?>
                                        <span class="label label-<?php echo $status['lable'] ?>"><?php echo $status['status'] ?></span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </table><?php endif; ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                    <h4>Kết quả tìm kiếm yêu cầu tương trợ tư pháp hình sự đến:</h4>
                    <?php if (count($documentary_recieve) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($documentary_recieve) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Số công văn</th>
                                <th>Tóm tắt</th>
                                <th>Người ký</th>
                                <th>Từ khóa</th>
                                <th>Tình trạng</th>

                            </tr>
                            <?php foreach ($documentary_recieve as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->number; ?></td>
                                    <td>
                                        <?php echo $item->shortcut; ?>
                                    </td>
                                    <td> <?php echo $item->signed_user; ?></td>
                                    <td> <?php echo $item->keywords; ?></td>
                                    <td>
                                        <?php $status = StringHelper::getStatus($item->status); ?>
                                        <span class="label label-<?php echo $status['lable'] ?>"><?php echo $status['status'] ?></span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </table><?php endif; ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                    <h4>Kết quả tìm kiếm thẩm định, hướng dẫn:</h4>
                    <?php if (count($guide) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($guide) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Số công văn</th>
                                <th>Tóm tắt</th>
                                <th>Người ký</th>
                                <th>Từ khóa</th>
                                <th>Tình trạng</th>

                            </tr>
                            <?php foreach ($guide as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->number; ?></td>
                                    <td>
                                        <?php echo $item->shortcut; ?>
                                    </td>
                                    <td> <?php echo $item->signed_user; ?></td>
                                    <td> <?php echo $item->keywords; ?></td>
                                    <td>
                                        <?php $status = StringHelper::getStatus($item->status); ?>
                                        <span class="label label-<?php echo $status['lable'] ?>"><?php echo $status['status'] ?></span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </table><?php endif; ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                    <h4>Kết quả tìm kiếm đơn thư:</h4>
                    <?php if (count($letters) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($letters) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Người làm đơn</th>
                                <th>Ngày ký</th>
                                <th>Ngày tiếp nhận</th>
                                <th>Cán bộ giải quyết</th>

                            </tr>
                            <?php foreach ($letters as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->letter_created; ?></td>

                                    <td> <?php echo Date('m/d/Y', $item->signed_date); ?></td>
                                    <td> <?php echo Date('m/d/Y', $item->signed_recieve); ?></td>
                                    <td>
                                        <?php echo $item->staff_assigned; ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </table><?php endif; ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                    <h4>Kết quả tìm kiếm tham gia ý kiến:</h4>
                    <?php if (count($opinion) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($opinion) != 0): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã số</th>
                                <th>Số công văn</th>
                                <th>Tóm tắt</th>
                                <th>Người ký</th>
                                <th>Từ khóa</th>
                                <th>Tình trạng</th>

                            </tr>
                            <?php foreach ($opinion as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->number; ?></td>
                                    <td>
                                        <?php echo $item->shortcut; ?>
                                    </td>
                                    <td> <?php echo $item->signed_user; ?></td>
                                    <td> <?php echo $item->keywords; ?></td>
                                    <td>
                                        <?php $status = StringHelper::getStatus($item->status); ?>
                                        <span class="label label-<?php echo $status['lable'] ?>"><?php echo $status['status'] ?></span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </table><?php endif; ?><hr><div class="display" id="break_page" style='page-break-before:always'></div>
                    <h4>Kết quả tìm kiếm truy nã nước ngoài:</h4>
                    <?php if (count($wanted_abroad) == 0): ?>
                        Không tìm thấy kết quả nào
                    <?php endif; ?>
                    <?php if (count($wanted_abroad) != 0): ?>
                        <table class="table table-bordered" id="result">
                            <tr>
                                <th>Mã số</th>
                                <th>Nước yêu cầu</th>
                                <th>Số truy nã quốc tế</th>
                                <th>Ngày phát hành</th>
                                <th>Cán bộ xử lý</th>

                            </tr>
                            <?php foreach ($wanted_abroad as $item): ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->nation_request; ?></td>
                                    <td>
                                        <?php echo $item->wanted_number; ?>
                                    </td>
                                    <td> <?php echo Date('m/d/Y', $item->date_publish); ?></td>
                                    <td> <?php echo $item->staff_assigned; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table><?php endif; ?><hr>

                    <!-- nav-tabs-custom -->
                </div>
            </div> 
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $('#print_table').on('click', function () {
            var print = $('#printArea, #break_page');
            print.printThis({
                debug: false,
                importCSS: true,
                printContainer: true,
                loadCSS: "",
                pageTitle: "",
                removeInline: false,
                printDelay: 433,
                header: ""
            });
        });
    });
</script>