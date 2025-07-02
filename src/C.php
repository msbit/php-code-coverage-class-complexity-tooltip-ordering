<?php

class C {
    function a(int $count): int {
      if ($count < 1) { return $count; }

      if ($count < 2) { return $count; }

      return $count;
    }
}
