<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <!-- <div class="logo" style="">
            <a href="<?php  echo site_url('login'); ?>">
                <img src="<?php  echo base_url('uploads/logo.png');?>"  style="max-height:30px;"/>
            </a>
        </div> -->

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="margin-top: 0px;">
            <a href="#" class="sidebar-collapse-icon" onclick="hide_brand()">
                <i class="entypo-menu"></i>
            </a>
        </div>
        <script type="text/javascript">
            function hide_brand() {
                $('#branding_element').toggle();
            }
        </script>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

        <div style="text-align: -webkit-center;" id="branding_element">
            <img src="<?php echo base_url('uploads/logo.png');?>"  style="max-height:21px;"/>
            <h4 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
                Sistem Penjadwalan
            </h4>
        </div>

        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> " style="border-top:1px solid #232540;">
            <a href="#">
                <i class="entypo-gauge"></i>
                <span>dashboard</span>
            </a>
        </li>

        <!-- DOSEN -->
        <li class="<?php if ($page_name == 'dosen' || $page_name == 'dosen') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-book"></i>
                <span>Dosen</span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'add_dosen') echo 'active'; ?> ">
                    <a href="#">
                        <i class="entypo-dot"></i>
                        <span>Add Dosen</span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'list_dosen') echo 'active'; ?> ">
                    <a href="#">
                        <i class="entypo-dot"></i>
                        <span>List Dosen</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Running year -->
        <li class="<?php if ($page_name == 'running_year' || $page_name == 'running_year') echo 'active';?> ">
            <a href="<?php echo site_url('admin/running_year') ?>">
                <i class="entypo-book"></i>
                <span>Running Year</span>
            </a>
        </li>

        <!-- Room -->
        <li class="<?php if ($page_name == 'room' || $page_name == 'room') echo 'active';?> ">
            <a href="<?php echo site_url('admin/room') ?>">
                <i class="entypo-book"></i>
                <span>Room</span>
            </a>
        </li>

    </ul>

</div>