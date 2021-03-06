<?php
function get_ybzx_resources(){
	$desc = '公众号：'.variable_get('mp_config_appname_'.$account->uid, "永不止息").' 莫非单身讲座';
	return array(
		'1001'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/01/16/17292106404791046_hd.mp3',
			'title' => '独唱的日子',
			'desc'	=> $desc,			
			),
		'1002'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/01/18/17325393475366790_hd.mp3',
			'title' => '那将要来的是你吗？',
			'desc'	=> $desc,			
			),
		'1003'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/01/20/17379973919995910_hd.mp3',
			'title' => '人约黄昏后',
			'desc'	=> $desc,			
			),
		'1004'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/01/21/17415967087479046_hd.mp3',
			'title' => '合唱的美',
			'desc'	=> $desc,			
			),
		'1005'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/01/23/17463010670310918_hd.mp3',
			'title' => 'Smart Love',
			'desc'	=> $desc,			
			),
		'1006'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/01/28/17567584533557766_hd.mp3',
			'title' => '问世间情为何物',
			'desc'	=> $desc,			
			),
		'1007'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/01/31/17636544797095558_hd.mp3',
			'title' => '合唱的美',
			'desc'	=> $desc,			
			),
		'1008'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/02/04/17732971913151750_hd.mp3',
			'title' => '寻找金心',
			'desc'	=> $desc,			
			),
		'1009'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://cdn.lizhi.fm/audio/2015/02/07/17799135079229702_hd.mp3',
			'title' => '单身老实说',
			'desc'	=> $desc,			
			),
		//1011-1015 mike牧师2013 十渡单身营会 录音
		'1011'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://fm77.u.qiniudn.com/2013/10du/2013100201%E5%A6%82%E4%BD%95%E6%98%8E%E7%99%BD%E7%A5%9E%E7%9A%84%E6%97%A8%E6%84%8F%E4%B8%8E%E6%8B%A9%E5%81%B6%E6%9D%A1%E4%BB%B6.mp3',
			'title' => '单身者的福音 1/5',
			'desc'	=> '单身营会 介绍误区&安全感',				
			),
		'1012'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://fm77.u.qiniudn.com/2013/10du/2013100301%E5%A6%82%E4%BD%95%E6%98%8E%E7%99%BD%E7%A5%9E%E7%9A%84%E6%97%A8%E6%84%8F%E4%B8%8E%E6%8B%A9%E5%81%B6%E6%9D%A1%E4%BB%B6.mp3',
			'title' => '单身营会 2/5',
			'desc'	=> '如何明白神的旨意与择偶条件1',
			),
		'1013'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://fm77.u.qiniudn.com/2013/10du/2013100302%E5%A6%82%E4%BD%95%E6%98%8E%E7%99%BD%E7%A5%9E%E7%9A%84%E6%97%A8%E6%84%8F%E4%B8%8E%E6%8B%A9%E5%81%B6%E6%9D%A1%E4%BB%B6(1).MP3',
			'title' => '单身营会 3/5',
			'desc'	=> '如何明白神的旨意与择偶条件2',
			),
		'1014'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://fm77.u.qiniudn.com/2013/10du/2013100302%E5%A6%82%E4%BD%95%E6%98%8E%E7%99%BD%E7%A5%9E%E7%9A%84%E6%97%A8%E6%84%8F%E4%B8%8E%E6%8B%A9%E5%81%B6%E6%9D%A1%E4%BB%B6.MP3',
			'title' => '单身营会 4/5',
			'desc'	=> '如何明白神的旨意与择偶条件3',
			),
		'1015'=>array(
			'type' => 'audio',
			'musicurl'	=>'http://fm77.u.qiniudn.com/2013/10du/2013100303%E5%A6%82%E4%BD%95%E6%98%8E%E7%99%BD%E7%A5%9E%E7%9A%84%E6%97%A8%E6%84%8F%E4%B8%8E%E6%8B%A9%E5%81%B6%E6%9D%A1%E4%BB%B6.MP3',
			'title' => '单身营会 5/5',
			'desc'	=> '如何明白神的旨意与择偶条件4',
			),

		);
}

