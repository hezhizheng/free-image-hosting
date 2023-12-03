## free-pic 免费图床 

> [体验demo](http://117.50.186.143:5000/)

> [github 地址](https://github.com/hezhizheng/free-image-hosting)


## feature
- 三无图床（无存储限制 | 无需上传凭证 | 无同源跨域检测）
- 支持 "gif", "jpeg", "jpg", "png" 图片格式

## 支持图床
- [sm.ms](https://sm.ms/)
- [imgKr](https://imgkr.com/)
- [imgBB](https://imgbb.com/upload)
- [FreeImageHost](https://freeimage.host/)
- ...找到其他三无图床就再扩展

## 界面
![free-pic](https://static01.imgkr.com/temp/89ec3bdf56d44ff9a377ef600fbb29f7.png)

## 使用部署
下载安装

为方便部署(考虑到虚拟主机)，没有使用composer管理，实际依赖于 [free-pic](https://github.com/hezhizheng/free-pic) (PS:会及时同步更新)
```
git clone https://github.com/hezhizheng/free-image-hosting
cd free-image-hosting
php -S 127.0.0.1:1234 // 直接游览器访问 http://127.0.0.1:1234 即可体验
```

## License
[MIT](./LICENSE.txt)
