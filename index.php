<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="free-pic 免费图床">
    <title>free-pic 免费图床</title>
    <!-- Bootstrap 核心CSS -->
    <link rel="stylesheet" href="//lib.baomitu.com/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//lib.baomitu.com/bootstrap-fileinput/4.5.3/css/fileinput.min.css">
    <link rel="stylesheet" href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="theme-color" content="#563d7c">
    <!-- Meta关键字定义 -->
    <meta name="keywords" content="free-pic 免费图床,free image-hosting,新浪图床,免费图床,开源图床,个人图床,图床,php图床,图片外链,sm.ms,路过图床,图床网" />
    <meta name="description" content="free-pic 免费图床 free image-hosting">
    <meta name="author" content="DexterHo(HeZhiZheng)">
    <meta property="og:type" content="website">
    <meta property="og:title" content="free-pic 免费图床 free image-hosting">
    <meta property="og:site_name" content="free-pic 免费图床 free image-hosting">
    <meta property="og:description" content="free-pic 免费图床 free image-hosting">

    <style>
        html {
            font-size: 14px;
        }

        @media (min-width: 768px) {
            html {
                font-size: 16px;
            }
        }

        .container {
            max-width: 960px;
        }

        .pricing-header {
            max-width: 700px;
        }

        .card-deck .card {
            min-width: 220px;
        }

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }

        .free-pic-copy {
            cursor: pointer;
        }

    </style>


</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <img src="logo.png" height="70">
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h6 class="display-4">free-pic(免费图床)</h6>
    <p class="lead">支持 "gif", "jpeg", "jpg", "png" 图片格式，大小不超过5MB</p>
    <p class="lead">无存储限制 | 无需上传凭证 | 无同源跨域检测</p>
    <p class="lead">请避免上传不符合社会主义核心价值观的图片</p>
</div>

<div class="container">

    <div class="free-content">

        <div class="card mb-3 text-center">
            <div class="card-body">
                <h5 class="card-title">可用图床</h5>
                <div class="btn-group-toggle" data-toggle="buttons" id="publicStorage">
                    <label class="btn btn-outline-secondary active">
                        <input type="radio" autocomplete="off" name="img_type" value="ImgKr" checked>ImgKr
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="radio" autocomplete="off" name="img_type" value="ImgBB">ImgBB
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="radio" autocomplete="off" name="img_type" value="FreeImageHost">FreeImageHost
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="radio" autocomplete="off" name="img_type" value="Sm">SM.MS
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="radio" autocomplete="off" name="img_type" value="VimCn">VimCn
                    </label>
                </div>
            </div>
        </div>


        <div class="post text-center">
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <input id="input-21" type="file" name="file" multiple="true" class="file"
                           data-overwrite-initial="false"
                           data-min-file-count="1" accept="image/*">
                </div>
            </form>
        </div>

        <div id="showurl" style="display: none">
            <ul id="navTab" class="nav nav-tabs">
                <li class="nav-item">
                    <a aria-selected="true" data-toggle="tab" role="tab" class="nav-link active" href="#urlcode">URL</a>
                </li>
            </ul>
            <div id="navTabContent" class="tab-content">
                <div id="urlcode" class="tab-pane active show">
                    <div class="card card-default">
                        <div class="card-body Hidove-imageucode">
                            <table class="table table-bordered">
                                <tbody id="urlcodes">

                                <tr>
                                    <td>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> 文件直链：</span>
                                            </div>
                                            <input id="file" type="text" name="file"
                                                   class="form-control free-pic-url-file"
                                                   value="" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text free-pic-copy"
                                                      data-clipboard-target="#file">copy</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> HTML代码：</span>
                                            </div>
                                            <input id="html" type="text" name="html"
                                                   class="form-control free-pic-url-html"
                                                   value="" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text free-pic-copy"
                                                      data-clipboard-target="#html">copy</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> Markdown：</span>
                                            </div>
                                            <input id="markdown" type="text" name="markdown"
                                                   class="form-control free-pic-url-markdown"
                                                   value="" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text free-pic-copy"
                                                      data-clipboard-target="#markdown">copy</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 text-center">
                <small class="d-block mb-3 text-muted">
                    &copy; 2020-<?php echo date("Y") ?>
                    Power By <a href="https://hzz.cool" target="_blank">hzz.cool</a>

                </small>
                <small class="d-block mb-3 text-muted">
                    Support <a href="https://github.com/hezhizheng/free-pic" target="_blank">free-pic</a>
                    源码 <a href="https://github.com/hezhizheng/free-image-hosting" target="_blank"><i class="fa fa-github" style="font-size:16px;"></i></a>
                </small>
            </div>

        </div>
    </footer>
</div>

<script src="//lib.baomitu.com/jquery/3.5.1/jquery.min.js"></script>
<script src="//lib.baomitu.com/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
<script src="//lib.baomitu.com/bootstrap-fileinput/4.5.3/js/fileinput.min.js"></script>
<script src="//lib.baomitu.com/clipboard.js/2.0.6/clipboard.min.js"></script>


<script>
    new ClipboardJS('.free-pic-copy');
</script>

<script>

    $("#input-21").fileinput({
        uploadUrl: "/upload.php",
        uploadAsync: true,
        minFileCount: 1,
        maxFileCount: 1,

        //initialPreviewAsData: true, // 确定你是否仅发送预览数据，而不是原始标记
        initialPreviewFileType: 'image', // `image`是默认值，可以在下面的配置中覆盖

        //purifyHtml: true, // 这是默认情况下为预览净化HTML数据
        //showZoom:false,
        showCaption: false,                                  // 显示文件文本框
        dropZoneEnabled: false,                          // 是否可拖拽
        uploadExtraData: function () {
            return {
                img_type: $("#publicStorage input[name='img_type']:checked").val(),
            }
        },
        fileActionSettings: {                               // 在预览窗口中为新选择的文件缩略图设置文件操作的对象配置
            //showRemove: false,                                   // 显示删除按钮
            //showUpload: false,                                   // 显示上传按钮
            showDownload: false,                            // 显示下载按钮
            showZoom: false,                                    // 显示预览按钮
            showDrag: false,                                        // 显示拖拽
            removeIcon: '<i class="fa fa-trash"></i>',   // 删除图标
            uploadIcon: '<i class="fa fa-cloud-upload"></i>',     // 上传图标
            uploadRetryIcon: '<i class="fa fa-repeat"></i>'  // 重试图标
        },
        browseLabel: "请选择上传的图片..."
    }).on('filesorted', function (e, params) {
        console.log('File sorted params', params);
    }).on('fileuploaded', function (e, params) {

        let res = params.response
        if (res.code != 200) {
            $(e.target)
                .fileinput('clear')
                .fileinput('unlock')
            $(e.target)
                .parent()
                .siblings('.fileinput-remove')
                .hide()
            $("#showurl").hide()
            alert(res.msg);
            return false;
        }


        $("#showurl").show()
        $(".free-pic-url-file").val(res.data.url);
        $(".free-pic-url-html").val("<img src=" + res.data.url + ">");
        $(".free-pic-url-markdown").val("![free-pic](" + res.data.url + ")");

    });
</script>
</body>
</html>