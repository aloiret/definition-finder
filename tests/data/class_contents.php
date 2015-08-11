<?hh // strict
/*
 *  Copyright (c) 2015, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\DefinitionFinder\Test;

class ClassWithContents {
  private bool $foo = true;
  public string $herp = 'derp';

  public function publicMethod(): void {}
  protected function protectedMethod(): void {}
  private function privateMethod(): void {}

  public static function PublicStaticMethod(): void {}
}
