<?php

use app\core\Application;
?>

<?php Application::$app->showErrorMsgs('orderdetails',true) ?>
<?php Application::$app->showMsg('success') ?>

<div class="row">
    <div class="col-4 mx-auto">
        <div class="card-body">
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12">
        <label style="font-size:14px;font-weight: 500; color: #009688">Số bản ghi tìm thấy: <?= count($data) ?></label>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-table">
            <div class="card-header">Bài đăng
                <div class="tools dropdown">
                    </span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="/post">Thêm</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th style="width:5%;">STT</th>
                            <th style="width:20%;">Tiêu đề</th>
                            <th style="width:20%;">Avatar</th>
                            <th style="width:20%;">Người đăng</th>
                            <th colspan="2" class="actions">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="no-border-x">

                        <?php $i = 1 ?>
                        <?php foreach ($data as $item) : ?>
                            <tr>
                                <td><label> <?= $item['id']; ?> </label></td>
                                <td><label> <?= $item['title']; ?> </label></td>
                                <td><img width="100px" src="/uploads/<?= (!$item['avatar']) ? 'slider2.jpg' : $item['avatar']  ?>" alt="" srcset=""></td>
                                <td><label> <?= $item['firstname']; ?> </label></td>
                                <?php if($item['status'] == 1){ ?>
                                <td style="width:60px" class="actions"><a class="btn btn-danger btn-sm" href="/post-update?id=<?= $item['id'] ?>&update=1">Ẩn bài đăng</a></td>
                                <?php } else {?>
                                <td style="width:60px" class="actions"><a class="btn btn-primary btn-sm" href="/post-update?id=<?= $item['id'] ?>&update=1">Đăng bài</a></td>
                                <?php } ?>

                                <td style="width:60px" class="actions">
                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#mod-danger-<?= $item['id'] ?>" type="button">Xóa</a>
                                </td>
                                <td style="width:60px" class="actions"><a class="btn btn-primary btn-sm" href="/admin/post/edit?id=<?= $item['id'] ?>">Sửa</a></td>

                            </tr>
                            <?php $i++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?php if (count($data) === 0) : ?>
                    <div class="alert alert-info p-2 text-center">Không có kết quả nào</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php foreach ($data as $item) : ?>
<div class="modal fade" id="mod-danger-<?= $item['id'] ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                    <h3>Xóa</h3>
                    <p>Bạn chắc chắn thực hiện hành động này ?</p>
                    <div class="mt-8">
                        <button class="btn btn-space btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                        <a href="/post-destroy?id=<?= $item['id'] ?>" class="btn btn-space btn-danger" >Đồng ý</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<?php endforeach; ?>

@script
<script src="/assets/lib/jquery.niftymodals/js/jquery.niftymodals.js" type="text/javascript"></script>
<script type="text/javascript">
    $.fn.niftyModal('setDefaults', {
        overlaySelector: '.modal-overlay',
        contentSelector: '.modal-content',
        closeSelector: '.modal-close',
        classAddAfterOpen: 'modal-show'
    });

    $(document).ready(function() {
        //-initialize the javascript
        App.init();
    });
</script>
@endScript