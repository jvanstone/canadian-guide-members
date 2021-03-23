<?php
/**
 * This part is used show the confirmation of the subscriptions available.
 *
 * This is the template that displays all of the inside the <main> section.
 *
 * Added the custom box called .why-register to add reasons to get subscription.
 *
 * custom scss found in >> assets/sass/7-add-ons/pmrpo-adds.scss
 *
 * @package WordPress
 * @subpackage canada_info
 * @since Canada_Info 1.0
 */

?>

<div class="<?php echo pmpro_get_element_class( 'pmpro_confirmation_wrap' ); ?>">
<?php
	global $wpdb, $current_user, $pmpro_invoice, $pmpro_msg, $pmpro_msgt;

	if( $pmpro_msg )
	{
	?>
		<div class="<?php echo pmpro_get_element_class( 'pmpro_message ' . $pmpro_msgt, $pmpro_msgt ); ?>"><?php echo wp_kses_post( $pmpro_msg );?></div>
	<?php
	}
	function get_link_slug( $slug , $type ) {
		$post = get_page_by_path( $slug, OBJECT, $type );
		return get_permalink( $post->ID );
	}
	
    $getvalue = 'canada-info-issue-1';
	//$getvalue = esc_html( $current_user->membership_level->name);
	$link = get_link_slug( $getvalue , 'post' );

	if(empty($current_user->membership_level))
		$confirmation_message = "<h3>" . __('Your payment has been submitted. You will access to %s shortly.', 'paid-memberships-pro' ) . "</h3>";
	else
		$confirmation_message = '<h3>' . sprintf(__('Thank you for payment to %s.</h3><h3><a href="'.$link.'">You now have access to %s <i class="fas fa-arrow-circle-right"></i></a>', 'paid-memberships-pro' ), get_bloginfo("name"), $current_user->membership_level->name) . "</h3>";
		$confirmation_message2 = '<h3>' . sprintf(__('<a href="'.$link.'">You now have access to %s <i class="fas fa-arrow-circle-right"></i></a>', 'paid-memberships-pro' ), $current_user->membership_level->name) . "</h3>";

	//confirmation message for this level
	$level_message = $wpdb->get_var("SELECT l.confirmation FROM $wpdb->pmpro_membership_levels l LEFT JOIN $wpdb->pmpro_memberships_users mu ON l.id = mu.membership_id WHERE mu.status = 'active' AND mu.user_id = '" . $current_user->ID . "' LIMIT 1");
	if(!empty($level_message))
		$confirmation_message .= "\n" . stripslashes($level_message) . "\n";
		//$confirmation_message2 .= "\n" . stripslashes($level_message) . "\n";
?>

