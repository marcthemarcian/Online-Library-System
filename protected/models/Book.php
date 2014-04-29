<?php

class Book extends CActiveRecord {

	public function tableName() {
		return 'book';
	}

	public function rules() {
		return array(
			array('title, author, date_published, publisher, picture, copies_available, total_copies, genre', 'required'),
			array('copies_available, total_copies', 'numerical', 'integerOnly'=>true),
			array('title, author, date_published, publisher, picture, genre', 'length', 'max'=>255),
			array('B_ID, title, author, date_published, publisher, picture, copies_available, total_copies, genre', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function attributeLabels()	{
		return array(
			'B_ID' => 'B',
			'title' => 'Title',
			'author' => 'Author',
			'date_published' => 'Date Published',
			'publisher' => 'Publisher',
			'picture' => 'Picture',
			'copies_available' => 'Copies Available',
			'total_copies' => 'Total Copies',
			'genre' => 'Genre',
		);
	}

	public function search() 	{
		$criteria=new CDbCriteria;

		$criteria->compare('B_ID',$this->B_ID);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('date_published',$this->date_published,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('copies_available',$this->copies_available);
		$criteria->compare('total_copies',$this->total_copies);
		$criteria->compare('genre',$this->genre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}