function get_ybzx_dstw(){
	//单图文 标题15字 摘要60字
	//多图文 1标题16字 2标题15字
	return  array(
            array(
              'Title'=> '1.独唱的日子',
              'Description' => '莫非老师分享自己走过单身的心路历程，从亲密感的渴望，到对亲密感的寻觅，如何走过独身的恐惧，交往的焦虑，单身生活的困境，以及日后如何靠著信仰在两性关系中学习成长。',
              'PicUrl'  =>  'http://t.cn/RwCdKsq',
              'Url' =>  'http://t.cn/RwCrj17',
            ),
            array(
              'Title'=> '2.那将要来的是你吗？',
              'Description' => '莫非老师分享如何能知道所遇的这一位，就是那将要一起走上红毯的那一位？如何对自我有些瞭解，知道自己合适怎样的对象，到如何认识对方，以及要掌握哪些关于对方的重点，来分辨两人是否是佳偶？还是怨偶？',
              'PicUrl'  =>  'http://mmbiz.qpic.cn/mmbiz/dTE2nNAecJYn7kROZcbTTD0BkVZodOPibtgApic4CmWrGQLU32ic4ibc9ba8Oib6qI1tf6icrQ8JFVecuZjdwjZX3cSw/640?tp=webp&wxfrom=5',
              'Url' =>  'http://t.cn/RwCrHm4',
            ),
            array(
              'Title'=> '3.人约黄昏后',
              'Description' => '约会的意义是：了解彼此、认识自己，两性互动。',
              'PicUrl'  =>  'http://mmbiz.qpic.cn/mmbiz/0fV5QBhibUJiadDGLiaK2fRP1lOW4UFicgTsRaytO5Bqd1HDeSV13wyj3IlJZtwroYrHiaUAZFYeS0rNG3kk0MC8BBg/640?tp=webp&wxfrom=5',
              'Url' =>  'http://t.cn/RwCr8Ck',
            ),
            array(
              'Title'=> '4.合唱的美',
              'Description' => '交往某些方面就形同合唱。莫非老师分享如何为二人的合唱作准备？二人合唱又有甚麽游戏规则？如何要注意不是所有的好声音都合适自己？又如何另外开发好声音？如何与另外一人配合可以唱出美好的声音？',
              'PicUrl'  =>  'http://mmbiz.qpic.cn/mmbiz/dTE2nNAecJYn7kROZcbTTD0BkVZodOPibx4ibDnyQs0ibh4dW0d6Le50ADREM3FlkiaNzl0rPtZ29Qcic36mmOuK7mg/0?tp=webp&wxfrom=5',
              'Url' =>  'http://t.cn/RwCrntk',
            ),
            array(
              'Title'=> '5.Smart Love',
              'Description' => '每个人都应该思考一下自己爱的智商有多高？莫非老师分享怎样提升自己爱的智商，从七方面来探讨，如何可以爱得聪明，情深路长。',
              'PicUrl'  =>  'http://mmbiz.qpic.cn/mmbiz/dTE2nNAecJYn7kROZcbTTD0BkVZodOPibx1ujHhLcxBk959yOE6TXaDSyKptW0nrSXWN6wMLVNleZbycYcawoGw/0?tp=webp&wxfrom=5',
              'Url' =>  'http://t.cn/RwCrurJ',
            ),
            array(
              'Title'=> '6.问世间情为何物',
              'Description' => '莫非老师探讨甚麽是爱情？
									男女间在感情中的渴望有何差别？
									男女进入感情的速度又有何不同？再从十方面来分析甚麽是真爱？
									甚麽又是痴恋错爱？如何能不在痴情错爱中沦陷，只把握真爱。',
              'PicUrl'  => 'http://mmbiz.qpic.cn/mmbiz/dTE2nNAecJYn7kROZcbTTD0BkVZodOPibz06xN17xPMQh2NkibTM14kMTnBm5xucyHc3VbAuxibmh9NYMtgcJoibpw/0?tp=webp&wxfrom=5' ,
              'Url' =>  'http://t.cn/RwCreXa',
            ),
            array(
              'Title'=> '7.情字这条路',
              'Description' => '
									莫非老师分享情字这条路有哪些路标，
									每个路标都各有其要学习的功课。
									有爱情前奏期、寻寻觅觅期、爱情上路期、
									共定终生期、结婚前奏期、婚姻经营期等，
									莫非老师一一带出特点和要注意的功课。',
              'PicUrl'  =>  'http://mmbiz.qpic.cn/mmbiz/dTE2nNAecJYn7kROZcbTTD0BkVZodOPibPuUsAaEcaYuD4env54Nick3kiafaf8ic7nLTHgfeMLaa3U5EvibJuFteCQ/0?tp=webp&wxfrom=5',
              'Url' =>  'http://t.cn/RwCrk9J',
            ),
            array(
              'Title'=> '8.寻找金心',
              'Description' => '莫非老师分享每个人都渴望找到金子的心，对关系有深长的承诺。但有些人是会爱但不会在，有些人则是会在但不会爱。所以甚麽是承诺？金心的代价为何？金心的困难又有哪些？在关系中，金心的承诺又为何如此重要？莫非老师带领大家学习作个挖掘金心的老矿工？',
              'PicUrl'  =>  'http://mmbiz.qpic.cn/mmbiz/dTE2nNAecJYn7kROZcbTTD0BkVZodOPibtP69GKS55w3FxnkVnGlDefJo5d9by9f9GlDboDbP2KGLtpxAMMFK1A/0?tp=webp&wxfrom=5',
              'Url' =>  'http://t.cn/RwCrsMx',
            ),
            array(
              'Title'=> '9.单身老实说',
              'Description' => '莫非老师分享单身，是生命中一个常会有的生存状态。
								如何把单身不活成过渡期？单身和已婚有何不同？
								单飞的日子又要如何过？如何处孤独？
								如何在爱中学习？如何面对性方面的需求？
								如何为神唱出独唱的美？',
              'PicUrl'  => 'http://t.cn/RwCdKsq',
              'Url' =>  'http://t.cn/RwCdvBK',
            ),

          );
}


