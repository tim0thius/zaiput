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
		<img class="card-distributor__flag" src="<?= $flag ?>"  />
	</div>
	<div class="card-distributor__body">
		<span class="card-distributor__company"><?= $company ?></span>
		<span class="card-distributor__contact-name"><?= $contact ?></span>
		<span class="card-distributor__email"><?= $email ?></span>
		<span class="card-distributor__phone">Tel: <?= $phone ?></span>
		<span class="card-distributor__mobile">Mobile: <?= $mobile ?></span>
		<span class="card-distributor__fax">Fax: <?= $fax ?></span>
	</div>
</div>