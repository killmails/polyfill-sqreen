<?php

declare(strict_types=1);

namespace sqreen;

if (!\extension_loaded('sqreen')) {
    /**
     * Login tracking - the SDK method to call on user login activity.
     *
     * @see https://docs.sqreen.com/php/user-monitoring/#auth_track
     *
     * @param bool  $success
     * @param array $identifiers
     *
     * @return bool
     */
    function auth_track(bool $success, array $identifiers): bool
    {
        return true;
    }

    /**
     * Signup tracking - the SDK method to call when creating a new user account at signup.
     *
     * @see https://docs.sqreen.com/php/user-monitoring/#signup_track
     *
     * @param array $identifiers
     *
     * @return bool
     */
    function signup_track(array $identifiers): bool
    {
        return true;
    }

    /**
     * Session tracking - the SDK method to map a user to the current HTTP request.
     *
     * @see https://docs.sqreen.com/php/user-monitoring/#identify
     *
     * @param array $identifiers
     * @param array $traits
     *
     * @return bool
     */
    function identify(array $identifiers, array $traits = []): bool
    {
        return true;
    }

    /**
     * Tracking events - the SDK method to record your custom events.
     *
     * @see https://docs.sqreen.com/php/custom-events/#define-your-custom-event
     *
     * @param string $name
     * @param array  $options
     *
     * @return bool
     */
    function track(string $name, array $options = []): bool
    {
        return true;
    }
}
