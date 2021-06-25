<?php
/**
 * 模板函数
 * @author Seaton Jiang <seatonjiang@vtrois.com>
 * @license MIT License
 * @version 2021.06.25
 */

define('THEME_VERSION', '3.3.2');

// 主题配置
require get_template_directory() . '/inc/options-framework/autoload.php';

// 更新配置
require get_template_directory() . '/inc/update-checker/autoload.php';

// 核心配置
require get_template_directory() . '/inc/theme-core.php';

// 站点配置
require get_template_directory() . '/inc/theme-setting.php';

// 文章配置
require get_template_directory() . '/inc/theme-article.php';

// 小工具配置
require get_template_directory() . '/inc/theme-widgets.php';

// 文章增强
require get_template_directory() . '/inc/theme-shortcode.php';

// 添加导航目录
require get_template_directory() . '/inc/theme-navwalker.php';

// 对象存储配置
require get_template_directory() . '/inc/theme-dogecloud.php';

// ImageX 图片服务
require get_template_directory() . '/inc/theme-volcengine.php';

// SMTP 配置
require get_template_directory() . '/inc/theme-smtp.php';