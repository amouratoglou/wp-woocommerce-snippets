<?php
// code snippet is for booking-wp plugin
// Create appointment
$new_appointment_data = array(
	'product_id' => '89', // Appointment ID
	'cost'       => '0', // Cost of this appointment
	'start_date' =>  '2020-11-25',
	'end_date'   => '2020-11-25',
	'qty'        => '1'
);
 $new_appointment = get_wc_appointment( $new_appointment_data );
$new_appointment->set_order_id( $order_id );
$new_appointment->set_order_item_id( $item_id );
$new_appointment->set_status( $status );
$new_appointment->save();
?>