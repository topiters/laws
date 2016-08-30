<?php

/////////////////////////////////////////////////////////////////////////////
	// 这个文件是 美容整形社区项目的一部分
	//
	// Copyright (c) 2015 – 2020  QQ:1149100178
	// 要查看完整的版权信息和许可信息，请查看源代码中附带的 COPYRIGHT 文件，
	// 或者联系qq:easyWe(2504585798)获得详细信息。
class HospitalapplyAction extends CommonAction {

    private $create_fields = array('cate_id', 'name', 'hospital_name', 'contact', 'create_time', 'create_ip');

    public function index() {
        $Hospitalapply = D('Hospitalapply');
        import('ORG.Util.Page'); // 导入分页类
        $map = array();
        if($name = $this->_param('name','htmlspecialchars')){
            $map['name'] = array('LIKE','%'.$name.'%');
            $this->assign('name',$name);
        }
        if($hospital_name = $this->_param('hospital_name','htmlspecialchars')){
            $map['hospital_name'] = array('LIKE','%'.$hospital_name.'%');
            $this->assign('hospital_name',$hospital_name);
        }
        
        if($contact = $this->_param('contact','htmlspecialchars')){
            $map['contact'] = array('LIKE','%'.$contact.'%');
            $this->assign('contact',$contact);
        }
        
        $count = $Hospitalapply->where($map)->count(); // 查询满足要求的总记录数 
        $Page = new Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show(); // 分页显示输出
        $list = $Hospitalapply->order(array('apply_id'=>'desc'))->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        foreach($list as $key=>$val){
            $val['create_ip_area'] = $this->ipToArea($val['create_ip']);
            $val = $Hospitalapply->_format($val);
            $list[$key] = $val;
        }
        $this->assign('list', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        $this->display(); // 输出模板
    }

    public function create() {
        if ($this->isPost()) {
            $data = $this->createCheck();
            $obj = D('Hospitalapply');
            if ($obj->add($data)) {
                $this->baoSuccess('添加成功', U('hospitalapply/index'));
            }
            $this->baoError('操作失败！');
        } else {
            $this->assign('cates', D('Hospitalcate')->fetchAll());
            $this->display();
        }
    }

    private function createCheck() {
        $data = $this->checkFields($this->_post('data', false), $this->create_fields);
        $data['cate_id'] = (int) $data['cate_id'];
        if (empty($data['cate_id'])) {
            $this->baoError('分类不能为空');
        } $data['name'] = htmlspecialchars($data['name']);
        if (empty($data['name'])) {
            $this->baoError('医院管理员名称不能为空');
        } $data['hospital_name'] = htmlspecialchars($data['hospital_name']);
        if (empty($data['hospital_name'])) {
            $this->baoError('医院名称不能为空');
        } $data['contact'] = htmlspecialchars($data['contact']);
        if (empty($data['contact'])) {
            $this->baoError('联系方式不能为空');
        }
        if (!isPhone($data['contact']) && !isMobile($data['contact'])) {
            $this->baoError('联系方式格式不正确');
        }
        $data['create_time'] = NOW_TIME;
        $data['create_ip'] = get_client_ip();
        return $data;
    }

    public function audit($apply_id = 0) {
        if (is_numeric($apply_id) && ($apply_id = (int) $apply_id)) {
            $obj = D('Hospitalapply');
            $obj->save(array('apply_id' => $apply_id, 'audit' => 1));
            $this->baoSuccess('确认成功！', U('hospitalapply/index'));
        } else {
            $apply_id = $this->_post('apply_id', false);
            if (is_array($apply_id)) {
                $obj = D('Hospitalapply');
                foreach ($apply_id as $id) {
                    $obj->save(array('apply_id' => $id, 'audit' => 1));
                }
                $this->baoSuccess('确认成功！', U('hospitalapply/index'));
            }
            $this->baoError('请选择要确认的医院申请');
        }
    }

}