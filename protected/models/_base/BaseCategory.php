<?php

/**
 * This is the model base class for the table "category".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Category".
 *
 * Columns in table "category" available as properties of the model,
 * followed by relations of table "category" available as properties of the model.
 *
 * @property integer $id
 * @property integer $game_id
 * @property string $name
 *
 * @property Items[] $items
 * @property ItemsCom[] $itemsComs
 * @property ItemsHrom[] $itemsHroms
 */
abstract class BaseCategory extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'category';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Category|Categories', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('game_id, name', 'required'),
			array('game_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('id, game_id, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'items' => array(self::HAS_MANY, 'Items', 'cat_id'),
			'itemsComs' => array(self::HAS_MANY, 'ItemsCom', 'cat_id'),
			'itemsHroms' => array(self::HAS_MANY, 'ItemsHrom', 'cat_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'game_id' => Yii::t('app', 'Game'),
			'name' => Yii::t('app', 'Name'),
			'items' => null,
			'itemsComs' => null,
			'itemsHroms' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('game_id', $this->game_id);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}