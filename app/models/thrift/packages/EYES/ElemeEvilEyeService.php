<?php
namespace EYES;
/**
 * Autogenerated by Thrift Compiler (0.9.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


interface ElemeEvilEyeServiceIf {
  public function ping();
  public function walle_distribute_suspicious_orders($auditor_id, $auditor_amount, $date);
  public function walle_filter_suspicious_orders_amount(\EYES\TWalleSuspiciousOrderAmountQuery $query_struct);
  public function walle_finish_suspicious_group_auditing($restaurant_id, $date);
  public function walle_get_suspicious_order_detail($order_ids);
  public function walle_get_suspicious_orders(\EYES\TWalleSuspiciousOrderQuery $query_struct);
  public function eval_order_risk(\EYES\TOrderContext $t_order_context);
  public function add_order_action(\EYES\TOrderAction $t_order_action);
}

class ElemeEvilEyeServiceClient implements \EYES\ElemeEvilEyeServiceIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function ping()
  {
    $this->send_ping();
    return $this->recv_ping();
  }

  public function send_ping()
  {
    $args = new \EYES\ElemeEvilEyeService_ping_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'ping', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('ping', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_ping()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_ping_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_ping_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    throw new \Exception("ping failed: unknown result");
  }

  public function walle_distribute_suspicious_orders($auditor_id, $auditor_amount, $date)
  {
    $this->send_walle_distribute_suspicious_orders($auditor_id, $auditor_amount, $date);
    return $this->recv_walle_distribute_suspicious_orders();
  }

  public function send_walle_distribute_suspicious_orders($auditor_id, $auditor_amount, $date)
  {
    $args = new \EYES\ElemeEvilEyeService_walle_distribute_suspicious_orders_args();
    $args->auditor_id = $auditor_id;
    $args->auditor_amount = $auditor_amount;
    $args->date = $date;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'walle_distribute_suspicious_orders', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('walle_distribute_suspicious_orders', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_walle_distribute_suspicious_orders()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_walle_distribute_suspicious_orders_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_walle_distribute_suspicious_orders_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    throw new \Exception("walle_distribute_suspicious_orders failed: unknown result");
  }

  public function walle_filter_suspicious_orders_amount(\EYES\TWalleSuspiciousOrderAmountQuery $query_struct)
  {
    $this->send_walle_filter_suspicious_orders_amount($query_struct);
    return $this->recv_walle_filter_suspicious_orders_amount();
  }

  public function send_walle_filter_suspicious_orders_amount(\EYES\TWalleSuspiciousOrderAmountQuery $query_struct)
  {
    $args = new \EYES\ElemeEvilEyeService_walle_filter_suspicious_orders_amount_args();
    $args->query_struct = $query_struct;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'walle_filter_suspicious_orders_amount', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('walle_filter_suspicious_orders_amount', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_walle_filter_suspicious_orders_amount()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_walle_filter_suspicious_orders_amount_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_walle_filter_suspicious_orders_amount_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    throw new \Exception("walle_filter_suspicious_orders_amount failed: unknown result");
  }

  public function walle_finish_suspicious_group_auditing($restaurant_id, $date)
  {
    $this->send_walle_finish_suspicious_group_auditing($restaurant_id, $date);
    $this->recv_walle_finish_suspicious_group_auditing();
  }

  public function send_walle_finish_suspicious_group_auditing($restaurant_id, $date)
  {
    $args = new \EYES\ElemeEvilEyeService_walle_finish_suspicious_group_auditing_args();
    $args->restaurant_id = $restaurant_id;
    $args->date = $date;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'walle_finish_suspicious_group_auditing', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('walle_finish_suspicious_group_auditing', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_walle_finish_suspicious_group_auditing()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_walle_finish_suspicious_group_auditing_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_walle_finish_suspicious_group_auditing_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    return;
  }

  public function walle_get_suspicious_order_detail($order_ids)
  {
    $this->send_walle_get_suspicious_order_detail($order_ids);
    return $this->recv_walle_get_suspicious_order_detail();
  }

  public function send_walle_get_suspicious_order_detail($order_ids)
  {
    $args = new \EYES\ElemeEvilEyeService_walle_get_suspicious_order_detail_args();
    $args->order_ids = $order_ids;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'walle_get_suspicious_order_detail', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('walle_get_suspicious_order_detail', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_walle_get_suspicious_order_detail()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_walle_get_suspicious_order_detail_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_walle_get_suspicious_order_detail_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    throw new \Exception("walle_get_suspicious_order_detail failed: unknown result");
  }

  public function walle_get_suspicious_orders(\EYES\TWalleSuspiciousOrderQuery $query_struct)
  {
    $this->send_walle_get_suspicious_orders($query_struct);
    return $this->recv_walle_get_suspicious_orders();
  }

  public function send_walle_get_suspicious_orders(\EYES\TWalleSuspiciousOrderQuery $query_struct)
  {
    $args = new \EYES\ElemeEvilEyeService_walle_get_suspicious_orders_args();
    $args->query_struct = $query_struct;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'walle_get_suspicious_orders', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('walle_get_suspicious_orders', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_walle_get_suspicious_orders()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_walle_get_suspicious_orders_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_walle_get_suspicious_orders_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    throw new \Exception("walle_get_suspicious_orders failed: unknown result");
  }

  public function eval_order_risk(\EYES\TOrderContext $t_order_context)
  {
    $this->send_eval_order_risk($t_order_context);
    return $this->recv_eval_order_risk();
  }

  public function send_eval_order_risk(\EYES\TOrderContext $t_order_context)
  {
    $args = new \EYES\ElemeEvilEyeService_eval_order_risk_args();
    $args->t_order_context = $t_order_context;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'eval_order_risk', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('eval_order_risk', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_eval_order_risk()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_eval_order_risk_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_eval_order_risk_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    throw new \Exception("eval_order_risk failed: unknown result");
  }

  public function add_order_action(\EYES\TOrderAction $t_order_action)
  {
    $this->send_add_order_action($t_order_action);
    $this->recv_add_order_action();
  }

  public function send_add_order_action(\EYES\TOrderAction $t_order_action)
  {
    $args = new \EYES\ElemeEvilEyeService_add_order_action_args();
    $args->t_order_action = $t_order_action;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'add_order_action', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('add_order_action', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_add_order_action()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\EYES\ElemeEvilEyeService_add_order_action_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \EYES\ElemeEvilEyeService_add_order_action_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->user_exception !== null) {
      throw $result->user_exception;
    }
    if ($result->system_exception !== null) {
      throw $result->system_exception;
    }
    if ($result->unknown_exception !== null) {
      throw $result->unknown_exception;
    }
    return;
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class ElemeEvilEyeService_ping_args extends TBase {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_ping_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_ping_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_ping_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_ping_result extends TBase {
  static $_TSPEC;

  public $success = null;
  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::BOOL,
          ),
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_ping_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_ping_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_ping_result', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_distribute_suspicious_orders_args extends TBase {
  static $_TSPEC;

  public $auditor_id = null;
  public $auditor_amount = null;
  public $date = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'auditor_id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'auditor_amount',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'date',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_distribute_suspicious_orders_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_distribute_suspicious_orders_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_distribute_suspicious_orders_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_distribute_suspicious_orders_result extends TBase {
  static $_TSPEC;

  public $success = null;
  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::I32,
          ),
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_distribute_suspicious_orders_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_distribute_suspicious_orders_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_distribute_suspicious_orders_result', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_filter_suspicious_orders_amount_args extends TBase {
  static $_TSPEC;

  public $query_struct = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'query_struct',
          'type' => TType::STRUCT,
          'class' => '\EYES\TWalleSuspiciousOrderAmountQuery',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_filter_suspicious_orders_amount_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_filter_suspicious_orders_amount_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_filter_suspicious_orders_amount_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_filter_suspicious_orders_amount_result extends TBase {
  static $_TSPEC;

  public $success = null;
  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRING,
          ),
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_filter_suspicious_orders_amount_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_filter_suspicious_orders_amount_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_filter_suspicious_orders_amount_result', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_finish_suspicious_group_auditing_args extends TBase {
  static $_TSPEC;

  public $restaurant_id = null;
  public $date = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'restaurant_id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'date',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_finish_suspicious_group_auditing_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_finish_suspicious_group_auditing_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_finish_suspicious_group_auditing_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_finish_suspicious_group_auditing_result extends TBase {
  static $_TSPEC;

  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_finish_suspicious_group_auditing_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_finish_suspicious_group_auditing_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_finish_suspicious_group_auditing_result', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_get_suspicious_order_detail_args extends TBase {
  static $_TSPEC;

  public $order_ids = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'order_ids',
          'type' => TType::LST,
          'etype' => TType::I64,
          'elem' => array(
            'type' => TType::I64,
            ),
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_get_suspicious_order_detail_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_get_suspicious_order_detail_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_get_suspicious_order_detail_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_get_suspicious_order_detail_result extends TBase {
  static $_TSPEC;

  public $success = null;
  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\EYES\TWalleSuspiciousOrder',
            ),
          ),
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_get_suspicious_order_detail_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_get_suspicious_order_detail_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_get_suspicious_order_detail_result', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_get_suspicious_orders_args extends TBase {
  static $_TSPEC;

  public $query_struct = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'query_struct',
          'type' => TType::STRUCT,
          'class' => '\EYES\TWalleSuspiciousOrderQuery',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_get_suspicious_orders_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_get_suspicious_orders_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_get_suspicious_orders_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_walle_get_suspicious_orders_result extends TBase {
  static $_TSPEC;

  public $success = null;
  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\EYES\TWalleSuspiciousOrder',
            ),
          ),
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_walle_get_suspicious_orders_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_walle_get_suspicious_orders_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_walle_get_suspicious_orders_result', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_eval_order_risk_args extends TBase {
  static $_TSPEC;

  public $t_order_context = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 't_order_context',
          'type' => TType::STRUCT,
          'class' => '\EYES\TOrderContext',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_eval_order_risk_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_eval_order_risk_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_eval_order_risk_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_eval_order_risk_result extends TBase {
  static $_TSPEC;

  public $success = null;
  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\EYES\TOrderEvalResult',
          ),
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_eval_order_risk_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_eval_order_risk_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_eval_order_risk_result', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_add_order_action_args extends TBase {
  static $_TSPEC;

  public $t_order_action = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 't_order_action',
          'type' => TType::STRUCT,
          'class' => '\EYES\TOrderAction',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_add_order_action_args';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_add_order_action_args', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_add_order_action_args', self::$_TSPEC, $output);
  }
}

class ElemeEvilEyeService_add_order_action_result extends TBase {
  static $_TSPEC;

  public $user_exception = null;
  public $system_exception = null;
  public $unknown_exception = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'user_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUserException',
          ),
        2 => array(
          'var' => 'system_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESSystemException',
          ),
        3 => array(
          'var' => 'unknown_exception',
          'type' => TType::STRUCT,
          'class' => '\EYES\EYESUnknownException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ElemeEvilEyeService_add_order_action_result';
  }

  public function read($input)
  {
    return $this->_read('ElemeEvilEyeService_add_order_action_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ElemeEvilEyeService_add_order_action_result', self::$_TSPEC, $output);
  }
}

