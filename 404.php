<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="mubu" style="background-image: url(<?php echo $this->options->toutulink; ?>)">

    <?php $this->need('nav.php') ?>

    <div class="hbg">
        <div class="main">

            <div class="ht">
                <h1 class="bgt"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', '  '); ?></h1>
                <p>但是你可以看看下面的文章哦！</p>

            </div>
        </div>
    </div>
</div>
<div class="main" id="h">
    <div class="row ">

        <?php Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize=4')->to($zuix); ?>
        <?php while ($zuix->next()) : ?>
            <div id="hlist" class="col-l-6">
                <div class="card">
                    <div class="row  full">
                        <div class="col-5 " id="yincang">
                            <a href="<?php $zuix->permalink() ?>">
                                <img id="cimg" src="<?php echo $this->options->lodingimg; ?>" ks-original="
                            <?php if ($zuix->fields->thumb != "") {
                                echo $zuix->fields->thumb;
                            } else {
                                echo  $zuix->options->morenimg;
                            } ?>" alt="<?php $zuix->title() ?>"></a>
                        </div>
                        <div id="wzzishiying" class="col-7">
                            <div class="coo">
                                <div class="title"><a href="<?php $zuix->permalink() ?>"><?php $zuix->title() ?> </a></div>
                                <div class="ccontent"><?php $zuix->excerpt(140, '...'); ?></div>
                                <div class="shuju">
                                    <i class="fa fa-user-circle"></i> <?php $zuix->author(); ?> <i class="fa fa-calendar"></i> <?php $zuix->date(); ?> <i class="fa fa-hashtag"></i> <?php $zuix->tags(',', true, 'none'); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>  

    </div>
</div>

<?php $this->need('footer.php'); ?>