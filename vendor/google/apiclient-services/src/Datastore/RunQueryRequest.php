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

namespace Google\Service\Datastore;

class RunQueryRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $databaseId;
  /**
   * @var GqlQuery
   */
  public $gqlQuery;
  protected $gqlQueryType = GqlQuery::class;
  protected $gqlQueryDataType = '';
  /**
   * @var string
   */
  public $mode;
  /**
   * @var PartitionId
   */
  public $partitionId;
  protected $partitionIdType = PartitionId::class;
  protected $partitionIdDataType = '';
  /**
   * @var Query
   */
  public $query;
  protected $queryType = Query::class;
  protected $queryDataType = '';
  /**
   * @var ReadOptions
   */
  public $readOptions;
  protected $readOptionsType = ReadOptions::class;
  protected $readOptionsDataType = '';

  /**
   * @param string
   */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /**
   * @return string
   */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /**
   * @param GqlQuery
   */
  public function setGqlQuery(GqlQuery $gqlQuery)
  {
    $this->gqlQuery = $gqlQuery;
  }
  /**
   * @return GqlQuery
   */
  public function getGqlQuery()
  {
    return $this->gqlQuery;
  }
  /**
   * @param string
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return string
   */
  public function getMode()
  {
    return $this->mode;
  }
  /**
   * @param PartitionId
   */
  public function setPartitionId(PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }
  /**
   * @return PartitionId
   */
  public function getPartitionId()
  {
    return $this->partitionId;
  }
  /**
   * @param Query
   */
  public function setQuery(Query $query)
  {
    $this->query = $query;
  }
  /**
   * @return Query
   */
  public function getQuery()
  {
    return $this->query;
  }
  /**
   * @param ReadOptions
   */
  public function setReadOptions(ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }
  /**
   * @return ReadOptions
   */
  public function getReadOptions()
  {
    return $this->readOptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RunQueryRequest::class, 'Google_Service_Datastore_RunQueryRequest');
