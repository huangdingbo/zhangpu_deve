<?php

?>
<div class="about">
    <div class="container">
        <div class="w3-heading-all">
            <h3>关于我们</h3>
        </div>
        <div class="ab-agile">
            <div class="col-md-6 aboutleft">
                <h3>欢迎你的到来</h3>
                <p class="para1">Donec bibendum velit quis diam venenatis, vulputate aliquam sapien blandit.
                    Etiam dui massa, vehicula a convallis a, facilisis vitae neque.Pellentesque sit amet
                    odio quis libero eleifend congue at ac justo. Suspendisse posuere congue accumsan Vulputate aliquam sapien. </p>
                <p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
                <p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
                <p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
            </div>
            <div class="col-md-6 aboutright">
                <img src="images/p1.jpg" class="img-responsive" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- wthree-mid -->
<div class="wthree-mid">
    <div class="container">
        <h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
        <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
    </div>
</div>
<!-- //wthree-mid -->
<!--/team-->
<div class="team" id="team">
    <div class="w3-heading-all">
        <h3>我们的医生</h3>
    </div>
    <div>
        <table id="doctor" class="table" >
            <?php foreach ($list as $key => $item){ ?>
                <td style="text-align: center;color: #0089db;font-size: 20px"><b><?=$key?></b></td>
                <tr style="display: flex;flex-wrap: wrap;padding:0 15%;overflow: hidden">
                    <?php foreach ($item as $value){?>
                        <td style="text-align: center; width: 33%;display: flex">
                            <div style="display: flex;justify-content: space-evenly;height: 100%;flex-direction: column">
                                <h4 style="color: #0d6aad;width: 110px">姓名：<?=$value['name']?></h4>
                                <h4 style="color: #0d6aad;width: 110px">职称：<?=$value['position']?></h4>
                                <h4 style="color: #0d6aad;width: 110px">学历：<?=$value['education']?></h4>
                                <h4 style="color: #0d6aad;width: 110px">毕业院校：<?=$value['graduate_school']?></h4>
                            </div>
                            <a href="<?=\yii\helpers\Url::to(['/contact/index','id'=>$value['id']])?>"><img style="height: 200px;" src=<?=Yii::$app->params['imgDomain'].$value['pic']?> alt="" class="img-rounded"></a>
                        </td>
                    <?php }?>
                </tr>
            <?php }?>
        </table>
    </div>
    <div class="clearfix"></div>
</div>
</div>
