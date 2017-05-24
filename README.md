# Auth0 for Drupal 8

A Drupal 8 module to provide external authentication through Auth0. The intent is that your canonical user store is Auth0 and Drupal is a slave to that.

## Installation

* Set up your Application in Auth0.
* Enable Drupal's externalauth and this auth0 module.
* Set your API credentials in settings.php, like this:

```
$settings['auth0']['disabled'] = FALSE;
$settings['auth0']['client'] = array(
  'domain'        => 'foo-bar.eu.auth0.com',
  'client_id'     => 'CdfGCx3123jjsflj5rSHgsLT9OY7',
  'client_secret' => 'cTi3qqoj62UxDEznSFJvm_GOqpDOAns7EsfyvT15K_4nQudgfaa430GfRnhe4Ek',
  'redirect_uri'  => 'http://example.com/auth0/login'
);
```

* Activate multiConnection to prefix the username with the connection to prevent duplicate usernames in drupal user db. This is required if you want to handle more then one connection pointing to drupal. 

```
$settings['auth0']['multiConnection'] = TRUE;
```

Note that redirect_uri must end in auth0/login!

Though this module takes over the Drupal login form, it does not block 
access to account registration. So you probably want to add 
```
$settings['register'] = 'admin_only';
```
to your settings.php


## Disabling (for local, development sites etc)

Add one line to your settings.php to disable Auth0 integration:

```
$settings['auth0']['disabled'] = TRUE;
```