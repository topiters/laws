<?php

/////////////////////////////////////////////////////////////////////////////
// 这个文件是 美容整形社区项目的一部分
//
// Copyright (c) 2015 – 2020  QQ:1149100178
// 要查看完整的版权信息和许可信息，请查看源代码中附带的 COPYRIGHT 文件，
// 或者联系qq:easyWe(2504585798)获得详细信息。

class  DatasAction extends  CommonAction{
    

    public function cityareas(){
        $data = array();
        $data['city']       = D('Chinaarea')->where(array('region_type'=>1))->select();
        $data['area']       = D('Chinaarea')->where(array('region_type'=>2))->select();
        $data['status'] = self::BAO_REQUEST_SUCCESS;
        echo json_encode($data);
        die;
    }
	
	public  function cityarea(){
        $data = array();
        $data['city']       = D('Chinaarea')->where(array('region_type'=>1))->select();
        $data['area']       = D('Chinaarea')->where(array('region_type'=>2))->select();
        $data['town']       = D('Chinaarea')->where(array('region_type'=>3))->select();
        
        header("Content-Type:application/javascript");
        echo   'var  cityareas = '.  json_encode($data);die;
    }
    
    public function cab() { //城市地区商圈
        $name = htmlspecialchars($_GET['name']);
        $data = array();
        $data['city']       = D('City')->fetchAll();
        $data['area']       = D('Area')->fetchAll();
        $data['business']   = D('Business')->fetchAll();
        header("Content-Type:application/javascript");
        echo  'var '.$name.'='.  json_encode($data).';';
        die;
    }
	
    public function tuancata()
    {
        $city_id    = $this->_param('city_id');
        $tuan_cata  = D('TuanCate')->fetchAll();
        $_cata       = array();
        foreach($tuan_cata as $cata){
            $_cata[$cata['cate_id']] = $cata['cate_name'];
        }
        $this->stringify(array('status'=>self::BAO_REQUEST_SUCCESS,'tuan'=>$_cata));
    }

	/*
    * 获取accessid以及accesstoken
    */
	public function xinge(){ 
        $plat = $this->_get('plat');
        $where = array('k'=>'xinge');
        $xinge = D('setting')->where($where)->find();
        if(empty($xinge))
        {
            $data = array('status'=>self::BAO_DB_ERROR,'msg'=>'未能成功获取accesskey');
            $this->stringify($data);
        }
        $xinge = unserialize($xinge['v']);
        switch ($plat) {
            case 'ios':
             if(!empty($xinge['iosappid'])&&!empty($xinge['iosaccesskey']))     
             $data = array('status'=>self::BAO_REQUEST_SUCCESS,'accessid'=>$xinge['iosappid'],'accesskey'=>$xinge['iosaccesskey']);
             $this->stringify($data);
             break;
            case 'android':
             if(!empty($xinge['appid'])&&!empty($xinge['appaccesskey']))
             $data = array('status'=>self::BAO_REQUEST_SUCCESS,'accessid'=>$xinge['appid'],'accesskey'=>$xinge['appaccesskey']);
             $this->stringify($data);
             break;
        }
        $data = array('status'=>self::BAO_DB_ERROR,'msg'=>'未能成功获取accesskey');
        $this->stringify($data);
	}

	public function cab_app() { //城市地区商圈
        $name = htmlspecialchars($this->_param('name'));
        $data = array();
        $data['city']       = D('City')->fetchAll();
        $data['area']       = D('Area')->fetchAll();
        $data['business']   = D('Business')->fetchAll();
        //header("Content-Type:application/javascript");
		$data = array('status'=>self::BAO_REQUEST_SUCCESS,'cityareas'=>$data);
        $this->stringify($data);
    }
    
	public function cates(){ //店铺团购商品
		$data = array();
		$data['shopcates'] = D('Shopcate')->fetchAll();
		$data['tuancates'] = D('Tuancate')->fetchAll();
		$data['goodscates'] = D('Goodscate')->fetchAll();
        $data['status'] = self::BAO_REQUEST_SUCCESS;
        echo json_encode($data);
        die;
	}
	
    
}