<?php

/**
 * Get an array of status options
 *
 * @return array
 */
function getStates() {
    return [
        'pending',
        'accepted',
        'declined',
        'cancelled'
    ];
}

/**
 * Get an array of holiday types
 *
 * @return array
 */
function getTypes() {
    return [
        'holiday',
        'sickness',
        'lieu',
        'unpaid',
        'grievance'
    ];
}

/**
 * Formats the holiday states into sexy string
 *
 * @param  string    $state   The holiday state which needs formatting
 * @return string
 */
function getFormattedState($state) {
    $output = ucfirst($state);

    return $output;
}

/**
 * Formats the holiday type into sexy string
 *
 * @param  string    $type   The holiday type which needs formatting
 * @return string
 */
function getFormattedType($type) {
    if($type === 'lieu') {
        $output = 'Time off in lieu';
    } else {
        $output = ucfirst($type);
    }

    return $output;
}
