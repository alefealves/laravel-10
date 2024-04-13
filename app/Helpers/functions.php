<?php

use App\Enum\SupportStatus;

if (!function_exists('getStatusSupport')) {
  function getStatusSupport(string $status): string
  {
    return SupportStatus::fromValue($status);
  }
}
