<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class Table extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Collection
{
  protected $collection_key = 'rows';
  /**
   * @var Headers
   */
  public $columnHeaders;
  protected $columnHeadersType = Headers::class;
  protected $columnHeadersDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var Headers
   */
  public $rowHeaders;
  protected $rowHeadersType = Headers::class;
  protected $rowHeadersDataType = '';
  /**
   * @var Row[]
   */
  public $rows;
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';

  /**
   * @param Headers
   */
  public function setColumnHeaders(Headers $columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  /**
   * @return Headers
   */
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param Headers
   */
  public function setRowHeaders(Headers $rowHeaders)
  {
    $this->rowHeaders = $rowHeaders;
  }
  /**
   * @return Headers
   */
  public function getRowHeaders()
  {
    return $this->rowHeaders;
  }
  /**
   * @param Row[]
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /**
   * @return Row[]
   */
  public function getRows()
  {
    return $this->rows;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Table::class, 'Google_Service_ShoppingContent_Table');
