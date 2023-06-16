<?php

$itens_menu  = array(
    "relatório" => array("cliente", "faturamento"),
    "cadastro" => array("cliente", "fornecedor", "usuário")
);
$itens_menu["cadastro"][] = "produtos";
$itens_menu["cadastro"][] = "perfil de acesso";
$itens_menu["relatório"][] = "vendas";

?>
<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu">
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <form class="sidebar-search" action="extra_search.html" method="POST">
                        <div class="form-container">
                            <div class="input-box">
                                <a href="javascript:;" class="remove"></a>
                                <input type="text" placeholder="Search..." />
                                <input type="button" class="submit" value=" " />
                            </div>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="start active ">
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                        <span class="title">
                            Dashboard
                        </span>
                        <span class="selected">
                        </span>
                    </a>
                </li>
                <!--Cliente-->
                <?php
                    if(ksort($itens_menu)) {

                        foreach ($itens_menu as $menu => $itens) {

                ?>
                        <li class="">
                            
                            <a href="javascript:;">
                               
                                <i class="fa fa-file-text"></i>
                                <span class="title">
                                    <?php echo ucfirst(strtolower($menu)); ?>
                                </span>
                               
                                <span class="arrow ">
                                </span>
                           
                            </a>
                           
                            <ul class="sub-menu">
                                <?php if (sort($itens)) {

                                        foreach ($itens as $item) {
                                ?>
                                            <li>
                                                <a href="#">
                                                    <?php echo ucfirst(strtolower($item));
                                                    ?>
                                                </a>
                                            </li>
                                <?php
                                        }
                                    }
                                ?>
                            </ul>
                        </li>
                    <?php
                    }
                }
            ?>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->