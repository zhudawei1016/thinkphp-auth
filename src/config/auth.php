<?php
/**

 */
return[
    // 权限设置
    'auth_config'            => [
        'auth_on'            => true,                      // 认证开关
        'auth_type'          => 1,                         // 认证方式，1为实时认证；2为登录认证。
        'auth_group'         => 'zr_auth_group',        // 用户组数据表名
        'auth_group_access'  => 'zr_auth_group_access', // 用户-用户组关系表
        'auth_rule'          => 'zr_auth_rule',         // 权限规则表
        'auth_user'          => 'zr_admin'             // 用户信息表
    ],
];
