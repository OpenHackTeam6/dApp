pragma solidity ^0.4.8;

contract TransactionLogNG {
    mapping (bytes32 => mapping (bytes32 => string)) public tranlog;

    function setTransaction(bytes32 user_id, bytes32 project_id, string tran_data) public {
        tranlog[user_id][project_id] = tran_data;
    }
    
    function getTransaction(bytes32 user_id, bytes32 project_id) public constant returns (string tran_data) {
        return tranlog[user_id][project_id];
    }
}
