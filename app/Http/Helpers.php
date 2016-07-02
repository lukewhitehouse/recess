<?php

/**
 * Get an array of status options
 *
 * @return array
 */
function getStates() {
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
function getTypes() {
    return [
        'holiday'   => 'Holiday',
        'sickness'  => 'Sickness',
        'lieu'      => 'Time off in lieu',
        'unpaid'    => 'Unpaid leave',
        'grievance' => 'Grievance'
    ];
}
