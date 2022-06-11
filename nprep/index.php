<?php
	require_once('../nutils.php');
	
	printHeader('Коллектив кафедры');
?>

    <div class="container-md">
		<div class="container-md mt-5 mb-5">
			<div class="row row-cols-2 px-lg-5 mx-lg-5 element-animation">
			   <div class="col-xl-4 col-md-6 col-lg-6">
				   <img src="../images/vega1.png" class="d-block w-100">
			   </div>
				
			   <div class="col-xl-8 col-md-6">
					<h2>Коллектив кафедры</h2>
					<p>Наши студенты проходят практику и пишут дипломные проекты под руководством опытных преподавателей, участвуют в&nbsp;разработках совместно с&nbsp;квалифицированными специалистами Концерна &laquo;Вега&raquo;. </p>
					<p>На&nbsp;кафедре работает 26&nbsp;преподавателей: 2&nbsp;профессора, 7&nbsp;доцентов, 5&nbsp;старших преподавателей и&nbsp;12&nbsp;ассистентов. Направления научной деятельности преподавателей можно посмотреть на&nbsp;их личных страницах.</p>
					<p>Заведующий кафедрой&nbsp;— Вячеслав&nbsp;Алексеевич Михеев, кандидат технических наук, первый заместитель генерального директора АО &laquo;Концерн &laquo;ВЕГА&raquo;.</p>
				</div>
			</div>
		</div>
		
<?php
	$db = pg_pconnect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password);
	$preps = pg_query($db,  "SELECT * FROM sc_prep ORDER BY CASE ".
							" WHEN fio LIKE '%Михеев%' THEN '1' ".
							" WHEN fio LIKE '%Крыжановский%' THEN '2' ".
							" ELSE fio ".
							"END");
	$preps = pg_fetch_all($preps);
?>
		<div class="row row-cols-auto">		
<?php
	foreach($preps as $n=>$p)
	{
		if($n > 0 && $n%30 == 0)
		{
?>
		</div>	
		<div class="row row-cols-auto">		
<?php
		}
		$img = file_exists('../images/preps/'.$p['photo']) ? $p['photo'] : 'profile.png';
		$img_parts = pathinfo($img);
		$name = explode(' ', $p['fio']);
?>
					
			<div class="col-md-6 col-lg-3 mb-4 element-animation">
				<div class="flex-fill text-center mb-2">
				<?= '<a href="../my_prep/index.php'.'?id='.$p['id'].'">' ?><img class="prepImg" src="../images/preps/<?=$img?>" style="width : 80%"></a>
					
				</div>
				

				<div class="d-flex align-items-start">
					<div class="prep-sign">{</div>
					<div class="d-flex flex-column">
						<h5><?='<strong>'.$name[0].'</strong>'.'<br>'.$name[1].'&nbsp;'.$name[2]?></h5>
						<p class="prep-title"><?=$p['chair'].($p['degree'] == '-' ? '' : '<br>'.$p['degree'])?></p>
					</div>
					
				</div>
				
			</div>
					
<?php
	}
?>

		</div>
	</div>
	
<?php
	printFooter();
?>