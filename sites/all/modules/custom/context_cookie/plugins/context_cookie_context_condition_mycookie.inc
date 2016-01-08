<?php

/**
 * Expose the mycookie value as a context condition.
 */

class context_cookie_context_condition_adventure extends context_condition {
  function condition_values() {
    $values = array('cookie' => 'cookie');
    return $values;
  }

  function condition_form($context) {
      $default_form = parent::condition_form($context);
      $default_form['#type'] = 'item';
      $default_form['#description'] = t('This condition returns TRUE when the cookie is set to 1.');
      $form['explanation'] = $default_form;
      $form['cookie'] = array('#type' => 'value', '#value' => 'cookie');
      return $form;
    }


    function condition_form_submit($values) {
      return array('cookie' => 'cookie');
    }

  function execute() {
      foreach($this->get_contexts() as $context) {
          // dsm ($_COOKIE['cookieadventure'][0]);
          $this->condition_met($context);
      } 
  }
}

class context_cookie_context_condition_family extends context_condition {
  function condition_values() {
    $values = array('cookie' => 'cookie');
 	  return $values;
  }

  function condition_form($context) {
      $default_form = parent::condition_form($context);
      $default_form['#type'] = 'item';
      $default_form['#description'] = t('This condition returns TRUE when the cookie is set to 4.');
      $form['explanation'] = $default_form;
      $form['cookie'] = array('#type' => 'value', '#value' => 'cookie');
      return $form;
    }


    function condition_form_submit($values) {
      return array('cookie' => 'cookie');
    }

  function execute() {
      foreach($this->get_contexts() as $context) {
          // dsm ($_COOKIE['cookieadventure'][0]);
          $this->condition_met($context);
      } 
  }
}

class context_cookie_context_condition_eventgoer extends context_condition {
  function condition_values() {
    $values = array('cookie' => 'cookie');
    return $values;
  }

  function condition_form($context) {
      $default_form = parent::condition_form($context);
      $default_form['#type'] = 'item';
      $default_form['#description'] = t('This condition returns TRUE when the cookie is set to 3.');
      $form['explanation'] = $default_form;
      $form['cookie'] = array('#type' => 'value', '#value' => 'cookie');
      return $form;
    }


    function condition_form_submit($values) {
      return array('cookie' => 'cookie');
    }

  function execute() {
      foreach($this->get_contexts() as $context) {
          // dsm ($_COOKIE['cookieadventure'][0]);
          $this->condition_met($context);
      } 
  }
}

class context_cookie_context_condition_default extends context_condition {
  function condition_values() {
    $values = array('cookie' => 'cookie');
    return $values;
  }

  function condition_form($context) {
      $default_form = parent::condition_form($context);
      $default_form['#type'] = 'item';
      $default_form['#description'] = t('This condition returns TRUE when the cookie is set to 2.');
      $form['explanation'] = $default_form;
      $form['cookie'] = array('#type' => 'value', '#value' => 'cookie');
      return $form;
    }


    function condition_form_submit($values) {
      return array('cookie' => 'cookie');
    }

  function execute() {
      foreach($this->get_contexts() as $context) {
          $this->condition_met($context);
      } 
  }
}