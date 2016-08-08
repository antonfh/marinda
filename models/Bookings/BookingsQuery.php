<?php

namespace app\models\Bookings;

/**
 * This is the ActiveQuery class for [[Bookings]].
 *
 * @see Bookings
 */
class BookingsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Bookings[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Bookings|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
