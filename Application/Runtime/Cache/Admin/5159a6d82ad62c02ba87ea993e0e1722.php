<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Simpla Admin by www.865171.cn</title>
    <!--                       CSS                       -->
    <!-- Reset Stylesheet -->
    <link rel="stylesheet" href="/cms2/Public/css/reset.css" type="text/css" media="screen" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/cms2/Public/css/style.css" type="text/css" media="screen" />
    <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
    <link rel="stylesheet" href="/cms2/Public/css/invalid.css" type="text/css" media="screen" />
    <!--                       Javascripts                       -->
    <!-- jQuery -->
    <script type="text/javascript" src="/cms2/Public/scripts/jquery-1.3.2.min.js"></script>
    <!-- jQuery Configuration -->
    <script type="text/javascript" src="/cms2/Public/scripts/simpla.jquery.configuration.js"></script>
    <!-- Facebox jQuery Plugin -->
    <script type="text/javascript" src="/cms2/Public/scripts/facebox.js"></script>
    <!-- jQuery WYSIWYG Plugin -->
    <script type="text/javascript" src="/cms2/Public/scripts/jquery.wysiwyg.js"></script>
    <!-- jQuery Datepicker Plugin -->
    <script type="text/javascript" src="/cms2/Public/scripts/jquery.datePicker.js"></script>
    <script type="text/javascript" src="/cms2/Public/scripts/jquery.date.js"></script>
</head>
</head>
<body>
<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <!-- Sidebar with logo and menu -->
            <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
            <!-- Logo (221px wide) -->
            <!-- Sidebar Profile links -->
            <p></p><p></p><p></p><p></p><p></p><div id="profile-links"> Hello,审查员 <?php echo ($username); ?> <br />
            <br />
            <a href="<?php echo U('Admin/Admin/index');?>" title="帮助">帮助</a>
            <a href="<?php echo U('Admin/Admin/logout');?>" title="退出">退出</a> </div>
            <ul id="main-nav">
                <!-- Accordion Menu -->
                <li> <a href="#" class="nav-top-item"> 审查 </a>
                    <ul>
                        <li><a href="#">查询</a></li>
                        <li><a href="<?php echo U('Admin/invest/notcheck');?>">未审查表格</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item ">
                    <!-- Add the class "current" to current menu item -->
                    表格管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/stu/showAll_sc');?>">查看已录入表格</a></li>
                        <li><a href="<?php echo U('Admin/stu/add_sc');?>">录入新表格</a></li>

                    </ul>
                </li>

                <li> <a href="#" class="nav-top-item"> 用户管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/User/showAll');?>">用户列表</a></li>
                        <li><a href="<?php echo U('Admin/User/add');?>">用户添加</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item"> 个人中心 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/User/PwdUpdate_sc');?>">修改密码</a></li>
                        <li><a href="<?php echo U('Admin/User/show_sc');?>">个人信息</a></li>
                        <li><a href="<?php echo U('Admin/User/delete_sc');?>">注销</a></li>
                    </ul>
                </li>
                <!-- End #main-nav -->
                <!-- End #messages -->
            </ul>
        </div>
    </div>
    <!-- End #sidebar -->
    <div id="main-content">

        <!-- Page Head -->
        <h2>农产品质量安全监督抽查抽样工作单</h2>
        <div class="content-box">

            <?php if(is_array($sccd)): $i = 0; $__LIST__ = $sccd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$scc): $mod = ($i % 2 );++$i;?><table>

                    <tr><td>样品名称</td><td><?php echo ($scc['samplename']); ?></td></tr>
                    <tr><td>商标</td><td><?php echo ($scc['trademark']); ?></td></tr>
                    <tr><td>包装</td><td><?php echo ($scc['casing']); ?></td></tr>
                    <tr><td>等级</td><td><?php echo ($scc['grade']); ?></td></tr>
                    <tr><td>标识</td><td><?php echo ($scc['identifi']); ?></td></tr>
                    <tr><td>型号规格</td><td><?php echo ($scc['typandspe']); ?></td></tr>
                    <tr><td>执行标准</td><td><?php echo ($scc['opstand']); ?></td></tr>
                    <tr><td>生产日期或批号</td><td><?php echo ($scc['prodateorbn']); ?></td></tr>
                    <tr><td>产品认证情况</td><td><?php echo ($scc['approve']); ?></td></tr>
                    <tr><td>证书编号</td><td><?php echo ($scc['cernumber']); ?></td></tr>
                    <tr><td>抽样数量</td><td><?php echo ($scc['checknumber']); ?></td></tr>
                    <tr><td>抽样场所</td><td><?php echo ($scc['checkspace']); ?></td></tr>
                    <tr><td>样品编号</td><td><?php echo ($scc['samplenum']); ?></td></tr>
                </table><?php endforeach; endif; else: echo "" ;endif; ?>
            </form>
        </div>

        <!-- End .shortcut-buttons-set -->
        <div class="clear"></div>
        <!-- End .clear -->

        <div id="footer"> <small>
            <!-- Remove this notice or replace it with whatever you want -->
            &#169; Copyright 2010 Your Company | Powered by <a href="http://www.865171.cn">admin templates</a> | <a href="#">Top</a> </small> </div>
        <!-- End #footer -->
    </div>
    <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>