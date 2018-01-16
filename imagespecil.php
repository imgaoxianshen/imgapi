<?php


/**
 * ai相关和img相关
 *
 * @author Administrator
 */


class iaimg extends  iapibase
{	
	private $valid = array(

    	"imgspecil"=>array(
			array('field'=>'id',"required"=>true),
            array("field"=>'type',"required"=>true),
		),	

	);


	private $conf = array(
		'ptu_filter'=>array(
				['id'=>1,'name'=>'黛紫','img'=>'xxx.jpg'],
				['id'=>2,'name'=>'岩井','img'=>'xxx.jpg'],
				['id'=>3,'name'=>'粉嫩','img'=>'xxx.jpg'],
				['id'=>4,'name'=>'错觉','img'=>'xxx.jpg'],
				['id'=>5,'name'=>'暖阳','img'=>'xxx.jpg'],
                ['id'=>6,'name'=>'浪漫','img'=>'xxx.jpg'],
                ['id'=>7,'name'=>'蔷薇','img'=>'xxx.jpg'],
                ['id'=>8,'name'=>'睡莲','img'=>'xxx.jpg'],
                ['id'=>9,'name'=>'糖果玫瑰','img'=>'xxx.jpg'],
                ['id'=>10,'name'=>'新叶','img'=>'xxx.jpg'],
                ['id'=>11,'name'=>'尤加利','img'=>'xxx.jpg'],
                ['id'=>12,'name'=>'墨','img'=>'xxx.jpg'],
                ['id'=>13,'name'=>'玫瑰初雪','img'=>'xxx.jpg'],
                ['id'=>14,'name'=>'樱桃布丁','img'=>'xxx.jpg'],
                ['id'=>15,'name'=>'白茶','img'=>'xxx.jpg'],
                ['id'=>16,'name'=>'甜薄荷','img'=>'xxx.jpg'],
                ['id'=>17,'name'=>'樱红','img'=>'xxx.jpg'],
                ['id'=>18,'name'=>'圣代','img'=>'xxx.jpg'],
                ['id'=>19,'name'=>'莫斯科','img'=>'xxx.jpg'],
                ['id'=>20,'name'=>'冲绳','img'=>'xxx.jpg'],
                ['id'=>21,'name'=>'粉碧','img'=>'xxx.jpg'],
                ['id'=>22,'name'=>'地中海','img'=>'xxx.jpg'],
                ['id'=>23,'name'=>'首尔','img'=>'xxx.jpg'],
                ['id'=>24,'name'=>'佛罗伦萨','img'=>'xxx.jpg'],
                ['id'=>25,'name'=>'札幌','img'=>'xxx.jpg'],
                ['id'=>26,'name'=>'栀子','img'=>'xxx.jpg'],
                ['id'=>27,'name'=>'东京','img'=>'xxx.jpg'],
                ['id'=>28,',name'=>'昭和','img'=>'xxx.jpg'],
                ['id'=>29,'name'=>'自然','img'=>'xxx.jpg'],
                ['id'=>30,'name'=>'清逸','img'=>'xxx.jpg'],
                ['id'=>31,'name'=>'染','img'=>'xxx.jpg'],
                ['id'=>32,'name'=>'甜美','img'=>'xxx.jpg'],

		),
        "vision_filter"=>array(
                [id=>1,"img"=>"xxx.jpg"],
                [id=>2,"img"=>"xxx.jpg"],
                [id=>3,"img"=>"xxx.jpg"],
                [id=>4,"img"=>"xxx.jpg"],
                [id=>5,"img"=>"xxx.jpg"],
                [id=>6,"img"=>"xxx.jpg"],
                [id=>7,"img"=>"xxx.jpg"],
                [id=>8,"img"=>"xxx.jpg"],
                [id=>9,"img"=>"xxx.jpg"],
                [id=>10,"img"=>"xxx.jpg"],
                [id=>11,"img"=>"xxx.jpg"],
                [id=>12,"img"=>"xxx.jpg"],
                [id=>13,"img"=>"xxx.jpg"],
                [id=>14,"img"=>"xxx.jpg"],
                [id=>15,"img"=>"xxx.jpg"],                
                [id=>16,"img"=>"xxx.jpg"],
                [id=>17,"img"=>"xxx.jpg"],
                [id=>18,"img"=>"xxx.jpg"],
                [id=>19,"img"=>"xxx.jpg"],
                [id=>20,"img"=>"xxx.jpg"],
                [id=>21,"img"=>"xxx.jpg"],
                [id=>22,"img"=>"xxx.jpg"],
                [id=>23,"img"=>"xxx.jpg"],
                [id=>24,"img"=>"xxx.jpg"],
                [id=>25,"img"=>"xxx.jpg"],
                [id=>26,"img"=>"xxx.jpg"],
                [id=>27,"img"=>"xxx.jpg"],
                [id=>28,"img"=>"xxx.jpg"],
                [id=>29,"img"=>"xxx.jpg"],
                [id=>30,"img"=>"xxx.jpg"],
                [id=>31,"img"=>"xxx.jpg"],
                [id=>32,"img"=>"xxx.jpg"],
                [id=>33,"img"=>"xxx.jpg"],
                [id=>34,"img"=>"xxx.jpg"],
                [id=>35,"img"=>"xxx.jpg"],                
                [id=>36,"img"=>"xxx.jpg"],
                [id=>37,"img"=>"xxx.jpg"],
                [id=>38,"img"=>"xxx.jpg"],
                [id=>39,"img"=>"xxx.jpg"],
                [id=>40,"img"=>"xxx.jpg"],
                [id=>41,"img"=>"xxx.jpg"],
                [id=>42,"img"=>"xxx.jpg"],
                [id=>43,"img"=>"xxx.jpg"],
                [id=>44,"img"=>"xxx.jpg"],
                [id=>45,"img"=>"xxx.jpg"],
                [id=>46,"img"=>"xxx.jpg"],
                [id=>47,"img"=>"xxx.jpg"],
                [id=>48,"img"=>"xxx.jpg"],
                [id=>49,"img"=>"xxx.jpg"],
                [id=>50,"img"=>"xxx.jpg"],
                [id=>51,"img"=>"xxx.jpg"],
                [id=>52,"img"=>"xxx.jpg"],
                [id=>53,"img"=>"xxx.jpg"],
                [id=>54,"img"=>"xxx.jpg"],
                [id=>55,"img"=>"xxx.jpg"],                
                [id=>56,"img"=>"xxx.jpg"],
                [id=>57,"img"=>"xxx.jpg"],
                [id=>58,"img"=>"xxx.jpg"],
                [id=>59,"img"=>"xxx.jpg"],
                [id=>60,"img"=>"xxx.jpg"],
                [id=>61,"img"=>"xxx.jpg"],
                [id=>62,"img"=>"xxx.jpg"],
                [id=>63,"img"=>"xxx.jpg"],
                [id=>64,"img"=>"xxx.jpg"],
                [id=>65,"img"=>"xxx.jpg"],

        ),
		'decorate'=>array(
				['id'=>1,'name'=>'埃及装','img'=>'xxx.jpg'],
				['id'=>2,'name'=>'巴西土著妆','img'=>'xxx.jpg'],
				['id'=>3,'name'=>'灰姑娘妆','img'=>'xxx.jpg'],
				['id'=>4,'name'=>'恶魔妆','img'=>'xxx.jpg'],
                ['id'=>5,'name'=>'武媚娘妆','img'=>'xxx.jpg'],
                ['id'=>6,'name'=>'星光薰衣草','img'=>'xxx.jpg'],
                ['id'=>7,'name'=>'花千骨','img'=>'xxx.jpg'],
                ['id'=>8,'name'=>'僵尸妆','img'=>'xxx.jpg'],
                ['id'=>9,'name'=>'爱国妆','img'=>'xxx.jpg'],
                ['id'=>10,'name'=>'小胡子妆','img'=>'xxx.jpg'],
                ['id'=>11,'name'=>'美羊羊妆','img'=>'xxx.jpg'],
                ['id'=>12,'name'=>'火影鸣人妆','img'=>'xxx.jpg'],
                ['id'=>13,'name'=>'刀马旦妆','img'=>'xxx.jpg'],
                ['id'=>14,'name'=>'泡泡妆','img'=>'xxx.jpg'],
                ['id'=>15,'name'=>'桃花妆','img'=>'xxx.jpg'],
                ['id'=>16,'name'=>'女皇妆','img'=>'xxx.jpg'],
                ['id'=>17,'name'=>'权志龙','img'=>'xxx.jpg'],
                ['id'=>18,'name'=>'撩妹妆','img'=>'xxx.jpg'],
                ['id'=>19,'name'=>'印第安妆','img'=>'xxx.jpg'],
                ['id'=>20,'name'=>'印度妆','img'=>'xxx.jpg'],
                ['id'=>21,'name'=>'萌兔妆','img'=>'xxx.jpg'],
                ['id'=>22,'name'=>'大圣妆','img'=>'xxx.jpg'],
		),
		'merge'=>array(
				['id'=>1,'name'=>'奇迹','img'=>'xxx.jpg'],
				['id'=>2,'name'=>'压岁钱','img'=>'xxx.jpg'],
				['id'=>3,'name'=>'范蠡','img'=>'xxx.jpg'],
				['id'=>4,'name'=>'李白','img'=>'xxx.jpg'],
                ['id'=>5,'name'=>'孙尚香','img'=>'xxx.jpg'],
                ['id'=>6,'name'=>'花无缺','img'=>'xxx.jpg'],
                ['id'=>7,'name'=>'西施','img'=>'xxx.jpg'],
                ['id'=>8,'name'=>'杨玉环','img'=>'xxx.jpg'],
                ['id'=>9,'name'=>'白浅','img'=>'xxx.jpg'],
                ['id'=>10,'name'=>'凤九','img'=>'xxx.jpg'],
                ['id'=>11,'name'=>'夜华','img'=>'xxx.jpg'],
                ['id'=>12,'name'=>'年年有余','img'=>'xxx.jpg'],
                ['id'=>13,'name'=>'新年萌萌哒','img'=>'xxx.jpg'],
                ['id'=>14,'name'=>'王者荣耀荆轲','img'=>'xxx.jpg'],
                ['id'=>15,'name'=>'王者荣耀李白','img'=>'xxx.jpg'],
                ['id'=>16,'name'=>'王者荣耀哪吒','img'=>'xxx.jpg'],
                ['id'=>17,'name'=>'王者荣耀王昭君','img'=>'xxx.jpg'],
                ['id'=>18,'name'=>'王者荣耀甄姬','img'=>'xxx.jpg'],
                ['id'=>19,'name'=>'王者荣耀诸葛亮','img'=>'xxx.jpg'],
                ['id'=>20,'name'=>'赵灵儿','img'=>'xxx.jpg'],
                ['id'=>21,'name'=>'李逍遥','img'=>'xxx.jpg'],
                ['id'=>22,'name'=>'爆炸头','img'=>'xxx.jpg'],
                ['id'=>23,'name'=>'村姑','img'=>'xxx.jpg'],
                ['id'=>24,'name'=>'光头','img'=>'xxx.jpg'],
                ['id'=>25,'name'=>'呵呵哒','img'=>'xxx.jpg'],
                ['id'=>26,'name'=>'肌肉','img'=>'xxx.jpg'],
                ['id'=>27,'name'=>'肉山','img'=>'xxx.jpg'],
                ['id'=>28,'name'=>'机智','img'=>'xxx.jpg'],
                ['id'=>29,'name'=>'1927年军装（男）','img'=>'xxx.jpg'],
                ['id'=>30,'name'=>'1927年军装（女）','img'=>'xxx.jpg'],
                ['id'=>31,'name'=>'1929年军装（男）','img'=>'xxx.jpg'],
                ['id'=>32,'name'=>'1929年军装（女）','img'=>'xxx.jpg'],
                ['id'=>33,'name'=>'1937年军装（男）','img'=>'xxx.jpg'],
                ['id'=>34,'name'=>'1937年军装（女）','img'=>'xxx.jpg'],
                ['id'=>35,'name'=>'1948年军装（男）','img'=>'xxx.jpg'],
                ['id'=>36,'name'=>'1948年军装（女）','img'=>'xxx.jpg'],
                ['id'=>37,'name'=>'1950年军装（男）','img'=>'xxx.jpg'],
                ['id'=>38,'name'=>'1950年军装（女）','img'=>'xxx.jpg'],
                ['id'=>39,'name'=>'1955年军装（男）','img'=>'xxx.jpg'],
                ['id'=>40,'name'=>'1955年军装（女）','img'=>'xxx.jpg'],
                ['id'=>41,'name'=>'1965年军装（男）','img'=>'xxx.jpg'],
                ['id'=>42,'name'=>'1965年军装（女）','img'=>'xxx.jpg'],
                ['id'=>43,'name'=>'1985年军装（男）','img'=>'xxx.jpg'],
                ['id'=>44,'name'=>'1985年军装（女）','img'=>'xxx.jpg'],
                ['id'=>45,'name'=>'1987年军装（男）','img'=>'xxx.jpg'],
                ['id'=>46,'name'=>'1987年军装（女）','img'=>'xxx.jpg'],
                ['id'=>47,'name'=>'1999年军装（男）','img'=>'xxx.jpg'],
                ['id'=>48,'name'=>'1999年军装（女）','img'=>'xxx.jpg'],
                ['id'=>49,'name'=>'2007年军装（男）','img'=>'xxx.jpg'],
                ['id'=>50,'name'=>'2007年军装（女）','img'=>'xxx.jpg'],

		),
        'cosmetic'=>array(
                ['id'=>1,'type'=>'日系妆','name'=>'芭比粉','img'=>'xxx.jpg'],
                ['id'=>2,'type'=>'日系妆','name'=>'清透','img'=>'xxx.jpg'],
                ['id'=>3,'type'=>'日系妆','name'=>'烟灰','img'=>'xxx.jpg'],
                ['id'=>4,'type'=>'日系妆','name'=>'自然','img'=>'xxx.jpg'],
                ['id'=>5,'type'=>'日系妆','name'=>'樱花粉','img'=>'xxx.jpg'],
                ['id'=>6,'type'=>'日系妆','name'=>'原宿红','img'=>'xxx.jpg'],
                ['id'=>7,'type'=>'韩妆','name'=>'闪亮','img'=>'xxx.jpg'],
                ['id'=>8,'type'=>'韩妆','name'=>'粉紫','img'=>'xxx.jpg'],
                ['id'=>9,'type'=>'韩妆','name'=>'粉嫩','img'=>'xxx.jpg'],
                ['id'=>10,'type'=>'韩妆','name'=>'自然','img'=>'xxx.jpg'],
                ['id'=>11,'type'=>'韩妆','name'=>'清透','img'=>'xxx.jpg'],
                ['id'=>12,'type'=>'韩妆','name'=>'大地色','img'=>'xxx.jpg'],
                ['id'=>13,'type'=>'韩妆','name'=>'玫瑰','img'=>'xxx.jpg'],
                ['id'=>14,'type'=>'韩妆','name'=>'自然','img'=>'xxx.jpg'],
                ['id'=>15,'type'=>'韩妆','name'=>'清透','img'=>'xxx.jpg'],
                ['id'=>16,'type'=>'韩妆','name'=>'桃粉','img'=>'xxx.jpg'],
                ['id'=>17,'type'=>'韩妆','name'=>'橘粉','img'=>'xxx.jpg'],
                ['id'=>18,'type'=>'韩妆','name'=>'春夏','img'=>'xxx.jpg'],
                ['id'=>19,'type'=>'韩妆','name'=>'秋冬','img'=>'xxx.jpg'],
                ['id'=>20,'type'=>'主题妆','name'=>'经典复古','img'=>'xxx.jpg'],
                ['id'=>21,'type'=>'主题妆','name'=>'性感混血','img'=>'xxx.jpg'],
                ['id'=>22,'type'=>'主题妆','name'=>'炫彩明眸','img'=>'xxx.jpg'],
                ['id'=>23,'type'=>'主题妆','name'=>'紫色魅惑','img'=>'xxx.jpg'],

        ),
        'sticker'=>array(
                ['id'=>1,'name'=>'NewDay','img'=>'xxx.jpg'],
                ['id'=>2,'name'=>'欢乐球吃球1','img'=>'xxx.jpg'],
                ['id'=>3,'name'=>'Bonvoyage','img'=>'xxx.jpg'],
                ['id'=>4,'name'=>'Enjoy','img'=>'xxx.jpg'],
                ['id'=>5,'name'=>'ChickenSpring','img'=>'xxx.jpg'],
                ['id'=>6,'name'=>'ChristmasShow','img'=>'xxx.jpg'],
                ['id'=>7,'name'=>'ChristmasSnow','img'=>'xxx.jpg'],
                ['id'=>8,'name'=>'CircleCat','img'=>'xxx.jpg'],
                ['id'=>9,'name'=>'CircleMouse','img'=>'xxx.jpg'],
                ['id'=>10,'name'=>'CirclePig','img'=>'xxx.jpg'],
                ['id'=>11,'name'=>'Comicmn','img'=>'xxx.jpg'],
                ['id'=>12,'name'=>'CuteBaby','img'=>'xxx.jpg'],
                ['id'=>13,'name'=>'Envolope','img'=>'xxx.jpg'],
                ['id'=>14,'name'=>'Fairytale','img'=>'xxx.jpg'],
                ['id'=>15,'name'=>'GoodNight','img'=>'xxx.jpg'],
                ['id'=>16,'name'=>'HalloweenNight','img'=>'xxx.jpg'],
                ['id'=>17,'name'=>'LovelyDay','img'=>'xxx.jpg'],
                ['id'=>18,'name'=>'Newyear2017','img'=>'xxx.jpg'],
                ['id'=>19,'name'=>'PinkSunny','img'=>'xxx.jpg'],
                ['id'=>20,'name'=>'KIRAKIRA','img'=>'xxx.jpg'],
                ['id'=>21,'name'=>'欢乐球吃球2','img'=>'xxx.jpg'],
                ['id'=>22,'name'=>'SnowWhite','img'=>'xxx.jpg'],
                ['id'=>23,'name'=>'SuperStar','img'=>'xxx.jpg'],
                ['id'=>24,'name'=>'WonderfulWork','img'=>'xxx.jpg'],
                ['id'=>25,'name'=>'Cold','img'=>'xxx.jpg'],
                ['id'=>26,'name'=>'狼人杀守卫','img'=>'xxx.jpg'],
                ['id'=>27,'name'=>'狼人杀猎人','img'=>'xxx.jpg'],
                ['id'=>28,'name'=>'狼人杀预言家','img'=>'xxx.jpg'],
                ['id'=>29,'name'=>'狼人杀村民','img'=>'xxx.jpg'],
                ['id'=>30,'name'=>'狼人杀女巫','img'=>'xxx.jpg'],
                ['id'=>31,'name'=>'狼人杀狼人','img'=>'xxx.jpg'],             
        ),

	);

