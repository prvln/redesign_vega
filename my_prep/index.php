<?php
	require_once('../nutils.php');
	
	printHeader('Личная страница преподавателя');
	checkDatabase();
?>

<div class="container-md">
<?php
          $id = "не определено";

		  if(isset($_GET["id"])){
		  
			  $id = $_GET["id"];
		  }

		  $db = pg_pconnect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password);
          $preps = pg_query($db, "SELECT id, fio, chair, degree, photo FROM sc_prep WHERE id=$id");
		  $disc = pg_query($db, "SELECT id, sc_prep_id, disc_name, disc_page FROM sc_prep_disc WHERE sc_prep_id=$id");
		  $science = pg_query($db, "SELECT id, sc_prep_id, direction FROM sc_prep_science WHERE sc_prep_id=$id");
          $public = pg_query($db, "SELECT id, sc_prep_id, pub_header, pub_body FROM sc_prep_publications WHERE sc_prep_id=$id ORDER BY tech_id LIMIT 20");

          $preps = pg_fetch_all($preps);
		  $disc = pg_fetch_all($disc);
		  $science = pg_fetch_all($science);
		  $public = pg_fetch_all($public);      
        ?>
        <div class="row mt-5">
            <?php
            foreach($preps as $n=>$p)
            {
              $img = file_exists('../images/preps/'.$p['photo']) ? $p['photo'] : 'profile.png';
              $img_parts = pathinfo($img);
              $name = explode(' ', $p['fio']);
          ?>
                    
                  <div class="col-md-6 col-lg-3">
                    <img src="../images/preps/<?=$img?>" class="w-100 element-animation">
                  </div>
                    <div class="col-md-6 element-animation">
                      <h2><?='<strong>'.$name[0].'</strong>'.'<br>'.$name[1].'&nbsp;'.$name[2]?></h2>
                      <h5 class="lead"><?=$p['chair'].($p['degree'] == '-' ? '' : '<br>'.$p['degree'])?></h5>
                    </div>
                </div>  
          <?php
            }
          ?>
          
        
	
	<div class="row mt-3">	
		<div class="col-md-6 mb-4 element-animation">
			<h5><strong>Дисциплины:</strong></h5>
			<?php
			if(empty($disc)){
			?>
			<p>Дисциплины не найдены</p>
			<?php
			} else

            foreach($disc as $d)
            {
				?>
				<?= '<a href="'.$d['disc_page'].'">' ?><p class="mb-0">- <?= $d['disc_name']?></p></a>
			
			<?php
            }
          ?>
		</div>
		<div class="col-md-6 mb-4 element-animation">
		<?php
		
		if($preps[0]['chair'] != 'Ассистент')
		{
			?>
		<h5><strong>Направления научной деятельности:</strong></h5>
		<?php
		if(empty($science)){
			?>
			<p>Направления научной деятельности отсутсвуют</p>
			<?php
			} else{
			foreach($science as $s)
            {
				?>
				
				<p class="mb-0">- <?= $s['direction']?></p>
			
			<?php
            }
          ?>

		<?php
            }}
          ?>
		 </div> 
	</div>
	<h5 class="element-animation"><strong>Публикации:</strong></h5>
	<div class="row">
	<?php
	if(empty($science)){
		?>
		<p class="element-animation">Публикации отсутсвуют</p>
		<?php
		} else{
	foreach($public as $p)
            {
				?>
		<div class="col-md-6 mb-4 element-animation">
			<div class="card h-100">
				<div class="card-body">
					<h5 class="card-title"><strong><?=$p['pub_header']?></strong></h5>
					<p class="card-text"> <?=$p['pub_body']?></p>

				</div>
			</div>
		</div>
				<?php
				}}
				?>
		
		
	
	</div>
</div>
	
<?php
	printFooter();
?>