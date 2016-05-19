<?php

return array(
  // Login / Register
  'log' => 'authentication/log',
  'login' => 'authentication/login',
  'reg' => 'authentication/reg',
  'register' => 'authentication/register',
  
  // Products
  'products/([a-z]+)' => 'product/category/$1',
  'products' => 'product/list',

  // About
  'about' => 'about/index',

  // Contact
  'contact' => 'contact/index',

  // Home / Main
  'home' => 'home/index',
  '' => 'home/index'
);