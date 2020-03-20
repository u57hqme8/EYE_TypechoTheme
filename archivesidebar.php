<div class="col-l-4" id="postx">
                <div class="col-l-12" id="poslist">
                    <div class="post-card" id="zuozhe">
                    <h3 style="text-align: center; line-height:50px">随机推荐</h3>
                    <?php theme_random_posts();?>
                    </div>
                </div>





                <div class="col-l-12" id="poslist">
                    <div class="post-card">

                        <h3 style="text-align: center; line-height:50px">归档</h3>
                        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年n月')->parse('
                    <a href="{permalink}">
                    <div class="card" style="height: 50px; width: 100%;margin-bottom: 10px;">
                    <h4 style="text-align: center; line-height:50px">{date}</h4>
                </div>
					</a>
				'); ?>

                    </div>
                </div>
		<div class="col-l-12" id="poslist">
                    <div class="post-card">

                        <h3 style="text-align: center; line-height:50px">(支持就戳一下吧QAQ)</h3>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4115322372627995"
                        data-ad-slot="5403047255" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
				

                    </div>
                </div>




            </div>