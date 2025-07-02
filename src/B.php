<?php

class B {
    function a(int $count): int {
      if ($count < 1) { return $count; }

      if ($count < 2) { return $count; }

      return $count;
    }
}