function get_ybzx_resources_hyfd($account){
	$desc = '公众号：'.variable_get('mp_config_appname_'.$account->uid, "永不止息").' 婚姻辅导';
	$urls = array(
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc001.mp3','title'=>'引言－婚姻的谬思与正解 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc002.mp3','title'=>'现代婚姻的威胁(1)世俗的模式'),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc003.mp3','title'=>'现代婚姻的威胁(2)自私的罪性 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc004.mp3','title'=>'现代婚姻的威胁(3)婚外的情事 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc005.mp3','title'=>'现代婚姻的威胁(4)适应的困难 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc006.mp3','title'=>'婚姻现状与蓝图－世俗婚姻与神创婚姻的比较 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc007.mp3','title'=>'原创婚姻说明书(1)神对婚姻的旨意(上) '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc008.mp3','title'=>'原创婚姻说明书(2)神对婚姻的旨意(下) '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc009.mp3','title'=>'原创婚姻说明书(3)神对婚姻的计划(上) '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc010.mp3','title'=>'原创婚姻说明书(4)神对婚姻的计划(下)'),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc011.mp3','title'=>'不再约会-恋爱前的预备 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc012.mp3','title'=>'婚前交往-有目标的恋爱 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc013.mp3','title'=>'订婚之前(1)评估现在的情感与和谐(上) '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc014.mp3','title'=>'订婚之前(2)评估现在的情感与和谐(下) '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc015.mp3','title'=>'订婚之前(3)预备未来的亲密和忠实 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc016.mp3','title'=>'订婚之前(4)面对过去的背景与经历 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc017.mp3','title'=>'结婚之前(1)订婚－建立婚姻的蓝图(上) '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc018.mp3','title'=>'结婚之前(2)订婚－建立婚姻的蓝图(下) '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc019.mp3','title'=>'结婚之前(3)如何视察辨明神的旨意(上)'),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc020.mp3','title'=>'结婚之前(4)如何视察辨明神的旨意(下)'),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc021.mp3','title'=>'神在婚姻中的地位与能力 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc022.mp3','title'=>'丈夫在婚姻中的角色与责任 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc023.mp3','title'=>'妻子在婚姻中的角色与责任 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc024.mp3','title'=>'建立更深的沟通 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc025.mp3','title'=>'建立亲密的性关系 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc026.mp3','title'=>'化解冲突的方式 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc027.mp3','title'=>'以德报怨－祝福的能力 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc028.mp3','title'=>'父亲与母亲的角色 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc029.mp3','title'=>'破裂、触礁与重建-关于离婚与再婚的辅导 '),
	  array('mp3_link'=>'https://dn-cfyin.qbox.me/mavmc030.mp3','title'=>'建立属灵的承传'),
	);
	foreach ($urls as $key => $value) {
		$resouces[(1001+$key)] = array(
			'type' => 'audio',
			'musicurl'	=> $value['mp3_link'],
			'title' => $value['title'],
			'desc'	=> $desc,			
			);
	}
	return $resouces;
}