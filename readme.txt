Contributors: Player video youtube
Donate link: https://www.pabuzo.vn/
Tags: minhhieuvnbt, video, iframe video youtube, youtube, pabuzo_dmh
Requires at least: 5.0.2
Tested up to: 5.0.2
Stable tag: 4.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

player video bằng iframe is the easiest way to post source code on your blog posts.

== Description ==

Plugin player video bằng iframe pabuzo_dmh

= Usage =
Sau khi cài đặt plugin xong các bạn sử dụng shortcode sau.
[pabuzovn id="ID CỦA YOUTUBE"].
Lưu ý là chỉ lấy phần ID của youtube.
Youtube có dang như này [https://www.youtube.com/watch?v=Jr8lUcSUySQ] các bạn chỉ cần lấy cái này [Jr8lUcSUySQ]. và shortcode hoàn chỉnh như này [pabuzovn id="Jr8lUcSUySQ"].
* Thêm css này vào phần HEADED của themes bạn đang sử dụng.
.fullscreen-bg {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
 
.fullscreen-bg .embed-responsive-item,
.fullscreen-bg iframe,
.fullscreen-bg embed,
.fullscreen-bg object,
.fullscreen-bg video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
 
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
 
.embed-responsive-4by3 {
  padding-bottom: 75%;
}

= Need support =
If you want to get support, please visit [pabuzo](https://www.pabuzo.vn/lien-he/) blog for more detail.

== Installation ==

1. Upload plugin to the ‘/wp-content/plugins/’ directory
2. Activate the plugin through the ‘Plugins’ menu in WordPress
3. Place the shortcode [pabuzovn id="ID YouTUBE"] [pabuzovn id="Jr8lUcSUySQ"] in your contact page



== Screenshots ==

1. You can embed source code from GitHub Gist.
2. You can write source code on your own blog post.

== Changelog ==

=1.2.2 =
* Fixed play video amp

=1.2.1 =
* Fixed auto paragraph in css.

= 1.2 =
* Fixed auto paragraph in source code.

= 1.1 =
* Change something in CSS.
* Add default css class for HTML tag.

= 1.0 =
* This is a very first version of Sau Syntax plugin.

== Upgrade Notice ==

= 1.2.1 =
You can update to newest version from version 1.2 without warning.

= 1.2 =
You can update to newest version from version 1.1 without warning.

= 1.1 =
This version requires at least WordPress 4.9.4, please update your WordPress site to the latest version.

= 1.0 =
* This is a very first version of player video bằng iframe plugin.
