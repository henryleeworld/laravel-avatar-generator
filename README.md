# Laravel 11 大頭貼產生器

引入 laravolt 的 avatar 套件來擴增製作的頭像個性化，也比較沒有使用上的問題，能夠快速製作出文字頭像圖片。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 gd，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/avatar/output/` 來進行文字頭像圖片產生。

----
## 畫面截圖
![](https://i.imgur.com/9Tf5FVb.png)
> 可以方便其他人辨識，不管是上傳臉書或拿去做其他影像編輯都很實用
