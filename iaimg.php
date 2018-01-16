<?php


/**
 * ai相关和img相关
 *
 * @author Administrator
 */


class iaimg extends  iapibase
{	
	private $valid = array(
		"filter"=>array(
			array('field'=>'img',"required"=>true),
			array('field'=>'id',"required"=>true),
		),
		"decorate"=>array(
			array('field'=>'img',"required"=>true),
			array('field'=>'id',"required"=>true),
		),
		"merge"=>array(
			array('field'=>'img',"required"=>true),
			array('field'=>'id',"required"=>true),
		),
		"cosmetic"=>array(
			array('field'=>'img',"required"=>true),
			array('field'=>'id',"required"=>true),
		),
		);


	private $conf = array(
		'filter'=>array(
				['id'=>1,'name'=>'黛紫','img'=>'xxx.jpg'],
				['id'=>2,'name'=>'岩井','img'=>'xxx.jpg'],
				['id'=>3,'name'=>'粉嫩','img'=>'xxx.jpg'],
				['id'=>4,'name'=>'错觉','img'=>'xxx.jpg'],
				['id'=>5,'name'=>'暖阳','img'=>'xxx.jpg'],
		),
		'decorate'=>array(
				['id'=>1,'name'=>'埃及装','img'=>'xxx.jpg'],
				['id'=>2,'name'=>'巴西土著妆','img'=>'xxx.jpg'],
				['id'=>3,'name'=>'灰姑娘妆','img'=>'xxx.jpg'],
				['id'=>4,'name'=>'恶魔妆','img'=>'xxx.jpg'],
		),
		'merge'=>array(
				['id'=>1,'name'=>'奇迹','img'=>'xxx.jpg'],
				['id'=>2,'name'=>'压岁钱','img'=>'xxx.jpg'],
				['id'=>3,'name'=>'范蠡','img'=>'xxx.jpg'],
				['id'=>4,'name'=>'李白','img'=>'xxx.jpg'],
		),

	);

	private $url = array(
		'filter'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_imgfilter",
		'decorate'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_facedecoration",
		'merge'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_facemerge",
		'cosmetic'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_facecosmetic",
	);

	


	//滤镜（img参数）
	public function filter(){
		$client=array();
                
        $arrInput=array();
        $params=(self::ExtractCommonParams());
        extract($params); 
        self::chkMemberValid($token,$client);
        $msg="";
        
        if(!$this::Validate($this->valid['filter'],$params,$msg))
        {
        	self::XpiResp(-1,$msg);
        }


		$data = file_get_contents($img);
		$param=array(
			"image"=>base64_encode($data),
			"filter"=>$id,
		);
		$ret= self::tengxun_post($this->url['filter'],$param);
		$ret=json_decode($ret,true);        

        var_dump($ret);
                
        echo "<img  src=\"data:image/jpg;base64,".$ret['data']['image']."\"/>";              

	}
	//变装
	public function decorate()
	{        
		$client=array();
                
        $arrInput=array();
        $params=(self::ExtractCommonParams());
        extract($params); 
        self::chkMemberValid($token,$client);   
        $msg="";        
        if(!$this::Validate($this->valid['filter'],$params,$msg))
        {
        	self::XpiResp(-1,$msg);
        }


        $data  = file_get_contents($img);
       	$param['image'] = base64_encode($data);
                               
        $param['decoration']=$id;
        
        $ret= self::tengxun_post($this->url['decorate'],$param);
        $ret=json_decode($ret,true);        

        var_dump($ret);
                
        echo "<img  src=\"data:image/jpg;base64,".$ret['data']['image']."\"/>";                          
	
	}
	//融合
	public function merge()
	{
		$client=array();                
        $arrInput=array();
        $params=(self::ExtractCommonParams());
        extract($params); 
        self::chkMemberValid($token,$client);
       	$msg="";        
        if(!$this::Validate($this->valid['filter'],$params,$msg))
        {
        	self::XpiResp(-1,$msg);
        }


		$data = file_get_contents($img);
		$param=array(
			"image"=>base64_encode($data),
			"model"=>$id,
		);
		$ret= self::tengxun_post($this->url['merge'],$param);
		$ret=json_decode($ret,true);        

        var_dump($ret);
                
        echo "<img  src=\"data:image/jpg;base64,".$ret['data']['image']."\"/>";             
	}
	//美妆
	public function cosmetic()
	{
		$client=array();               
        $arrInput=array();
        $params=(self::ExtractCommonParams());
        extract($params); 
        self::chkMemberValid($token,$client);
      	$msg="";
        
        if(!$this::Validate($this->valid['filter'],$params,$msg))
        {
        	self::XpiResp(-1,$msg);
        }



		$data = file_get_contents($img);
		$param=array(
			"image"=>base64_encode($data),
			"model"=>$id,
		);
		$ret= self::tengxun_post($this->url['cosmetic'],$param);
		$ret=json_decode($ret,true);        

        var_dump($ret);
                
        echo "<img  src=\"data:image/jpg;base64,".$ret['data']['image']."\"/>";       
	}




	protected function http($url, $params = array(), $method = 'GET', $ssl = false) 
	{
    	$opts = array(CURLOPT_TIMEOUT => 30, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false);

    /* 根据请求类型设置特定参数 */
        switch (strtoupper($method)) {
            case 'GET' :
                $opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
                break;
            case 'POST' :
                $opts[CURLOPT_URL] = $url;
                $opts[CURLOPT_POST] = 1;
                $opts[CURLOPT_POSTFIELDS] = $params;
                break;
        }
        /* 初始化并执行curl请求 */
        $ch = curl_init();
         
        curl_setopt_array($ch, $opts);
        $data = curl_exec($ch);
        $err = curl_errno($ch);
        $errmsg = curl_error($ch);
        curl_close($ch);
        if ($err > 0) {
            $this -> error = $errmsg;
            return false;
        } else {
            return $data;
        }
    }




protected function tengxun_post($url,$bus_params)
{
 		//https://api.ai.qq.com/fcgi-bin/aai/aai_tts?".$tmp ); 
    	$param=[];
        $param['app_id']="10000";
        //$param['app_key']="AIw2J1EFkr2LAWZH";
        $param['nonce_str']=time();
        $param['time_stamp']= time();
        
        
        $param = array_merge($param,$bus_params);
        /*
        $param['speaker']=1;
        $param['format']=2;
        $param['volume']=0;
        $param['speed']=100;
        $param['text']="你好 啊 靠";
        */
        
        
        ksort($param);
        $arrString=[];
        foreach($param as $k=>$v){
            $arrString[]="$k=".  ( urlencode($v) );
        }
        

        
        $tmp=implode("&",$arrString)."&app_key=xxx";
     
        $sign= strtoupper( md5( $tmp ) ) ;
     
        
        $arrString[]='sign='.$sign;
        $param['sign']=$sign;
        
        $tmp=implode("&",$arrString) ;  
        
        $ret=  self::http($url, implode("&",$arrString ) ,'POST');//    file_get_contents($url."?".$tmp ); 
        return $ret;
 }
    

}