<?php
// $Id: page.tpl.php,v 1.28 2008/01/24 09:42:52 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  <?php
  // Table columns with for row one
  if($row1col1 || $row1col2 || $row1col3 || $row1col4){
	$num_col_row1=0;
	if($row1col1) {
		$num_col_row1++;
	}
	if($row1col2) {
		$num_col_row1++;
	}
	if($row1col3) {
		$num_col_row1++;
	}
	if($row1col4) {
		$num_col_row1++;
	}
	if($num_col_row1==1) {
		$row1="row-cols1";
	}else if($num_col_row1==2) {
		$row1="row-cols2";
	}else if($num_col_row1==3) {
		$row1="row-cols3";
	}else if($num_col_row1==4) {
		$row1="row-cols4";
	}
  }

   // Table columns with for row two
  if($row2col1 || $row2col2 || $row2col3 ){
	$num_col_row2=0;
	if($row2col1) {
		$num_col_row2++;
	}
	if($row2col2) {
		$num_col_row2++;
	}
	if($row2col3) {
		$num_col_row2++;
	}
	if($num_col_row2==1) {
		$row2="content-row-cols1";
	}else if($num_col_row2==2) {
		$row2="content-row-cols2";
	}else if($num_col_row2==3) {
		$row2="content-row-cols3";
	}
  }


  // Table columns with for row three
  if($row3col1 || $row3col2 || $row3col3 ){
	$num_col_row3=0;
	if($row3col1) {
		$num_col_row3++;
	}
	if($row3col2) {
		$num_col_row3++;
	}
	if($row3col3) {
		$num_col_row3++;
	}
	if($row3col4) {
		$num_col_row3++;
	}
	if($num_col_row3==1) {
		$row3="content-row-cols1";
	}else if($num_col_row3==2) {
		$row3="content-row-cols2";
	}else if($num_col_row3==3) {
		$row3="content-row-cols3";
	}
  }

   // Table columns with for row four
  if($row4col1 || $row4col2 || $row4col3){
	$num_col_row4=0;
	if($row4col1) {
		$num_col_row4++;
	}
	if($row4col2) {
		$num_col_row4++;
	}
	if($row4col3) {
		$num_col_row4++;
	}
	if($num_col_row4==1) {
		$row4="content-row-cols1";
	}else if($num_col_row4==2) {
		$row4="content-row-cols2";
	}else if($num_col_row4==3) {
		$row4="content-row-cols3";
	}
  }

  ?>
</head>

<body>

	<div id="page-wrap">
	<div id="menu">
		<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'primary-links')) ?><?php } ?>
		<div id="search-bar">
			<?php print $search; ?>
			<?php print $loginbar; ?>
			<br clear="all" />
		</div>
	</div>
	<div id="header">
		<?php print $header ?>
	</div>
	<div id="sub-links">
			<div id="sub-links1"><?php print $sublinks1 ?></div>
			<div id="sub-links2"><?php print $sublinks2 ?></div>
			<div id="sub-links3"><?php print $sublinks3 ?></div>
			<div id="sub-links4"><?php print $sublinks4 ?></div>
			<div id="sub-links5"><?php print $sublinks5 ?></div>
			<div id="sub-links6"><?php print $sublinks6 ?></div>
	</div>
	<?php if($row1col1 || $row1col2 || $row1col3 || $row1col4){?>
	<div id="row1">
			<?php if($row1col1){?><div id="col" class="<?php print $row1; ?> <?php if($num_col_row1>1) { print 'col-first'; } ?> "><?php print $row1col1 ?></div><?php }?>
			<?php if($row1col2){?><div id="col" class="<?php print $row1; ?> <?php if($num_col_row1>1 && $row1col1=='') { print 'col-first'; } ?> "><?php print $row1col2 ?></div><?php }?>
			<?php if($row1col3){?><div id="col" class="<?php print $row1; ?> <?php if($num_col_row1>1 && $row1col1=='' && $row1col2=='') { print 'col-first'; } ?> "><?php print $row1col3 ?></div><?php }?>
			<?php if($row1col4){?><div id="col" class="<?php print $row1; ?>"><?php print $row1col4 ?></div><?php }?>
    </div>
	<br clear="all" />
	<?php } ?>



	<div id="content-main">
		<table border="0" cellpadding="0" cellspacing="0" id="content">
		  <tr>
			<?php if ($left) { ?><td id="sidebar-left" class="sidebar">
			  <?php print $left ?>
			</td><?php } ?>
			<td valign="top">
			<?php if($row2col1 || $row2col2 || $row2col3 ){?>
			<div id="row2">
				<?php if($row2col1){?><div id="col" class="<?php print $row2; ?> "><?php print $row2col1 ?></div><?php }?>
				<?php if($row2col2){?><div id="col" class="<?php print $row2; ?> "><?php print $row2col2 ?></div><?php }?>
				<?php if($row2col3){?><div id="col" class="<?php print $row2; ?> "><?php print $row2col3 ?></div><?php }?>
			</div>
			<br clear="all" />
			<?php } ?>
			<?php if($row3col1 || $row3col2 || $row3col3 ){?>
			<div id="row3">
				<?php if($row3col1){?><div id="col" class="<?php print $row3; ?> "><?php print $row3col1 ?></div><?php }?>
				<?php if($row3col2){?><div id="col" class="<?php print $row3; ?> "><?php print $row3col2 ?></div><?php }?>
				<?php if($row3col3){?><div id="col" class="<?php print $row3; ?> "><?php print $row3col3 ?></div><?php }?>
			</div>
			<br clear="all" />
			<?php } ?>
			<?php if($row4col1 || $row4col2 || $row4col3 ){?>
			<div id="row3">
				<?php if($row4col1){?><div id="col" class="<?php print $row4; ?> "><?php print $row4col1 ?></div><?php }?>
				<?php if($row4col2){?><div id="col" class="<?php print $row4; ?> "><?php print $row4col2 ?></div><?php }?>
				<?php if($row4col3){?><div id="col" class="<?php print $row4; ?> "><?php print $row4col3 ?></div><?php }?>
			</div>
			<br clear="all" />
			<?php } ?>
			  <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
			  <div id="main">
				<?php //print $breadcrumb ?>
				<h1 class="title"><?php print $title ?></h1>
				<div class="tabs"><?php print $tabs ?></div>
				<?php if ($show_messages) { print $messages; } ?>
				<?php print $help ?>
				<?php print $content; ?>
			  </div>
			  <div id="top-student"><?print $topstudent ?></div>
			</td>
			<?php if ($right) { ?><td id="sidebar-right" class="sidebar">
			  <?php print $right ?>
			</td><?php } ?>
		  </tr>
		</table>
	</div>
	<div id="footer">

	  <?php print $footer_message ?>
	  <?php print $footer ?>

	</div>

	<?php print $closure ?>

</div>
</body>

</html>
