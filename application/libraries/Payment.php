<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment{
    private $login=14334;
    private $password='WORLD@123';
    private $transactionType='NBFundTransfer';
    private $productId='WORLD';
    private $amount=51;
    private $transactionCurrency='INR';
    private $transactionAmount=0;
    private $customerAccount='123456789';
    private $customerName='World Vision Cable';
    private $customerEmailId='info@worldvisioncable.in';
    private $customerMobile='9900065533';
    private $customerBillingAddress='Bangalore';
    private $returnUrl='https://www.worldvisioncable.in/payment-success';
    private $mode = "live";
	private $transactionUrl='https://payment.atomtech.in/paynetz/epi/fts';
	private $nbType = "NBFundTransfer";
	private $ccType = "CCFundTransfer";
	private $reqHashKey = "WORLDVISION1234";
	private $transactionId='wvc_12345678';
	private $clientCode='lisas00940';
    private $transactionDate;
    private $udf9;
    
    function __construct(){
        $this->transactionDate=date("d/m/Y h:m:s");
    }
    
    /**
     * @return string
     */
    public function getReqHashKey()
    {
        return $this->reqHashKey;
    }

    /**
     * @param string $reqHashKey
     */
    public function setReqHashKey($reqHashKey)
    {
        $this->reqHashKey = $reqHashKey;
    }

    /**
     * @return string
     */
    public function getRespHashKey()
    {
        return $this->respHashKey;
    }

    /**
     * @param string $respHashKey
     */
    public function setRespHashKey($respHashKey)
    {
        $this->respHashKey = $respHashKey;
    }

    /**
     * @return the $login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }
	
	/**
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
	
	/**
     * @return the $transactionType
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
    }
	
	/**
     * @return the $productId
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
	
	/**
     * @return the $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

	/**
     * @return the $transactionCurrency
     */
    public function getTransactionCurrency()
    {
        return $this->transactionCurrency;
    }

    /**
     * @param string $transactionCurrency
     */
    public function setTransactionCurrency($transactionCurrency)
    {
        $this->transactionCurrency = $transactionCurrency;
    }
	
	/**
     * @return the $transactionAmount
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }

    /**
     * @param string $transactionAmount
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->transactionAmount = $transactionAmount;
    }
	
	/**
     * @return the $transactionId
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }
	
	/**
     * @return the $transactionDate
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * @param string $transactionDate
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;
    }
	
	/**
     * @return the $customerAccount
     */
    public function getCustomerAccount()
    {
        return $this->customerAccount;
    }

    /**
     * @param string $customerAccount
     */
    public function setCustomerAccount($customerAccount)
    {
        $this->customerAccount = $customerAccount;
    }
	
	/**
     * @return the $customerName
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }
	
	/**
     * @return the $customerEmailId
     */
    public function getCustomerEmailId()
    {
        return $this->customerEmailId;
    }

    /**
     * @param string $customerEmailId
     */
    public function setCustomerEmailId($customerEmailId)
    {
        $this->customerEmailId = $customerEmailId;
    }
	
	/**
     * @return the $customerMobile
     */
    public function getCustomerMobile()
    {
        return $this->customerMobile;
    }

    /**
     * @param string $customerMobile
     */
    public function setCustomerMobile($customerMobile)
    {
        $this->customerMobile = $customerMobile;
    }
	
	/**
     * @return the $customerBillingAddress
     */
    public function getCustomerBillingAddress()
    {
        return $this->customerBillingAddress;
    }

    /**
     * @param string $customerBillingAddress
     */
    public function setCustomerBillingAddress($customerBillingAddress)
    {
        $this->customerBillingAddress = $customerBillingAddress;
    }
	
	/**
     * @return the $returnUrl
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }
	
	/**
     * @return the $mode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
	
	/**
     * @return the $transactionUrl
     */
    public function getTransactionUrl()
    {
        return $this->transactionUrl;
    }

    /**
     * @param string $transactionUrl
     */
    public function setTransactionUrl($transactionUrl)
    {
        $this->transactionUrl = $transactionUrl;
    }
	
	public function getnbType() {
		return $this->nbType;
	}

	public function getccType() {
		return $this->ccType;
	}
	
	private function setUrl() {
		$port = 443;
		if($this->getMode() == "live"){
			$url = "https://payment.atomtech.in/paynetz/epi/fts";
		} else {
			$url = "https://paynetzuat.atomtech.in/paynetz/epi/fts";
		}
		$this->setTransactionUrl($url);
		$this->setPort($port);
	}
	
	public function setClientCode($clientCode) {
			$this->clientCode = urlencode(base64_encode($clientCode));
	}
	
	private function getClientCode() {
		return $this->clientCode;
	}
	
	private function setPort($port) {
		$this->port = $port;
	}
	
	private function getPort() {
		return $this->port;
	}
	
	/**
     * @return the $transactionId
     */
    public function getudf9()
    {
        return $this->udf9;
    }

    /**
     * @param string $transactionId
     */
    public function setudf9($udf9)
    {
        $this->udf9 = $udf9;
    }


	public function getChecksum(){
        $str = $this->login . $this->password . "NBFundTransfer" . $this->productId . $this->transactionId . $this->amount . "INR";
       // echo $str;exit;
        $signature =  hash_hmac("sha512",$str,$this->reqHashKey,false);
        return $signature;
    }

    private function getData(){
		$strReqst = "";
		$strReqst .= "login=".$this->getLogin();
		$strReqst .= "&pass=".$this->getPassword();
		//$txnType = $this->getTransactionType();
		//if($txnType== 'NB'){
        $strReqst .= "&ttype=NBFundTransfer";
		//}else{
			//$strReqst .= "&ttype=".$this->getccType();
		//}
		$strReqst .= "&prodid=".$this->getProductId();
		$strReqst .= "&amt=".$this->getAmount();
		$strReqst .= "&txncurr=".$this->getTransactionCurrency();
		$strReqst .= "&txnscamt=".$this->getTransactionAmount();
		$strReqst .= "&ru=".$this->getReturnUrl();
		$strReqst .= "&clientcode=".$this->getClientCode();
		$strReqst .= "&txnid=".$this->getTransactionId();
		$strReqst .= "&date=".$this->getTransactionDate();
		$strReqst .= "&udf1=".$this->getCustomerName();
		$strReqst .= "&udf2=".$this->getCustomerEmailId();
		$strReqst .= "&udf3=".$this->getCustomerMobile();
		$strReqst .= "&udf4=".$this->getCustomerBillingAddress();
		$strReqst .= "&custacc=".$this->getCustomerAccount();
        $strReqst .= "&signature=".$this->getChecksum();
        $strReqst .= "&udf9=".$this->getudf9();
		return $strReqst;
    }

    /**
     * This function returns transaction token url
     * @return string
     */
    public function getPGUrl(){
        if ($this->mode != null && $this->mode != "") {
            try {
				$this->setUrl();
                $data = $this->getData();
				$this->writeLog($data);
				return $this->transactionUrl . "?" .$data;
            } catch ( Exception $ex ) {
                echo "Error while getting transaction token : " . $ex->getMessage();
                return;
            }
        } else {
            return "Please set mode live or test";
        }
    }
    
    public function validateResponse($responseParams)
    {
        $str = $responseParams["mmp_txn"].$responseParams["mer_txn"].$responseParams["f_code"].$responseParams["prod"].$responseParams["discriminator"].$responseParams["amt"].$responseParams["bank_txn"];
        $signature =  hash_hmac("sha512",$str,$this->respHashKey,false);
        if($signature == $responseParams["signature"]){
            return true;
        } else {
            return false;
        }

    }
	
	private function writeLog($data){
		$fileName = "date".date("Y-m-d").".txt";
		$fp = fopen("assets/log/".$fileName, 'a+');
		$data = date("Y-m-d H:i:s")." - ".$data."\n";
		fwrite($fp,$data);
		fclose($fp);
	}
    

}