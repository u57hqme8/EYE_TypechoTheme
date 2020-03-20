	<div id="left-flyout-nav" class="layout-left-flyout visible-sm"></div>

	<div class="layout-right-content">

		<header class="the-header">
			<div class="main">
				<div class="navbar container">

					<!-- Trigger -->
					<a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="javascript:;">
						<span class="icon-bar btn-flyout-trigger"></span>
						<span class="icon-bar btn-flyout-trigger"></span>
						<span class="icon-bar btn-flyout-trigger"></span>
					</a>

					<!-- Structure -->
					<nav class="the-nav nav-collapse clearfix">
						<ul class="nav nav-pill pull-left">
							<li><a href="/">首页</a></li>
							
								<?php $this->widget('Widget_Metas_Category_List')->to($category);
								$last = -1; ?>

								<?php while ($category->next()) : ?>
									<?php if ($category->levels == 0) { ?>
										<?php if ($last != -1) { ?>
							</ul>
							</li>
						<?php } ?>
						<li class="dropdown">
							<a href="javascript:void(0);" ><?php $category->name(); ?> <b class="caret"></b></a>
							<ul class="subnav">

								<li><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></li>


							<?php } else { ?>

								<li><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></li>

							<?php } ?>
							<?php $last = $category->levels; ?>
						<?php endwhile; ?>
							</ul>
						
						</li>




						</ul>
						<ul class="nav nav-pill pull-right">

<li><a href="https://www.mmcee.cn/soso.html">搜索</a></li>
							<li class="dropdown">
								<a href="javascript:void(0);">更多 <b class="caret"></b></a>
								<ul class="subnav">
								<?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li ><a href="{permalink}">{title}</a></li>'); ?>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


	</div>
