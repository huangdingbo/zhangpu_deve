<?php

?>


<div class="section-w3ls agileits-gallery" id="portfolio">
    <div class="w3-heading-all">
        <h3>我们的画廊</h3>
    </div>
    <div class="gallery-w3layouts">
        <?php foreach ($list as $item){?>
            <div class="col-sm-3 w3_tab_img_left">
                <div class="demo">
                    <a class="cm-overlay" href="<?=$item['src']?>">
                        <figure class="imghvr-shutter-in-out-diag-2">
                            <img src="<?=$item['src']?>" style="width: 475px;height: 316px" alt=" " class="img-responsive" />
                        </figure>
                    </a>
                </div>
                <div class="agile-gallery-info">
                    <h5><?=$item['name']?></h5>
                    <p><?=$item['content1']?></p>
                </div>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
</div>