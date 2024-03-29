<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'wordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'admin' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ro`&xy&YqFFJdXdB)&fPa<2}eBK..<xi>L@[^;-NN$Dq/$wbGoE`3Xq->B<u)]=X' );
define( 'SECURE_AUTH_KEY',  '7Qb.,ceY})GYI&zL@5+4U$ai_ZKjY+nK>x?ty$%fJ:rBDnNm/S_?$:#e5mM57V*J' );
define( 'LOGGED_IN_KEY',    'ExTjbK]G>fDiAyQZ~AfAPXeB%mP<eG: U2|xv:mTaHlI5wS,zhQ/@[ qF3GKSl~Q' );
define( 'NONCE_KEY',        't?yT)aHOW0I,ADArB[h7Bo[CInwRPZ$b9^oQ?w2)hACKS`*6o_KC#|srRg$6Y.?)' );
define( 'AUTH_SALT',        'c{=#CqM]B=QXV_@6=1UO<-OQVeWZOYNXs6`hE_[=+t5~^;=REgGzZJm>WEeiXE6`' );
define( 'SECURE_AUTH_SALT', 'nqfF*#I/CyF%| J8F45CO[YnwTrjV#(#<qEmxB2WO7@J!?B7UP&fTD)CZ{`}~ELz' );
define( 'LOGGED_IN_SALT',   '{^Wi5f:8hPk-EIT0tx]PkPez>>|%(blb6B%)DEWE#N9ivy8JKQZJwOV_jMaG6C|,' );
define( 'NONCE_SALT',       ';lg;^kUP8vI3u3ntRdVi_4s;<~E<yu_hCn8`)qD^7uXrM7mmZy&O8B4cc]!hDhs-' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_admin';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
