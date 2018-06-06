<?php 

function consult_sidebar()
{

	 
	 register_sidebar( array(
	 	'name'          => __( 'Sidebar name', 'text-domain' ),
	 	'id'            => 'blog_sidebar',
	 	'description'   => 'this is my first widget so these is also first heading description of this',
	 	'class'         => '',
	 	'before_widget' => '<li id="%1" class="widget %2">',
	 	'after_widget'  => '</li>',
	 	'before_title'  => '<h2 class="widgettitle">',
	 	'after_title'   => '</h2>',
	 ) );
	 
}
add_action('widgets_init','consult_sidebar');


// register Consult_Widget widget
function consult_widget() {

    register_widget( 'test_widget' );
}
add_action( 'widgets_init', 'consult_widget' );

/**
 * Adds Foo_Widget widget.
 */
class test_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'test_widget', // Base ID
			esc_html__( 'Its a test title widget ', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'its title anlothe description', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Type anything as you want', 'text_domain' );

		$description = ! empty( $instance['description'] ) ? $instance['description'] : esc_html__( 'Type Description as you want', 'text_domain' );
		?>
		
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>">
		</p>


		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		if ( ! empty( $instance['description'] ) ) {
			echo apply_filters( 'widget_title', $instance['description']);
		}
		
		echo $args['after_widget'];
	}

	

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? sanitize_text_field( $new_instance['description'] ) : '';

		return $instance;
	}

} // class Foo_Widget


 

?>