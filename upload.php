<?php
/**
 * Description:
 * Author: DexterHo(HeZhiZheng) <dexter.ho.cn@gmail.com>
 * Date: 2020/11/3
 * Time: 0:24
 * Created by PhpStorm.
 */

namespace Hzz;

require_once './vendor/autoload.php';

ini_set("display_errors","On");
error_reporting(E_ALL);

header('Content-Type:application/json; charset=utf-8');

try {

    $filepath = uploadFile();
    $type = $_POST['img_type'];

    $config = [
        'sm' => [
            "token" => "Yuc4fb0BuwsOnd4y7R0zFp0tVGkxYgRa22"
        ],
        'debug' => true,
        'log' => [
            'name' => 'upload',
            'file' => __DIR__ . '/upload.log',
            'level' => 'DEBUG',
            'permission' => 0777,
        ],
    ];

    $serve = new FreePic($config);
    $url = $serve->{$type}->upload(["filepath" => $filepath]);
    $url = $serve->{$type}->getUrl($url);

    // 删除存在本地的图片，不调用则图片会留在本地服务器上
    @unlink($filepath);

    // var_dump($url);die;

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

/**
 * 上传图片到本地
 * @param string $field_name 上传图片的字段名称
 * @param string $dir 指定路径
 * @return string
 * @throws \Exception
 */
function uploadFile($field_name = "file", $dir = '')
{
    // 允许上传的图片后缀
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES[$field_name]["name"]);
    $extension = end($temp);     // 获取文件后缀名
    if ((($_FILES[$field_name]["type"] == "image/gif")
            || ($_FILES[$field_name]["type"] == "image/jpeg")
            || ($_FILES[$field_name]["type"] == "image/jpg")
            || ($_FILES[$field_name]["type"] == "image/pjpeg")
            || ($_FILES[$field_name]["type"] == "image/x-png")
            || ($_FILES[$field_name]["type"] == "image/png"))
        && ($_FILES[$field_name]["size"] < 5242880)   // 小于 5M = 5*1024KB*1024B
        && in_array($extension, $allowedExts)) {
        if ($_FILES[$field_name]["error"] > 0) {
            throw new \Exception($_FILES[$field_name]["error"]);
        } else {

            if (empty($dir)) {
                $dir = $_SERVER['DOCUMENT_ROOT'] . '/pics/';
            }

            if (!is_dir($dir)) {
                mkdir($dir);
            }

            $destination = $dir . uniqid() . '.' . $extension;
            $move = move_uploaded_file($_FILES[$field_name]["tmp_name"], $destination);

            if ($move) {
                return $destination;
            } else {
                throw new \Exception("上传失败！");
            }
        }
    } else {
        throw new \Exception("非法的文件格式");
    }
}