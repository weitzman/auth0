<?php

namespace Drupal\auth0;

/**
 * Defines events for the Auth0 module.
 */
final class Auth0Events {

  /**
   * The name of the event fired after a user is successfully logged in via Auth0.
   *
   * @Event
   */
  const USER_LOGIN = 'auth0.user_login';

  /**
   * The name of the event fired after a user successfully authenticates via Auth0,
   * before the account is created and/or logged in.
   *
   * @Event
   */
  const USER_AUTH = 'auth0.user_auth';
}