# portfolio_php_membersite
お初にお目にかかります。樋口です。

今まで一切PHPを触ったことがなかったので
一週間ほど前に今回のお話をいただいてから、
PHPによる会員制ブログサイトを作成しようと考えました。

お恥ずかしながらまだ未完成で、
今、正常な動作の確認が完了している機能は以下になります。

* 管理者登録機能（manager_add.php 他
* 管理者編集機能（manager_edit.php 他
* 管理者削除機能（manager_delete.php　他
* 管理者一覧ページ（manager_list.php
* 一覧から各機能への分岐（manager_branch.php
* （注）全て./managerディレクトリ下のファイルです


今後、追加予定の機能は、
* 管理者ログイン機能
* 管理者によるブログの投稿、編集、削除機能
* 管理者による会員の登録、編集、削除機能
* 会員のログイン機能
* 会員のブログ閲覧機能

ポートフォリオとして、不十分かつ
拙いコードで申し訳ありませんが
何卒、ご一読よろしくお願いします。

# 2020.3.11編集記録　　
* manager_list.ｐｈｐの編集  
  1.　管理者一覧を表として表示　　
  2.　ヘッダー部分をページ上部固定化　　
  　　
* footer.php,footer.cssの追加　　
  1. 黒いデザインのフッターを追加　　
  2. リンクを追加（リンク先は未設定　　



# Dependency
開発環境（MAMP ver6.6)
* PHP 7.4.21
* MySQL 5.7.34
