<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="mubu" style="background-image: url(<?php echo $this->options->toutulink; ?>)">

    <?php $this->need('nav.php') ?>

    <div class="hbg">
        <div class="main">

            <div class="ht">
                <h1 class="bgt" id="post"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', '  '); ?></h1>
                <p><?php echo $this->getDescription(); ?></p>

            </div>
        </div>
    </div>
</div>
<div class="main" id="h">
    <div class="row ">
    <div class="col-l-8" id="postx">
    <?php Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize=4')->to($this); ?>
        <?php while ($this->next()) : ?>
    <div id="hlist" class="col-l-12">
                <div class="card">
                    <div class="row  full">
                        <div class="col-4 " id="yincang">
                        <a href="<?php $this->permalink() ?>">
                            <img id="cimg" src="<?php echo $this->options->lodingimg; ?>"  ks-original="
                            <?php if ($this->fields->thumb != "") {
                                echo $this->fields->thumb;
                            } else {
                                echo  $this->options->morenimg;
                            } ?>" alt="<?php $this->title() ?>"></a> 
                                                    </div>
                        <div id="wzzishiying" class="col-8">
                            <div class="coo">
                                <div class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?> </a></div>
                                <div class="ccontent"><?php $this->excerpt(300, '...'); ?></div>
<div  class="shuju">
                                <small>
                                    <i class="fa fa-user-circle"></i> <?php $this->author(); ?> <i class="fa fa-calendar"></i> <?php $this->date(); ?> <i class="fa fa-eye" ></i> <?php get_post_view($this) ?>  <i class="fa fa-hashtag"></i> <?php $this->tags('/', true, 'none'); ?>

                                </small>
</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>





        <?php endwhile; ?>
        <div class="col-l-12 juzhong" >

        <?php if ($this->_currentPage > 1) { ?>
                            <?php $this->pageLink('<button class="btn red">上一页</button>'); ?>
                        <?php } else { ?>
                            <a class="btn red"  disabled>上一页</a>
                        <?php } ?>
                   
                   <a class="btn"><?php echo $this->_currentPage; ?>/<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></a>
                  
                        <?php if ($this->_currentPage < ceil($this->getTotal() / $this->parameter->pageSize)) { ?>
                            <?php $this->pageLink('<button class="btn red">下一页</button>', 'next'); ?>
                        <?php } else { ?>
                            <a class="btn red" disabled>下一页</a>
                        <?php } ?>


                        
    </div>

    </div>
    <?php $this->need('archivesidebar.php'); ?>


    </div>
</div>

<?php $this->need('footer.php'); ?>