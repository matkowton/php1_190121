<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";

$sql = "
create table feedbacks
(
	id int null,
	product_id int null,
	content varchar(255) null,
	constraint feedbacks_products_id_fk
		foreign key (product_id) references products (id)
			on update cascade on delete cascade
)";

execute($sql);