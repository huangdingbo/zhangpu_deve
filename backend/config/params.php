<?php
return [
    'adminEmail' => 'admin@example.com',

    'doctorPositions' => [
         '1' => '医士',
        '2' => '医师',
        '3' => '住院医师',
        '4' => '主治医师',
        '5' => '副主任医师',
        '6' => '主任医师',
    ],

    'doctorDuty' => [
        '1' => '住院医师',
        '2' => '主治医师',
        '3' => '副主任医师',
        '4' => '主任医师',
        '5' => '教授',
        '6' => '副教授',
        '7' => '讲师',
    ],

    'doctorEducation' => [
        '1' => '中专',
        '2' => '大专',
        '3' => '本科',
        '4' => '研究生',
        '5' => '博士',
    ],
    // 图片服务器的域名设置，拼接保存在数据库中的相对地址，可通过web进行展示
    'domain' => 'http://huangdingbo.work/zhangpu/backend',
    'webuploader' => [
        // 后端处理图片的地址，value 是相对的地址
        'uploadUrl' => 'image/upload',
        // 多文件分隔符
        'delimiter' => ',',
        // 基本配置
        'baseConfig' => [
            'defaultImage' => 'http://img1.imgtn.bdimg.com/it/u=2056478505,162569476&fm=26&gp=0.jpg',
            'disableGlobalDnd' => true,
            'accept' => [
                'title' => 'Images',
                'extensions' => 'gif,jpg,jpeg,bmp,png',
                'mimeTypes' => 'image/*',
            ],
            'pick' => [
                'multiple' => false,
            ],
        ],
    ],
    'imageUploadRelativePath' => '../uploads/images/', // 图片默认上传的目录
    'imageUploadSuccessPath' => '/uploads/images/', // 图片上传成功后，路径前缀
];
