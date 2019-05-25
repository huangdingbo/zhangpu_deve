<?php
$this->title = '总体概况';
?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?=((new \yii\db\Query())->from('num')->where(['id' => '1'])->select('total')->one())['total']?></h3>

                <p>总访问量</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?=$todayApponitNum?></h3>

                <p>今日预约人数</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?=$todaySeeDoctorNum?></h3>

                <p>今日就诊数</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?=$historyNum?><sup style="font-size: 20px">%</sup></h3>

                <p>历史就诊率</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<div>
    <h3>近30天日均预约人数</h3>
    <div id="chart" style="width: 1600px;height: 300px"></div>
</div>


<script type="text/javascript" src="./js/echarts.min.js"></script>
<script type="text/javascript">

    let myChart = echarts.init(document.getElementById('chart'));
    let option = {
        tooltip:{

        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: <?=$keys?>
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            name : 'T1探头',
            data: <?=$values?>,
            type: 'line',
            areaStyle: {
                color:'#00A65A',
            },
            itemStyle:{
                normal:{
                    lineStyle:{
                        color : '#00A65A', //线条颜色
                        width:5,
                    }
                }
            }
        }]
    };
    myChart.setOption(option);

    window.addEventListener("resize", () => {
        myChart.resize();
    });
</script>



