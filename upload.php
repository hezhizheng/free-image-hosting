<?php
/**
 * Description:
 * Author: DexterHo(HeZhiZheng) <dexter.ho.cn@gmail.com>
 * Date: 2020/11/3
 * Time: 0:24
 * Created by PhpStorm.
 */

namespace Hzz;

ini_set("display_errors","On");
error_reporting(E_ALL);

header('Content-Type:application/json; charset=utf-8');

// 自动加载实例化的类
spl_autoload_register(function ($name) {
    $name = str_replace("\\","/",$name); // 兼容 Linux
    $file = "./org/" . basename($name) . ".php";
    if ( !file_exists($file) )
    {
        throw new \Exception("Unable to load $name.");
    }
    require "./org/" . basename($name) . ".php";
});

try {
    // 上传图片到本地
    $fileEntity = File::singleton();

    $filepath = $fileEntity->upload();

    $type = $_POST['img_type'];

    $serve = FreePic::create($type);
    $url = $serve->upload($filepath);

    // 删除存在本地的图片，不调用则图片会留在本地服务器上
    $fileEntity->delete($filepath);

    if (!empty($url)) {
        response(200, '上传成功',compact('url'));
    } else {
        response(0, '上传失败');
    }

} catch (\Exception $exception) {
    $msg = $exception->getMessage();
    response(0, $msg,$exception->getTrace());
}

function response($code = 200, $msg = 'success', $data = [])
{
    die(json_encode(compact('code', 'msg', 'data')));
}