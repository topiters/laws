<?php

/////////////////////////////////////////////////////////////////////////////
	// 这个文件是 美容整形社区项目的一部分
	//
	// Copyright (c) 2015 – 2020  QQ:1149100178
	// 要查看完整的版权信息和许可信息，请查看源代码中附带的 COPYRIGHT 文件，
	// 或者联系qq:easyWe(2504585798)获得详细信息。

class LawyerkownAction extends CommonAction { //按逻辑  instructions  和  details 要分表出去

    private $create_fields = array('hospital_id', 'orderby', 'use_integral', 'cate_id', 'intro', 'title', 'photo', 'thumb', 'price', 'lawyerkown_price', 'settlement_price','mobile_fan', 'num', 'sold_num', 'bg_date', 'end_date', 'fail_date', 'is_hot', 'is_new', 'is_chose', 'freebook','xiadan','xiangou', 'activity_id', 'branch_id');
    private $edit_fields = array('hospital_id', 'orderby', 'use_integral', 'cate_id', 'intro', 'title', 'photo', 'thumb', 'price', 'lawyerkown_price', 'settlement_price','mobile_fan', 'num', 'sold_num', 'bg_date', 'end_date', 'fail_date', 'is_hot', 'is_new', 'is_chose', 'freebook','xiadan','xiangou', 'activity_id', 'branch_id');

    public function _initialize() {
        parent::_initialize();
        $this->Lawyerkowncates = D('Lawyerkowncate')->fetchAll();
        $this->assign('cates', $this->Lawyerkowncates);
    }

