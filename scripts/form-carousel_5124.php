<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'رسالة جديدة',
    'email_message' => 'شكرا لك على التواصل معنا',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'www.agayedn@gmail.com',
    'to' => 'www.agayedn@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'بريد الالكتروني',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'بريد الالكتروني\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'الإسم',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'الإسم\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'الرسالة',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'الرسالة\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>