****介绍****

ZongAdmin是一款基于ThinkPHP5.1+FastAdmin的极速后台开发框架。

**数据库规范**

- 明确字段是否是NOT NULL的，如果是NOT NULL，就不用设置默认值了，除非真的需要，如果是可以为NULL，请设置成NOT NULL并添加默认值。

- 表、字段的字符集Charset统一utf8mb4，Collation统一utf8mb4_general_ci，存储引擎统一InnoDB。

- 除非特殊情况，严禁使用TEXT/LONGTEXT/BLOB/LONGBLOB等类型。

- 每张表必须加入gmt_create(创建时间)/gmt_modified(更新时间)，gmt_destroy(软删除时间)字段可以按需添加。字段类型统一为timestamp，is_del(是否删除，TINYINT(1)类型)。

- 类似is_del，store_id等常用查询的字段，且必须建Index索引。

- 对于存储URL的字段，必须采用VARCHAR类型，建议长度：2048——8192。

