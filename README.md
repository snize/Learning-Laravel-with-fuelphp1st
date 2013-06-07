# 電子書籍"はじめてのフレームワークとしてのFuelPHP"で学ぶLaravel4

[はじめてのフレームワークとしてのFuelPHP - 達人出版会](http://tatsu-zine.com/books/fuelphp1st "はじめてのフレームワークとしてのFuelPHP - 達人出版会")を参考にサンプルと同じものをLaravelで実装してその違いを記録していく。

※書籍内のコードをそのまま公開することはないので気になる方は購入をおすすめします。

## リンク

* FuelPHP
	* [はじめてのフレームワークとしてのFuelPHP - 達人出版会](http://tatsu-zine.com/books/fuelphp1st "はじめてのフレームワークとしてのFuelPHP - 達人出版会")
	* [kenjis/fuelphp1st · GitHub](https://github.com/kenjis/fuelphp1st "kenjis/fuelphp1st · GitHub")
* Laravel公式
	* [Laravel](http://laravel.com/ "Laravel")
	* [Documentation - Laravel PHP Framework](http://laravel.com/docs "Documentation - Laravel PHP Framework")
* Github
	* [jijoel/make-it-snappy-laravel4 · GitHub](https://github.com/jijoel/make-it-snappy-laravel4 "jijoel/make-it-snappy-laravel4 · GitHub")
	* [JeffreyWay/Laravel-4-Generators · GitHub](https://github.com/JeffreyWay/Laravel-4-Generators "JeffreyWay/Laravel-4-Generators · GitHub")
* [http://laravel.localhost/form](http://laravel.localhost/form "コンタクトフォーム")

## 進行状況

* 8.2.6 確認ページのビューの作成 <- 今ここ

### 進行状況メモ

* Routerの設定
	* だいたい書いた
* Controllerを書く
	* サンプル同様だんだん太ってきた
* Viewの修正
	* FuelPHPから写しただけ
	* 確認画面を作る <- 今ここ
	
## メモ
* Bladeテンプレートを積極的使う
	* 公式ドキュメントはBlade使う場合と使わないサンプルが混ざってるので注意
* `Views/form/index.php`などは`'form.index'`みたいに`.`で表現
* お試しならPHPのビルトインサーバも有り
* 言語ファイルのFallback機能は無いので、言語設定を変えたらすぐにデフォルトファイルをコピーする
* FuelPHPみたいなバリテーション時に"trim"がない
