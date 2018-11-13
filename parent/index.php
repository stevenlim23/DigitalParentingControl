<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
session_start();
$level = $_SESSION['level'];
if ($level != 'parent') {
    header('location:login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head>

<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>
      <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">12</span><i class="fa fa-bell"></i>
        <div class="c-dropdown c-dropdown--notifications">
          <div class="c-dropdown__header"></div>
          <div class="c-dropdown__content"></div>
        </div>
      </div>
      <div class="c-search">
        <input class="c-search__input u-input" placeholder="Search..." type="text"/>
      </div>
      <div class="header-icons-group">
        <div class="c-header-icon logout"><a href="logout.php"><i class="fa fa-power-off"></a></i></div>
      </div>
    </div>
  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt"><img src="../img/mhs.png" class="img-responsive" width="43px"></div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Proposals">
            <div class="c-menu__item__inner"><i class="fa fa-file-text-o"></i>
              <div class="c-menu-item__title"><span>Proposals</span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="History">
            <div class="c-menu__item__inner"><i class="fa fa-history"></i>
              <div class="c-menu-item__title"><span>History</span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Accounts">
            <div class="c-menu__item__inner"><i class="fa fa-address-book-o"></i>
              <div class="c-menu-item__title"><span>Accounts</span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span>Settings</span></div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">
    
        <div class="list-group">
        <a href="#" class="list-group-item">
            <div class="media col-md-3">
                <figure class="pull-left">
                    <img class="media-object img-rounded img-responsive" src="http://placehold.it/140x100" alt="placehold.it/140x100" >
                </figure>
            </div>
            <div class="col-md-5">
                <h4 class="list-group-item-heading pb-3"> Olympic </h4>
                <p class="list-group-item-text"> Proposal to implement best in class enterprise permissioning system to manage signature accumulation and hierarchy management</p>
            </div>
            <div class="col-md-3 pull-left">
                <div class = "container col-md-12">
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> General Manager</div>
                    </div>
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> Project Manager</div>
                    </div>
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-square"></i> Tech Lead</div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 text-center">
                <p> 2 <small> approvals </small></p>
                <button type="button" class="btn btn-primary btn-sm btn-block">Open</button>
            </div>
        </a>
        <a href="#" class="list-group-item">
            <div class="media col-md-3">
                <figure class="pull-left">
                    <img class="media-object img-rounded img-responsive" src="http://placehold.it/140x100" alt="placehold.it/140x100" >
                </figure>
            </div>
            <div class="col-md-5">
                <h4 class="list-group-item-heading pb-3"> Olympic </h4>
                <p class="list-group-item-text"> Proposal to implement best in class enterprise permissioning system to manage signature accumulation and hierarchy management</p>
            </div>
            <div class="col-md-3 pull-left">
                <div class = "container col-md-12">
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> General Manager</div>
                    </div>
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> Project Manager</div>
                    </div>
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-square"></i> Tech Lead</div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 text-center">
                <p> 2 <small> approvals </small></p>
                <button type="button" class="btn btn-primary btn-sm btn-block">Open</button>
            </div>
        </a>
        <a href="#" class="list-group-item">
            <div class="media col-md-3">
                <figure class="pull-left">
                    <img class="media-object img-rounded img-responsive" src="http://placehold.it/140x100" alt="placehold.it/140x100" >
                </figure>
            </div>
            <div class="col-md-5">
                <h4 class="list-group-item-heading pb-3"> Olympic </h4>
                <p class="list-group-item-text"> Proposal to implement best in class enterprise permissioning system to manage signature accumulation and hierarchy management</p>
            </div>
            <div class="col-md-3 pull-left">
                <div class = "container col-md-12">
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> General Manager</div>
                    </div>
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> Project Manager</div>
                    </div>
                    <div class = "row">
                        <div class="col-md-12 pull-left"><i class="fa fa-square"></i> Tech Lead</div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 text-center">
                <p> 2 <small> approvals </small></p>
                <button type="button" class="btn btn-primary btn-sm btn-block">Open</button>
            </div>
        </a>
    </div>
      <div class="row">

        <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
         Messages
        </div>        
                
              <div class="panel-body"> 
                <div class="alert alert-success">
                  <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-info">
                  <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning">
                  <strong>Warning!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-danger">
                  <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
              </div>
        </div>
      </div>            
        </div>                
                  
  </div>
  
</main>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type="text/javascript">
  
  "use strict";

var Dashboard = function () {
  var global = {
    tooltipOptions: {
      placement: "right"
    },
    menuClass: ".c-menu"
  };

  var menuChangeActive = function menuChangeActive(el) {
    var hasSubmenu = $(el).hasClass("has-submenu");
    $(global.menuClass + " .is-active").removeClass("is-active");
    $(el).addClass("is-active");

    // if (hasSubmenu) {
    //  $(el).find("ul").slideDown();
    // }
  };

  var sidebarChangeWidth = function sidebarChangeWidth() {
    var $menuItemsTitle = $("li .menu-item__title");

    $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
    $(".hamburger-toggle").toggleClass("is-opened");

    if ($("body").hasClass("sidebar-is-expanded")) {
      $('[data-toggle="tooltip"]').tooltip("destroy");
    } else {
      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };

  return {
    init: function init() {
      $(".js-hamburger").on("click", sidebarChangeWidth);

      $(".js-menu li").on("click", function (e) {
        menuChangeActive(e.currentTarget);
      });

      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };
}();

Dashboard.init();
//# sourceURL=pen.js
</script>
</body></html>