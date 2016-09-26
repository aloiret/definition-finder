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

namespace Facebook\DefinitionFinder;

class ScannedTypeBuilder extends ScannedSingleTypeBuilder<ScannedType> {
  public function build(): ScannedType {
    return new ScannedType(
      nullthrows($this->position),
      $this->name,
      /* attributes = */ Map { },
      $this->docblock,
    );
  }
}