	private $url = array(
		'ptu_filter'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_imgfilter",//图片滤镜（天天P图）适合人物图片
        'vision_filter'=>"https://api.ai.qq.com/fcgi-bin/vision/vision_imgfilter",//图片滤镜（AI Lab）适合风景图片
		'decorate'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_facedecoration",//变装
		'merge'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_facemerge",//人脸融合
		'cosmetic'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_facecosmetic",//美妆
        'sticker'=>"https://api.ai.qq.com/fcgi-bin/ptu/ptu_facesticker",//大头贴
        'age'=>'https://api.ai.qq.com/fcgi-bin/ptu/ptu_faceage',//年龄检测
	);
	
    
    //图片特效（不支持多图）	
    //参数--img?上传的图片
    //---id特效的id
    //type--类型(imgfilter,decorate,merge,cosmetic)


	public function imgspecil(){
		$client=array();
                
        $arrInput=array();
        $params=(self::ExtractCommonParams());
        extract($params); 
        self::chkMemberValid($token,$client);
        $msg="";
        
        if(!$this::Validate($this->valid['imgspecil'],$params,$msg))
        {
        	self::XpiResp(-1,$msg);
        }

        //上传文件
        $photoObj = new PhotoUpload();
        $img = current($photoObj -> run());
        if($img['flag']==!1){
            //上传成功
            $this->XpiResp(-2,"上传文件失败");
        }

        
        //获取上传后的资源
		$data = file_get_contents($img['img']);
		
        $param['image'] = base64_encode($data);
        echo "<img  src=\"data:image/jpg;base64,".$param['image']."\"/>";
        switch($type){
            case "ptu_filter":$param['filter']=$id;break;
            case "vision_filter":$param['filter']=$id;$param['session_id']=time();break;
            case "decorate":$param['decoration']=$id;break;
            case "merge":$param['model']=$id;break;
            case "cosmetic":$param['cosmetic']=$id;break;
            case "sticker":$param['sticker']=$id;break;
            case "age":break;
            default:$this->XpiResp(-3,"类型错误");
        }

		$ret= self::tengxun_post($this->url[$type],$param);
		$ret=json_decode($ret,true);        
        //ret成功才保存
        // var_dump($ret);
        if($ret['ret']!=0){
            $this->XpiResp(-4,$ret['msg']);
        }

        $resimg = base64_decode($ret['data']['image']);
        $filename = PhotoUpload::hashDir(true)."/".date("YmdHis").mt_rand(100, 999).".jpg";
        $a = file_put_contents($filename,$resimg);
        echo "<img  src=\"data:image/jpg;base64,".$ret['data']['image']."\"/>";
        $this->XpiRespSuccess($filename);
                      

	}
	


	private function http($url, $params = array(), $method = 'GET', $ssl = false) 
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




    private function tengxun_post($url,$bus_params)
    {
 		//https://api.ai.qq.com/fcgi-bin/aai/aai_tts?".$tmp ); 
    	$param=[];
        $param['app_id']="11000";
        
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


    //获取所有分类细节
    //参数type
    public function get_alldetail()
    {

        $client=array();               
        $arrInput=array();
        $params=(self::ExtractCommonParams());
        extract($params); 
        self::chkMemberValid($token,$client);
        
        if($type){
            if(empty($this->conf[$type])){
                $this->XpiResp(-1,"该分类数据为空");
            }else{
                $this->XpiRespSuccess($this->conf[$type]);
            }
            
        }else{
            $this->XpiRespSuccess($this->conf);
        }

    }
    

}
