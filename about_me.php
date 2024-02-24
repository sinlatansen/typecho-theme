<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php   
/**  
    * 关于
    *  
    * @package custom  
    */ 
// $this->need('header_com.php');
 ?>

<?php  $this->need('header_com.php'); ?>
<header class="not-top-img" id="page-header">        
<?php  $this->need('public/nav.php'); ?>
</header>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }


    body {
    min-height: 100vh;
    background-color: var(--global-bg);
    }



</style>

<main class="layout" id="content-inner" >
        
        

</main>

<?php require_once('public/rightside.php'); ?>
<?php $this -> need('footer.php'); ?>