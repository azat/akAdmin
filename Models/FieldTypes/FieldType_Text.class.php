<?

/**
 * Text FieldType
 * 
 * @author Azat Khuzhin <dohardgopro@gmail.com>
 * @package akAdmin
 * @licence GPLv2
 */

class FieldType_Text extends FieldTypes {
	public $DBTypes = array('text', 'varchar', 'char');

	static function getInstance() {
		static $object;
		if (!$object) $object = new FieldType_Text;
		return $object;
	}

	public function get($value = null) {
		return strip_tags($value);
	}

	public function getForEdit($field = null, $value = null, $fieldTransltaion = null) {
		return sprintf(
			'<label><strong>%s</strong><textarea name="%s">%s</textarea></label>',
			$fieldTransltaion, $field, $this->get($value)
		);
	}

	public function getForSearch($field = null, $value = null) {
		throw new akException('WRITE THIS PART');
	}

	public function set($value = null) {
		return strip_tags($value);
	}
}
