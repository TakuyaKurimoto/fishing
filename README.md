釣り人向けの掲示板です（サイトhttp://takuya004869.sakura.ne.jp/）（https通信ではないですごめんなさい。）
メールアドレス:b@b.com パスワード:testtest　でログインできます。
制作期間は1ヶ月。laravelがどうやって動いているのか知りたかったのでまずチュートリアルをまずやって、そこから色々な機能を付けたしていった感じです。
サイトイメージ
<img width="1181" alt="スクリーンショット 2021-01-17 23 46 22" src="https://user-images.githubusercontent.com/75765648/109241419-b5d53b80-781c-11eb-980c-29d075a1ffde.png">
<img width="713" alt="スクリーンショット 2021-01-17 23 38 22" src="https://user-images.githubusercontent.com/75765648/109241455-c4bbee00-781c-11eb-9f55-4b38c600b8cc.png">
<img width="632" alt="スクリーンショット 2021-01-17 23 39 45" src="https://user-images.githubusercontent.com/75765648/109241470-c8e80b80-781c-11eb-8262-a6bd8f669600.png">
<img width="799" alt="スクリーンショット 2021-01-04 17 51 48" src="https://user-images.githubusercontent.com/75765648/109241480-cd142900-781c-11eb-9e60-b087e0e42f39.png">
<img width="640" alt="スクリーンショット 2021-01-04 18 29 42" src="https://user-images.githubusercontent.com/75765648/109241493-cf768300-781c-11eb-9f3a-a5af9c8fd9c5.png">
<img width="1181" alt="スクリーンショット 2021-01-17 23 46 22" src="https://user-images.githubusercontent.com/75765648/109241503-d2717380-781c-11eb-82ee-88b8127e3eae.png">
使用技術
vue.js
jquery（あまり理解してない）
laravel
circleCi（自動デプロイと簡単なテストは実行できる程度）
docker（自分でdocker-compose.ymlはまだ書けない）
mysql
サクラレンタルサーバー
今後のサイトや技術的な改善点としては
①メールアドレスを正規の物でないと登録できないようにする代わりに、簡単ログイン機能も実装する。
②ModelがModelsディレクトリにまとまっていないので纏める
③さくらのレンタルサーバを使っているが、これだとnpmが使えない？みたいで、localの環境では実装できていたvue.jsを用いた「いいね」機能が使えない。なのでnpmが使えるawsとかにも手を出してみたい。
④サイトをclosedなものにしたい（釣り人のグループがいくつか存在し、自分のグループ以外の投稿は見れないようにしたい）。なのでまずグループごとにログインして、さらにそこから個人ごとにログインするというプロセスを踏めるようにしたい。
