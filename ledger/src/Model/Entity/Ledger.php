<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ledger Entity
 *
 * @property int $id
 * @property string $customer_name
 * @property string $customer_adress
 * @property string $customer_tel1
 * @property string $customer_tel2
 * @property string $staff_id
 * @property string $work_category
 * @property string $content
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $reserved
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Staff $staff
 */
class Ledger extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true
    ];
}
