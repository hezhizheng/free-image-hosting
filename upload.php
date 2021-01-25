<?php
/**
 * Description:
 * Author: DexterHo(HeZhiZheng) <dexter.ho.cn@gmail.com>
 * Date: 2020/11/3
 * Time: 0:24
 * Created by PhpStorm.
 */

namespace Hzz;

header('Content-Type:application/json; charset=utf-8');

// 自动加载实例化的类
spl_autoload_register(function ($name) {
    $name = str_replace("\\","/",$name); // 兼容 Linux
    require "./org/" . basename($name) . ".php";
});


const IMG_TYPE = [
    'Sm',
    'ImgKr',
    'FreeImageHost',
    'ImgBB',
    'VimCn',
];

try {
    // 上传图片到本地
    $fileEntity = File::singleton();

    $filepath = $fileEntity->upload();

    $type = $_POST['img_type'];

    checkImgType($type);

    $serve = FreePic::create($type);
    $url = $serve->upload($filepath);

    // 删除存在本地的图片，不调用则图片会留在本地服务器上
    $fileEntity->delete($filepath);

    if (!empty($url)) {
        echo response(200, '上传成功',compact('url'));
    } else {
        echo response(0, '上传失败');
    }

} catch (\Exception $exception) {
    $msg = $exception->getMessage();
    echo response(0, $msg,$exception->getTrace());
}

function checkImgType($type)
{
    if (!in_array($type, IMG_TYPE)) {
        echo response(0, '不支持类型');
        die();
    }
}

function response($code = 200, $msg = 'success', $data = [])
{
    return json_encode(compact('code', 'msg', 'data'));
}