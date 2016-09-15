<?php
/**
 * Created by PhpStorm.
 * User: sr
 * Date: 15.09.16
 * Time: 21:47
 */?>
Для активации аккаунта пройдите по <a href="{{ URL::to("activate/{$sentuser->getUserId()}/{$code}") }}">ссылке</a>
