<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/SmsConversation/Contact.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:d1ed4b059e7b500ae77b6b8ce9e28d31)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_SmsConversation_DAO_Contact constructor.
 */
class CRM_SmsConversation_DAO_Contact extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_sms_conversation_contact';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique FK to civicrm_contact
   *
   * @var int unsigned
   */
  public $id;
  /**
   * SmsConversation ID
   *
   * @var int unsigned
   */
  public $conversation_id;
  /**
   * Conversation Status ID
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * FK to sms_conversation_question.id
   *
   * @var int unsigned
   */
  public $current_question_id;
  /**
   * Id of contact that started the conversation
   *
   * @var int unsigned
   */
  public $source_contact_id;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_sms_conversation_contact';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'current_question_id', 'civicrm_sms_conversation_question', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'source_contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Unique FK to civicrm_contact',
          'required' => true,
          'table_name' => 'civicrm_sms_conversation_contact',
          'entity' => 'Contact',
          'bao' => 'CRM_SmsConversation_DAO_Contact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'conversation_id' => array(
          'name' => 'conversation_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'SmsConversation ID',
          'required' => true,
          'table_name' => 'civicrm_sms_conversation_contact',
          'entity' => 'Contact',
          'bao' => 'CRM_SmsConversation_DAO_Contact',
          'localizable' => 0,
        ) ,
        'status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Conversation Status ID',
          'required' => true,
          'table_name' => 'civicrm_sms_conversation_contact',
          'entity' => 'Contact',
          'bao' => 'CRM_SmsConversation_DAO_Contact',
          'localizable' => 0,
        ) ,
        'current_question_id' => array(
          'name' => 'current_question_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to sms_conversation_question.id',
          'table_name' => 'civicrm_sms_conversation_contact',
          'entity' => 'Contact',
          'bao' => 'CRM_SmsConversation_DAO_Contact',
          'localizable' => 0,
          'FKClassName' => 'CRM_SmsConversation_DAO_Question',
        ) ,
        'source_contact_id' => array(
          'name' => 'source_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Id of contact that started the conversation',
          'table_name' => 'civicrm_sms_conversation_contact',
          'entity' => 'Contact',
          'bao' => 'CRM_SmsConversation_DAO_Contact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'sms_conversation_contact', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'sms_conversation_contact', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array();
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
