<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 공통 게시판 모델
*/
class Board_m extends CI_Model {
    function __construct() {
        parent::__construct();
        $this -> load -> database('ssnong');

        // $this->load->database('ssnong');

    }

    function get_list($table = 'ci_board') {
        $sql = "SELECT  * FROM ".$table." ORDER BY board_id DESC";
        $query = $this -> db -> query($sql);
        $result = $query -> result();
        echo $result;
        // $result = $query -> result_array();
        $this->db->close();

        return $result;
    }
}