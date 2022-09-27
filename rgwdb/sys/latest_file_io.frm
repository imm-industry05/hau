TYPE=VIEW
query=select if(`information_schema`.`processlist`.`ID` is null,concat(substring_index(`performance_schema`.`threads`.`NAME`,\'/\',-1),\':\',`performance_schema`.`events_waits_history_long`.`THREAD_ID`),concat(`information_schema`.`processlist`.`USER`,\'@\',`information_schema`.`processlist`.`HOST`,\':\',`information_schema`.`processlist`.`ID`)) AS `thread`,`sys`.`format_path`(`performance_schema`.`events_waits_history_long`.`OBJECT_NAME`) AS `file`,`sys`.`format_time`(`performance_schema`.`events_waits_history_long`.`TIMER_WAIT`) AS `latency`,`performance_schema`.`events_waits_history_long`.`OPERATION` AS `operation`,`sys`.`format_bytes`(`performance_schema`.`events_waits_history_long`.`NUMBER_OF_BYTES`) AS `requested` from ((`performance_schema`.`events_waits_history_long` join `performance_schema`.`threads` on(`performance_schema`.`events_waits_history_long`.`THREAD_ID` = `performance_schema`.`threads`.`THREAD_ID`)) left join `information_schema`.`processlist` on(`performance_schema`.`threads`.`PROCESSLIST_ID` = `information_schema`.`processlist`.`ID`)) where `performance_schema`.`events_waits_history_long`.`OBJECT_NAME` is not null and `performance_schema`.`events_waits_history_long`.`EVENT_NAME` like \'wait/io/file/%\' order by `performance_schema`.`events_waits_history_long`.`TIMER_START`
md5=366a303f3a9228de9e50ba7914ec9ccb
updatable=0
algorithm=1
definer_user=mariadb.sys
definer_host=localhost
suid=0
with_check_option=0
timestamp=2022-09-27 07:52:40
create-version=2
source=SELECT IF(id IS NULL,\n             CONCAT(SUBSTRING_INDEX(name, \'/\', -1), \':\', thread_id),\n             CONCAT(user, \'@\', host, \':\', id)\n          ) thread,\n       sys.format_path(object_name) file,\n       sys.format_time(timer_wait) AS latency,\n       operation,\n       sys.format_bytes(number_of_bytes) AS requested\n  FROM performance_schema.events_waits_history_long\n  JOIN performance_schema.threads USING (thread_id)\n  LEFT JOIN information_schema.processlist ON processlist_id = id\n WHERE object_name IS NOT NULL\n   AND event_name LIKE \'wait/io/file/%\'\n ORDER BY timer_start;
client_cs_name=utf8mb3
connection_cl_name=utf8mb3_general_ci
view_body_utf8=select if(`information_schema`.`processlist`.`ID` is null,concat(substring_index(`performance_schema`.`threads`.`NAME`,\'/\',-1),\':\',`performance_schema`.`events_waits_history_long`.`THREAD_ID`),concat(`information_schema`.`processlist`.`USER`,\'@\',`information_schema`.`processlist`.`HOST`,\':\',`information_schema`.`processlist`.`ID`)) AS `thread`,`sys`.`format_path`(`performance_schema`.`events_waits_history_long`.`OBJECT_NAME`) AS `file`,`sys`.`format_time`(`performance_schema`.`events_waits_history_long`.`TIMER_WAIT`) AS `latency`,`performance_schema`.`events_waits_history_long`.`OPERATION` AS `operation`,`sys`.`format_bytes`(`performance_schema`.`events_waits_history_long`.`NUMBER_OF_BYTES`) AS `requested` from ((`performance_schema`.`events_waits_history_long` join `performance_schema`.`threads` on(`performance_schema`.`events_waits_history_long`.`THREAD_ID` = `performance_schema`.`threads`.`THREAD_ID`)) left join `information_schema`.`processlist` on(`performance_schema`.`threads`.`PROCESSLIST_ID` = `information_schema`.`processlist`.`ID`)) where `performance_schema`.`events_waits_history_long`.`OBJECT_NAME` is not null and `performance_schema`.`events_waits_history_long`.`EVENT_NAME` like \'wait/io/file/%\' order by `performance_schema`.`events_waits_history_long`.`TIMER_START`
mariadb-version=100903
