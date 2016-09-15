<?php
/**
 * Created by PhpStorm.
 * User: sr
 * Date: 15.09.16
 * Time: 21:49
 */?>
Для создания нового пароля пройдите по <a href="{{ URL::to("reset/{$sentuser->getUserId()}/{$code}") }}">ссылке</a>
