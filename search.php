<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php if ($this->have()): ?>

<div class="mubu" style="background-image: url(<?php echo $this->options->toutulink; ?>)">

    <?php $this->need('nav.php') ?>

    <div class="hbg">
        <div class="main">

            <div class="ht" id="post">
                <h1 class="bgt"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', '  '); ?></h1>
                            <form class="ks-form" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                                <select class="mdui-select" name="cat">
                                    <option value="0" selected>全部</option>
                                    <option value="33">Bukkit</option>
                                    <option value="34">sponge</option>
                                    <option value="63">服务端</option>
                                    <option value="61">开服教程</option>
                                    <option value="34">编程</option>
                                    <option value="38">专题</option>
                                    <option value="2">博客</option>
                                    <option value="36">其它</option>
                                </select>
                                <input style="width: 60%;"  type="text" name="ss" placeholder="输入关键字以回车开始搜索">
                            </form>

            </div>
        </div>
    </div>
</div>
<div class="main" id="h">


    <div class="row ">

    <?php Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize=4')->to($this); ?>
        <?php while ($this->next()) : ?>
    <div id="hlist" class="col-l-12">
                <div class="card">
                    <div class="row  full">
                        <div class="col-5 " id="yincang">
                        <a href="<?php $this->permalink() ?>">
                            <img id="cimg" src="<?php $this->options->lodingimg; ?>"  ks-original="
                            <?php if ($this->fields->thumb != "") {
                                echo $this->fields->thumb;
                            } else {
                                echo  $this->options->morenimg;
                            } ?>" ></a> 
                                                    </div>
                        <div id="wzzishiying" class="col-7">
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

        <?php
global $can;//定义全局变量，方便下面获取
$cat=intval($this->request->cat);//获取cat
if($cat>0){$can='?cat='.$cat;}else{$can="";}
class Typecho_Widget_Helper_PageNavigator_Classic extends Typecho_Widget_Helper_PageNavigator
{
    public function prev($prevWord = 'PREV')
    {
        //输出上一页
        if ($this->_total > 0 && $this->_currentPage > 1) {
            echo '<a class="prev" href="' . str_replace($this->_pageHolder, $this->_currentPage - 1, $this->_pageTemplate) . $this->_anchor . $GLOBALS['can'] . '">'
            . $prevWord . '</a>';
        }
    }
    public function next($nextWord = 'NEXT')
    {
        //输出下一页
        if ($this->_total > 0 && $this->_currentPage < $this->_totalPage) {
            echo '<a class="next" title="" href="' . str_replace($this->_pageHolder, $this->_currentPage + 1, $this->_pageTemplate) . $this->_anchor . $GLOBALS['can'] . '">'
            . $nextWord . '</a>';
        }
    }
}
?>
        <div class="col-l-12 juzhong" >
        <?php if ($this->_currentPage > 1) { ?>
                            <?php $this->pageLink('<button class="btn red">上一页</button>'); ?>
                        <?php } else { ?>
                            <a class="btn red" disabled>上一页</a>
                        <?php } ?>
                   
                   <a class="btn"><?php echo $this->_currentPage; ?>/<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></a>
                  
                        <?php if ($this->_currentPage < ceil($this->getTotal() / $this->parameter->pageSize)) { ?>
                            <?php $this->pageLink('<button class="btn red">下一页</button>', 'next'); ?>
                        <?php } else { ?>
                            <a class="btn red" disabled>下一页</a>
                        <?php } ?>


                        
    </div>
    </div>



</div>

<?php $this->need('footer.php'); ?>
	<?php else: ?>
		
<div class="mubu" style="background-image: url(<?php echo $this->options->toutulink; ?>)">

<?php $this->need('nav.php') ?>

<div class="hbg">
	<div class="main">

		<div class="ht">
			<h1 class="bgt">没找到你所找的文章</h1>
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
<?php endif; ?>