    public function index() {
        $Lawyerkown = D('Lawyerkown');
        import('ORG.Util.Page'); // 导入分页类
        $map = array('closed' => 0);
        if ($keyword = $this->_param('keyword', 'htmlspecialchars')) {
            $map['title'] = array('LIKE', '%' . $keyword . '%');
            $this->assign('keyword', $keyword);
        }
        if ($cate_id = (int) $this->_param('cate_id')) {
            $map['cate_id'] = array('IN', D('Lawyerkowncate')->getChildren($cate_id));
            $this->assign('cate_id', $cate_id);
        }
        if ($hospital_id = (int) $this->_param('hospital_id')) {
            $map['hospital_id'] = $hospital_id;
            $hospital = D('Hospital')->find($hospital_id);
            $this->assign('hospital_name', $hospital['hospital_name']);
            $this->assign('hospital_id', $hospital_id);
        }
        if ($audit = (int) $this->_param('audit')) {
            $map['audit'] = ($audit === 1 ? 1 : 0);
            $this->assign('audit', $audit);
        }
        $count = $Lawyerkown->where($map)->count(); // 查询满足要求的总记录数 
        $Page = new Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show(); // 分页显示输出
        $list = $Lawyerkown->where($map)->order(array('lawyerkown_id' => 'desc'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        foreach ($list as $k => $val) {
            if ($val['hospital_id']) {
                $hospital_ids[$val['hospital_id']] = $val['hospital_id'];
            }
            $val['create_ip_area'] = $this->ipToArea($val['create_ip']);
            $val = $Lawyerkown->_format($val);
            $list[$k] = $val;
        }
        if ($hospital_ids) {
            $this->assign('hospitals', D('Hospital')->lawyerkownsByIds($hospital_ids));
        }
        $this->assign('cates', D('Lawyerkowncate')->fetchAll());
        $this->assign('list', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        $this->display(); // 输出模板
    }

    public function branch($hospital_id){
        $hospital_id = (int)$hospital_id;
        $branch = D('Hospitalbranch')->where(array('hospital_id' => $hospital_id, 'closed' => 0, 'audit' => 1))->select();
        $str = "";
        foreach($branch as $k=>$val){
            $str += '<label style="margin-right: 10px;"><span><{$val.name}>：</span><input style="width: 20px; height: 20px;" type="checkbox" name="branch_id[]" value="<{$val.branch_id}>" /></label>';
        }
        $this->ajaxReturn(array('status'=>'0','str'=>$str));
    }

        public function create() {
        if ($this->isPost()) {
            $data = $this->createCheck();
            $obj = D('Lawyerkown');
            $details = $this->_post('details', 'SecurityEditorHtml');
            if (empty($details)) {
                $this->baoError('项目详情不能为空');
            }
            if ($words = D('Sensitive')->checkWords($details)) {
                $this->baoError('详细内容含有敏感词：' . $words);
            }
            $instructions = $this->_post('instructions', 'SecurityEditorHtml');
            if (empty($instructions)) {
                $this->baoError('购买须知不能为空');
            }
            if ($words = D('Sensitive')->checkWords($instructions)) {
                $this->baoError('购买须知含有敏感词：' . $words);
            }
            $branch_id = $this->_post('branch_id', false);
            foreach ($branch_id as $k => $val) {
                if (!$brdetail = D('Hospitalbranch')->find($val)) {
                    unset($branch_id[$k]);
                }
                if ($brdetail['hospital_id'] != $this->hospital_id) {
                    unset($branch_id[$k]);
                }
            }
            $branch = implode(',', $branch_id);
            $data['branch_id'] = $branch;
            $thumb = $this->_param('thumb', false);
            foreach ($thumb as $k => $val) {
                if (empty($val)) {
                    unset($thumb[$k]);
                }
                if (!isImage($val)) {
                    unset($thumb[$k]);
                }
            }
            $data['thumb'] = serialize($thumb);
            if ($lawyerkown_id = $obj->add($data)) {
                $wei_pic = D('Weixin')->getCode($lawyerkown_id, 2); //项目类型是2
                $obj->save(array('lawyerkown_id' => $lawyerkown_id, 'wei_pic' => $wei_pic));
                D('Lawyerkowndetails')->add(array('lawyerkown_id' => $lawyerkown_id, 'details' => $details, 'instructions' => $instructions));
                $this->baoSuccess('添加成功', U('lawyerkown/index'));
            }
            $this->baoError('操作失败！');
        } else {
            $this->display();
        }
    }

    private function createCheck() {
        $data = $this->checkFields($this->_post('data', false), $this->create_fields);
        $data['hospital_id'] = (int) $data['hospital_id'];
        if (empty($data['hospital_id'])) {
            $this->baoError('医院不能为空');
        }
        $hospital = D('Hospital')->find($data['hospital_id']);
        if (empty($hospital)) {
            $this->baoError('请选择正确的医院');
        }
        $data['cate_id'] = (int) $data['cate_id'];
        if (empty($data['cate_id'])) {
            $this->baoError('项目分类不能为空');
        }
        $data['lng'] = $hospital['lng'];
        $data['lat'] = $hospital['lat'];
        $data['city_id'] = $hospital['city_id'];
        $data['area_id'] = $hospital['area_id'];
        $data['business_id'] = $hospital['business_id'];

        $data['title'] = htmlspecialchars($data['title']);
        if (empty($data['title'])) {
            $this->baoError('项目名称不能为空');
        }
        $data['intro'] = htmlspecialchars($data['intro']);
        if (empty($data['intro'])) {
            $this->baoError('副标题不能为空');
        }
        $data['photo'] = htmlspecialchars($data['photo']);
        if (empty($data['photo'])) {
            $this->baoError('请上传图片');
        }
        if (!isImage($data['photo'])) {
            $this->baoError('图片格式不正确');
        }
        $data['price'] = (int) ($data['price'] * 100);
        if (empty($data['price'])) {
            $this->baoError('市场价格不能为空');
        }
        $data['lawyerkown_price'] = (int) ($data['lawyerkown_price'] * 100);
        if (empty($data['lawyerkown_price'])) {
            $this->baoError('项目价格不能为空');
        }
        $data['settlement_price'] = (int) ($data['settlement_price'] * 100);
        if (empty($data['settlement_price'])) {
            $this->baoError('结算价格不能为空');
        }
        $data['mobile_fan'] = (int) ($data['mobile_fan'] * 100);
        if($data['mobile_fan'] < 0 || $data['mobile_fan'] >= $data['settlement_price']){
            $this->baoError('手机下单优惠金额不正确！');
        }
        $data['use_integral'] = (int) $data['use_integral'];

        $data['num'] = (int) $data['num'];
        if (empty($data['num'])) {
            $this->baoError('库存不能为空');
        } $data['sold_num'] = (int) $data['sold_num'];

        $data['bg_date'] = htmlspecialchars($data['bg_date']);
        if (empty($data['bg_date'])) {
            $this->baoError('开始时间不能为空');
        }
        if (!isDate($data['bg_date'])) {
            $this->baoError('开始时间格式不正确');
        } $data['end_date'] = htmlspecialchars($data['end_date']);
        if (empty($data['end_date'])) {
            $this->baoError('结束时间不能为空');
        }
        if (!isDate($data['end_date'])) {
            $this->baoError('结束时间格式不正确');
        }
        $data['is_hot'] = (int) $data['is_hot'];
        $data['is_new'] = (int) $data['is_new'];
        $data['is_chose'] = (int) $data['is_chose'];
        $data['freebook'] = (int) $data['freebook'];
        $data['is_return_cash'] = (int) $data['is_return_cash'];
		$data['xiadan'] = (int) $data['xiadan'];
		$data['xiangou'] = (int) $data['xiangou'];
        $data['fail_date'] = htmlspecialchars($data['fail_date']);
        $data['create_time'] = NOW_TIME;
        $data['create_ip'] = get_client_ip();
        $data['orderby'] = (int) $data['orderby'];
        return $data;
    }

    public function edit($lawyerkown_id = 0) {
        if ($lawyerkown_id = (int) $lawyerkown_id) {
            $obj = D('Lawyerkown');
            if (!$detail = $obj->find($lawyerkown_id)) {
                $this->baoError('请选择要编辑的项目');
            }
            $lawyerkown_details = D('Lawyerkowndetails')->getDetail($lawyerkown_id);

            if ($this->isPost()) {
                $data = $this->editCheck();
                $details = $this->_post('details', 'SecurityEditorHtml');
                if (empty($details)) {
                    $this->baoError('项目详情不能为空');
                }
                if ($words = D('Sensitive')->checkWords($details)) {
                    $this->baoError('详细内容含有敏感词：' . $words);
                }
                $instructions = $this->_post('instructions', 'SecurityEditorHtml');
                if (empty($instructions)) {
                    $this->baoError('购买须知不能为空');
                }
                if ($words = D('Sensitive')->checkWords($instructions)) {
                    $this->baoError('购买须知含有敏感词：' . $words);
                }
                $thumb = $this->_param('thumb', false);
                foreach ($thumb as $k => $val) {
                    if (empty($val)) {
                        unset($thumb[$k]);
                    }
                    if (!isImage($val)) {
                        unset($thumb[$k]);
                    }
                }
                $data['thumb'] = serialize($thumb);
                $branch_id = $this->_post('branch_id', false);
                foreach ($branch_id as $val) {
                    if (!$brdetail = D('Hospitalbranch')->find($val)) {
                        unset($val);
                    }
                    if ($brdetail['hospital_id'] != $this->hospital_id) {
                        unset($val);
                    }
                }
                $branch = implode(',', $branch_id);
                $data['branch_id'] = $branch;
                $data['lawyerkown_id'] = $lawyerkown_id;
                if (!empty($detail['wei_pic'])) {
                    if (true !== strpos($detail['wei_pic'], "https://mp.weixin.qq.com/")) {
                        $wei_pic = D('Weixin')->getCode($lawyerkown_id, 2);
                        $data['wei_pic'] = $wei_pic;
                    }
                } else {
                    $wei_pic = D('Weixin')->getCode($lawyerkown_id, 2);
                    $data['wei_pic'] = $wei_pic;
                }
                $ex = array(
                    'lawyerkown_id' => $lawyerkown_id,
                    'details' => $details,
                    'instructions' => $instructions,
                );
                if (false !== $obj->save($data)) {
                    D('Lawyerkowndetails')->save($ex);
                    $this->baoSuccess('操作成功', U('lawyerkown/index'));
                }
                $this->baoError('操作失败');
            } else {
                $branch = D('Hospitalbranch')->where(array('hospital_id' => $detail['hospital_id'], 'closed' => 0, 'audit' => 1))->select();
                $this->assign('branch', $branch);
                $hd = D('Activity')->order(array('orderby' => 'asc'))->where(array('hospital_id'=>$detail['hospital_id'],'bg_date' => array('ELT', TODAY), 'end_date' => array('EGT', TODAY), 'sign_end' => array('EGT', TODAY), 'closed' => 0, 'audit' => 1))->select();
                $this->assign('hd',$hd);
                $this->assign('detail', $obj->_format($detail));
                $thumb = unserialize($detail['thumb']);
                $this->assign('thumb', $thumb);
                $this->assign('hospital', D('Hospital')->find($detail['hospital_id']));
                $this->assign('lawyerkown_details', $lawyerkown_details);
                $branch_id = explode(',', $detail['branch_id']);
                $this->assign('branch_id', $branch_id);
                $this->display();
            }
        } else {
            $this->baoError('请选择要编辑的项目');
        }
    }

    private function editCheck() {
        $data = $this->checkFields($this->_post('data', false), $this->edit_fields);
        $data['hospital_id'] = (int) $data['hospital_id'];
        if (empty($data['hospital_id'])) {
            $this->baoError('医院不能为空');
        }
        $hospital = D('Hospital')->find($data['hospital_id']);
        if (empty($hospital)) {
            $this->baoError('请选择正确的医院');
        }
        $data['cate_id'] = (int) $data['cate_id'];
        if (empty($data['cate_id'])) {
            $this->baoError('项目分类不能为空');
        }
        $data['lng'] = $hospital['lng'];
        $data['lat'] = $hospital['lat'];
        $data['city_id'] = $hospital['city_id'];
        $data['area_id'] = $hospital['area_id'];
        $data['business_id'] = $hospital['business_id'];
        $data['title'] = htmlspecialchars($data['title']);
        if (empty($data['title'])) {
            $this->baoError('项目名称不能为空');
        }
        $data['intro'] = htmlspecialchars($data['intro']);
        if (empty($data['intro'])) {
            $this->baoError('副标题不能为空');
        }
        $data['photo'] = htmlspecialchars($data['photo']);
        if (empty($data['photo'])) {
            $this->baoError('请上传图片');
        }
        if (!isImage($data['photo'])) {
            $this->baoError('图片格式不正确');
        }$data['price'] = (int) ($data['price'] * 100);
        if (empty($data['price'])) {
            $this->baoError('市场价格不能为空');
        } $data['lawyerkown_price'] = (int) ($data['lawyerkown_price'] * 100);
        if (empty($data['lawyerkown_price'])) {
            $this->baoError('项目价格不能为空');
        }
        $data['settlement_price'] = (int) ($data['settlement_price'] * 100);
        if (empty($data['settlement_price'])) {
            $this->baoError('结算价格不能为空');
        }
        $data['mobile_fan'] = (int) ($data['mobile_fan'] * 100);
        if($data['mobile_fan'] < 0 || $data['mobile_fan'] >= $data['settlement_price']){
            $this->baoError('手机下单优惠金额不正确！');
        }
        $data['use_integral'] = (int) $data['use_integral'];
        $data['num'] = (int) $data['num'];
        if (empty($data['num'])) {
            $this->baoError('库存不能为空');
        } $data['sold_num'] = (int) $data['sold_num'];
        $data['bg_date'] = htmlspecialchars($data['bg_date']);
        if (empty($data['bg_date'])) {
            $this->baoError('开始时间不能为空');
        }
        if (!isDate($data['bg_date'])) {
            $this->baoError('开始时间格式不正确');
        } $data['end_date'] = htmlspecialchars($data['end_date']);
        if (empty($data['end_date'])) {
            $this->baoError('结束时间不能为空');
        }
        if (!isDate($data['end_date'])) {
            $this->baoError('结束时间格式不正确');
        }
        $data['is_hot'] = (int) $data['is_hot'];
        $data['is_new'] = (int) $data['is_new'];
        $data['is_chose'] = (int) $data['is_chose'];
        $data['freebook'] = (int) $data['freebook'];
        $data['is_return_cash'] = (int) $data['is_return_cash'];

		$data['xiadan'] = (int) $data['xiadan'];
		$data['xiangou'] = (int) $data['xiangou'];
        $data['fail_date'] = htmlspecialchars($data['fail_date']);
        $data['orderby'] = (int) $data['orderby'];
        return $data;
    }

    public function delete($lawyerkown_id = 0) {
        if (is_numeric($lawyerkown_id) && ($lawyerkown_id = (int) $lawyerkown_id)) {
            $obj = D('Lawyerkown');
            $obj->save(array('lawyerkown_id' => $lawyerkown_id, 'closed' => 1));
            $this->baoSuccess('删除成功！', U('lawyerkown/index'));
        } else {
            $lawyerkown_id = $this->_post('lawyerkown_id', false);
            if (is_array($lawyerkown_id)) {
                $obj = D('Lawyerkown');
                foreach ($lawyerkown_id as $id) {
                    $obj->save(array('lawyerkown_id' => $id, 'closed' => 1));
                }
                $this->baoSuccess('删除成功！', U('lawyerkown/index'));
            }
            $this->baoError('请选择要删除的项目');
        }
    }

    public function audit($lawyerkown_id = 0) {
        if (is_numeric($lawyerkown_id) && ($lawyerkown_id = (int) $lawyerkown_id)) {
            $obj = D('Lawyerkown');
            $obj->save(array('lawyerkown_id' => $lawyerkown_id, 'audit' => 1));
            $this->baoSuccess('审核成功！', U('lawyerkown/index'));
        } else {
            $lawyerkown_id = $this->_post('lawyerkown_id', false);
            if (is_array($lawyerkown_id)) {
                $obj = D('Lawyerkown');
                foreach ($lawyerkown_id as $id) {
                    $obj->save(array('lawyerkown_id' => $id, 'audit' => 1));
                }
                $this->baoSuccess('审核成功！', U('lawyerkown/index'));
            }
            $this->baoError('请选择要审核的项目');
        }
    }

    public function cancel($lawyerkown_id = 0) {
        if (is_numeric($lawyerkown_id) && ($lawyerkown_id = (int) $lawyerkown_id)) {
            $obj = D('Lawyerkown');
            $obj->save(array('lawyerkown_id' => $lawyerkown_id, 'is_seckill' => 0));
            $this->baoSuccess('秒杀活动取消成功！', U('lawyerkown/index'));
        } else {
            $lawyerkown_id = $this->_post('lawyerkown_id', false);
            if (is_array($lawyerkown_id)) {
                $obj = D('Lawyerkown');
                foreach ($lawyerkown_id as $id) {
                    $obj->save(array('lawyerkown_id' => $id, 'audit' => 0));
                }
                $this->baoSuccess('秒杀活动取消成功！', U('lawyerkown/index'));
            }
            $this->baoError('请选择要取消秒杀的项目');
        }
    }

}