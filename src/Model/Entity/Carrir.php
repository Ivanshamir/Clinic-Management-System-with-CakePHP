<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carrir Entity
 *
 * @property int $id
 * @property string $name
 * @property string $carrir_code
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Patient[] $patients
 */
class Carrir extends Entity
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
        'name' => true,
        'carrir_code' => true,
        'created' => true,
        'patients' => true
    ];
}
