TYPE=VIEW
query=select `pst`.`OBJECT_SCHEMA` AS `table_schema`,`pst`.`OBJECT_NAME` AS `table_name`,`pst`.`SUM_TIMER_WAIT` AS `total_latency`,`pst`.`COUNT_FETCH` AS `rows_fetched`,`pst`.`SUM_TIMER_FETCH` AS `fetch_latency`,`pst`.`COUNT_INSERT` AS `rows_inserted`,`pst`.`SUM_TIMER_INSERT` AS `insert_latency`,`pst`.`COUNT_UPDATE` AS `rows_updated`,`pst`.`SUM_TIMER_UPDATE` AS `update_latency`,`pst`.`COUNT_DELETE` AS `rows_deleted`,`pst`.`SUM_TIMER_DELETE` AS `delete_latency`,`fsbi`.`count_read` AS `io_read_requests`,`fsbi`.`sum_number_of_bytes_read` AS `io_read`,`fsbi`.`sum_timer_read` AS `io_read_latency`,`fsbi`.`count_write` AS `io_write_requests`,`fsbi`.`sum_number_of_bytes_write` AS `io_write`,`fsbi`.`sum_timer_write` AS `io_write_latency`,`fsbi`.`count_misc` AS `io_misc_requests`,`fsbi`.`sum_timer_misc` AS `io_misc_latency` from (`performance_schema`.`table_io_waits_summary_by_table` `pst` left join `sys`.`x$ps_schema_table_statistics_io` `fsbi` on(`pst`.`OBJECT_SCHEMA` = `fsbi`.`table_schema` and `pst`.`OBJECT_NAME` = `fsbi`.`table_name`)) order by `pst`.`SUM_TIMER_WAIT` desc
md5=bc53e98a227086ffb2e6185030b7fc95
updatable=0
algorithm=2
definer_user=mariadb.sys
definer_host=localhost
suid=0
with_check_option=0
timestamp=2022-09-27 07:52:40
create-version=2
source=SELECT pst.object_schema AS table_schema,\n       pst.object_name AS table_name,\n       pst.sum_timer_wait AS total_latency,\n       pst.count_fetch AS rows_fetched,\n       pst.sum_timer_fetch AS fetch_latency,\n       pst.count_insert AS rows_inserted,\n       pst.sum_timer_insert AS insert_latency,\n       pst.count_update AS rows_updated,\n       pst.sum_timer_update AS update_latency,\n       pst.count_delete AS rows_deleted,\n       pst.sum_timer_delete AS delete_latency,\n       fsbi.count_read AS io_read_requests,\n       fsbi.sum_number_of_bytes_read AS io_read,\n       fsbi.sum_timer_read AS io_read_latency,\n       fsbi.count_write AS io_write_requests,\n       fsbi.sum_number_of_bytes_write AS io_write,\n       fsbi.sum_timer_write AS io_write_latency,\n       fsbi.count_misc AS io_misc_requests,\n       fsbi.sum_timer_misc AS io_misc_latency\n  FROM performance_schema.table_io_waits_summary_by_table AS pst\n  LEFT JOIN x$ps_schema_table_statistics_io AS fsbi\n    ON pst.object_schema = fsbi.table_schema\n   AND pst.object_name = fsbi.table_name\n ORDER BY pst.sum_timer_wait DESC;
client_cs_name=utf8mb3
connection_cl_name=utf8mb3_general_ci
view_body_utf8=select `pst`.`OBJECT_SCHEMA` AS `table_schema`,`pst`.`OBJECT_NAME` AS `table_name`,`pst`.`SUM_TIMER_WAIT` AS `total_latency`,`pst`.`COUNT_FETCH` AS `rows_fetched`,`pst`.`SUM_TIMER_FETCH` AS `fetch_latency`,`pst`.`COUNT_INSERT` AS `rows_inserted`,`pst`.`SUM_TIMER_INSERT` AS `insert_latency`,`pst`.`COUNT_UPDATE` AS `rows_updated`,`pst`.`SUM_TIMER_UPDATE` AS `update_latency`,`pst`.`COUNT_DELETE` AS `rows_deleted`,`pst`.`SUM_TIMER_DELETE` AS `delete_latency`,`fsbi`.`count_read` AS `io_read_requests`,`fsbi`.`sum_number_of_bytes_read` AS `io_read`,`fsbi`.`sum_timer_read` AS `io_read_latency`,`fsbi`.`count_write` AS `io_write_requests`,`fsbi`.`sum_number_of_bytes_write` AS `io_write`,`fsbi`.`sum_timer_write` AS `io_write_latency`,`fsbi`.`count_misc` AS `io_misc_requests`,`fsbi`.`sum_timer_misc` AS `io_misc_latency` from (`performance_schema`.`table_io_waits_summary_by_table` `pst` left join `sys`.`x$ps_schema_table_statistics_io` `fsbi` on(`pst`.`OBJECT_SCHEMA` = `fsbi`.`table_schema` and `pst`.`OBJECT_NAME` = `fsbi`.`table_name`)) order by `pst`.`SUM_TIMER_WAIT` desc
mariadb-version=100903
