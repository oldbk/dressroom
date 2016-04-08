<?php

/**
 * This is the model base class for the table "obk_items".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ObkItems".
 *
 * Columns in table "obk_items" available as properties of the model,
 * and there are no model relations.
 * @property string name
 * @property string duration
 * @property string maxdur
 * @property string cost
 * @property string count
 * @property string avacount
 * @property string angcount
 * @property string nlevel
 * @property string nsila
 * @property string nlovk
 * @property string ninta
 * @property string nvinos
 * @property string nintel
 * @property string nmudra
 * @property string nnoj
 * @property string ntopor
 * @property string ndubina
 * @property string nmech
 * @property string nalign
 * @property string minu
 * @property string maxu
 * @property string gsila
 * @property string glovk
 * @property string ginta
 * @property string gintel
 * @property string ghp
 * @property string gmp
 * @property string mfkrit
 * @property string mfakrit
 * @property string mfuvorot
 * @property string mfauvorot
 * @property string gnoj
 * @property string gtopor
 * @property string gdubina
 * @property string gmech
 * @property string img
 * @property string shshop
 * @property string bron1
 * @property string bron2
 * @property string bron3
 * @property string bron4
 * @property string dategoden
 * @property string magic
 * @property string type
 * @property string massa
 * @property string goden
 * @property string needident
 * @property string nfire
 * @property string nwater
 * @property string nair
 * @property string nearth
 * @property string nlight
 * @property string ngray
 * @property string ndark
 * @property string gfire
 * @property string gwater
 * @property string gair
 * @property string gearth
 * @property string glight
 * @property string ggray
 * @property string gdark
 * @property string letter
 * @property string isrep
 * @property string razdel
 * @property string nsex
 * @property string gmeshok
 * @property string group
 * @property string wopen
 * @property string ab_mf
 * @property string ab_bron
 * @property string ab_uron
 * @property string need_wins
 * @property string artproto
 * @property string ecost
 * @property string glava
 * @property string includemagic
 * @property string includemagiccost
 * @property string includemagicdex
 * @property string includemagicekrcost
 * @property string includemagicmax
 * @property string includemagicname
 * @property string includemagicuses
 * @property string klan
 * @property string owner
 * @property string charge_rep
 * @property string is_owner
 * @property string mfbonus
 * @property string unikflag
 * @property string stbonus
 */
abstract class BaseShop extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'shop';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Shop|Shop', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name,duration,maxdur,cost,count,avacount,angcount,nlevel,nsila,nlovk,ninta,nvinos,nintel,nmudra,nnoj,ntopor,ndubina,nmech,nalign,minu,maxu,gsila,glovk,ginta,gintel,ghp,gmp,mfkrit,mfakrit,mfuvorot,mfauvorot,gnoj,gtopor,gdubina,gmech,img,shshop,bron1,bron2,bron3,bron4,dategoden,magic,type,massa,goden,needident,nfire,nwater,nair,nearth,nlight,ngray,ndark,gfire,gwater,gair,gearth,glight,ggray,gdark,letter,isrep,razdel,nsex,gmeshok,group,wopen,ab_mf,ab_bron,ab_uron,need_wins,artproto,ecost,glava,includemagic,includemagiccost,includemagicdex,includemagicekrcost,includemagicmax,includemagicname,includemagicuses,klan,owner,charge_rep,is_owner,mfbonus,unikflag,stbonus', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id,name,duration,maxdur,cost,count,avacount,angcount,nlevel,nsila,nlovk,ninta,nvinos,nintel,nmudra,nnoj,ntopor,ndubina,nmech,nalign,minu,maxu,gsila,glovk,ginta,gintel,ghp,gmp,mfkrit,mfakrit,mfuvorot,mfauvorot,gnoj,gtopor,gdubina,gmech,img,shshop,bron1,bron2,bron3,bron4,dategoden,magic,type,massa,goden,needident,nfire,nwater,nair,nearth,nlight,ngray,ndark,gfire,gwater,gair,gearth,glight,ggray,gdark,letter,isrep,razdel,nsex,gmeshok,group,wopen,ab_mf,ab_bron,ab_uron,need_wins,artproto,ecost,glava,includemagic,includemagiccost,includemagicdex,includemagicekrcost,includemagicmax,includemagicname,includemagicuses,klan,owner,charge_rep,is_owner,mfbonus,unikflag,stbonus', 'safe'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}
}