<?php

/**
 * Get an array of status options
 *
 * @return array
 */
function get_holiday_statuses() {
    return [
        'pending'   => 'Pending',
        'accepted'  => 'Accepted',
        'declined'  => 'Declined',
        'cancelled' => 'Cancelled'
    ];
}

/**
 * Get an array of holiday types
 *
 * @return array
 */
function get_holiday_types() {
    return [
        'holiday'   => 'Holiday',
        'sickness'  => 'Sickness',
        'lieu'      => 'Time off in lieu',
        'unpaid'    => 'Unpaid leave',
        'grievance' => 'Grievance'
    ];
}
