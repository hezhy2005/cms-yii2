<?php
$this->title = Yii::$app->params['system_name'];
?>
<?php $this->beginBlock('css') ?>
    <link rel="stylesheet" href="/modules/css/global.css">
    <style type="text/css">
        .search-con .search:before{display:inline-block;content:'';}
        .contents{
            width: 215px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;}
        /*去掉分页部分的边框*/
        .page-box{margin-right: 0;padding: 0}
        .table{position: relative}
        .grid .table tfoot td{border:none;position: absolute;  width: 100%;z-index: 1000;padding: 10px 0;}
        .manage-content{padding-bottom: 80px}
    </style>
<?php $this->endBlock() ?>
    <div class="manage-content">
        <div>
            <h4 class="padding manage-title">房产管理</h4>
        </div>
        <div class="padding grid">
            <ul class="form search-con clearfix " id="search_con">
                <li class="name">
                    <span style="display:inline-block;">商品名称</span>
                    <input type="text" class="form-control" name="keywords" placeholder="产品名称" style="width: 250px;height: 32px;margin-left:10px;display:inline-block;">
                </li>
                <li  class="search">
                    <a href="javascript:;" class="btn btn-primary" id="btn_search">
                        <span>搜索</span>
                    </a>
                </li>
                <li class="search pull-right" >
                    <a class="btn-pr bg-green color-white" href="/house/house/add">
                        <span class="glyphicon glyphicon-plus"></span><span>新增房产</span>
                    </a>
                </li>
            </ul>
            <div class="grid-content clearfix" id="house_grid">
                <table class="table">
                    <thead>
                      <tr class="notgoodsorder on">
                        <th style="width:15%">商品图片</th>
                        <th  style="width:30%">商品名称</th>
                        <th style="width:30%">所属商家</th>
                        <th  style="width:16%">商品类型</th>
                       
                        <th  style="width:9%;padding-left: 23px;">操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td colspan="9" style="height:70px; text-align: center;">请先搜索房产</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/template" id="grid_template">
        <td ><img  style="width:80px;height:66px;" src="<%-__data.logo||''%>"></td>
        <td><p class="contents" ><%-__data.name||''%></p></td>
        <td><p class="contents" ><%-__data.shop_name||''%></p></td>
        <td><%-__data.type_name||''%></td>
        
        <td>
          <a href="/house/house/add?id=<%-__data.id%>" class="opt-btn opt-editmember" >编辑</a>
          <a href="javascript:;" class="opt-btn opt-deleted"   data-id="<%-__data.id%>" >删除</a>
        </td>
    </script>
    <script type="text/template" id="deleted_info">
        <div class="tips-wrap">
            <div class="delete-info">确定删除？</div>
            <button class="btn-pr btn-refund bg-green color-white deleted-oper">确定</button>
            <button class="btn-pr btn-refund bg-white deleted-oper fr">取消</button>
        </div>
    </script>
<?php $this->beginBlock('js') ?>
    <script type="text/javascript" src="/frontend/js/lib/global.js"></script>
    <script type="text/javascript">
      __REQUIRE('/modules/js/house/index.js');
    </script>
<?php $this->endBlock(); ?>

