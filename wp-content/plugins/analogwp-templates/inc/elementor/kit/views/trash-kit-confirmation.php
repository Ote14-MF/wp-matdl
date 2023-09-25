<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * @var int $post_id
 */

$config_url = add_query_arg(
	array(
		'action'              => 'ang_trash_kit',
		'kit_id'              => $post_id,
		'ang_trash_kit_nonce' => wp_create_nonce( 'ang_trash_kit' ),
		'_wp_http_referrer'   => '/wp-admin/admin.php?page=style-kits',
		'force_delete_kit'    => '1',
	),
	get_admin_url() . 'admin-ajax.php',
);
?>
<h4>
	<?php echo esc_html__( 'Are you sure you want to delete this Style Kit?', 'ang' ); ?>
</h4>

<p>
	<?php echo esc_html__( 'By removing this template you will delete the entire Style Kit, and all the related global style settings.', 'ang' ); ?>
</p>

<br/>


<a class="btn btn-cancel" href="javascript:history.back()">
	<?php echo esc_html__( 'Cancel', 'ang' ); ?>
</a>
<a class="btn btn-primary btn-danger" href="
<?php
// PHPCS - the link is generated by WordPress.
echo $config_url; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?>
">
	<?php echo esc_html__( 'Delete Style Kit', 'ang' ); ?>
</a>
<style>
	/* In WordPress "die" screen there is very basic style, so the current css is required for basic button styles. */
	.btn {
		text-decoration: none;
		padding: 9px 20px;
		font-weight: 500;
		border-radius: 3px;
	}

	.btn-cancel {
		padding-left: 0;
	}

	.btn-danger {
		display: inline-block;
		color: #a00;
	}

	.btn-danger:hover, .btn-danger:focus, .btn-danger:active {
		color: #dc3232;
	}

	.btn-primary {
		color: #fff;
		background-color: #007cba;
		margin: 0;
	}

	.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
		background-color: #0071a1;
		color: #fff;
	}
</style>