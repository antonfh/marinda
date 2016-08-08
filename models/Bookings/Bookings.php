<?php

namespace app\models\Bookings;

use Yii;

/**
 * This is the model class for table "Bookings".
 *
 * @property integer $ipkBookingsID
 * @property string $Name
 * @property string $Surname
 * @property integer $KidsTotal
 * @property string $Date
 * @property string $Time
 * @property string $CreatedDate
 * @property string $SpecialNotes
 * @property integer $Confirmed
 * @property string $Other
 * @property string $ContactNumber
 * @property string $Email
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Bookings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Surname', 'KidsTotal', 'Date', 'Time', 'ContactNumber', 'Email'], 'required'],
            [['KidsTotal', 'Confirmed'], 'integer'],
            [['Email'], 'email'],
            [['Date', 'Time', 'CreatedDate', 'SpecialNotes', 'Other'], 'safe'],
            [['SpecialNotes'], 'string'],
            [['Name', 'Surname'], 'string', 'max' => 100],
            [['Other'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ipkBookingsID' => Yii::t('app', 'Ipk Bookings ID'),
            'Name' => Yii::t('app', 'Name'),
            'Surname' => Yii::t('app', 'Surname'),
            'KidsTotal' => Yii::t('app', 'Kids Total'),
            'Date' => Yii::t('app', 'Date'),
            'Time' => Yii::t('app', 'Booking Time'),
            'CreatedDate' => Yii::t('app', 'Created Date'),
            'SpecialNotes' => Yii::t('app', 'Special Notes'),
            'Confirmed' => Yii::t('app', 'Confirmed'),
            'Other' => Yii::t('app', 'Other'),
            'ContactNumber' => Yii::t('app', 'Contact Number'),
            'Email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * @inheritdoc
     * @return BookingsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BookingsQuery(get_called_class());
    }
}
