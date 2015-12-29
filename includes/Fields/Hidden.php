<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Fields_Hidden
 */
class NF_Fields_Hidden extends NF_Abstracts_Input
{
    protected $_name = 'hidden';

    protected $_nicename = 'Hidden';

    protected $_section = 'misc';

    protected $_type = 'hidden';

    protected $_templates = 'hidden';

    protected $_wrap_template = 'wrap-no-label';

    protected $_settings_only = array(
        'key', 'label', 'default'
    );

    public function __construct()
    {
        parent::__construct();

        $this->_settings[ 'label' ][ 'width' ] = 'full';
        $this->_settings[ 'default' ][ 'group' ] = 'primary';

        $this->_nicename = __( 'Hidden', 'ninja-forms' );
    }
}