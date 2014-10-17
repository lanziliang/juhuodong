<?php if (!defined('THINK_PATH')) exit();?>
<ul class="events-list events-list-2col events-list-pic70" id='musicul' >
		<?php if(is_array($hdyy)): foreach($hdyy as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt=""  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
            <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
          <?php echo ($vo["address"]); ?>
        </address>
        <div>
          <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
      
  </ul>