<?php
$country = get_sub_field('country');
$flag = get_sub_field('flag');
$company = get_sub_field('company');
$contact = get_sub_field('contact_name');
$email = get_sub_field('email');
$phone = get_sub_field('phone');
$mobile = get_sub_field('mobile');
$fax = get_sub_field('fax');
?>
<div class="card-distributor">
	<div class="card-distributor__header">
		<span class="card-distributor__country"><?= $country ?></span>
		<img class="card-distributor__flag" src="<?= $flag ?>" alt=""  />
	</div>
	<div class="card-distributor__body">
		<span class="card-distributor__company"><?= $company ?></span>
		<?php if( $contact): ?>
		<span class="card-distributor__contact-name"><?= $contact ?></span>
		<?php endif; ?>
			<?php if( $email): ?>
			<span class="card-distributor__email"><?= $email ?></span>
		<?php endif; ?>
			<?php if( $phone): ?>
			<span class="card-distributor__phone">Tel: <?= $phone ?></span>
		<?php endif; ?>
			<?php if( $mobile): ?>
			<span class="card-distributor__mobile">Mobile: <?= $mobile ?></span>
		<?php endif; ?>
			<?php if( $fax): ?>
			<span class="card-distributor__fax">Fax: <?= $fax ?></span>
		<?php endif; ?>
	</div>
</div>