<?php if(!empty($pmpro_invoice) && !empty($pmpro_invoice->id)) { ?>

	<?php
		$pmpro_invoice->getUser();
		$pmpro_invoice->getMembershipLevel();

		$confirmation_message .= "<p>" . sprintf(__('Below are details about your subscription and a receipt for your invoice. A welcome email with a copy of your subscription invoice has been sent to %s.', 'paid-memberships-pro' ), $pmpro_invoice->user->user_email) . "</p><hr/>";

		// Check instructions
		if ( $pmpro_invoice->gateway == "check" && ! pmpro_isLevelFree( $pmpro_invoice->membership_level ) ) {
			$confirmation_message .= '<div class="' . pmpro_get_element_class( 'pmpro_payment_instructions' ) . '">' . wpautop( wp_unslash( pmpro_getOption("instructions") ) ) . '</div>';
		}

		/**
		 * All devs to filter the confirmation message.
		 * We also have a function in includes/filters.php that applies the the_content filters to this message.
		 * @param string $confirmation_message The confirmation message.
		 * @param object $pmpro_invoice The PMPro Invoice/Order object.
		 */
		$confirmation_message = apply_filters("pmpro_confirmation_message", $confirmation_message, $pmpro_invoice);

		echo wp_kses_post( $confirmation_message );
	?>
	<h3>
		<?php printf(__('Invoice #%s on %s', 'paid-memberships-pro' ), $pmpro_invoice->code, date_i18n(get_option('date_format'), $pmpro_invoice->getTimestamp()));?>
	</h3>
	<a class="<?php echo pmpro_get_element_class( 'pmpro_a-print' ); ?>" href="javascript:window.print()"><?php _e('Print', 'paid-memberships-pro' );?></a>
	<ul>
		<?php do_action("pmpro_invoice_bullets_top", $pmpro_invoice); ?>
		<li><strong><?php _e('Account', 'paid-memberships-pro' );?>:</strong> <?php echo esc_html( $current_user->display_name );?> (<?php echo esc_html( $current_user->user_email );?>)</li>
		<li><strong><?php _e('Issue Purchased', 'paid-memberships-pro' );?>:</strong> <?php echo esc_html( $current_user->membership_level->name);?></li>
		<?php if($current_user->membership_level->enddate) { ?>
			<li><strong><?php _e('Membership Expires', 'paid-memberships-pro' );?>:</strong> <?php echo date_i18n(get_option('date_format'), $current_user->membership_level->enddate)?></li>
		<?php } ?>
		<?php if($pmpro_invoice->getDiscountCode()) { ?>
			<li><strong><?php _e('Discount Code', 'paid-memberships-pro' );?>:</strong> <?php echo esc_html( $pmpro_invoice->discount_code->code );?></li>
		<?php } ?>
		<?php do_action("pmpro_invoice_bullets_bottom", $pmpro_invoice); ?>
	</ul>
	<hr />
	<div class="<?php echo pmpro_get_element_class( 'pmpro_invoice_details' ); ?>">
		<?php if(!empty($pmpro_invoice->billing->name)) { ?>
			<div class="col-md-4 <?php echo pmpro_get_element_class( 'pmpro_invoice-billing-address' ); ?>">
				<strong><?php _e('Billing Address', 'paid-memberships-pro' );?></strong>
				<p><?php echo esc_html( $pmpro_invoice->billing->name );?><br />
				<?php echo esc_html( $pmpro_invoice->billing->street );?><br />
				<?php if($pmpro_invoice->billing->city && $pmpro_invoice->billing->state) { ?>
					<?php echo esc_html( $pmpro_invoice->billing->city );?>, <?php echo esc_html( $pmpro_invoice->billing->state );?> <?php echo esc_html( $pmpro_invoice->billing->zip );?> <?php echo esc_html( $pmpro_invoice->billing->country );?><br />
				<?php } ?>
				<?php echo formatPhone($pmpro_invoice->billing->phone)?>
				</p>
			</div> <!-- end pmpro_invoice-billing-address -->
		<?php } ?>

		<?php if ( ! empty( $pmpro_invoice->accountnumber ) || ! empty( $pmpro_invoice->payment_type ) ) { ?>
			<div class="col-md-4 <?php echo pmpro_get_element_class( 'pmpro_invoice-payment-method' ); ?>">
				<strong><?php _e('Payment Method', 'paid-memberships-pro' );?></strong>
				<?php if($pmpro_invoice->accountnumber) { ?>
					<p><?php echo esc_html( ucwords( $pmpro_invoice->cardtype ) ); ?> <?php _e('ending in', 'paid-memberships-pro' );?> <?php echo esc_html( last4($pmpro_invoice->accountnumber ) );?>
					<br />
					<?php _e('Expiration', 'paid-memberships-pro' );?>: <?php echo esc_html( $pmpro_invoice->expirationmonth );?>/<?php echo esc_html( $pmpro_invoice->expirationyear );?></p>
				<?php } else { ?>
					<p><?php echo esc_html( $pmpro_invoice->payment_type ); ?></p>
				<?php } ?>
			</div> <!-- end pmpro_invoice-payment-method -->
		<?php } ?>

		<div class="col-md-4 <?php echo pmpro_get_element_class( 'pmpro_invoice-total' ); ?>">
			<strong><?php _e('Total Billed', 'paid-memberships-pro' );?></strong>
			<p><?php if($pmpro_invoice->total != '0.00') { ?>
				<?php if(!empty($pmpro_invoice->tax)) { ?>
					<?php _e('Subtotal', 'paid-memberships-pro' );?>: <?php echo pmpro_formatPrice($pmpro_invoice->subtotal);?><br />
					<?php _e('Tax', 'paid-memberships-pro' );?>: <?php echo pmpro_formatPrice($pmpro_invoice->tax);?><br />
					<?php if(!empty($pmpro_invoice->couponamount)) { ?>
						<?php _e('Coupon', 'paid-memberships-pro' );?>: (<?php echo pmpro_formatPrice($pmpro_invoice->couponamount);?>)<br />
					<?php } ?>
					<strong><?php _e('Total', 'paid-memberships-pro' );?>: <?php echo pmpro_formatPrice($pmpro_invoice->total);?></strong>
				<?php } else { ?>
					<?php echo pmpro_formatPrice($pmpro_invoice->total);?>
				<?php } ?>
			<?php } else { ?>
				<small class="<?php echo pmpro_get_element_class( 'pmpro_grey' ); ?>"><?php echo esc_html( pmpro_formatPrice(0) );?></small>
			<?php } ?></p>
		</div> <!-- end pmpro_invoice-total -->

	</div> <!-- end pmpro_invoice -->
	<hr />
<?php
	}
	else
	{
		$confirmation_message .= "<p>" . sprintf(__('Below are details about your latest subscription. A welcome email has been sent to %s.', 'paid-memberships-pro' ), $current_user->user_email) . "</p>";

		/**
		 * All devs to filter the confirmation message.
		 * Documented above.
		 * We also have a function in includes/filters.php that applies the the_content filters to this message.
		 */
		$confirmation_message = apply_filters("pmpro_confirmation_message", $confirmation_message, false);

		echo wp_kses_post( $confirmation_message );
	?>
	<ul>
		<li><strong><?php _e('Account', 'paid-memberships-pro' );?>:</strong> <?php echo esc_html( $current_user->display_name );?> (<?php echo esc_html( $current_user->user_email );?>)</li>
		<li><strong><?php _e('Subscriptions Purchased', 'paid-memberships-pro' );?>:</strong> <?php if(!empty($current_user->membership_level)) echo esc_html( $current_user->membership_level->name ); else _e("Pending", 'paid-memberships-pro' );?></li>
	</ul>
<?php
	}
?>
<h3 class="<?php echo pmpro_get_element_class( 'pmpro_actions_nav_left' ); ?>">
	<?php if ( ! empty( $current_user->membership_level ) ) { ?>
		<a href="<?php echo pmpro_url( 'account' ); ?>"><?php _e( 'View Your User Account <i class="fas fa-arrow-circle-right"></i>', 'paid-memberships-pro' ); ?></a></h3>
	<?php echo $confirmation_message2; ?>
	<h3 class="ml-3"><a id="go-guides" href="<?php echo get_site_url(). '/guide/all-guides/' ?>"><?php _e("View all Guides Available", 'paid-memberships-pro' );?>&nbsp;<i class="fas fa-arrow-circle-right"></i></a></h3>
	<?php } else { ?>
		<?php _e( 'If your account is not activated within a few minutes, please contact the site owner.', 'paid-memberships-pro' ); ?></h3>
	<?php } ?>
 <!-- end pmpro_actions_nav -->
</div> <!-- end pmpro_confirmation_wrap -->
