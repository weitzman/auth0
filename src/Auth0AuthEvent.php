<?php

namespace Drupal\auth0;

use Auth0\SDK\Auth0;
use Symfony\Component\EventDispatcher\Event;

/**
 * Wraps an Auth0 authentication event for subscribers.
 */
class Auth0AuthEvent extends Event {

  /**
   * User properties to save.
   *
   * @var array
   */
  protected $values;

  /**
   * Auth0 connection, already authenticated.
   */
  protected $auth0;

  /**
   * Constructs an Auth0 User event object.
   *
   * @param array $values
   *   User properties to save with the account.
   * @param \Auth0\SDK\Auth0 $auth0
   *   Auth0 response
   */
  public function __construct(array $values, Auth0 $auth0) {
    $this->values = $values;
    $this->auth0 = $auth0;
  }

  /**
   * Gets values array.
   *
   * @return array
   */
  public function getValues() {
    return $this->values;
  }

  /**
   * Set the values array.
   * @param array $values
   */
  public function setValues(array $values) {
    $this->values = $values;
  }

  /**
   * Gets the Auth0 connection object.
   *
   * @return \Auth0\SDK\Auth0
   */
  public function getAuth0() {
    return $this->auth0;
  }
}
