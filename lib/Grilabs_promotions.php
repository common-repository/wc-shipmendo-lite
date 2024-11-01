<?php
/**
 * Created by PhpStorm.
 * File: Grilabs_promotions.php
 * Project: shipmendo-lite
 * Year: 2021
 */
class Grilabs_promotions {
	const PROMO_URL = "https://vpos-services.grilabs.net/promotions/shipment-tracking.php";
	private $data = "";
	public function __construct() {
		$this->read();
	}
	public function read()
	{
		$request      = wp_remote_get( esc_url_raw( self::PROMO_URL ), array(
			'headers' => array( 'referer' => site_url() )
		) );
		$this->data = wp_remote_retrieve_body( $request );
	}
	public function get_data() {
		return json_decode( $this->data );
	}
}