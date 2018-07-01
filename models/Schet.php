<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schet".
 *
 * @property int $id
 * @property int $number
 * @property string $date
 * @property string $summa
 * @property string $name
 * @property string $adres
 * @property int $inn
 * @property int $kpp
 * @property string $rschet
 * @property string $kschet
 * @property int $bik
 * @property string $bank
 */
class Schet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number', 'summa', 'name', 'adres', 'inn', 'kpp', 'rschet', 'kschet', 'bik', 'bank'], 'required'],
            [['id', 'number', 'inn', 'kpp', 'rschet', 'kschet', 'bik'], 'integer'],
            [['date'], 'safe'],
            [['summa'], 'number'],
            [['name', 'adres', 'bank'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'date' => 'Date',
            'summa' => 'Summa',
            'name' => 'Name',
            'adres' => 'Adres',
            'inn' => 'Inn',
            'kpp' => 'Kpp',
            'rschet' => 'Rschet',
            'kschet' => 'Kschet',
            'bik' => 'Bik',
            'bank' => 'Bank',
        ];
    }
}
