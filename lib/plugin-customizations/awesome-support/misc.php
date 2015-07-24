<?php
/**
 * @package   Awesome Support
 * @author    Julien Liabeuf <julien@liabeuf.fr>
 * @license   GPL-2.0+
 * @link      http://themeavenue.net
 * @copyright 2014 ThemeAvenue
 */

/**
 * Deactivate agent auto-assignment
 */
define( 'WPAS_DISABLE_AUTO_ASSIGN', true );

add_filter( 'wpas_email_notifications_email', 'awp_as_notify_reviewers', 10, 2 );
/**
 * Notify all reviewers on new ticket submission
 *
 * @param $email array The email notification data
 * @param $case  string The email notification case
 *
 * @return array Email data, possibly updated with BCCs
 */
function awp_as_notify_reviewers( $email, $case ) {

	/* Only alter e-mail notifications on new ticket assignment */
	if ( 'new_ticket_assigned' !== $case ) {
		return $email;
	}

	$reviewers = wpas_get_users( array( 'cap' => 'edit_ticket' ) ); // Get the list of agents/reviewers
	$recipient = (array) $email['recipient_email'];

	if ( empty( $reviewers ) ) {
		return $email;
	}

	foreach ( $reviewers as $reviewer ) {

		/* Make sure we have a WP_User object first */
		if ( ! is_a( $reviewer, 'WP_User' ) ) {
			continue;
		}

		/* Don't add the original recipient to the BCCs */
		if ( $email['recipient_email'] === $reviewer->data->user_email ) {
			continue;
		}

		array_push( $recipient, $reviewer->data->user_email );

	}

	if ( count( $recipient ) > 1 ) {
		$email['recipient_email'] = $recipient;
	}

	return $email;

}