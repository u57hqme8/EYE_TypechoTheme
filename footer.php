<footer class="footer ">
        <div class="fcard">
            <div class="main">
                <div class="row ">
                    <div class="col-l-12" id="foot">
<p><a href="/copyright.html" >版权说明</a> | <a href="/links.html">友情链接</a> | <a href="/msg.html">留言本</a> | <a href="/py.html">站点费用</a> | <a href="/about.html">关于</a></p>

                        <p>© <?php echo date("Y"); ?> <a href="/"> <?php $this->options->title(); ?></a> All rights reserved.</p>
                    <?php if ($this->options->filing) { ?><p><a href="http://www.beian.miit.gov.cn"
                                target="_blank" rel="nofollow"><?php echo $this->options->filing; ?></a></p>
<?php } ?>
                        <?php if ($this->options->gafiling) { ?><p><img
                            src="<?php echo $this->options->lodingimg; ?>" ks-original="<?php Helper::options()->themeUrl(); ?>/img/gaba.png" /><?php echo $this->options->gafiling; ?></p>
                        <?php } ?>
                        <p> Powered by <a href="http://typecho.org">Typecho</a> 头图提供 vecter</p>
                        <?php if ($this->options->upyuncdn=='true') { ?>
                         <p><a href="https://www.upyun.com/" target="_blank"><img
                            src="<?php echo $this->options->lodingimg; ?>" ks-original="<?php Helper::options()->themeUrl(); ?>/img/upyun.png" alt="upyun" height=28 /></a></p>
                    <?php } ?>
                        <p><?php echo $this->options->jieshao; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</body>
<?php if ($this->options->fujia) echo $this->options->fujia; ?>
<script>
    ks.image("article img");
    ks.lazy("img");
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.the-nav').cbFlyout();
});
</script>
<script>        
  var mySwiper = new Swiper ('.swiper-container', {

    grabCursor: true,
    mousewheel: true,
    autoplay:true,
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })        
  </script>

<script>
// 当网页向下滑动 20px 出现"返回顶部" 按钮
window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {console.log(121);
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
 
// 点击按钮，返回顶部
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>