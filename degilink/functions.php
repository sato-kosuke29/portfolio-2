<?php 
//ナビゲーションメニュー
register_nav_menus( array(
  'gnav_menu' => 'ヘッダー用のメニューエリア',
) );

//管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


